<?php

/* BloggerBlogBundle:Page:faq.html.twig */
class __TwigTemplate_199b12f40b025dfba0c254eff5aea781b8794eacfbc42cfa84b2f7c29be4b9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layoutElisa.html.twig", "BloggerBlogBundle:Page:faq.html.twig", 2);
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
        $__internal_2fcc983aaf0049d0b1049e29b2719b08d5ce330ae09d551f6544797021b7bde8 = $this->env->getExtension("native_profiler");
        $__internal_2fcc983aaf0049d0b1049e29b2719b08d5ce330ae09d551f6544797021b7bde8->enter($__internal_2fcc983aaf0049d0b1049e29b2719b08d5ce330ae09d551f6544797021b7bde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:faq.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fcc983aaf0049d0b1049e29b2719b08d5ce330ae09d551f6544797021b7bde8->leave($__internal_2fcc983aaf0049d0b1049e29b2719b08d5ce330ae09d551f6544797021b7bde8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d54d8390c34df170b061a18167c6ef32bf8e72a47edf057397bf03e498b551a3 = $this->env->getExtension("native_profiler");
        $__internal_d54d8390c34df170b061a18167c6ef32bf8e72a47edf057397bf03e498b551a3->enter($__internal_d54d8390c34df170b061a18167c6ef32bf8e72a47edf057397bf03e498b551a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FAQ";
        
        $__internal_d54d8390c34df170b061a18167c6ef32bf8e72a47edf057397bf03e498b551a3->leave($__internal_d54d8390c34df170b061a18167c6ef32bf8e72a47edf057397bf03e498b551a3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_48220861f3b894a4b3587184cbedc36d06e5c380c2881786efe4a754ec183624 = $this->env->getExtension("native_profiler");
        $__internal_48220861f3b894a4b3587184cbedc36d06e5c380c2881786efe4a754ec183624->enter($__internal_48220861f3b894a4b3587184cbedc36d06e5c380c2881786efe4a754ec183624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>FAQ</h1>
    </header>
    <article>
        <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>
    </article>
";
        
        $__internal_48220861f3b894a4b3587184cbedc36d06e5c380c2881786efe4a754ec183624->leave($__internal_48220861f3b894a4b3587184cbedc36d06e5c380c2881786efe4a754ec183624_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/faq.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layoutElisa.html.twig' %}*/
/* */
/* {% block title %}FAQ{% endblock %}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>FAQ</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>*/
/*     </article>*/
/* {% endblock %}*/
/* */
