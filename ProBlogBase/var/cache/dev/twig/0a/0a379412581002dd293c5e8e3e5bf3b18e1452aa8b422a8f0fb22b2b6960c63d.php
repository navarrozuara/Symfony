<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3a418a1eda4946e0951880866ed1eec1578c395b80eb4b519f8a641c00c0b9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f07b36ee61561677a197cd936ecc2ff4aee29b223926365d757057317997fed = $this->env->getExtension("native_profiler");
        $__internal_8f07b36ee61561677a197cd936ecc2ff4aee29b223926365d757057317997fed->enter($__internal_8f07b36ee61561677a197cd936ecc2ff4aee29b223926365d757057317997fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f07b36ee61561677a197cd936ecc2ff4aee29b223926365d757057317997fed->leave($__internal_8f07b36ee61561677a197cd936ecc2ff4aee29b223926365d757057317997fed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dde2a9a82b637d5cb7435cc060c74f0a9dccec0b1085846167c76439bc87b861 = $this->env->getExtension("native_profiler");
        $__internal_dde2a9a82b637d5cb7435cc060c74f0a9dccec0b1085846167c76439bc87b861->enter($__internal_dde2a9a82b637d5cb7435cc060c74f0a9dccec0b1085846167c76439bc87b861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dde2a9a82b637d5cb7435cc060c74f0a9dccec0b1085846167c76439bc87b861->leave($__internal_dde2a9a82b637d5cb7435cc060c74f0a9dccec0b1085846167c76439bc87b861_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c105804e40343be0092dee43e31057393c0062ad4295c2bf90a6bb5983566e0 = $this->env->getExtension("native_profiler");
        $__internal_8c105804e40343be0092dee43e31057393c0062ad4295c2bf90a6bb5983566e0->enter($__internal_8c105804e40343be0092dee43e31057393c0062ad4295c2bf90a6bb5983566e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c105804e40343be0092dee43e31057393c0062ad4295c2bf90a6bb5983566e0->leave($__internal_8c105804e40343be0092dee43e31057393c0062ad4295c2bf90a6bb5983566e0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_387c36b182a59ced07414704f489162e6bf79011e4c9a209ee43269947ea1097 = $this->env->getExtension("native_profiler");
        $__internal_387c36b182a59ced07414704f489162e6bf79011e4c9a209ee43269947ea1097->enter($__internal_387c36b182a59ced07414704f489162e6bf79011e4c9a209ee43269947ea1097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_387c36b182a59ced07414704f489162e6bf79011e4c9a209ee43269947ea1097->leave($__internal_387c36b182a59ced07414704f489162e6bf79011e4c9a209ee43269947ea1097_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
