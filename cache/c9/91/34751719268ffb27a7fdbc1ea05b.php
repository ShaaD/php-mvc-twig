<?php

/* help/index.twig */
class __TwigTemplate_c99134751719268ffb27a7fdbc1ea05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_template.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "HELP";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "\t<p>Welcome to HELP.</p>
\t
\t\thello.
";
    }

    public function getTemplateName()
    {
        return "help/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  27 => 2,);
    }
}
