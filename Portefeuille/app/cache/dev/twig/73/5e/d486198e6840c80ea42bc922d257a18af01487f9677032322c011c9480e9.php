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
";
        // line 9
        echo "            <link href=\"";
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
        // line 126
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
        /*
         * RegEx E-mail
         * controle de saisie
         */
        \$('#portefeuille_portefeuillebundle_contact_email').focusout(function() {
        if(\$( this ).val().match('^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,4}\$')){
            if(\$('#erreur_mail').length>0){\$('#erreur_mail').remove();
                
        }}
        else{if(\$('#erreur_mail').length==0){
                \$('#form_email').append(\"<div id='erreur_mail' class='alert alert-warning fade in' >Ce n'est pas une adresse e-mail valide</div>\");
        }}
        });
        </script>
        <script>
        /*
         * RegEx Numéro de téléphone
         * controle de saisie
         */
        \$('#portefeuille_portefeuillebundle_contact_numero').focusout(function() {
        if(\$( this ).val().match('^0[1-9]([-. ]?[0-9]{2}){4}\$')){
            if(\$('#erreur_num').length>0){\$('#erreur_num').remove();
                
        }}
        else{if(\$('#erreur_num').length==0){
                \$('#form_num').append(\"<div id='erreur_num' class='alert alert-warning fade in'>Ce n'est pas un numéro de téléphone valide</div>\");
        }}
        });
        </script>
        <script>
        /*
         * Controle de saisie Prénom 
         */
        \$('#portefeuille_portefeuillebundle_contact_nom').focusout(function() {
            if(\$('#erreur_nom').length>0){\$('#erreur_nom').remove();
                
        }
        else{if(\$('#erreur_nom').length==0){
                \$('#form_nom').append(\"<div id='erreur_nom' class='alert alert-warning fade in' >veuillez remplir ce champ</div>\");
        }}
        });
        
      
        </script>
        
        <script>
        /*
         * Controle de saisie Prénom 
         */
        \$('#portefeuille_portefeuillebundle_contact_prenom').focusout(function() {
            if(\$('#erreur_prenom').length>0){\$('#erreur_prenom').remove();
                
        }
        else{if(\$('#erreur_prenom').length==0){
                \$('#form_prenom').append(\"<div id='erreur_prenom' class='alert alert-warning fade in' >veuillez remplir ce champ</div>\");
        }}
        });
        
      
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
        return array (  167 => 59,  163 => 58,  159 => 57,  153 => 54,  147 => 51,  143 => 50,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  104 => 40,  101 => 39,  97 => 34,  94 => 33,  89 => 126,  87 => 39,  81 => 35,  79 => 33,  73 => 29,  71 => 28,  62 => 22,  49 => 12,  45 => 11,  41 => 10,  36 => 9,  32 => 7,  28 => 6,  21 => 1,);
    }
}
