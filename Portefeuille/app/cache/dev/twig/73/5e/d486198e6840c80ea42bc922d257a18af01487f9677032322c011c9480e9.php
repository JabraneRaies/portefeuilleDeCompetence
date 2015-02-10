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
            'javascripts' => array($this, 'block_javascripts'),
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
                    

    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "                
            </section>
        </section>
    </body>
  ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</html>
";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "  <!-- js placed at the end of the document so the pages load faster -->
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
    <script> 
        \$('#portefeuille_portefeuillebundle_contact_submit').on( \"click\", function() {
        alert('woow ta cliquer')});
    </script>
  ";
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
        return array (  170 => 59,  166 => 58,  162 => 57,  156 => 54,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  130 => 46,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  107 => 40,  104 => 39,  100 => 34,  97 => 33,  92 => 65,  90 => 39,  84 => 35,  82 => 33,  76 => 29,  74 => 28,  65 => 22,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  21 => 1,);
    }
}
