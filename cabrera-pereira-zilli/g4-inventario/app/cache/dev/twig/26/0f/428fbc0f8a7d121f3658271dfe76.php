<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_260f428fbc0f8a7d121f3658271dfe76 extends Twig_Template
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
        return array (  178 => 66,  175 => 65,  161 => 63,  118 => 49,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  334 => 145,  327 => 141,  293 => 118,  288 => 116,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 97,  248 => 96,  243 => 93,  240 => 92,  221 => 85,  219 => 84,  202 => 75,  195 => 71,  191 => 67,  185 => 67,  172 => 64,  150 => 55,  134 => 54,  81 => 23,  791 => 473,  788 => 472,  777 => 470,  773 => 469,  769 => 467,  756 => 466,  730 => 461,  727 => 460,  708 => 458,  691 => 457,  687 => 455,  683 => 454,  679 => 453,  675 => 452,  671 => 451,  667 => 450,  663 => 449,  660 => 448,  658 => 447,  641 => 446,  630 => 445,  615 => 440,  610 => 438,  606 => 437,  603 => 436,  601 => 435,  587 => 434,  550 => 399,  532 => 396,  515 => 395,  512 => 394,  510 => 393,  505 => 391,  500 => 389,  244 => 136,  188 => 68,  170 => 84,  153 => 56,  104 => 37,  100 => 39,  77 => 25,  65 => 22,  348 => 153,  346 => 321,  343 => 320,  299 => 278,  297 => 277,  58 => 25,  53 => 12,  20 => 1,  59 => 14,  63 => 18,  148 => 50,  127 => 51,  110 => 43,  90 => 27,  76 => 31,  113 => 48,  102 => 40,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 332,  355 => 157,  341 => 149,  337 => 103,  322 => 101,  314 => 99,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 89,  229 => 87,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  169 => 60,  143 => 42,  140 => 58,  132 => 5,  128 => 49,  119 => 40,  107 => 36,  38 => 6,  71 => 13,  177 => 64,  165 => 60,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 24,  70 => 19,  67 => 24,  61 => 17,  87 => 34,  31 => 8,  28 => 3,  26 => 6,  25 => 11,  21 => 2,  196 => 92,  183 => 70,  171 => 61,  166 => 71,  163 => 82,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 32,  136 => 71,  121 => 50,  117 => 44,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  94 => 22,  89 => 30,  85 => 23,  75 => 28,  68 => 30,  56 => 9,  24 => 2,  19 => 1,  93 => 38,  88 => 32,  78 => 18,  46 => 13,  44 => 20,  27 => 3,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 11,  37 => 6,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 50,  131 => 42,  123 => 42,  120 => 48,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 14,  66 => 25,  55 => 16,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 5,  29 => 3,  209 => 79,  203 => 78,  199 => 93,  193 => 73,  189 => 71,  187 => 84,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 53,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 52,  106 => 51,  103 => 37,  99 => 31,  95 => 39,  92 => 43,  86 => 28,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 10,  42 => 13,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
