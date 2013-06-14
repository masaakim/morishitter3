<?php

/* _js_loader.html */
class __TwigTemplate_a69ae833805009af7fd153ebc88ce6a0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<!--<script src=\"";
        // line 2
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/jquery-2.0.1.min.js\"></script>
<script src=\"";
        // line 3
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/script.js\"></script>-->
";
    }

    public function getTemplateName()
    {
        return "_js_loader.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 3,  13 => 2,  7 => 1,  139 => 60,  136 => 58,  122 => 52,  117 => 51,  112 => 50,  107 => 49,  93 => 42,  77 => 39,  71 => 35,  66 => 34,  48 => 25,  38 => 17,  35 => 6,  30 => 4,  27 => 3,);
    }
}
