<?php

/* IgorTestBundle::layout.html.twig */
class __TwigTemplate_b387f7eb5e381be1ad27c1d2eef2ffbb3d9b42b896fdb1fd693bfb4f46b46eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/igortest/css/reset.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/igortest/css/default.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/igortest/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/igortest/js/functions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/igortest/js/rotator.js"), "html", null, true);
        echo "\"></script>
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"block\">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "    </div>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "IgorTestBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  57 => 8,  53 => 7,  49 => 6,  45 => 5,  41 => 4,  37 => 3,  32 => 2,  29 => 1,  25 => 10,  23 => 1,);
    }
}
