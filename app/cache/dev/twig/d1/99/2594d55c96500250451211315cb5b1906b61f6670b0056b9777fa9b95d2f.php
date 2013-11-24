<?php

/* IgorTestBundle:Default:contact.html.twig */
class __TwigTemplate_d1992594d55c96500250451211315cb5b1906b61f6670b0056b9777fa9b95d2f extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
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
        echo "            <div id=\"mainContent\">
                <div class=\"col1\">
                    <div class=\"col1\">
                        <div class=\"pageTitle\"><p>Get in touch with us.</p></div>\t\t\t\t
\t\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "sendMessage"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "                        <div class=\"succsess_box\">
                                    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
                                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'row');
        echo "
                                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'row');
        echo "

                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                                    <input type=\"submit\" class=\"submit\" value=\"\" />\t
                                </form>
                                <!--[END] //contact form -->\t

                                <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t\t

                            </div>
                            <div class=\"clear\"></div>\t\t\t\t\t\t\t\t\t\t
                        </div><!--[END] //col1 -->
                        <div class=\"col2\">
\t\t\t\t ";
        // line 38
        $this->env->loadTemplate("IgorTestBundle:Templates:sidebar.html.twig")->display(array_merge($context, array("route" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 39
        echo "                                <!--[END] //sidebar module -->
                            </div><!--[END] //col1 -->\t\t\t\t\t
                        </div><!--[END] //mainContent -->
                        <div class=\"clear\"></div>
                    </div><!--[END] #wrapper -->
                    <div class=\"clear\"></div>
                </div><!--[END] //contentWrapper -->

                <div class=\"clear\"></div>
 ";
        // line 48
        $this->env->loadTemplate("IgorTestBundle:Templates:footer.html.twig")->display($context);
        echo "   
<script>
\$(function() {
\$(\".succsess_box\").delay(3000).fadeOut(\"slow\");
})
</script>

";
    }

    public function getTemplateName()
    {
        return "IgorTestBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  120 => 39,  118 => 38,  103 => 26,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  81 => 19,  74 => 18,  65 => 15,  62 => 14,  58 => 13,  52 => 9,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,);
    }
}
