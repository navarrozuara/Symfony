<?php

/* BloggerBlogBundle::layoutElisa.html.twig */
class __TwigTemplate_9d72648a33cfdaba9ed1d0a526e43eb93876c85671eae7c5f411a4cac04cff92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::baseElisa.html.twig", "BloggerBlogBundle::layoutElisa.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseElisa.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcb31bf6485cb5656afb9548eb9071055a098405cebd11df164a7702bc04c9bf = $this->env->getExtension("native_profiler");
        $__internal_dcb31bf6485cb5656afb9548eb9071055a098405cebd11df164a7702bc04c9bf->enter($__internal_dcb31bf6485cb5656afb9548eb9071055a098405cebd11df164a7702bc04c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layoutElisa.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb31bf6485cb5656afb9548eb9071055a098405cebd11df164a7702bc04c9bf->leave($__internal_dcb31bf6485cb5656afb9548eb9071055a098405cebd11df164a7702bc04c9bf_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_44fa648d9b0c758df2e9250fb9f9be2c72b421c6e315ef567990f475057c0476 = $this->env->getExtension("native_profiler");
        $__internal_44fa648d9b0c758df2e9250fb9f9be2c72b421c6e315ef567990f475057c0476->enter($__internal_44fa648d9b0c758df2e9250fb9f9be2c72b421c6e315ef567990f475057c0476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Page:sidebar"));
        echo "
";
        
        $__internal_44fa648d9b0c758df2e9250fb9f9be2c72b421c6e315ef567990f475057c0476->leave($__internal_44fa648d9b0c758df2e9250fb9f9be2c72b421c6e315ef567990f475057c0476_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layoutElisa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::baseElisa.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     {{ render(controller("BloggerBlogBundle:Page:sidebar")) }}*/
/* {% endblock %}*/
/* */
