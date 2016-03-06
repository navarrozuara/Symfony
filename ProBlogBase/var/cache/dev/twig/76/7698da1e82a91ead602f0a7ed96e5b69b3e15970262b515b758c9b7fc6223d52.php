<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_86c0a1a59a28dd36fadc6b2e10f33357328dfdca2540b7ca272fe60106d8925d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layoutElisa.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
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
        $__internal_a17c7660618622b4174886bce4da435823682fb9b9930e132e98a2ede4272d3b = $this->env->getExtension("native_profiler");
        $__internal_a17c7660618622b4174886bce4da435823682fb9b9930e132e98a2ede4272d3b->enter($__internal_a17c7660618622b4174886bce4da435823682fb9b9930e132e98a2ede4272d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a17c7660618622b4174886bce4da435823682fb9b9930e132e98a2ede4272d3b->leave($__internal_a17c7660618622b4174886bce4da435823682fb9b9930e132e98a2ede4272d3b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb7d03782ca4141d4223f1baaf7e0b011f004eb687ddfe84d6f1cc75015b5dc2 = $this->env->getExtension("native_profiler");
        $__internal_cb7d03782ca4141d4223f1baaf7e0b011f004eb687ddfe84d6f1cc75015b5dc2->enter($__internal_cb7d03782ca4141d4223f1baaf7e0b011f004eb687ddfe84d6f1cc75015b5dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_cb7d03782ca4141d4223f1baaf7e0b011f004eb687ddfe84d6f1cc75015b5dc2->leave($__internal_cb7d03782ca4141d4223f1baaf7e0b011f004eb687ddfe84d6f1cc75015b5dc2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c14cc01313f9b5042d9133ffb23f42ca45cf73d106dbd2f6cd1b6332b6a4fe3b = $this->env->getExtension("native_profiler");
        $__internal_c14cc01313f9b5042d9133ffb23f42ca45cf73d106dbd2f6cd1b6332b6a4fe3b->enter($__internal_c14cc01313f9b5042d9133ffb23f42ca45cf73d106dbd2f6cd1b6332b6a4fe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 20
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 20)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 21
        echo "        </section>
        <h3>Add Comment</h3>
        ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_c14cc01313f9b5042d9133ffb23f42ca45cf73d106dbd2f6cd1b6332b6a4fe3b->leave($__internal_c14cc01313f9b5042d9133ffb23f42ca45cf73d106dbd2f6cd1b6332b6a4fe3b_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  86 => 21,  84 => 20,  75 => 14,  68 => 12,  63 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layoutElisa.html.twig' %}*/
/* */
/* {% block title %}{{ blog.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <article class="blog">*/
/*         <header>*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <h2>{{ blog.title }}</h2>*/
/*         </header>*/
/*         <img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*         <div>*/
/*             <p>{{ blog.blog }}</p>*/
/*         </div>*/
/*     </article>*/
/*     <section class="comments" id="comments">*/
/*         <section class="previous-comments">*/
/*             <h3>Comments</h3>*/
/*             {% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/*         </section>*/
/*         <h3>Add Comment</h3>*/
/*         {{ render(controller('BloggerBlogBundle:Comment:new', { 'blog_id': blog.id })) }}*/
/*     </section>*/
/* {% endblock %}*/
/* */
