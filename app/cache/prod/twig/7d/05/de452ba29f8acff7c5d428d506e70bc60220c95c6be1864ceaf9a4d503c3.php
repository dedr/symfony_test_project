<?php

/* IgorTestBundle:Default:index.html.twig */
class __TwigTemplate_7d05de452ba29f8acff7c5d428d506e70bc60220c95c6be1864ceaf9a4d503c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IgorTestBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IgorTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 4
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"contentWrapper\">
    <div class=\"glow\"></div>
    <div id=\"wrapper\">
      ";
        // line 9
        $this->env->loadTemplate("IgorTestBundle:Templates:header.html.twig")->display($context);
        // line 10
        echo "        <div id=\"mainContent\">
            <div class=\"col1\">
            ";
        // line 12
        $this->env->loadTemplate("IgorTestBundle:Templates:slider.html.twig")->display($context);
        // line 13
        echo "                <div class=\"clear\"></div>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockLeft"]) ? $context["blockLeft"] : $this->getContext($context, "blockLeft")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                ";
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "content");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                <div class=\"clear\"></div>

            </div><!--[END] //col1 -->

            <div class=\"col2\">
                ";
        // line 22
        $this->env->loadTemplate("IgorTestBundle:Templates:sidebar.html.twig")->display(array_merge($context, array("route" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 23
        echo "            </div>\t\t\t\t
        </div><!--[END] //mainContent -->
        <div class=\"clear\"></div>
    </div><!--[END] #wrapper -->
    <div class=\"clear\"></div>
</div>
 ";
        // line 29
        $this->env->loadTemplate("IgorTestBundle:Templates:footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "IgorTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  83 => 23,  81 => 22,  74 => 17,  65 => 15,  61 => 14,  58 => 13,  56 => 12,  52 => 10,  50 => 9,  45 => 6,  42 => 5,  36 => 4,  30 => 3,);
    }
}
