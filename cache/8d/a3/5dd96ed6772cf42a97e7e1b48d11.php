<?php

/* base_template.twig */
class __TwigTemplate_8da35dd96ed6772cf42a97e7e1b48d11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'nav' => array($this, 'block_nav'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body>
\t<!-- header -->
\t<header>
\t\t";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "\t</header><!-- /header -->
\t
\t<!-- navigation -->
\t<nav>
\t\t";
        // line 19
        $this->displayBlock('nav', $context, $blocks);
        // line 27
        echo "\t</nav><!-- /navigation -->
\t
\t<!-- main content -->
\t<div id=\"main\" class=\"clear\">
\t\t";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 34
        echo "\t</div><!-- /main content -->
\t
\t<!-- footer -->
\t<footer>
\t\t";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 40
        echo "\t
\t</footer><!-- /footer -->
\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"http://mvc.dev/public/js/custom.js\"></script>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<title>MVC | ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"http://mvc.dev/public/css/default.css\">
\t";
    }

    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "\t\t    <h1>The Header</h1>
\t\t";
    }

    // line 19
    public function block_nav($context, array $blocks = array())
    {
        // line 20
        echo "\t\t    <ul id=\"nav\" class=\"nav\">
\t\t    \t<li><a href=\"http://mvc.dev/index\" title=\"Home\">Home</a></li>
\t\t    \t<li><a href=\"http://mvc.dev/about\" title=\"About\">About</a></li>
\t\t    \t<li><a href=\"http://mvc.dev/help\" title=\"Help\">Help</a></li>
\t\t    \t<li><a href=\"http://mvc.dev/login\" title=\"Log In\">Log In</a></li>
\t\t    </ul><!-- /ul#nav -->
\t\t";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "\t\t    
\t\t";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t<p>(C) footer inc.</p>
\t\t";
    }

    public function getTemplateName()
    {
        return "base_template.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  116 => 38,  111 => 32,  108 => 31,  98 => 20,  95 => 19,  90 => 13,  87 => 12,  74 => 5,  71 => 4,  62 => 40,  60 => 38,  54 => 34,  52 => 31,  46 => 27,  44 => 19,  38 => 15,  36 => 12,  30 => 8,  28 => 4,  23 => 1,);
    }
}
