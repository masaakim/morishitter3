<?php

/* _css_loader.html */
class __TwigTemplate_7b889db35aa69179a4621faaefb625f0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
<link href=\"";
        // line 2
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "_css_loader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  13 => 2,  7 => 1,  78 => 22,  75 => 21,  70 => 5,  64 => 28,  62 => 27,  59 => 26,  57 => 21,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  36 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,  48 => 16,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
