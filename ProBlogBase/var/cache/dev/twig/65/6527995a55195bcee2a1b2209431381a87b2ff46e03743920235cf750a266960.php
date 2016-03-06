<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_ef3aef0427e00bce87e9a6be10d63aca9dcab9a0a1ddade7dfbe968704a75e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layoutElisa.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layoutElisa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52a85264a2799debde139d586dbee7f26964a519aeb94c53c999cd6fe13584bf = $this->env->getExtension("native_profiler");
        $__internal_52a85264a2799debde139d586dbee7f26964a519aeb94c53c999cd6fe13584bf->enter($__internal_52a85264a2799debde139d586dbee7f26964a519aeb94c53c999cd6fe13584bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a85264a2799debde139d586dbee7f26964a519aeb94c53c999cd6fe13584bf->leave($__internal_52a85264a2799debde139d586dbee7f26964a519aeb94c53c999cd6fe13584bf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6cc047670feeed7faf123fdaaf2fdec521afea10b715d0eaa098b9c9e927b37 = $this->env->getExtension("native_profiler");
        $__internal_e6cc047670feeed7faf123fdaaf2fdec521afea10b715d0eaa098b9c9e927b37->enter($__internal_e6cc047670feeed7faf123fdaaf2fdec521afea10b715d0eaa098b9c9e927b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_e6cc047670feeed7faf123fdaaf2fdec521afea10b715d0eaa098b9c9e927b37->leave($__internal_e6cc047670feeed7faf123fdaaf2fdec521afea10b715d0eaa098b9c9e927b37_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_93cbfb1155764828b15e36691c5d398cfef936f715296cd7cd37fea5dd8a8c94 = $this->env->getExtension("native_profiler");
        $__internal_93cbfb1155764828b15e36691c5d398cfef936f715296cd7cd37fea5dd8a8c94->enter($__internal_93cbfb1155764828b15e36691c5d398cfef936f715296cd7cd37fea5dd8a8c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
   <p>Want to contact symblog?</p>
   ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
   ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_93cbfb1155764828b15e36691c5d398cfef936f715296cd7cd37fea5dd8a8c94->leave($__internal_93cbfb1155764828b15e36691c5d398cfef936f715296cd7cd37fea5dd8a8c94_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layoutElisa.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contact symblog</h1>*/
/*     </header>*/
/*    <p>Want to contact symblog?</p>*/
/*    {{ form_start (form, {'action':'','method':'POST'}) }}*/
/*    {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
