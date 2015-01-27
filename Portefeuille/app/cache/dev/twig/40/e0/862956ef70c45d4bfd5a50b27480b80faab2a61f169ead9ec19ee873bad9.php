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
                <a class=\"active\" href=\"";
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
                <a class=\"dcjq-parent\" href=\"javascript:;\">
                    <i class=\"fa fa-laptop\"></i>
                        <span>
                            C.V
                        </span>
                    <span class=\"dcjq-icon\"></span>
                </a>
        <ul class=\"sub\" style=\"display: none;\"></ul>
            </li>
            <li class=\"sub-menu dcjq-parent-li\">
                <a class=\"dcjq-parent\" href=\"javascript:;\">
                    <i class=\"fa fa-book\"></i>
                        <span>
                            Stage
                        </span>
                    <span class=\"dcjq-icon\"></span>
                </a>
        <ul class=\"sub\" style=\"display: none;\"></ul>
            </li>
            <li class=\"sub-menu dcjq-parent-li\">
                <a class=\"dcjq-parent\" href=\"javascript:;\">
                    <i class=\"fa fa-cogs\"></i>
                        <span>
                            TP&PPE
                        </span>
                    <span class=\"dcjq-icon\"></span>
                </a>
        <ul class=\"sub\" style=\"display: none;\"></ul>
            </li>
            <li>
                <a class=\"active\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                        <span>
                            contact
                        </span>
                </a>
            </li>
        <ul class=\"sub\">
            <li><a  href=\"javascript:;\">Menu Item 1</a></li>
            <li class=\"sub-menu\">
                <a  href=\"boxed_page.html\">Menu Item 2</a>
        <ul class=\"sub\">
            <li><a  href=\"javascript:;\">Menu Item 2.1</a></li>
            <li class=\"sub-menu\">
                <a  href=\"javascript:;\">Menu Item 3</a>
        <ul class=\"sub\">
            <li><a  href=\"javascript:;\">Menu Item 3.1</a></li>
            <li><a  href=\"javascript:;\">Menu Item 3.2</a></li>
        </ul>
            </li>
        </ul>
            </li>
        </ul>
            
                  <!--multi level menu end-->
              </ul>
              <!-- sidebar menu end-->";
        // line 72
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
        return array (  97 => 72,  68 => 45,  27 => 7,  19 => 1,);
    }
}
