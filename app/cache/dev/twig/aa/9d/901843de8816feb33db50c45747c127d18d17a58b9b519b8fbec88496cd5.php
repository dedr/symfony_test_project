<?php

/* IgorTestBundle:Templates:header.html.twig */
class __TwigTemplate_aa9d901843de8816feb33db50c45747c127d18d17a58b9b519b8fbec88496cd5 extends Twig_Template
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
        echo " <div id=\"header\">\t\t
            <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\" class=\"logo\"><span>CarteBlanche - HTML/CSS theme created by Chris Fay/Chris Fay Consulting</span></a>
            <div id=\"tagline\">
                <p>Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
            </div>
        </div><!--[END] //header -->";
    }

    public function getTemplateName()
    {
        return "IgorTestBundle:Templates:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
