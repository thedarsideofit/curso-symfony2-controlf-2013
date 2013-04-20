<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_a60bd34eba8eca13cf67491d2260241e extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    -moz-border-radius: 16px;
    -webkit-border-radius: 16px;
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  348 => 153,  334 => 145,  327 => 141,  293 => 118,  288 => 116,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 97,  248 => 96,  243 => 93,  240 => 92,  221 => 85,  219 => 84,  202 => 75,  195 => 71,  191 => 69,  188 => 68,  185 => 67,  172 => 62,  165 => 60,  153 => 56,  150 => 55,  134 => 47,  113 => 38,  81 => 23,  34 => 5,  97 => 41,  127 => 60,  110 => 22,  102 => 33,  90 => 27,  76 => 28,  53 => 12,  58 => 17,  63 => 19,  59 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 149,  337 => 103,  322 => 101,  314 => 99,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 89,  229 => 87,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 64,  169 => 60,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 40,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 62,  126 => 45,  114 => 42,  84 => 24,  70 => 19,  67 => 18,  61 => 12,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 70,  158 => 79,  156 => 58,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 19,  105 => 34,  91 => 31,  62 => 23,  49 => 10,  26 => 9,  87 => 20,  21 => 2,  31 => 4,  25 => 35,  94 => 34,  89 => 20,  85 => 32,  75 => 20,  68 => 14,  56 => 11,  24 => 3,  19 => 1,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  44 => 10,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 31,  96 => 30,  83 => 25,  74 => 27,  66 => 24,  55 => 15,  52 => 10,  50 => 10,  43 => 9,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 74,  168 => 61,  164 => 59,  162 => 59,  154 => 54,  149 => 51,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 39,  112 => 42,  109 => 41,  106 => 45,  103 => 37,  99 => 31,  95 => 34,  92 => 33,  86 => 28,  82 => 28,  80 => 30,  73 => 20,  64 => 17,  60 => 6,  57 => 16,  54 => 14,  51 => 13,  48 => 9,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
