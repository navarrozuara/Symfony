<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_5336e345e9bd0e7aa6196782389ca956cf694ba1d69cf99fe4d229af23669e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layoutElisa.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
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
        $__internal_2a761d28e3eabed538bf30a740faef97ba8a9df52b799d9893215f3215f7b137 = $this->env->getExtension("native_profiler");
        $__internal_2a761d28e3eabed538bf30a740faef97ba8a9df52b799d9893215f3215f7b137->enter($__internal_2a761d28e3eabed538bf30a740faef97ba8a9df52b799d9893215f3215f7b137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a761d28e3eabed538bf30a740faef97ba8a9df52b799d9893215f3215f7b137->leave($__internal_2a761d28e3eabed538bf30a740faef97ba8a9df52b799d9893215f3215f7b137_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6883a2e03704151f3bbd8adebdc9f9468c565a907f222bbb7af17d38e76dc98 = $this->env->getExtension("native_profiler");
        $__internal_a6883a2e03704151f3bbd8adebdc9f9468c565a907f222bbb7af17d38e76dc98->enter($__internal_a6883a2e03704151f3bbd8adebdc9f9468c565a907f222bbb7af17d38e76dc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_a6883a2e03704151f3bbd8adebdc9f9468c565a907f222bbb7af17d38e76dc98->leave($__internal_a6883a2e03704151f3bbd8adebdc9f9468c565a907f222bbb7af17d38e76dc98_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7190d5536129513f6b44698746a8d66a76342bfeec6f1ff38807b8816f81ea21 = $this->env->getExtension("native_profiler");
        $__internal_7190d5536129513f6b44698746a8d66a76342bfeec6f1ff38807b8816f81ea21->enter($__internal_7190d5536129513f6b44698746a8d66a76342bfeec6f1ff38807b8816f81ea21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p>
    </article>
";
        
        $__internal_7190d5536129513f6b44698746a8d66a76342bfeec6f1ff38807b8816f81ea21->leave($__internal_7190d5536129513f6b44698746a8d66a76342bfeec6f1ff38807b8816f81ea21_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
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
/* {# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layoutElisa.html.twig' %}*/
/* */
/* {% block title %}About{% endblock %}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>About symblog</h1>*/
/*     </header>*/
/*     <article>*/
/*         <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>*/
/*     </article>*/
/* {% endblock %}*/
/* */
