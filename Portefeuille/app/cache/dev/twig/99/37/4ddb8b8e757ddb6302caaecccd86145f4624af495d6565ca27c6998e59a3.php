<?php

/* portefeuilleBundle:Default:index.html.twig */
class __TwigTemplate_99374ddb8b8e757ddb6302caaecccd86145f4624af495d6565ca27c6998e59a3 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "    <div class=\"alert alert-success fade in\">
        <center><h2>";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h2></center>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<div class=\"col-lg-8\">
    <section id=\"main-content\">
        <header class=\"panel-heading\">
            <center><h1>Accueil</h1></center>
        </header>
    <p>
        Étudiant en BTS SIO (Services Informatiques aux Organisations) option SLAM (Solutions Logicielles et Applications Métier).
        J'effectue mon BTS en formation initiale au Lycée Louise Michel de Bobigny.
        <br>
        Ce Portfolio vous permet de consulter mes différents projets, réalisations, ainsi que diverses informations concernant mes études.
    </p>
        <br>
    <p>
        <h4 style=\"text-decoration:underline;\">Présentation du bts</h4>
        Le BTS Services Informatiques aux Organisations est un nouveau diplôme rénovant le BTS Informatique de Gestion. Il sera accessible dès la rentrée de septembre 2011 avec un premier examen en mai 2013.
    Son but est de mieux former les futurs diplômés aux nouveaux besoins des entreprises. En effet, ces dernières sont de plus en plus exigentes et souhaitent que leur informatique soit en adéquation avec leurs besoins stratégiques, et non l'inverse. Cette formation permet donc aux titulaires du diplôme de répondre à ces besoins, que ceux-ci fassent partie d'un service informatique interne, ou agissent pour le compte d'une SSII.
    <br><br>
    La formation, d'une durée de 2 ans sera organisée autour de 3 axes d'enseignement :
    <br><br>
    Des enseignements généraux (culture générale et expression, pratique de la langue anglaise, mathématiques appliquées à l'informatique, algorithmique)
    Des enseignements professionnels (analyse économique, managériale et juridique des services informatiques, méthodes et techniques informatiques) avec un tronc commun lors du premier semestre, suivis d'une spécialisation à partir du milieu de la première année d'enseignement :
    Solutions Logiciels et Applications Métiers
    Solutions d'Infrastructure, Systèmes et Réseaux
    <br><br>
    2 périodes de stage (10 semaines dont minimum 4 semaines la première année).
    Cette formation pourra également être réalisée en alternance.
    Dès le second semestre de la première année, l'étudiant aura le choix entre 2 spécialités, correspondant aux options Développeur et Réseau du BTS IG.
    <br><br><br>
    La spécialité \"<span style=\"color:red;\">Solutions Logiciels et Applications Métiers</span>\" (SLAM)
    <br><br>
    Le titulaire du diplôme participera à la production et à la fourniture de services en développant, en adaptant ou en maintenant des solutions applicatives. 
    <br>Il sera plus particulièrement chargé de :
    <br><br>
    <ul style=\"margin-left: 30px;\">
        <li> - Définir des spécifications techniques à partir de l’expression des besoins des utilisateurs et des contraintes de l’organisation pour laquelle il exercera
        <li> - Réaliser ou adapter puis valider des solutions applicatives à l’aide des environnements de développement retenus
        <li> - Rechercher des réponses adaptées à des problématiques de fourniture de services informatiques
        <li> - Gérer un patrimoine applicatif
        <li> - Rédiger la documentation d’une solution applicative et former les utilisateurs
        <li> - Accompagner et l’assister les utilisateurs
        <li> - Maintenir la qualité des services informatiques.
    </ul>
    </p>
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "portefeuilleBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  46 => 5,  43 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
