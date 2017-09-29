<?php

namespace Tests\AppBundle\Security;

use AppBundle\Entity\User;
use AppBundle\Security\GithubUserProvider;
use PHPUnit\Framework\TestCase;

class GithubUserProviderTest extends TestCase
{

    private $client;
    private $serializer;
    private $response;

    public function setUp()
    {
        $this->client = $this->getMockBuilder('GuzzleHttp\Client')
            ->disableOriginalConstructor()
            ->setMethods(['get'])
            ->getMock();

        $this->serializer = $this
            ->getMockBuilder('JMS\Serializer\Serializer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->response = $this
            ->getMockBuilder('Psr\Http\Message\ResponseInterface')
            ->getMock();

        $streamedResponse = $this
            ->getMockBuilder('Psr\Http\Message\StreamInterface')
            ->getMock();

        $this->response
            ->expects($this->once())
            ->method('getBody')
            ->willReturn($streamedResponse);

        $this->client
            ->expects($this->once())
            ->method('get')
            ->willReturn( $this->response);

    }

    public function testLoadUserByUsernameReturningAUser()
    {

        $userData = [
            'login' => 'a login',
            'name' => 'user name',
            'email' => 'adress@mail.com',
            'avatar_url' => 'url to the avatar',
            'html_url' => 'url to profile'
        ];

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->willReturn($userData);

        $githubUserProvider = new GithubUserProvider($this->client, $this->serializer);
        $user = $githubUserProvider->loadUserByUsername('an-access-token');

        $expectedUser = new User(
            $userData['login'],
            $userData['name'],
            $userData['email'],
            $userData['avatar_url'],
            $userData['html_url']
        );

        $this->assertEquals($expectedUser, $user);
        $this->assertEquals('AppBundle\Entity\User', get_class($user));
    }

    public function testLoadUserByUsernameThrowingException()
    {

        $this->serializer
            ->expects($this->once())
            ->method('deserialize')
            ->willReturn([]);

        $this->expectException('LogicException');

        $githubUserProvider = new GithubUserProvider($this->client, $this->serializer);
        $user = $githubUserProvider->loadUserByUsername('an-access-token');

    }

    public function tearDown()
    {
        $this->client = null;
        $this->serializer = null;
        $this->response = null;
    }

}