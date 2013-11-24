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
        return array (  22 => 2,  19 => 1,  80 => 12,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  57 => 8,  53 => 7,  49 => 6,  41 => 4,  37 => 3,  32 => 2,  29 => 1,  25 => 10,  23 => 1,  91 => 29,  83 => 23,  81 => 22,  74 => 17,  65 => 15,  61 => 14,  58 => 13,  56 => 12,  52 => 10,  50 => 9,  45 => 5,  42 => 5,  36 => 4,  30 => 3,);
    }
}
