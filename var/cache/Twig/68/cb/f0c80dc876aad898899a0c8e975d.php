<?php

/* tweet.html */
class __TwigTemplate_68cbf0c80dc876aad898899a0c8e975d extends Twig_Template
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
<form class=\"form-horizontal\" method=\"POST\" action=\"attack.php\">
    <div class=\"form-actions\">
        ";
        // line 19
        echo "        <input type=\"text\" name=\"fav_count\">
        <input type=\"hidden\" name=\"Fav_Attack\" value=\"";
        // line 20
        if (isset($context["others"])) { $_others_ = $context["others"]; } else { $_others_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_others_, 0, array(), "array"), "user"), "id"), "html", null, true);
        echo "\">
        <input type=\"submit\" class=\"btn btn-warning btn-large\" value=\"Fav Attack\">
    </div>
</form>

<br><br><br><br>

<form class=\"form-horizontal\" method=\"POST\" action=\"tweet.php\">
  <fieldset>
    <div class=\"control-group\">
      <label class=\"control-label\" for=\"textarea\">Tweet here</label>
      <div class=\"controls\">
        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"10\" cols=\"10\" name=\"tweet\">";
        // line 32
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
        // line 41
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 42
            echo "<div class=\"row\"> 
    <div class=\"span9\">
        <div class=\"row\">
            <div class=\"span1\">
                <a href=\"others.php?id=";
            // line 46
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\"><IMG SRC=\"";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"></a><br><a href=\"others.php?id=";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">@";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "</a>
            </div>
            <div class=\"span7\">
                ";
            // line 49
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br><br><small>";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "created_at"), "html", null, true);
            echo "</small>
            </div>
        </div>
    </div>
    <div class=\"span3\">
        <form class=\"\" method=\"POST\" action=\"tweet.php\">
            <div class=\"form-actions\">
                <input type=\"hidden\" name=\"reply_fav\" value=\"";
            // line 56
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">
                <button class=\"btn\" name=\"reply\" value=\"";
            // line 57
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">Reply</button>
                <button class=\"btn btn-warning\" name=\"fav\" value=\"";
            // line 58
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">★ </button>
                <button class=\"btn btn-info\" name=\"RT\" value=\"";
            // line 59
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">RT</button>
            </div>
        </form>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 96
        echo "<br><br><br>
<form class=\"form-horizontal\" method=\"POST\" action=\"tweet.php\">
  <div class=\"form-actions\">
    <button class=\"btn btn-success\" name=\"more\">Read More</button>
  </div>
</form>
<br><br><br><br><br><br><br><br>
";
    }

    public function getTemplateName()
    {
        return "tweet.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 96,  143 => 59,  138 => 58,  133 => 57,  128 => 56,  114 => 49,  98 => 46,  92 => 42,  87 => 41,  69 => 32,  53 => 20,  50 => 19,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
