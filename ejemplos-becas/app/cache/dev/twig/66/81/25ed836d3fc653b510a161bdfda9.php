<?php

/* ControlFEmailBundle:Default:email.saludo.html.twig */
class __TwigTemplate_668125ed836d3fc653b510a161bdfda9 extends Twig_Template
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
        echo "<p>Estimado ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contacto"), "nombre"), "html", null, true);
        echo " Gracias por contactarte!!!!</p> 
<span>El equipo de Hydras C&S</span>
";
    }

    public function getTemplateName()
    {
        return "ControlFEmailBundle:Default:email.saludo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
