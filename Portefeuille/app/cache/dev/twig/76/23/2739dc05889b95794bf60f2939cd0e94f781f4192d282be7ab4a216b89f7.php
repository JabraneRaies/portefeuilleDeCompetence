<?php

/* portefeuilleBundle:Default:cv.html.twig */
class __TwigTemplate_76232739dc05889b95794bf60f2939cd0e94f781f4192d282be7ab4a216b89f7 extends Twig_Template
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
    <section class=\"panel\">
        <header class=\"panel-heading\">
            <center><h1>CV</h1></center>
        </header>
        <div class=\"panel-body\">
                <p>
    <strong>RAIES Jabrane</strong>
    19 ans
</p>
<p>
    6, rue de Bourgogne Célibataire
</p>
<p>
    93000 BOBIGNY Permis B en cours
</p>
<p>
    È06-59-50-73-31 Nationalité française
</p>
<p>
    <a href=\"mailto:jabrane.raies@gmail.com\">jabrane.raies@gmail.com</a>
</p>
<div>
    <p align=\"center\">
        <strong>OBJECTIF : DEVELOPPEUR</strong>
    </p>
    <p align=\"center\">
        <strong>Après l'obtention de mon BTS, j'envisage une poursuite d'études en école d'ingénieur en informatique.</strong>
    </p>
    <p align=\"center\">
        <strong></strong>
    </p>
</div>
<p>
    <strong>Expériences professionnelles</strong>
</p>
<p align=\"center\">
    <em><u>Compétences à développer en tant que développeur</u></em>
</p>
<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"907\">
    <tbody>
        <tr>
            <td width=\"434\" valign=\"top\">
                <p>
                    Ø Analyser les besoins du client,
                    <br/>
                    de l'utilisateur et constituer le cahier des charges fonctionnel
                </p>
                <p>
                    Ø Elaborer et rédiger les spécifications techniques de l'application informatique
                </p>
                <p>
                    Ø Concevoir et développer
                    <br/>
                    les programmes et applications informatiques
                </p>
            </td>
            <td width=\"473\" valign=\"top\">
                <p>
                    Ø Définir et réaliser les phases et procédures de tests techniques et fonctionnels de programmes et applications informatiques
                </p>
                <p>
                    Ø Analyser les problèmes techniques, fonctionnels et proposer des correctifs et mise en conformité techniques.
                </p>
                <p>
                    Ø Elaborer et rédiger les documents et supports techniques.
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    17 janvier/13 mars 15 Stage développeur Symphony 2 – Viseo – IDF
</p>
<p>
    11 au 29 Août 14 Ripper – Gaillard – IDF
</p>
<p>
    26 mai/20 Juin 14 Stage développeur Symphony 2 – Viseo – IDF
</p>
<p>
    Sept. 12/Août 13 Assistant pédagogique – Chez des particuliers – IDF
</p>
<p>
    <strong>Formations</strong>
</p>
<p>
    2013/2015 BTS Services Informatiques aux Organisations – Lycée L. Michel – Bobigny (93)
</p>
<p>
    Juin 2013 BAC STG option Gestion des Systèmes d’Information - Lycée L. Michel, Bobigny (93)
</p>
<p>
    <strong>Connaissances en informatique</strong>
</p>
<p>
    <strong><u>Language:</u></strong>
    <strong> </strong>
    php, c#, html, sql, css, jQuery, Ajax, Symfony 2
</p>
<p>
    <strong><u>Environnement :</u></strong>
    EasyPHP, wamp, xamp, lamp
</p>
<p>
    <strong><u></u></strong>
</p>
<p>
    <strong><u>Logiciels :</u></strong>
    <strong> </strong>
    Word, Excel, Powerpoint, Visual Studio, SharpDevelop, NetBeans, Sublime Text
</p>
<p>
    <strong><u>Méthodes :</u></strong>
    Merise, UML
</p>
<p>
    <strong><u>Systèmes d’expl. :</u></strong>
    Windows XP Pro, initiation Linux, Windows 7, Windows 8
</p>
<p>
    <strong>Informations complémentaires</strong>
</p>
<p>
    Langues Anglais : courant
</p>
<p>
    Sports Boxe et football
</p>
<p>
    Centres d’intérêt Lecture et voyager.
</p>
        </div>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "portefeuilleBundle:Default:cv.html.twig";
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
