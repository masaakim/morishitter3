<?php

/* mention.html */
class __TwigTemplate_be348df9a9f701768d3d2baec3e01f5e extends Twig_Template
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

<a class=\"btn\" href=\"tweet.php\">Home</a>
<a class=\"btn\" href=\"mention.php\">Mention</a>
<a class=\"btn\" href=\"fav.php\">Favorites</a>
<a class=\"btn\" href=\"DM.php\">DM</a>
<a class=\"btn\" href=\"profile.php\">Profile</a>
<a class=\"btn\" href=\"list.php\">List</a>


<br><br><br><br>

<form class=\"form-horizontal\" method=\"POST\" action=\"mention.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"textarea\">Tweet here</label>
      <div class=\"controls\">
        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"10\" cols=\"10\" name=\"tweet\">";
        // line 25
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
        // line 35
        if (isset($context["mention"])) { $_mention_ = $context["mention"]; } else { $_mention_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_mention_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 36
            echo "

<IMG SRC=\"";
            // line 38
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"> <a href=\"others.php?id=";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">@";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "</a> : ";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br>
  <p><small>";
            // line 39
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "created_at"), "html", null, true);
            echo "<small></p>

<form class=\"form-horizontal\" method=\"POST\" action=\"mention.php\">
  <div class=\"form-actions\">
    <input type=\"hidden\" name=\"reply_fav\" value=\"";
            // line 43
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">
    <button class=\"btn\" name=\"reply\" value=\"";
            // line 44
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">Reply</button>
    <button class=\"btn btn-warning\" name=\"fav\" value=\"";
            // line 45
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">★ </button>
    <button class=\"btn btn-info\" name=\"RT\" value=\"";
            // line 46
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
        // line 53
        echo "
<br><br><br>

";
    }

    public function getTemplateName()
    {
        return "mention.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 53,  123 => 46,  118 => 45,  113 => 44,  108 => 43,  100 => 39,  86 => 38,  82 => 36,  77 => 35,  58 => 25,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
