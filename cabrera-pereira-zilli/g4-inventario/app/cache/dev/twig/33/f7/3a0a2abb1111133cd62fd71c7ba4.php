<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_33f73a0a2abb1111133cd62fd71c7ba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $this->getContext($context, "token"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  244 => 136,  188 => 90,  170 => 84,  153 => 77,  104 => 37,  100 => 36,  77 => 25,  65 => 22,  348 => 322,  346 => 321,  343 => 320,  299 => 278,  297 => 277,  58 => 25,  53 => 17,  20 => 1,  59 => 22,  63 => 18,  148 => 50,  127 => 51,  110 => 43,  90 => 42,  76 => 25,  113 => 40,  102 => 33,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 42,  140 => 55,  132 => 5,  128 => 49,  119 => 32,  107 => 36,  38 => 7,  71 => 13,  177 => 65,  165 => 83,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 40,  70 => 24,  67 => 20,  61 => 17,  87 => 41,  31 => 8,  28 => 3,  26 => 6,  25 => 11,  21 => 2,  196 => 92,  183 => 70,  171 => 61,  166 => 71,  163 => 82,  158 => 80,  156 => 58,  151 => 57,  142 => 59,  138 => 32,  136 => 71,  121 => 46,  117 => 44,  105 => 41,  91 => 33,  62 => 27,  49 => 14,  94 => 22,  89 => 30,  85 => 23,  75 => 28,  68 => 30,  56 => 9,  24 => 2,  19 => 1,  93 => 38,  88 => 32,  78 => 18,  46 => 13,  44 => 20,  27 => 7,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 11,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 50,  131 => 42,  123 => 61,  120 => 48,  115 => 43,  111 => 37,  108 => 47,  101 => 43,  98 => 45,  96 => 35,  83 => 31,  74 => 14,  66 => 25,  55 => 13,  52 => 12,  50 => 22,  43 => 8,  41 => 19,  35 => 6,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 93,  193 => 73,  189 => 71,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 57,  112 => 42,  109 => 52,  106 => 51,  103 => 37,  99 => 40,  95 => 39,  92 => 43,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 21,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
