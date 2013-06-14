<?php

/* _base.html */
class __TwigTemplate_ac5684906fd1a9338ae5d206826d8944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'TITLE' => array($this, 'block_TITLE'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ja\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('TITLE', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    ";
        // line 9
        $this->env->loadTemplate("_css_loader.html")->display($context);
        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"shortcut icon\" href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/ico/ikasama.ico\"> 
  </head>

  <body>
    ";
        // line 15
        $this->env->loadTemplate("_static_nav.html")->display($context);
        // line 16
        echo "    <div class=\"container\">
      ";
        // line 17
        $this->env->loadTemplate("_message.html")->display($context);
        // line 18
        echo "


      ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div>
    ";
        // line 27
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 28
        echo "  </body>
</html>
";
    }

    // line 5
    public function block_TITLE($context, array $blocks = array())
    {
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "


      ";
    }

    public function getTemplateName()
    {
        return "_base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  75 => 21,  70 => 5,  64 => 28,  62 => 27,  59 => 26,  57 => 21,  52 => 18,  50 => 17,  47 => 16,  45 => 15,  36 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
