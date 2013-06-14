<?php

/* list.html */
class __TwigTemplate_b219667a420df00fbcd1aee643365717 extends Twig_Template
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
        echo "<br><br>

<a class=\"btn\" href=\"tweet.php\">Home</a>
<a class=\"btn\" href=\"mention.php\">Mention</a>
<a class=\"btn\" href=\"fav.php\">Favorites</a>
<a class=\"btn\" href=\"DM.php\">DM</a>
<a class=\"btn\" href=\"profile.php\">Profile</a>
<a class=\"btn\" href=\"list.php\">List</a>

<br><br><br><br>
<table class=\"table table-bordered\">
  <thead>
    <tr class=\"success\">
      <th>Lists</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 24
        if (isset($context["lists"])) { $_lists_ = $context["lists"]; } else { $_lists_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_lists_);
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 25
            echo "    <tr>
      <td><a href=\"http://twitter.com/";
            // line 26
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_list_, "uri"), "html", null, true);
            echo "\">";
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_list_, "uri"), "html", null, true);
            echo "</a> </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "  </tbody>
</table>




";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 29,  65 => 26,  62 => 25,  57 => 24,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
