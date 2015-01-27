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
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/appadmin/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
      <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
      <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  </head>
  <body>
      <section id=\"container\" class=\"\">
     <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"index.html\" class=\"logo\">Flat<span>lab</span></a>
            <!--logo end-->
            <div class=\"nav notify-row\" id=\"top_menu\">

            </div>
            
        </header>
      <!--header end-->
    
      ";
        // line 31
        $this->env->loadTemplate("portefeuilleBundle:layouts:menu.html.twig")->display($context);
        // line 32
        echo "        <selection id=\"main-content\">
            <selection id=\"wrapper\">
                <selection id=\"panel\">
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                </selection>
            </selection>
        </selection>
    
  </body>
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.sparkline.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/respond.min.js"), "html", null, true);
        echo "\" ></script>

    <!--common script for all pages-->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>

    <!--script for this page-->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/sparkline-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/count.js"), "html", null, true);
        echo "\" ></script>
</html>
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
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
        return array (  161 => 36,  158 => 35,  151 => 62,  147 => 61,  143 => 60,  137 => 57,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  91 => 44,  82 => 37,  80 => 35,  75 => 32,  73 => 31,  52 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
    }
}
