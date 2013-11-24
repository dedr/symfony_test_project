<?php

/* IgorTestBundle:Templates:sidebar.html.twig */
class __TwigTemplate_16600593995d8f750d7d004086db5d07f3b0e4d816e558aa097215aa21332fad extends Twig_Template
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
        echo "
<ul class=\"navigation\">
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("home");
        echo "\"><span>home</span></a></li>\t\t\t\t\t
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\"><span>about</span></a></li>
    <li><a href=\"./services.html\"><span>SERVICES</span></a></li>\t\t\t\t\t
    <li><a href=\"./portfolio.html\"><span>PORTFOLIO</span></a></li>
    <li><a href=\"./portfoliosingle.html\"><span>PORTFOLIO SINGLE</span></a></li>
    <li><a href=\"./blog.html\"><span>BLOG</span></a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"><span>contact</span></a></li>
</ul>

<div class=\"clear\"></div>

<div class=\"sidebarDivider\"><p>Recent Updates</p></div>
<ol>
    <li>Oluptas <a href=\"#\">ssumenda</a> est, omnis dolor repellendus</li>
    <li>Assumenda est, omnis dolor</li>
    <li>Epudiandae sint et molestiae non recusandae</li>
    <li>Sint et <a href=\"#\">molestiae</a> non ecusanda</li>
    <li>Consequatur aut perferendis doloribus</li>
    <li>Reiciendis <a href=\"#\">voluptatibus</a></li>
</ol>

<!--[START] //sidebar module -->
<div class=\"sidebarModule\">
    <div class=\"sidebarModuleTop\"></div>
    <div class=\"content\">
        <div class=\"mcol1\">
            <img src=\"/bundles/igortest/images/modicon1.png\" alt=\"icon\" />
        </div>
        <div class=\"mcol2\">
            <h3>Recent Portfolio Item</h3>\t
            <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
        </div>\t\t\t\t\t\t
    </div>\t
    <div class=\"clear\"></div>\t\t\t
    <div class=\"sidebarModuleBottom\"></div>
</div>
<!--[END] //sidebar module -->

<!--[START] //sidebar module -->
<div class=\"sidebarModule\">
    <div class=\"sidebarModuleTop\"></div>
    <div class=\"content\">
        <div class=\"mcol1\">
            <img src=\"/bundles/igortest/images/modicon2.png\" alt=\"icon\" />
        </div>
        <div class=\"mcol2\">
            <h3>Featured Service Offer!</h3>\t
            <p>Ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
        </div>\t\t\t\t\t\t
    </div>\t
    <div class=\"clear\"></div>\t\t\t
    <div class=\"sidebarModuleBottom\"></div>
</div>  
 <script type=\"text/javascript\">
               \$(function() {
                \$(\".navigation li a\").each(function(){
                    var currentUrl = \"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\";
                    \$( \"span:contains(\"+currentUrl+\")\" ).parent().parent().addClass('current');
                })
            });
</script>";
    }

    public function getTemplateName()
    {
        return "IgorTestBundle:Templates:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 59,  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }
}
