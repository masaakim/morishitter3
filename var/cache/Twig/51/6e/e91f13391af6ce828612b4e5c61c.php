<?php

/* tweet.html */
class __TwigTemplate_516ee91f13391af6ce828612b4e5c61c extends Twig_Template
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
        // line 17
        echo "<br><br>
<div class=\"row\">
    <div class=\"span4\">
        <form  method=\"POST\" action=\"\">
            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"textarea\">Tweet here</label>
                    <div class=\"controls\">
                        <textarea class=\"input-xlarge\" id=\"textarea\" rows=\"7\" cols=\"15\" name=\"tweet\">";
        // line 25
        if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
        if ($_reply_) {
            echo "@";
            if (isset($context["reply"])) { $_reply_ = $context["reply"]; } else { $_reply_ = null; }
            echo twig_escape_filter($this->env, $_reply_, "html", null, true);
            echo " ";
        }
        echo "</textarea>
                        <br><button type=\"submit\" class=\"btn btn-primary btn-large\"> Tweet </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <br><br>
    <div class=\"span8\">
        ";
        // line 34
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 35
            echo "        <div class=\"row\"> 
            <div class=\"span6\">
                <div class=\"row\">
                    <div class=\"span1\">
                        <a href=\"/user/";
            // line 39
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\"><IMG SRC=\"";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "profile_image_url"), "html", null, true);
            echo "\" ALT=\"icon\" WIDTH=\"50\" HEIGHT=\"50\"></a><br><a href=\"/user/";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">@";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "</a>
                    </div>
                    <div class=\"span5\">
                        ";
            // line 42
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "text"), "html", null, true);
            echo "<br><small style=\"color: gray;\">";
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "created_at"), "html", null, true);
            echo "</small>
                    </div>
                </div>
            </div>
            <div class=\"span2\">
                <form class=\"\" method=\"POST\" action=\"tweet.php\">
                    <div class=\"form-actions\">
                        <input type=\"hidden\" name=\"reply_fav\" value=\"";
            // line 49
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">
                        <button class=\"btn btn-mini\" name=\"reply\" value=\"";
            // line 50
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_val_, "user"), "screen_name"), "html", null, true);
            echo "\">Reply</button>
                        <button class=\"btn btn-warning btn-mini\" name=\"fav\" value=\"";
            // line 51
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">★ </button>
                        <button class=\"btn btn-info btn-mini\" name=\"RT\" value=\"";
            // line 52
            if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_val_, "id_str"), "html", null, true);
            echo "\">RT</button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 58
        echo " 
        ";
        // line 60
        echo "    </div>
</div>
<br><br><br>

<form class=\"form-horizontal\" method=\"POST\" action=\"/\">
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
        return array (  139 => 60,  136 => 58,  122 => 52,  117 => 51,  112 => 50,  107 => 49,  93 => 42,  77 => 39,  71 => 35,  66 => 34,  48 => 25,  38 => 17,  35 => 6,  30 => 4,  27 => 3,);
    }
}
