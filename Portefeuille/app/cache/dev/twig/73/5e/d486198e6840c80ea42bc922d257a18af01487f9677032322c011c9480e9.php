<?php

/* portefeuilleBundle:layouts:mainLayout.html.twig */
class __TwigTemplate_735ed486198e6840c80ea42bc922d257a18af01487f9677032322c011c9480e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Raies Jabrane</title>
            <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    </head>
    <body>
        <section id=\"container\" class=\"\">
            <header class=\"header white-bg\">
                <div class=\"sidebar-toggle-box\">                
                    <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\">                        
                    </div>
                </div>
                <!--logo start-->
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\" class=\"logo\">Flat<span>lab</span></a>
                <!--logo end-->
                <div class=\"nav notify-row\" id=\"top_menu\">
                </div>
            </header>
      <!--header end-->
    ";
        // line 28
        $this->env->loadTemplate("portefeuilleBundle:layouts:menu.html.twig")->display($context);
        // line 29
        echo "            <section id=\"main-content\">
                <section class=\"wrapper\">
                    <section class=\"panel\">

    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "                </section>
            </section>
        </section>
    </body>
  
  <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.sparkline.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/respond.min.js"), "html", null, true);
        echo "\" ></script>

    <!--common script for all pages-->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>

    <!--script for this page-->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/sparkline-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/count.js"), "html", null, true);
        echo "\" ></script>
</html>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    public function getTemplateName()
    {
        return "portefeuilleBundle:layouts:mainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 34,  158 => 33,  151 => 59,  147 => 58,  143 => 57,  137 => 54,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  83 => 35,  81 => 33,  75 => 29,  73 => 28,  64 => 22,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  27 => 6,  20 => 1,);
    }
}
