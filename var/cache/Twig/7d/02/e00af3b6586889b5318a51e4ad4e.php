<?php

/* attack.html */
class __TwigTemplate_7d02e00af3b6586889b5318a51e4ad4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_base.html");

        $this->blocks = array(
            'TITLE' => array($this, 'block_TITLE'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_TITLE($context, array $blocks = array())
    {
        // line 4
        echo "morishitter
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<br><br>

<a class=\"btn\" href=\"/tweet\">Home</a>
<a class=\"btn\" href=\"/mention\">Mention</a>
<a class=\"btn\" href=\"/my_fav\">Favorites</a>
<a class=\"btn\" href=\"/DM_in\">DM</a>
<a class=\"btn\" href=\"/profile\">Profile</a>
<a class=\"btn\" href=\"/list.php\">List</a>

<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "attack.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
