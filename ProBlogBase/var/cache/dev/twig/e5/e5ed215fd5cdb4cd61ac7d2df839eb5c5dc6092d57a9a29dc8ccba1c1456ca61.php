<?php

/* ::baseElisa.html.twig */
class __TwigTemplate_5e108c82aad07351c3564bd3ac2c6e08ba70d7593e21523063e7be6b40c030c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f9858908cf87f6b6f001dc1ea87a3905f1e244fef00e0b03bbbda3ef5c84372 = $this->env->getExtension("native_profiler");
        $__internal_1f9858908cf87f6b6f001dc1ea87a3905f1e244fef00e0b03bbbda3ef5c84372->enter($__internal_1f9858908cf87f6b6f001dc1ea87a3905f1e244fef00e0b03bbbda3ef5c84372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::baseElisa.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 38
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "            </div>
        </section>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
";
        
        $__internal_1f9858908cf87f6b6f001dc1ea87a3905f1e244fef00e0b03bbbda3ef5c84372->leave($__internal_1f9858908cf87f6b6f001dc1ea87a3905f1e244fef00e0b03bbbda3ef5c84372_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_40d4f923eee6adb29740aacd131275b1dea0d25a93964cfa4b8a89f773e447cd = $this->env->getExtension("native_profiler");
        $__internal_40d4f923eee6adb29740aacd131275b1dea0d25a93964cfa4b8a89f773e447cd->enter($__internal_40d4f923eee6adb29740aacd131275b1dea0d25a93964cfa4b8a89f773e447cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_40d4f923eee6adb29740aacd131275b1dea0d25a93964cfa4b8a89f773e447cd->leave($__internal_40d4f923eee6adb29740aacd131275b1dea0d25a93964cfa4b8a89f773e447cd_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c104f627133e75545cdd5021ca95871141c0b81d247b78549588c57835a47afe = $this->env->getExtension("native_profiler");
        $__internal_c104f627133e75545cdd5021ca95871141c0b81d247b78549588c57835a47afe->enter($__internal_c104f627133e75545cdd5021ca95871141c0b81d247b78549588c57835a47afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c104f627133e75545cdd5021ca95871141c0b81d247b78549588c57835a47afe->leave($__internal_c104f627133e75545cdd5021ca95871141c0b81d247b78549588c57835a47afe_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_766dc081bb52aa5806e4170f14d8866dded3434175c6583670e1be68e49ba683 = $this->env->getExtension("native_profiler");
        $__internal_766dc081bb52aa5806e4170f14d8866dded3434175c6583670e1be68e49ba683->enter($__internal_766dc081bb52aa5806e4170f14d8866dded3434175c6583670e1be68e49ba683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 25
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_faq");
        echo "\">FAQ</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_766dc081bb52aa5806e4170f14d8866dded3434175c6583670e1be68e49ba683->leave($__internal_766dc081bb52aa5806e4170f14d8866dded3434175c6583670e1be68e49ba683_prof);

    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_95e77c00876bb7de646f426b4f2cd59149cf71b64264b76877ad457d9f9b82a1 = $this->env->getExtension("native_profiler");
        $__internal_95e77c00876bb7de646f426b4f2cd59149cf71b64264b76877ad457d9f9b82a1->enter($__internal_95e77c00876bb7de646f426b4f2cd59149cf71b64264b76877ad457d9f9b82a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
        
        $__internal_95e77c00876bb7de646f426b4f2cd59149cf71b64264b76877ad457d9f9b82a1->leave($__internal_95e77c00876bb7de646f426b4f2cd59149cf71b64264b76877ad457d9f9b82a1_prof);

    }

    // line 38
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8cc01e5cc0de58bfe38ed1902630b19b8707fcafdad4b89cd62a8c6d7214fc89 = $this->env->getExtension("native_profiler");
        $__internal_8cc01e5cc0de58bfe38ed1902630b19b8707fcafdad4b89cd62a8c6d7214fc89->enter($__internal_8cc01e5cc0de58bfe38ed1902630b19b8707fcafdad4b89cd62a8c6d7214fc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
        
        $__internal_8cc01e5cc0de58bfe38ed1902630b19b8707fcafdad4b89cd62a8c6d7214fc89->leave($__internal_8cc01e5cc0de58bfe38ed1902630b19b8707fcafdad4b89cd62a8c6d7214fc89_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_e43c005d61ed9dc5009d3cd928f79f5ba8ef149cbff0b0056d8981cfb6438c9f = $this->env->getExtension("native_profiler");
        $__internal_e43c005d61ed9dc5009d3cd928f79f5ba8ef149cbff0b0056d8981cfb6438c9f->enter($__internal_e43c005d61ed9dc5009d3cd928f79f5ba8ef149cbff0b0056d8981cfb6438c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e43c005d61ed9dc5009d3cd928f79f5ba8ef149cbff0b0056d8981cfb6438c9f->leave($__internal_e43c005d61ed9dc5009d3cd928f79f5ba8ef149cbff0b0056d8981cfb6438c9f_prof);

    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_739465ba1edf1323a52a71b391432cfd6fea4c0e1faa3ad76bee1aabd4f9d0b2 = $this->env->getExtension("native_profiler");
        $__internal_739465ba1edf1323a52a71b391432cfd6fea4c0e1faa3ad76bee1aabd4f9d0b2->enter($__internal_739465ba1edf1323a52a71b391432cfd6fea4c0e1faa3ad76bee1aabd4f9d0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_739465ba1edf1323a52a71b391432cfd6fea4c0e1faa3ad76bee1aabd4f9d0b2->leave($__internal_739465ba1edf1323a52a71b391432cfd6fea4c0e1faa3ad76bee1aabd4f9d0b2_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e0eac52f1657358da810b4e8c5229756fffa9ce5fb7c5cccde0c1080044c737f = $this->env->getExtension("native_profiler");
        $__internal_e0eac52f1657358da810b4e8c5229756fffa9ce5fb7c5cccde0c1080044c737f->enter($__internal_e0eac52f1657358da810b4e8c5229756fffa9ce5fb7c5cccde0c1080044c737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_e0eac52f1657358da810b4e8c5229756fffa9ce5fb7c5cccde0c1080044c737f->leave($__internal_e0eac52f1657358da810b4e8c5229756fffa9ce5fb7c5cccde0c1080044c737f_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_333116be8ea0d629999c44f5eb105b1546de975abf6820bf876103d22bdb9d63 = $this->env->getExtension("native_profiler");
        $__internal_333116be8ea0d629999c44f5eb105b1546de975abf6820bf876103d22bdb9d63->enter($__internal_333116be8ea0d629999c44f5eb105b1546de975abf6820bf876103d22bdb9d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_333116be8ea0d629999c44f5eb105b1546de975abf6820bf876103d22bdb9d63->leave($__internal_333116be8ea0d629999c44f5eb105b1546de975abf6820bf876103d22bdb9d63_prof);

    }

    public function getTemplateName()
    {
        return "::baseElisa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 56,  235 => 51,  229 => 50,  218 => 46,  207 => 43,  193 => 38,  179 => 37,  168 => 30,  164 => 29,  160 => 28,  156 => 27,  152 => 25,  146 => 24,  137 => 15,  133 => 14,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 57,  97 => 56,  92 => 53,  90 => 50,  85 => 47,  83 => 46,  79 => 44,  77 => 43,  69 => 38,  65 => 37,  60 => 34,  58 => 24,  47 => 17,  45 => 10,  38 => 6,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         <title>{% block title %}symblog{% endblock %} - symblog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('css/blog.css') }}" type="text/css" rel="stylesheet" />*/
/*             <link href="{{ asset('css/sidebar.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{path('BloggerBlogBundle_homepage')}}">Home</a></li>*/
/*                                 <li><a href="{{path('BloggerBlogBundle_about')}}">About</a></li>*/
/*                                 <li><a href="{{path('BloggerBlogBundle_contact')}}">Contact</a></li>*/
/*                                 <li><a href="{{path('BloggerBlogBundle_faq')}}">FAQ</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{path('BloggerBlogBundle_homepage')}}">symblog</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{path('BloggerBlogBundle_homepage')}}">creating a blog in Symfony2</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Symfony2 blog tutorial - created by <a href="https://github.com/dsyph3r">dsyph3r</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* */
