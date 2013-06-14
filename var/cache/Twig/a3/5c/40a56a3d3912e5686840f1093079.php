<?php

/* others.html */
class __TwigTemplate_a35c40a56a3d3912e5686840f1093079 extends Twig_Template
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

<form class=\"form-horizontal\" method=\"POST\" action=\"../attack.php\">
    <div class=\"form-actions\">
        ";
        // line 14
        echo "        <input type=\"text\" name=\"fav_count\">
        <input type=\"hidden\" name=\"Fav_Attack\" value=\"";
        // line 15
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "id"), "html", null, true);
        echo "\">
        <input type=\"submit\" class=\"btn btn-warning btn-large\" value=\"Fav Attack\">
    </div>
</form>
<form class=\"form-horizontal\" method=\"POST\" action=\"../air_attack.php\">
    <div class=\"form-actions\">
        ";
        // line 23
        echo "        <input type=\"text\" name=\"air_fav_count\">
        <input type=\"hidden\" name=\"Air_Fav_Attack\" value=\"";
        // line 24
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "id"), "html", null, true);
        echo "\">
        <input type=\"submit\" class=\"btn btn-success btn-large\" value=\"Air Fav Attack\">
    </div>
</form>

<br><br><br><br>

<IMG SRC=\"";
        // line 31
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "profile_image_url_https"), "html", null, true);
        echo "\" ALT=\"icon\" WIDTH=\"100\" HEIGHT=\"100\">
  <h2>Bio</h2>
  <p>";
        // line 33
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "description"), "html", null, true);
        echo "</p>
  <a class=\"btn-info\" href=\"follow.php?id=";
        // line 34
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "id"), "html", null, true);
        echo "&name=";
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "screen_name"), "html", null, true);
        echo "\">Follow</a>
  <a class=\"btn-danger\" href=\"remove.php?id=";
        // line 35
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "id"), "html", null, true);
        echo "&name=";
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "screen_name"), "html", null, true);
        echo "\">Remove</a>

  <br><br><br>

<form class=\"form-horizontal\" method=\"POST\" action=\"others.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"textarea\">Tweet here</label>
      <div class=\"controls\">
        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"10\" cols=\"10\" name=\"tweet\">";
        // line 44
        if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
        if ($_reply_) {
            echo "@";
            if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
            echo twig_escape_filter($this->env, $_reply_, "html", null, true);
            echo " ";
        }
        echo "</textarea>
      </div>
    </div>
    <div class=\"form-actions\">
      <button type=\"submit\" class=\"btn btn-primary\"> Tweet </button>
    </div>
  </fieldset>
</form>
<br><br>




";
        // line 57
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_others_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 58
            echo "

<IMG SRC=\"";
            // line 60
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"> ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo " : ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br>
  <p><small>";
            // line 61
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "created_at"), "html", null, true);
            echo "<small></p>

<form class=\"form-horizontal\" method=\"POST\" action=\"others.php\">
  <div class=\"form-actions\">
    <input type=\"hidden\" name=\"reply_fav\" value=\"";
            // line 65
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">
    <button class=\"btn\" name=\"reply\" value=\"";
            // line 66
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">Reply</button>
    <button class=\"btn btn-warning\" name=\"fav\" value=\"";
            // line 67
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">★ </button>
    <button class=\"btn btn-info\" name=\"RT\" value=\"";
            // line 68
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">RT</button>
  </div>
</form>



";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 75
        echo "
<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "others.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 75,  172 => 68,  167 => 67,  162 => 66,  157 => 65,  149 => 61,  138 => 60,  134 => 58,  129 => 57,  107 => 44,  91 => 35,  83 => 34,  78 => 33,  72 => 31,  61 => 24,  58 => 23,  48 => 15,  45 => 14,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
