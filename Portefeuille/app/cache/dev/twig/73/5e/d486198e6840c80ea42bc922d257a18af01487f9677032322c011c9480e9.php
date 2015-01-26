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
   
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap-reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>‏
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">‏
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">‏
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">‏
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">‏
    
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Mosaddek\">
    <meta name=\"keyword\" content=\"FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">
    <title>Raies Jabrane</title>
    
  </head>
  <body>
     <header class=\"header white-bg\">
              <div class=\"sidebar-toggle-box\">
                  <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
              </div>
            <!--logo start-->
            <a href=\"index.html\" class=\"logo\">Flat<span>lab</span></a>
            <!--logo end-->
            <div class=\"nav notify-row\" id=\"top_menu\">
                <!--  notification start -->
                <ul class=\"nav top-menu\">
                    <!-- settings start -->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"fa fa-tasks\"></i>
                            <span class=\"badge bg-success\">6</span>
                        </a>
                        <ul class=\"dropdown-menu extended tasks-bar\">
                            <div class=\"notify-arrow notify-arrow-green\"></div>
                            <li>
                                <p class=\"green\">You have 6 pending tasks</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Dashboard v1.3</div>
                                        <div class=\"percent\">40%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Database Update</div>
                                        <div class=\"percent\">60%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Iphone Development</div>
                                        <div class=\"percent\">87%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 87%\">
                                            <span class=\"sr-only\">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Mobile App</div>
                                        <div class=\"percent\">33%</div>
                                    </div>
                                    <div class=\"progress progress-striped\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 33%\">
                                            <span class=\"sr-only\">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <div class=\"task-info\">
                                        <div class=\"desc\">Dashboard v1.3</div>
                                        <div class=\"percent\">45%</div>
                                    </div>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar\"  role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%\">
                                            <span class=\"sr-only\">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class=\"external\">
                                <a href=\"#\">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id=\"header_inbox_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"badge bg-important\">5</span>
                        </a>
                        <ul class=\"dropdown-menu extended inbox\">
                            <div class=\"notify-arrow notify-arrow-red\"></div>
                            <li>
                                <p class=\"red\">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"./img/avatar-mini.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Jonathan Smith</span>
                                    <span class=\"time\">Just now</span>
                                    </span>
                                    <span class=\"message\">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"./img/avatar-mini2.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Jhon Doe</span>
                                    <span class=\"time\">10 mins</span>
                                    </span>
                                    <span class=\"message\">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"./img/avatar-mini3.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Jason Stathum</span>
                                    <span class=\"time\">3 hrs</span>
                                    </span>
                                    <span class=\"message\">
                                        This is awesome dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"photo\"><img alt=\"avatar\" src=\"./img/avatar-mini4.jpg\"></span>
                                    <span class=\"subject\">
                                    <span class=\"from\">Jondi Rose</span>
                                    <span class=\"time\">Just now</span>
                                    </span>
                                    <span class=\"message\">
                                        Hello, this is metrolab
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id=\"header_notification_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">

                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"badge bg-warning\">7</span>
                        </a>
                        <ul class=\"dropdown-menu extended notification\">
                            <div class=\"notify-arrow notify-arrow-yellow\"></div>
                            <li>
                                <p class=\"yellow\">You have 7 new notifications</p>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                    Server #3 overloaded.
                                    <span class=\"small italic\">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-warning\"><i class=\"fa fa-bell\"></i></span>
                                    Server #10 not respoding.
                                    <span class=\"small italic\">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                    Database overloaded 24%.
                                    <span class=\"small italic\">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-success\"><i class=\"fa fa-plus\"></i></span>
                                    New user registered.
                                    <span class=\"small italic\">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"label label-info\"><i class=\"fa fa-bullhorn\"></i></span>
                                    Application error.
                                    <span class=\"small italic\">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class=\"top-nav \">
                <!--search & user info start-->
                <ul class=\"nav pull-right top-menu\">
                    <li>
                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search\">
                    </li>
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <img alt=\"\" src=\"img/avatar1_small.jpg\">
                            <span class=\"username\">Jhon Doue</span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li><a href=\"#\"><i class=\" fa fa-suitcase\"></i>Profile</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-bell-o\"></i> Notification</a></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-key\"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                  <li>
                      <a class=\"active\" href=\"index.html\">
                          <i class=\"fa fa-dashboard\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-laptop\"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"boxed_page.html\">Boxed Page</a></li>
                          <li><a  href=\"horizontal_menu.html\">Horizontal Menu</a></li>
                          <li><a  href=\"language_switch_bar.html\">Language Switch Bar</a></li>
                          <li><a  href=\"email_template.html\" target=\"_blank\">Email Template</a></li>
                      </ul>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-book\"></i>
                          <span>UI Elements</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"general.html\">General</a></li>
                          <li><a  href=\"buttons.html\">Buttons</a></li>
                          <li><a  href=\"widget.html\">Widget</a></li>
                          <li><a  href=\"slider.html\">Slider</a></li>
                          <li><a  href=\"nestable.html\">Nestable</a></li>
                          <li><a  href=\"font_awesome.html\">Font Awesome</a></li>
                      </ul>
                  </li>

                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-cogs\"></i>
                          <span>Components</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"grids.html\">Grids</a></li>
                          <li><a  href=\"calendar.html\">Calendar</a></li>
                          <li><a  href=\"gallery.html\">Gallery</a></li>
                          <li><a  href=\"todo_list.html\">Todo List</a></li>
                          <li><a  href=\"draggable_portlet.html\">Draggable Portlet</a></li>
                          <li><a  href=\"tree.html\">Tree View</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-tasks\"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"form_component.html\">Form Components</a></li>
                          <li><a  href=\"advanced_form_components.html\">Advanced Components</a></li>
                          <li><a  href=\"form_wizard.html\">Form Wizard</a></li>
                          <li><a  href=\"form_validation.html\">Form Validation</a></li>
                          <li><a  href=\"dropzone.html\">Dropzone File Upload</a></li>
                          <li><a  href=\"inline_editor.html\">Inline Editor</a></li>
                          <li><a  href=\"image_cropping.html\">Image Cropping</a></li>
                          <li><a  href=\"file_upload.html\">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-th\"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"basic_table.html\">Basic Table</a></li>
                          <li><a  href=\"responsive_table.html\">Responsive Table</a></li>
                          <li><a  href=\"dynamic_table.html\">Dynamic Table</a></li>
                          <li><a  href=\"advanced_table.html\">Advanced Table</a></li>
                          <li><a  href=\"editable_table.html\">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\" fa fa-envelope\"></i>
                          <span>Mail</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"inbox.html\">Inbox</a></li>
                          <li><a  href=\"inbox_details.html\">Inbox Details</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\" fa fa-bar-chart-o\"></i>
                          <span>Charts</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"morris.html\">Morris</a></li>
                          <li><a  href=\"chartjs.html\">Chartjs</a></li>
                          <li><a  href=\"flot_chart.html\">Flot Charts</a></li>
                          <li><a  href=\"xchart.html\">xChart</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-shopping-cart\"></i>
                          <span>Shop</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"product_list.html\">List View</a></li>
                          <li><a  href=\"product_details.html\">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href=\"google_maps.html\" >
                          <i class=\"fa fa-map-marker\"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\">
                          <i class=\"fa fa-comments-o\"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"lobby.html\">Lobby</a></li>
                          <li><a  href=\"chat_room.html\"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-glass\"></i>
                          <span>Extra</span>
                      </a>
                      <ul class=\"sub\">
                          <li><a  href=\"blank.html\">Blank Page</a></li>
                          <li><a  href=\"lock_screen.html\">Lock Screen</a></li>
                          <li><a  href=\"profile.html\">Profile</a></li>
                          <li><a  href=\"invoice.html\">Invoice</a></li>
                          <li><a  href=\"search_result.html\">Search Result</a></li>
                          <li><a  href=\"pricing_table.html\">Pricing Table</a></li>
                          <li><a  href=\"faq.html\">FAQ</a></li>
                          <li><a  href=\"fb_wall.html\">FB Wall</a></li>
                          <li><a  href=\"404.html\">404 Error</a></li>
                          <li><a  href=\"500.html\">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href=\"login.html\">
                          <i class=\"fa fa-user\"></i>
                          <span>Login Page</span>
                      </a>
                  </li>

                  <!--multi level menu start-->
                  <li class=\"sub-menu\">
                      <a href=\"javascript:;\" >
                          <i class=\"fa fa-sitemap\"></i>
                          <span>Multi level Menu</span>
                      </a>
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
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
    ";
        // line 450
        $this->displayBlock('body', $context, $blocks);
        // line 452
        echo "  </body>
  
  <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <script class=\"include\" type=\"text/javascript\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.sparkline.js"), "html", null, true);
        echo "\"  type=\"text/javascript\" ></script>
    <script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/owl.carousel.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/respond.min.js"), "html", null, true);
        echo "\" ></script>

    <!--common script for all pages-->
    <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/common-scripts.js"), "html", null, true);
        echo "\" ></script>

    <!--script for this page-->
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/sparkline-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/easy-pie-chart.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/portefeuille/js/count.js"), "html", null, true);
        echo "\" ></script>
</html>
";
    }

    // line 450
    public function block_body($context, array $blocks = array())
    {
        // line 451
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
        return array (  569 => 451,  566 => 450,  559 => 473,  555 => 472,  551 => 471,  545 => 468,  539 => 465,  535 => 464,  531 => 463,  527 => 462,  523 => 461,  519 => 460,  515 => 459,  511 => 458,  507 => 457,  503 => 456,  499 => 455,  494 => 452,  492 => 450,  51 => 12,  47 => 11,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
