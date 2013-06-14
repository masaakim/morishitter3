<?php

/* index.html */
class __TwigTemplate_1399fcb63bd5ea9ead0dc01baeb2c5f7 extends Twig_Template
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
    <div class=\"container\">
      <div class=\"hero-unit\">
        <h1>morishitter
        \t<small>最高のふぁぼライフがはじまる。</small>
        </h1>

        <form method=\"\" action=\"recog.php\">
  \t\t";
        // line 16
        echo "  \t\t\t<div class=\"form-actions\">
    \t\t<button type=\"submit\" class=\"btn btn-primary btn-large\">Register &raquo;</button>
  \t\t\t</div>
\t\t</form>
\t\t
      </div>

      <div class=\"row\">
        <div class=\"span6\">
          <h2>ふぁぼ</h2>
          <p>お気に入り登録（ふぁぼ）に特化したTwitterクライアント。</p>
          <p>morishitterは、あなたのふぁぼを全力でお手伝いします。</p>
        </div>
        <div class=\"span6\">
          <h2>美しすぎるUI</h2>
          <p>このサイトはbootstrapのサンプルをコピペして作られました。</p>
          <p><a class=\"btn\" href=\"http://twitter.github.com/bootstrap/examples/hero.html\">これ &raquo;</a></p>
        </div>
        <div class=\"span6\">
          <h2>GitHub</h2>
          <p>ソースコード上げてる</p>
          <p><a class=\"btn\" href=\"http://github.com/ikasama/\">これ &raquo;</a></p>
        </div>
        
      </div>

      <hr>

      <footer>
      <p><a href=\"http://twitter.com/ikasama48/\">@ikasama48</a></p>
      </footer>

  

";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  38 => 7,  35 => 6,  30 => 4,  27 => 3,);
    }
}
