<?php

/* portefeuilleBundle:layouts:menu.html.twig */
class __TwigTemplate_40e0862956ef70c45d4bfd5a50b27480b80faab2a61f169ead9ec19ee873bad9 extends Twig_Template
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
        echo "<!--sidebar start-->
<aside>
    <div id=\"sidebar\"  class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            <li>
                <a class=\"dcjq-parent\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                        <span>
                            Accueil
                        </span>
                </a>
            </li>
            <li class=\"sub-menu dcjq-parent-li\">
                <a class=\"dcjq-parent\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("cv");
        echo "\">
                    <i class=\"fa fa-laptop\"></i>
                        <span>
                            C.V
                        </span>

                </a>

            </li>
            <li class=\"sub-menu dcjq-parent-li\">
                <a class=\"dcjq-parent\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("stage");
        echo "\">
                    <i class=\"fa fa-book\"></i>
                        <span>
                            Stage
                        </span>

                </a>

            </li>
            <li class=\"sub-menu dcjq-parent-li\">
                <a class=\"dcjq-parent\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tp");
        echo "\">
                    <i class=\"fa fa-cogs\"></i>
                        <span>
                            TP&PPE
                        </span>

                </a>

            </li>
            <li>
                <a class=\"dcjq-parent\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                        <span>
                            contact
                        </span>
                </a>
            </li>
            
                  <!--multi level menu end-->
              </ul>
              <!-- sidebar menu end-->";
        // line 56
        echo "    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "portefeuilleBundle:layouts:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 56,  77 => 45,  64 => 35,  51 => 25,  38 => 15,  27 => 7,  19 => 1,);
    }
}
