<?php

/* list.html */
class __TwigTemplate_8fa08430894450402a33e874afb182e0 extends Twig_Template
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

<table class=\"table table-bordered\">
  <thead>
    <tr class=\"success\">
      <th>Lists</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 16
        if (isset($context["lists"])) { $_lists_ = $context["lists"]; } else { $_lists_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_lists_);
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 17
            echo "    <tr>
      <td><a href=\"http://twitter.com/";
            // line 18
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
        // line 21
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
        return array (  70 => 21,  57 => 18,  54 => 17,  49 => 16,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
