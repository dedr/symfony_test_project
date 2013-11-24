<?php

/* IgorTestBundle:Default:about.html.twig */
class __TwigTemplate_55cd0c4bff9b79495013b9916bec5e319ddd7e4744c1d62f986a436448940059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IgorTestBundle::Default/index.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IgorTestBundle::Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "About Us";
    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"contentWrapper\">
    <div class=\"glow\"></div>
    <div id=\"wrapper\">
     ";
        // line 8
        $this->env->loadTemplate("IgorTestBundle:Templates:header.html.twig")->display($context);
        // line 9
        echo "        <div id=\"mainContent\">
            <div class=\"col1\">
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                ";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "content");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t\t
                </div><!--[END] //col1 -->
                <div class=\"col2\">
\t\t\t\t ";
        // line 17
        $this->env->loadTemplate("IgorTestBundle:Templates:sidebar.html.twig")->display(array_merge($context, array("route" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 18
        echo "                        <!--[END] //sidebar module -->
                    </div><!--[END] //col1 -->\t\t\t\t\t
                </div><!--[END] //mainContent -->
                <div class=\"clear\"></div>
            </div><!--[END] #wrapper -->
            <div class=\"clear\"></div>
        </div><!--[END] //contentWrapper -->

        <div class=\"clear\"></div>
 ";
        // line 27
        $this->env->loadTemplate("IgorTestBundle:Templates:footer.html.twig")->display($context);
        echo "   
";
    }

    public function getTemplateName()
    {
        return "IgorTestBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  76 => 18,  74 => 17,  69 => 14,  60 => 12,  56 => 11,  52 => 9,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
