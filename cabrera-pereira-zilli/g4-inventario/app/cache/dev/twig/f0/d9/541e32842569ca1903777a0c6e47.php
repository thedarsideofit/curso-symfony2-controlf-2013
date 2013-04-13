<?php

/* JordiLlonchCrudGeneratorBundle::layout.html.twig */
class __TwigTemplate_f0d9541e32842569ca1903777a0c6e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/images/favicon.ico"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"container\">
    ";
        // line 32
        $this->displayBlock('menu', $context, $blocks);
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 35
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "flashMessages"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 36
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
                ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "flashMessage"), array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('page', $context, $blocks);
        // line 43
        echo "
</div>


<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jordillonchcrudgenerator/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        // line 50
        $this->displayBlock('javascript', $context, $blocks);
        // line 51
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.layout.bannersadmin", array(), "JordiLlonchCrudGeneratorBundle"), "html", null, true);
    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 42
    public function block_page($context, array $blocks = array())
    {
    }

    // line 50
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JordiLlonchCrudGeneratorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 50,  127 => 51,  110 => 43,  90 => 37,  76 => 34,  113 => 30,  102 => 25,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 42,  140 => 55,  132 => 5,  128 => 49,  119 => 32,  107 => 36,  38 => 11,  71 => 32,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 28,  70 => 20,  67 => 15,  61 => 8,  87 => 20,  31 => 4,  28 => 12,  26 => 6,  25 => 11,  21 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 32,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 31,  62 => 26,  49 => 19,  94 => 22,  89 => 20,  85 => 36,  75 => 14,  68 => 14,  56 => 9,  24 => 4,  19 => 1,  93 => 28,  88 => 19,  78 => 15,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 13,  69 => 12,  47 => 17,  40 => 7,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 33,  120 => 48,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 31,  96 => 23,  83 => 25,  74 => 14,  66 => 15,  55 => 5,  52 => 21,  50 => 10,  43 => 8,  41 => 9,  35 => 29,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 47,  112 => 42,  109 => 41,  106 => 26,  103 => 37,  99 => 40,  95 => 34,  92 => 33,  86 => 28,  82 => 16,  80 => 35,  73 => 33,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 18,  48 => 3,  45 => 2,  42 => 1,  39 => 9,  36 => 5,  33 => 23,  30 => 22,);
    }
}
