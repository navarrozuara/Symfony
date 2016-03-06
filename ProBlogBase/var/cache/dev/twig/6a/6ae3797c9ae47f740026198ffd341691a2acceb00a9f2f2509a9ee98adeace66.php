<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_5738de70d4cd53f69650b93e02fc6c2e9f109c6ee1f9861955234f314bf58f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b0ef5aac702742aee6b2e33d8a20005205dfc11d7adb6cd91d33139c164a3f4 = $this->env->getExtension("native_profiler");
        $__internal_4b0ef5aac702742aee6b2e33d8a20005205dfc11d7adb6cd91d33139c164a3f4->enter($__internal_4b0ef5aac702742aee6b2e33d8a20005205dfc11d7adb6cd91d33139c164a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 8
        echo "</form>";
        
        $__internal_4b0ef5aac702742aee6b2e33d8a20005205dfc11d7adb6cd91d33139c164a3f4->leave($__internal_4b0ef5aac702742aee6b2e33d8a20005205dfc11d7adb6cd91d33139c164a3f4_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}*/
/* */
/* <form action="{{ path('BloggerBlogBundle_comment_create', { 'blog_id' : comment.blog.id } ) }}" method="post" class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     {# <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p> #}*/
/* </form>*/
