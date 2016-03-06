<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_998464cc753b4ecbd9782cb616e12a2a61e3ced543976bae251be7cf85eb1385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07878ffdcbe404d926025471d803ef2cb2a14eeafbf1ca800145b20661a94201 = $this->env->getExtension("native_profiler");
        $__internal_07878ffdcbe404d926025471d803ef2cb2a14eeafbf1ca800145b20661a94201->enter($__internal_07878ffdcbe404d926025471d803ef2cb2a14eeafbf1ca800145b20661a94201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07878ffdcbe404d926025471d803ef2cb2a14eeafbf1ca800145b20661a94201->leave($__internal_07878ffdcbe404d926025471d803ef2cb2a14eeafbf1ca800145b20661a94201_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d4e04015ec3e2c0c5970655991401f44dea5b6a553faacd13ddc8211e6b7d4f = $this->env->getExtension("native_profiler");
        $__internal_1d4e04015ec3e2c0c5970655991401f44dea5b6a553faacd13ddc8211e6b7d4f->enter($__internal_1d4e04015ec3e2c0c5970655991401f44dea5b6a553faacd13ddc8211e6b7d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1d4e04015ec3e2c0c5970655991401f44dea5b6a553faacd13ddc8211e6b7d4f->leave($__internal_1d4e04015ec3e2c0c5970655991401f44dea5b6a553faacd13ddc8211e6b7d4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e304843d2eacb44ae19363c6bf12e4e1317db57c3900fe71b320313a93455d62 = $this->env->getExtension("native_profiler");
        $__internal_e304843d2eacb44ae19363c6bf12e4e1317db57c3900fe71b320313a93455d62->enter($__internal_e304843d2eacb44ae19363c6bf12e4e1317db57c3900fe71b320313a93455d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e304843d2eacb44ae19363c6bf12e4e1317db57c3900fe71b320313a93455d62->leave($__internal_e304843d2eacb44ae19363c6bf12e4e1317db57c3900fe71b320313a93455d62_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0dbd6cba75833263d835ee1c706d116ae8ae4f53a3fe4d918954ae2dd21939a = $this->env->getExtension("native_profiler");
        $__internal_d0dbd6cba75833263d835ee1c706d116ae8ae4f53a3fe4d918954ae2dd21939a->enter($__internal_d0dbd6cba75833263d835ee1c706d116ae8ae4f53a3fe4d918954ae2dd21939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0dbd6cba75833263d835ee1c706d116ae8ae4f53a3fe4d918954ae2dd21939a->leave($__internal_d0dbd6cba75833263d835ee1c706d116ae8ae4f53a3fe4d918954ae2dd21939a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
