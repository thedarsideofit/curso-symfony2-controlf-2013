<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_34b1845d2179e89027826353eef3e6db extends Twig_Template
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
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getContext($context, "data"), $this->getContext($context, "key"), array(), "array")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  59 => 22,  63 => 21,  148 => 50,  127 => 51,  110 => 43,  90 => 37,  76 => 28,  113 => 30,  102 => 25,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 42,  140 => 55,  132 => 5,  128 => 49,  119 => 32,  107 => 36,  38 => 6,  71 => 23,  177 => 65,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 27,  70 => 26,  67 => 22,  61 => 23,  87 => 20,  31 => 4,  28 => 3,  26 => 3,  25 => 11,  21 => 2,  196 => 90,  183 => 70,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 58,  151 => 57,  142 => 59,  138 => 32,  136 => 56,  121 => 46,  117 => 44,  105 => 41,  91 => 35,  62 => 24,  49 => 19,  94 => 22,  89 => 30,  85 => 36,  75 => 28,  68 => 14,  56 => 9,  24 => 2,  19 => 1,  93 => 38,  88 => 19,  78 => 15,  46 => 12,  44 => 12,  27 => 4,  79 => 29,  72 => 27,  69 => 26,  47 => 17,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 33,  120 => 48,  115 => 43,  111 => 37,  108 => 47,  101 => 43,  98 => 31,  96 => 23,  83 => 30,  74 => 14,  66 => 25,  55 => 15,  52 => 21,  50 => 15,  43 => 8,  41 => 9,  35 => 9,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 66,  164 => 59,  162 => 62,  154 => 54,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 50,  122 => 43,  116 => 47,  112 => 42,  109 => 41,  106 => 26,  103 => 37,  99 => 40,  95 => 39,  92 => 33,  86 => 28,  82 => 16,  80 => 29,  73 => 33,  64 => 24,  60 => 6,  57 => 20,  54 => 19,  51 => 18,  48 => 3,  45 => 2,  42 => 11,  39 => 10,  36 => 8,  33 => 6,  30 => 5,);
    }
}
