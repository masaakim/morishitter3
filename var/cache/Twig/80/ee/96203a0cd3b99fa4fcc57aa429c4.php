<?php

/* _base.html */
class __TwigTemplate_80ee96203a0cd3b99fa4fcc57aa429c4 extends Twig_Template
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
        echo "        ";
        // line 11
        echo "        <link rel=\"shortcut icon\" href=\"";
        if (isset($context["ASSETS_DIR"])) { $_ASSETS_DIR_ = $context["ASSETS_DIR"]; } else { $_ASSETS_DIR_ = null; }
        echo twig_escape_filter($this->env, $_ASSETS_DIR_, "html", null, true);
        echo "/ico/ikasama.jpeg\"> 
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
    </head>

    <body>
        ";
        // line 17
        $this->env->loadTemplate("_static_nav.html")->display($context);
        // line 18
        echo "        <div class=\"container\">
            ";
        // line 19
        $this->env->loadTemplate("_message.html")->display($context);
        // line 20
        echo "


            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "        </div>
        ";
        // line 29
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 30
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_TITLE($context, array $blocks = array())
    {
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
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
        return array (  80 => 24,  77 => 23,  72 => 5,  66 => 30,  64 => 29,  61 => 28,  59 => 23,  54 => 20,  52 => 19,  49 => 18,  47 => 17,  36 => 11,  34 => 10,  32 => 9,  25 => 5,  19 => 1,);
    }
}
