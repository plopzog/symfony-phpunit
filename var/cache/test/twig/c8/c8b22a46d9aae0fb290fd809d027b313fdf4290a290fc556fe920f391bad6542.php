<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eec1e01a83666b1fb193af623457718a50c586ac47b6637a7d51262d2e97ae0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec1e01a83666b1fb193af623457718a50c586ac47b6637a7d51262d2e97ae0c->enter($__internal_eec1e01a83666b1fb193af623457718a50c586ac47b6637a7d51262d2e97ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e4e8cd958318ad577fc48fae3a81ae4836be0b02ead4bb5f37d639e9df58a6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e8cd958318ad577fc48fae3a81ae4836be0b02ead4bb5f37d639e9df58a6b6->enter($__internal_e4e8cd958318ad577fc48fae3a81ae4836be0b02ead4bb5f37d639e9df58a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_eec1e01a83666b1fb193af623457718a50c586ac47b6637a7d51262d2e97ae0c->leave($__internal_eec1e01a83666b1fb193af623457718a50c586ac47b6637a7d51262d2e97ae0c_prof);

        
        $__internal_e4e8cd958318ad577fc48fae3a81ae4836be0b02ead4bb5f37d639e9df58a6b6->leave($__internal_e4e8cd958318ad577fc48fae3a81ae4836be0b02ead4bb5f37d639e9df58a6b6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_409097d0e2daccfcb2bb768eb55b0805a626a824aa0450a956c0756d4d7618ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409097d0e2daccfcb2bb768eb55b0805a626a824aa0450a956c0756d4d7618ea->enter($__internal_409097d0e2daccfcb2bb768eb55b0805a626a824aa0450a956c0756d4d7618ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_534b5bbb60d5bc2dd811d871fc13da010754287d0d61d5c33a0ede8e69c64c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534b5bbb60d5bc2dd811d871fc13da010754287d0d61d5c33a0ede8e69c64c97->enter($__internal_534b5bbb60d5bc2dd811d871fc13da010754287d0d61d5c33a0ede8e69c64c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_534b5bbb60d5bc2dd811d871fc13da010754287d0d61d5c33a0ede8e69c64c97->leave($__internal_534b5bbb60d5bc2dd811d871fc13da010754287d0d61d5c33a0ede8e69c64c97_prof);

        
        $__internal_409097d0e2daccfcb2bb768eb55b0805a626a824aa0450a956c0756d4d7618ea->leave($__internal_409097d0e2daccfcb2bb768eb55b0805a626a824aa0450a956c0756d4d7618ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56df9c751f149ac09269c7d386c11887c4efb52cb275716ae30821705387173c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56df9c751f149ac09269c7d386c11887c4efb52cb275716ae30821705387173c->enter($__internal_56df9c751f149ac09269c7d386c11887c4efb52cb275716ae30821705387173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8da81aa9e3ed7bdd5e60788b7e898b2165aad398c1289a0cf649102008633ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da81aa9e3ed7bdd5e60788b7e898b2165aad398c1289a0cf649102008633ed3->enter($__internal_8da81aa9e3ed7bdd5e60788b7e898b2165aad398c1289a0cf649102008633ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8da81aa9e3ed7bdd5e60788b7e898b2165aad398c1289a0cf649102008633ed3->leave($__internal_8da81aa9e3ed7bdd5e60788b7e898b2165aad398c1289a0cf649102008633ed3_prof);

        
        $__internal_56df9c751f149ac09269c7d386c11887c4efb52cb275716ae30821705387173c->leave($__internal_56df9c751f149ac09269c7d386c11887c4efb52cb275716ae30821705387173c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_01ff9bdb5e27b5fe74b5de147bc4b3ece824c60b050a98c3a8ac7f1d2dbe01a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ff9bdb5e27b5fe74b5de147bc4b3ece824c60b050a98c3a8ac7f1d2dbe01a3->enter($__internal_01ff9bdb5e27b5fe74b5de147bc4b3ece824c60b050a98c3a8ac7f1d2dbe01a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b3a31139c01db795b64db8f559ff13548c336c8aabac46f922a11f61cf0ecb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3a31139c01db795b64db8f559ff13548c336c8aabac46f922a11f61cf0ecb2->enter($__internal_5b3a31139c01db795b64db8f559ff13548c336c8aabac46f922a11f61cf0ecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b3a31139c01db795b64db8f559ff13548c336c8aabac46f922a11f61cf0ecb2->leave($__internal_5b3a31139c01db795b64db8f559ff13548c336c8aabac46f922a11f61cf0ecb2_prof);

        
        $__internal_01ff9bdb5e27b5fe74b5de147bc4b3ece824c60b050a98c3a8ac7f1d2dbe01a3->leave($__internal_01ff9bdb5e27b5fe74b5de147bc4b3ece824c60b050a98c3a8ac7f1d2dbe01a3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_975185e19939e0ba4db318d606e337f586a264430fc96c35b88432d1df04bc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975185e19939e0ba4db318d606e337f586a264430fc96c35b88432d1df04bc8b->enter($__internal_975185e19939e0ba4db318d606e337f586a264430fc96c35b88432d1df04bc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0f8d449df4aac2bc4f112ef4305fed07f22fbe82bad30a89fecb9d9720f21edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8d449df4aac2bc4f112ef4305fed07f22fbe82bad30a89fecb9d9720f21edd->enter($__internal_0f8d449df4aac2bc4f112ef4305fed07f22fbe82bad30a89fecb9d9720f21edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f8d449df4aac2bc4f112ef4305fed07f22fbe82bad30a89fecb9d9720f21edd->leave($__internal_0f8d449df4aac2bc4f112ef4305fed07f22fbe82bad30a89fecb9d9720f21edd_prof);

        
        $__internal_975185e19939e0ba4db318d606e337f586a264430fc96c35b88432d1df04bc8b->leave($__internal_975185e19939e0ba4db318d606e337f586a264430fc96c35b88432d1df04bc8b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/thomasbenlolo/Workspace/www/symfony-phpunit/app/Resources/views/base.html.twig");
    }
}
