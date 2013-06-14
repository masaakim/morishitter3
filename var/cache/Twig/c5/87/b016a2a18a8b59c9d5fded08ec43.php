<?php

/* _js_loader.html */
class __TwigTemplate_c587b016a2a18a8b59c9d5fded08ec43 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/jquery.min.js\"></script>
<script src=\"";
        // line 2
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
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
        return array (  37 => 7,  31 => 6,  23 => 5,  10 => 3,  13 => 2,  7 => 1,  78 => 22,  75 => 21,  70 => 5,  64 => 28,  62 => 27,  59 => 26,  57 => 21,  52 => 18,  50 => 17,  47 => 9,  45 => 15,  36 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,  48 => 16,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
