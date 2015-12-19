<?php

/* /Users/jacquesuwamungu/Desktop/200ok/themes/responsiv-flat/layouts/default.htm */
class __TwigTemplate_cea10525defb0522805809d170c9c4fdc724507290291bbe024fbd3101c3529f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Flat UI - ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" />
        ";
        // line 8
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 9
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 11
        echo "\" rel=\"stylesheet\">
    </head>
    <body class=\"page-";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "id", array()), "html", null, true);
        echo "\">

        <!-- Header -->
        <header id=\"layout-header\" class=\"header-navbar\">
            <!-- Nav -->
            ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "        </header>


        <!-- Content -->
        <div id=\"layout-content\">
            ";
        // line 24
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 25
        echo "        </div>

        <!-- Mailing List -->
        <section id=\"layout-subscribe\" class=\"subscribe-form\">
            ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("subscribe"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 38
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/vendor/flat-ui/js/bootstrap-select.js", 14 => "assets/vendor/flat-ui/js/bootstrap-switch.js", 15 => "assets/vendor/flat-ui/js/flatui-checkbox.js", 16 => "assets/vendor/flat-ui/js/flatui-radio.js", 17 => "assets/vendor/flat-ui/js/jquery.tagsinput.js", 18 => "assets/vendor/flat-ui/js/jquery.placeholder.js", 19 => "assets/javascript/app.js"));
        // line 59
        echo "\"></script>
        ";
        // line 60
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 61
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 62
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/jacquesuwamungu/Desktop/200ok/themes/responsiv-flat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 62,  104 => 61,  97 => 60,  94 => 59,  92 => 38,  87 => 35,  83 => 34,  77 => 30,  73 => 29,  67 => 25,  65 => 24,  58 => 19,  54 => 18,  44 => 13,  40 => 11,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Flat UI - {{ this.page.title }}</title>*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/logo.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/theme.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body class="page-{{ this.page.id }} layout-{{ this.layout.id }}">*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header" class="header-navbar">*/
/*             <!-- Nav -->*/
/*             {% partial "nav" %}*/
/*         </header>*/
/* */
/* */
/*         <!-- Content -->*/
/*         <div id="layout-content">*/
/*             {% page %}*/
/*         </div>*/
/* */
/*         <!-- Mailing List -->*/
/*         <section id="layout-subscribe" class="subscribe-form">*/
/*             {% partial "subscribe" %}*/
/*         </section>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-select.js',*/
/*             'assets/vendor/flat-ui/js/bootstrap-switch.js',*/
/*             'assets/vendor/flat-ui/js/flatui-checkbox.js',*/
/*             'assets/vendor/flat-ui/js/flatui-radio.js',*/
/*             'assets/vendor/flat-ui/js/jquery.tagsinput.js',*/
/*             'assets/vendor/flat-ui/js/jquery.placeholder.js',*/
/*             'assets/javascript/app.js',*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/
