<?php

/* portefeuilleBundle:Default:stage.html.twig */
class __TwigTemplate_8405235fac137d7baa408a5216e06438f86d1faadea397e5d30f5632b087137f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("portefeuilleBundle:layouts:mainLayout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portefeuilleBundle:layouts:mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"col-lg-8\">
    <section id=\"main-content\">
        <header class=\"panel-heading\">
            <center><h1>Stage</h1></center>
        </header>
    <p>
        
        Vous trouverez ici la présentation des stage que j'ai fait dans l'entreprise Viseo<br>
        Viseo est une ESN (Entreprise de Service Numérique) Française créée en 1999 et basé a Paris <br>
        Elle emploie à peut près 1 200 employé et à un chiffre d'affaire supérieur a 110 millions d'€<br>
        Lors de ma première année l'entreprise ce nommais Novédia et c'est faite acheter par Viséo
    </p>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "portefeuilleBundle:Default:stage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  36 => 2,  11 => 1,);
    }
}
