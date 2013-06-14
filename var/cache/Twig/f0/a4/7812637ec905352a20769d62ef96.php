<?php

/* index.html */
class __TwigTemplate_f0a47812637ec905352a20769d62ef96 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ja\">
    <head>
        <meta charset=\"utf-8\">
        <title>morishitter</title>
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
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <a class=\"brand\" href=\"http://morishitter.ikaasam.com\">morishitter</a>
                    <div class=\"nav-collapse\">
                        <ul class=\"nav\">
                            <li><a href=\"https://twitter.com/_ikasama\">created by @_ikasama</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            ";
        // line 35
        $this->env->loadTemplate("_message.html")->display($context);
        // line 36
        echo "
            <div id=\"fb-root\"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = \"//connect.facebook.net/ja_JP/all.js#xfbml=1\";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class=\"container\">
                <div class=\"hero-unit\">
                    <h1>morishitter
                        <small>最高のふぁぼライフがはじまる。</small>
                    </h1>

                    <form method=\"\" action=\"recog.php\">
                        ";
        // line 53
        echo "                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary btn-large\">Sign in &raquo;</button>
                        </div>
                    </form>

                </div>

                <div class=\"row\">
                    <div class=\"span6\">
                        <h2>ふぁぼ</h2>
                        <p>お気に入り登録（ふぁぼ）に特化したTwitterクライアント。</p>
                        <p>morishitterは、あなたのふぁぼを全力でお手伝いします。</p>
                    </div>
                    <div class=\"span6\">
                        <h2>洗練されたデザイン</h2>
                        <p>このサイトはbootstrapのサンプルをコピペして作られました。</p>
                        <p><a class=\"btn\" href=\"http://twitter.github.com/bootstrap/examples/hero.html\">これ &raquo;</a></p>
                    </div>
                    <div class=\"span6\">
                        <h2>GitHub</h2>
                        <p>ソースコード上げてる</p>
                        <p><a class=\"btn\" href=\"http://github.com/ikasama/\">これ &raquo;</a></p>
                    </div>

                    <div class=\"span6\">
                        <h2>卒チェキ！</h2>
                        <p>デザ情卒業チェッカー</p>
                        <p><a class=\"btn\" href=\"http://ikaasam.com/graduateChecker\">これ &raquo;</a></p>
                    </div>
                </div>

                <hr>

                <footer>
                <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-via=\"morishitter_\" data-lang=\"ja\" data-hashtags=\"morishitter\">ツイート</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                <div class=\"fb-like\" data-href=\"http://morishitter.ikaasam.com\" data-send=\"false\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"true\"></div>
                <p><a href=\"http://twitter.com/_ikasama\">@_ikasama</a></p>
                </footer>
            </div>
            ";
        // line 93
        $this->env->loadTemplate("_js_loader.html")->display($context);
        // line 94
        echo "        </body>
    </html>
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
        return array (  114 => 94,  112 => 93,  70 => 53,  52 => 36,  50 => 35,  21 => 11,  19 => 10,  17 => 9,  7 => 1,);
    }
}
