<?php

/* template.html.twig */
class __TwigTemplate_bc750ae9e0db396721ee5b38d120154873b5f3e03c7d687f0fa0d42410d6c36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'login' => array($this, 'block_login'),
            'index' => array($this, 'block_index'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17ad30106d97df83978376c43ec85a2914f0ee24c1ffb8070bb0960f184950bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ad30106d97df83978376c43ec85a2914f0ee24c1ffb8070bb0960f184950bb->enter($__internal_17ad30106d97df83978376c43ec85a2914f0ee24c1ffb8070bb0960f184950bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_0c9d906bc00c2161268532b8355db056b0e17897a8f2cf7668085d417dd35233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9d906bc00c2161268532b8355db056b0e17897a8f2cf7668085d417dd35233->enter($__internal_0c9d906bc00c2161268532b8355db056b0e17897a8f2cf7668085d417dd35233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/apple-touch-icon-57x57-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/apple-touch-icon-72x72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/apple-touch-icon-114x114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/apple-touch-icon-144x144-precomposed.png"), "html", null, true);
        echo "\">

    <!-- BASE CSS -->
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- REVOLUTION SLIDER CSS -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/css/extralayers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>
<div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\">
        <div class=\"sk-rect1\"></div>
        <div class=\"sk-rect2\"></div>
        <div class=\"sk-rect3\"></div>
        <div class=\"sk-rect4\"></div>
        <div class=\"sk-rect5\"></div>
    </div>
</div>
<!-- End Preload -->

<div class=\"layer\"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    <div id=\"top_line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\"><i class=\"icon-phone\"></i><strong>0045 043204434</strong></div>

                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <ul id=\"top_links\">
                        ";
        // line 61
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 62
            echo "                            <li>
                                ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                            ";
        } else {
            // line 69
            echo "                                <li>
                                <a href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li>
                                    <div class=\"dropdown dropdown-access\">
                                    <a href=\"/register\" >Register</a>
                                </div>
                                </li>

                        ";
        }
        // line 79
        echo "                        <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                <div id=\"logo_home\">
                    <h1><a href=\"index.html\" title=\"Cup Cake\">CupCake</a></h1>
                </div>
            </div>
            ";
        // line 93
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 94
            echo "            <nav class=\"col-md-9 col-sm-9 col-xs-9\">
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/logo_sticky.png"), "html", null, true);
            echo "\" width=\"160\" height=\"34\" alt=\"City tours\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                    <ul>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" >Home</a>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Recipe<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                <li><a href=\"single_tour.html\">Single tour page</a></li>
                                <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                <li><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                        <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                        <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                        <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_tour_working_booking.php\">Single tour working booking</a></li>
                                <li><a href=\"cart.html\">Single tour cart</a></li>
                                <li><a href=\"payment.html\">Single tour booking</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                <li><a href=\"single_hotel_datepicker_adv.html\">Single hotel datepicker adv</a></li>
                                <li><a href=\"single_hotel_working_booking.php\">Single hotel working booking</a></li>
                                <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Bonus <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"javascript:void(0);\">Header styles</a>
                                    <ul>
                                        <li><a href=\"index.html\">Header default</a></li>
                                        <li><a href=\"header_2.html\">Header style 2</a></li>
                                        <li><a href=\"header_3.html\">Header style 3</a></li>
                                        <li><a href=\"header_4.html\">Header style 4</a></li>
                                        <li><a href=\"header_5.html\">Header style 5</a></li>
                                        <li><a href=\"header_6.html\">Header style 6</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"javascript:void(0);\">Footer styles</a>
                                    <ul>
                                        <li><a href=\"index.html\">Footer default</a></li>
                                        <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                        <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                        <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                        <li><a href=\"footer_5.html\">Footer style 5</a></li>
                                        <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                        <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"javascript:void(0);\">Shop</a>
                                    <ul>
                                        <li><a href=\"shop.html\">Shop</a></li>
                                        <li><a href=\"shop-single.html\">Shop single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                        <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_hotel_contact.php\">Hotel page contact form</a></li>
                            </ul>
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Pages<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"general_page.html\">General page</a></li>
                                        <li><a href=\"tourist_guide.html\">Tourist guide</a></li>
                                        <li><a href=\"wishlist.html\">Wishlist page</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
                                        <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
                                        <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
                                        <li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
                                        <li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
                                        <li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"contact_us_1.html\">Contact us 1</a></li>
                                        <li><a href=\"contact_us_2.html\">Contact us 2</a></li>
                                        <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
                                        <li><a href=\"blog.html\">Blog left sidebar</a></li>
                                        <li><a href=\"login.html\">Login</a></li>
                                        <li><a href=\"register.html\">Register</a></li>
                                        <li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
                                        <li><a href=\"404.html\">404 Error page</a></li>
                                        <li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
                                        <li><a href=\"timeline.html\">Tour timeline</a></li>
                                        <li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
                                        <li><a href=\"footer_5.html\"><i class=\"icon-columns\"></i> Footer with Twitter feed</a></li>
                                        <li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
                                        <li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
                                        <li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
                                        <li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
                                        <li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
                                        <li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i>  Admin area</a></li>
                                        <li><a href=\"general_page.html\"><i class=\"icon-light-up\"></i>  Weather Forecast</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id=\"top_tools\">
                    <li>
                        <div class=\"dropdown dropdown-search\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-search\"></i></a>
                            <div class=\"dropdown-menu\">
                                <form>
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\">
                                            <i class=\"icon-search\"></i>
                                            </button>
                                            </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown dropdown-cart\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\" icon-basket-1\"></i>Cart (0) </a>
                            <ul class=\"dropdown-menu\" id=\"cart_items\">
                                <li>
                                    <div class=\"image\"><img src=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/thumb_cart_1.jpg"), "html", null, true);
            echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/thumb_cart_2.jpg"), "html", null, true);
            echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/thumb_cart_3.jpg"), "html", null, true);
            echo "\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>\$120.00</span></div>
                                    <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                    <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
            ";
        } else {
            // line 300
            echo "            ";
        }
        // line 301
        echo "        </div>
    </div><!-- container -->
</header><!-- End Header -->

";
        // line 305
        $this->displayBlock('login', $context, $blocks);
        // line 307
        $this->displayBlock('index', $context, $blocks);
        // line 887
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-3\">
                <h3>Need help?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                <a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>About</h3>
                <ul>
                    <li><a href=\"#\">About us</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Login</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Terms and condition</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>Discover</h3>
                <ul>
                    <li><a href=\"#\">Community blog</a></li>
                    <li><a href=\"#\">Tour guide</a></li>
                    <li><a href=\"#\">Wishlist</a></li>
                    <li><a href=\"#\">Gallery</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-3\">
                <h3>Settings</h3>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>English</option>
                        <option value=\"French\">French</option>
                        <option value=\"Spanish\">Spanish</option>
                        <option value=\"Russian\">Russian</option>
                    </select>
                </div>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"currency\" id=\"currency\">
                        <option value=\"USD\" selected>USD</option>
                        <option value=\"EUR\">EUR</option>
                        <option value=\"GBP\">GBP</option>
                        <option value=\"RUB\">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"social_footer\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 958
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/js/common_scripts_min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 959
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/js/functions.js"), "html", null, true);
        echo "\"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src=\"";
        // line 962
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/rs-plugin/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/js/revolution_func.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_17ad30106d97df83978376c43ec85a2914f0ee24c1ffb8070bb0960f184950bb->leave($__internal_17ad30106d97df83978376c43ec85a2914f0ee24c1ffb8070bb0960f184950bb_prof);

        
        $__internal_0c9d906bc00c2161268532b8355db056b0e17897a8f2cf7668085d417dd35233->leave($__internal_0c9d906bc00c2161268532b8355db056b0e17897a8f2cf7668085d417dd35233_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e266b43790450dc0cacb57e7c4c5d8fd775dad1fff772a51087421b3f3ba4bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e266b43790450dc0cacb57e7c4c5d8fd775dad1fff772a51087421b3f3ba4bb0->enter($__internal_e266b43790450dc0cacb57e7c4c5d8fd775dad1fff772a51087421b3f3ba4bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4626d04166d19a766687fc9deaf636dedf5df1a6302e9ad7e6c46dc19192085c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4626d04166d19a766687fc9deaf636dedf5df1a6302e9ad7e6c46dc19192085c->enter($__internal_4626d04166d19a766687fc9deaf636dedf5df1a6302e9ad7e6c46dc19192085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4626d04166d19a766687fc9deaf636dedf5df1a6302e9ad7e6c46dc19192085c->leave($__internal_4626d04166d19a766687fc9deaf636dedf5df1a6302e9ad7e6c46dc19192085c_prof);

        
        $__internal_e266b43790450dc0cacb57e7c4c5d8fd775dad1fff772a51087421b3f3ba4bb0->leave($__internal_e266b43790450dc0cacb57e7c4c5d8fd775dad1fff772a51087421b3f3ba4bb0_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00b3c8a3e2d8c6b263df189b113e661f2c0e940bb90acbf1d2b2192d007775e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b3c8a3e2d8c6b263df189b113e661f2c0e940bb90acbf1d2b2192d007775e8->enter($__internal_00b3c8a3e2d8c6b263df189b113e661f2c0e940bb90acbf1d2b2192d007775e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2cece497ebddafca5ad36be5e1595688f65a1126895e6d1e62b25fb82bdc628e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cece497ebddafca5ad36be5e1595688f65a1126895e6d1e62b25fb82bdc628e->enter($__internal_2cece497ebddafca5ad36be5e1595688f65a1126895e6d1e62b25fb82bdc628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2cece497ebddafca5ad36be5e1595688f65a1126895e6d1e62b25fb82bdc628e->leave($__internal_2cece497ebddafca5ad36be5e1595688f65a1126895e6d1e62b25fb82bdc628e_prof);

        
        $__internal_00b3c8a3e2d8c6b263df189b113e661f2c0e940bb90acbf1d2b2192d007775e8->leave($__internal_00b3c8a3e2d8c6b263df189b113e661f2c0e940bb90acbf1d2b2192d007775e8_prof);

    }

    // line 305
    public function block_login($context, array $blocks = array())
    {
        $__internal_df48aed566db705ca227b3e95563d95661fec4e8a46062f6f7389973e44eaf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df48aed566db705ca227b3e95563d95661fec4e8a46062f6f7389973e44eaf3f->enter($__internal_df48aed566db705ca227b3e95563d95661fec4e8a46062f6f7389973e44eaf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_eb68e41db2c17889949c63d662bf4d87c0f8b66ea0cffe3fbbbaf977368d0631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb68e41db2c17889949c63d662bf4d87c0f8b66ea0cffe3fbbbaf977368d0631->enter($__internal_eb68e41db2c17889949c63d662bf4d87c0f8b66ea0cffe3fbbbaf977368d0631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        
        $__internal_eb68e41db2c17889949c63d662bf4d87c0f8b66ea0cffe3fbbbaf977368d0631->leave($__internal_eb68e41db2c17889949c63d662bf4d87c0f8b66ea0cffe3fbbbaf977368d0631_prof);

        
        $__internal_df48aed566db705ca227b3e95563d95661fec4e8a46062f6f7389973e44eaf3f->leave($__internal_df48aed566db705ca227b3e95563d95661fec4e8a46062f6f7389973e44eaf3f_prof);

    }

    // line 307
    public function block_index($context, array $blocks = array())
    {
        $__internal_806ae51539136df43b3a5eac8c5534db88ca9ab016eb529bb6e5e1378136068b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806ae51539136df43b3a5eac8c5534db88ca9ab016eb529bb6e5e1378136068b->enter($__internal_806ae51539136df43b3a5eac8c5534db88ca9ab016eb529bb6e5e1378136068b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        $__internal_dda39e5d1d686772daee6d8091ed2493194c21e61922dde724950164d1f69abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda39e5d1d686772daee6d8091ed2493194c21e61922dde724950164d1f69abf->enter($__internal_dda39e5d1d686772daee6d8091ed2493194c21e61922dde724950164d1f69abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        // line 308
        echo "<!-- Slider -->
<div class=\"tp-banner-container\">
    <div class=\"tp-banner\">
        <ul>
            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/slides_bg/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/cup.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">Affordable Paris Tours
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        City Tours / Tour Tickets / Tour Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/slides_bg/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/cup2.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">More than 100 tours available
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        Historic Buildings / Open Bus Tours / Museums Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/slides_bg/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/cup3.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">Discover fantastic places
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        We offer a variety of services and options</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/slides_bg/dummy.png"), "html", null, true);
        echo "\" alt=\"slidebg1\" data-lazyload=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/slides_bg/slide_5.jpg"), "html", null, true);
        echo "\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">CityTours provides tour guides
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        Visit museum with a dedicated tour guide</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>


        </ul>
        <div class=\"tp-bannertimer tp-bottom\"></div>
    </div>
</div>
<!-- End Slider -->

<div class=\"container margin_60\">

    <div class=\"main_title\">
        <h2>Paris <span>Top</span> Tours</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>
    ";
        // line 392
        $this->displayBlock('body', $context, $blocks);
        // line 393
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 394
        echo "    <div class=\"row\">

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Arc Triomphe</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_2.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-43\"></i>Churches<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Notredame</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_3.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"badge_save\">Save<strong>30%</strong></div>
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>48</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Versailles</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_4.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"badge_save\">Save<strong>20%</strong></div>
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-30\"></i>Walking tour<span class=\"price\"><sup>\$</sup>36</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Pompidue</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_14.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-28\"></i>Skyline tours<span class=\"price\"><sup>\$</sup>42</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Tour Eiffel</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/tour_box_5.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>40</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Pantheon</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class=\"text-center add_bottom_30\">
        <a href=\"all_tours_list.html\" class=\"btn_1 medium\"><i class=\"icon-eye-7\"></i>View all tours (144) </a>
    </p>

    <hr>

    <div class=\"main_title\">
        <h2>Paris <span>Top</span> Hotels</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

    <div class=\"row\">

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_1.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>7.5</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_2.jpg"), "html", null, true);
        echo "\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>9.0</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Mariott</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_3.jpg"), "html", null, true);
        echo "\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>9.5</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Lumiere</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_4.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>7.5</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Novelle</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_5.jpg"), "html", null, true);
        echo "\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>8.0</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Louvre</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel_6.jpg"), "html", null, true);
        echo "\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>8.5</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Concorde</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class=\"text-center nopadding\">
        <a href=\"all_hotels_list.html\" class=\"btn_1 medium\"><i class=\"icon-eye-7\"></i>View all hotels (70) </a>
    </p>
</div><!-- End container -->

<div class=\"white_bg\">
    <div class=\"container margin_60\">
        <div class=\"main_title\">
            <h2>Other <span>Popular</span> tours</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <div class=\"row add_bottom_45\">
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Tour Eiffel<span class=\"other_tours_price\">\$42</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Shopping tour<span class=\"other_tours_price\">\$35</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Versailles tour<span class=\"other_tours_price\">\$20</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Montparnasse skyline<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Pompidue<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Senna River tour<span class=\"other_tours_price\">\$32</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>Notredame<span class=\"other_tours_price\">\$48</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-4\"></i>Lafaiette<span class=\"other_tours_price\">\$55</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Trocadero<span class=\"other_tours_price\">\$76</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Open Bus tour<span class=\"other_tours_price\">\$55</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Louvre museum<span class=\"other_tours_price\">\$24</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Madlene Cathedral<span class=\"other_tours_price\">\$24</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-37\"></i>Montparnasse<span class=\"other_tours_price\">\$36</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>D'Orsey museum<span class=\"other_tours_price\">\$28</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Gioconda Louvre musuem<span class=\"other_tours_price\">\$44</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Tour Eiffel<span class=\"other_tours_price\">\$56</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Ladefanse<span class=\"other_tours_price\">\$16</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Notredame<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                </ul>
            </div>
        </div><!-- End row -->

        <div class=\"banner colored\">
            <h4>Discover our Top tours <span>from \$34</span></h4>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
            </p>
            <a href=\"single_tour.html\" class=\"btn_1 white\">Read more</a>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"";
        // line 769
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/bus.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Sightseen tour</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/transfer.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Transfer</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"";
        // line 787
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/guide.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Tour guide</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"";
        // line 796
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/hotel.jpg"), "html", null, true);
        echo "\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Hotel</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<section class=\"promo_full\">
    <div class=\"promo_full_wp magnific\">
        <div>
            <h3>BELONG ANYWHERE</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i class=\"icon-play-circled2-1\"></i></a>
        </div>
    </div>
</section><!-- End section -->

<div class=\"container margin_60\">

    <div class=\"main_title\">
        <h2>Some <span>good</span> reasons</h2>
        <p>
            Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
        </p>
    </div>

    <div class=\"row\">

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-41\"></i>
                <h3><span>+120</span> Premium tours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-30\"></i>
                <h3><span>+1000</span> Customers</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-57\"></i>
                <h3><span>H24 </span> Support</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

    </div><!--End row -->

    <hr>

    <div class=\"row\">
        <div class=\"col-md-8 col-sm-6 hidden-xs\">
            <img src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Assets/img/laptop.png"), "html", null, true);
        echo "\" alt=\"Laptop\" class=\"img-responsive laptop\">
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <h3><span>Get started</span> with CityTours</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
            </p>
            <ul class=\"list_order\">
                <li><span>1</span>Select your preferred tours</li>
                <li><span>2</span>Purchase tickets and options</li>
                <li><span>3</span>Pick them directly from your office</li>
            </ul>
            <a href=\"all_tour_list.html\" class=\"btn_1\">Start now</a>
        </div>
    </div><!-- End row -->

</div><!-- End container -->
";
        
        $__internal_dda39e5d1d686772daee6d8091ed2493194c21e61922dde724950164d1f69abf->leave($__internal_dda39e5d1d686772daee6d8091ed2493194c21e61922dde724950164d1f69abf_prof);

        
        $__internal_806ae51539136df43b3a5eac8c5534db88ca9ab016eb529bb6e5e1378136068b->leave($__internal_806ae51539136df43b3a5eac8c5534db88ca9ab016eb529bb6e5e1378136068b_prof);

    }

    // line 392
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f732593ab27489ebf9011686311346b8044cc4efca8266cf3e2045ff464c0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f732593ab27489ebf9011686311346b8044cc4efca8266cf3e2045ff464c0d1->enter($__internal_7f732593ab27489ebf9011686311346b8044cc4efca8266cf3e2045ff464c0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b98fbcfd9aa71e0b1334e9ab914a54452a25b99f0905ccab1ae63e6cfee6527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b98fbcfd9aa71e0b1334e9ab914a54452a25b99f0905ccab1ae63e6cfee6527->enter($__internal_7b98fbcfd9aa71e0b1334e9ab914a54452a25b99f0905ccab1ae63e6cfee6527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b98fbcfd9aa71e0b1334e9ab914a54452a25b99f0905ccab1ae63e6cfee6527->leave($__internal_7b98fbcfd9aa71e0b1334e9ab914a54452a25b99f0905ccab1ae63e6cfee6527_prof);

        
        $__internal_7f732593ab27489ebf9011686311346b8044cc4efca8266cf3e2045ff464c0d1->leave($__internal_7f732593ab27489ebf9011686311346b8044cc4efca8266cf3e2045ff464c0d1_prof);

    }

    // line 393
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e01ef3f2b18d12e533677855482323f6e8474d36776d1e9fc7c4133252c83f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e01ef3f2b18d12e533677855482323f6e8474d36776d1e9fc7c4133252c83f5->enter($__internal_2e01ef3f2b18d12e533677855482323f6e8474d36776d1e9fc7c4133252c83f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27cbd99cf19c88b7d08c3cb4e67584b51ecf651dfb33ad2c197023b1b528a781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cbd99cf19c88b7d08c3cb4e67584b51ecf651dfb33ad2c197023b1b528a781->enter($__internal_27cbd99cf19c88b7d08c3cb4e67584b51ecf651dfb33ad2c197023b1b528a781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27cbd99cf19c88b7d08c3cb4e67584b51ecf651dfb33ad2c197023b1b528a781->leave($__internal_27cbd99cf19c88b7d08c3cb4e67584b51ecf651dfb33ad2c197023b1b528a781_prof);

        
        $__internal_2e01ef3f2b18d12e533677855482323f6e8474d36776d1e9fc7c4133252c83f5->leave($__internal_2e01ef3f2b18d12e533677855482323f6e8474d36776d1e9fc7c4133252c83f5_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1262 => 393,  1245 => 392,  1217 => 869,  1141 => 796,  1129 => 787,  1117 => 778,  1105 => 769,  1008 => 675,  981 => 651,  954 => 627,  927 => 603,  900 => 579,  873 => 555,  833 => 518,  807 => 495,  780 => 471,  753 => 447,  727 => 424,  701 => 401,  692 => 394,  689 => 393,  687 => 392,  655 => 365,  633 => 348,  611 => 331,  590 => 315,  581 => 308,  572 => 307,  555 => 305,  538 => 23,  520 => 13,  504 => 964,  500 => 963,  496 => 962,  490 => 959,  486 => 958,  482 => 957,  410 => 887,  408 => 307,  406 => 305,  400 => 301,  397 => 300,  378 => 284,  369 => 278,  360 => 272,  183 => 98,  177 => 94,  175 => 93,  159 => 79,  145 => 70,  142 => 69,  135 => 65,  131 => 64,  127 => 63,  124 => 62,  122 => 61,  91 => 33,  87 => 32,  75 => 24,  73 => 23,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  45 => 13,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]><html class=\"ie ie9\"> <![endif]-->
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"description\" content=\"Citytours - Premium site template for city tours agencies, transfers and tickets.\">
    <meta name=\"author\" content=\"Ansonika\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Favicons-->
    <link rel=\"shortcut icon\" href=\"{{ asset('Assets/img/favicon.ico')}}\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" href=\"{{ asset('Assets/img/apple-touch-icon-57x57-precomposed.png')}}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"72x72\" href=\"{{ asset('Assets/img/apple-touch-icon-72x72-precomposed.png')}}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"114x114\" href=\"{{ asset('Assets/img/apple-touch-icon-114x114-precomposed.png') }}\">
    <link rel=\"apple-touch-icon\" type=\"image/x-icon\" sizes=\"144x144\" href=\"{{ asset('Assets/img/apple-touch-icon-144x144-precomposed.png') }}\">

    <!-- BASE CSS -->
    {% block stylesheets %}{% endblock %}
    <link href=\"{{ asset('Assets/css/base.css') }}\" rel=\"stylesheet\">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!-- REVOLUTION SLIDER CSS -->
    <link href=\"{{ asset('Assets/rs-plugin/css/settings.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Assets/css/extralayers.css') }}\" rel=\"stylesheet\">

</head>

<body>
<div id=\"preloader\">
    <div class=\"sk-spinner sk-spinner-wave\">
        <div class=\"sk-rect1\"></div>
        <div class=\"sk-rect2\"></div>
        <div class=\"sk-rect3\"></div>
        <div class=\"sk-rect4\"></div>
        <div class=\"sk-rect5\"></div>
    </div>
</div>
<!-- End Preload -->

<div class=\"layer\"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    <div id=\"top_line\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\"><i class=\"icon-phone\"></i><strong>0045 043204434</strong></div>

                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <ul id=\"top_links\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <li>
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            </li>
                            {% else %}
                                <li>
                                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                                </li>
                                <li>
                                    <div class=\"dropdown dropdown-access\">
                                    <a href=\"/register\" >Register</a>
                                </div>
                                </li>

                        {% endif %}
                        <li><a href=\"wishlist.html\" id=\"wishlist_link\">Wishlist</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-3 col-xs-3\">
                <div id=\"logo_home\">
                    <h1><a href=\"index.html\" title=\"Cup Cake\">CupCake</a></h1>
                </div>
            </div>
            {% if app.user %}
            <nav class=\"col-md-9 col-sm-9 col-xs-9\">
                <a class=\"cmn-toggle-switch cmn-toggle-switch__htx open_close\" href=\"javascript:void(0);\"><span>Menu mobile</span></a>
                <div class=\"main-menu\">
                    <div id=\"header_menu\">
                        <img src=\"{{ asset('Assets/img/logo_sticky.png') }}\" width=\"160\" height=\"34\" alt=\"City tours\" data-retina=\"true\">
                    </div>
                    <a href=\"#\" class=\"open_close\" id=\"close_in\"><i class=\"icon_set_1_icon-77\"></i></a>
                    <ul>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" >Home</a>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Recipe<i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_tours_list.html\">All tours list</a></li>
                                <li><a href=\"all_tours_grid.html\">All tours grid</a></li>
                                <li><a href=\"all_tours_map_listing.html\">All tours map listing</a></li>
                                <li><a href=\"single_tour.html\">Single tour page</a></li>
                                <li><a href=\"single_tour_with_gallery.html\">Single tour with gallery</a></li>
                                <li><a href=\"javascript:void(0);\">Single tour fixed sidebar</a>
                                    <ul>
                                        <li><a href=\"single_tour_fixed_sidebar.html\">Single tour fixed sidebar</a></li>
                                        <li><a href=\"single_tour_with_gallery_fixed_sidebar.html\">Single tour 2 Fixed Sidebar</a></li>
                                        <li><a href=\"cart_fixed_sidebar.html\">Cart Fixed Sidebar</a></li>
                                        <li><a href=\"payment_fixed_sidebar.html\">Payment Fixed Sidebar</a></li>
                                        <li><a href=\"confirmation_fixed_sidebar.html\">Confirmation Fixed Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_tour_working_booking.php\">Single tour working booking</a></li>
                                <li><a href=\"cart.html\">Single tour cart</a></li>
                                <li><a href=\"payment.html\">Single tour booking</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Hotels <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"all_hotels_list.html\">All hotels list</a></li>
                                <li><a href=\"all_hotels_grid.html\">All hotels grid</a></li>
                                <li><a href=\"all_hotels_map_listing.html\">All hotels map listing</a></li>
                                <li><a href=\"single_hotel.html\">Single hotel page</a></li>
                                <li><a href=\"single_hotel_datepicker_adv.html\">Single hotel datepicker adv</a></li>
                                <li><a href=\"single_hotel_working_booking.php\">Single hotel working booking</a></li>
                                <li><a href=\"cart_hotel.html\">Cart hotel</a></li>
                                <li><a href=\"payment_hotel.html\">Booking hotel</a></li>
                                <li><a href=\"confirmation_hotel.html\">Confirmation hotel</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Transfers <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_transfer_list.html\">All transfers list</a></li>
                                <li><a href=\"all_transfer_grid.html\">All transfers grid</a></li>
                                <li><a href=\"single_transfer.html\">Single transfer page</a></li>
                                <li><a href=\"cart_transfer.html\">Cart transfers</a></li>
                                <li><a href=\"payment_transfer.html\">Booking transfers</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Restaurants <i class=\"icon-down-open-mini\"></i></a>
                            <ul>
                                <li><a href=\"all_restaurants_list.html\">All restaurants list</a></li>
                                <li><a href=\"all_restaurants_grid.html\">All restaurants grid</a></li>
                                <li><a href=\"all_restaurants_map_listing.html\">All restaurants map listing</a></li>
                                <li><a href=\"single_restaurant.html\">Single restaurant page</a></li>
                                <li><a href=\"payment_restaurant.html\">Booking restaurant</a></li>
                                <li><a href=\"confirmation_transfer.html\">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class=\"submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu\">Bonus <i class=\"icon-down-open-mini\"></i></a><ul>
                                <li><a href=\"javascript:void(0);\">Header styles</a>
                                    <ul>
                                        <li><a href=\"index.html\">Header default</a></li>
                                        <li><a href=\"header_2.html\">Header style 2</a></li>
                                        <li><a href=\"header_3.html\">Header style 3</a></li>
                                        <li><a href=\"header_4.html\">Header style 4</a></li>
                                        <li><a href=\"header_5.html\">Header style 5</a></li>
                                        <li><a href=\"header_6.html\">Header style 6</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"javascript:void(0);\">Footer styles</a>
                                    <ul>
                                        <li><a href=\"index.html\">Footer default</a></li>
                                        <li><a href=\"footer_2.html\">Footer style 2</a></li>
                                        <li><a href=\"footer_3.html\">Footer style 3</a></li>
                                        <li><a href=\"footer_4.html\">Footer style 4</a></li>
                                        <li><a href=\"footer_5.html\">Footer style 5</a></li>
                                        <li><a href=\"footer_6.html\">Footer style 6</a></li>
                                        <li><a href=\"footer_7.html\">Footer style 7</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"javascript:void(0);\">Shop</a>
                                    <ul>
                                        <li><a href=\"shop.html\">Shop</a></li>
                                        <li><a href=\"shop-single.html\">Shop single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shop cart</a></li>
                                        <li><a href=\"checkout.html\">Shop Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"single_hotel_contact.php\">Hotel page contact form</a></li>
                            </ul>
                        </li>
                        <li class=\"megamenu submenu\">
                            <a href=\"javascript:void(0);\" class=\"show-submenu-mega\">Pages<i class=\"icon-down-open-mini\"></i></a>
                            <div class=\"menu-wrapper\">
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"about.html\">About us</a></li>
                                        <li><a href=\"general_page.html\">General page</a></li>
                                        <li><a href=\"tourist_guide.html\">Tourist guide</a></li>
                                        <li><a href=\"wishlist.html\">Wishlist page</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"faq_2.html\">Faq smooth scroll</a></li>
                                        <li><a href=\"pricing_tables.html\">Pricing tables</a></li>
                                        <li><a href=\"gallery_3_columns.html\">Gallery 3 columns</a></li>
                                        <li><a href=\"gallery_4_columns.html\">Gallery 4 columns</a></li>
                                        <li><a href=\"grid_gallery_1.html\">Grid gallery</a></li>
                                        <li><a href=\"grid_gallery_2.html\">Grid gallery with filters</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Pages</h3>
                                    <ul>
                                        <li><a href=\"contact_us_1.html\">Contact us 1</a></li>
                                        <li><a href=\"contact_us_2.html\">Contact us 2</a></li>
                                        <li><a href=\"blog_right_sidebar.html\">Blog</a></li>
                                        <li><a href=\"blog.html\">Blog left sidebar</a></li>
                                        <li><a href=\"login.html\">Login</a></li>
                                        <li><a href=\"register.html\">Register</a></li>
                                        <li><a href=\"invoice.html\" target=\"_blank\">Invoice</a></li>
                                        <li><a href=\"404.html\">404 Error page</a></li>
                                        <li><a href=\"site_launch/index.html\">Site launch / Coming soon</a></li>
                                        <li><a href=\"timeline.html\">Tour timeline</a></li>
                                        <li><a href=\"page_with_map.html\"><i class=\"icon-map\"></i>  Full screen map</a></li>
                                    </ul>
                                </div>
                                <div class=\"col-md-4\">
                                    <h3>Elements</h3>
                                    <ul>
                                        <li><a href=\"footer_2.html\"><i class=\"icon-columns\"></i> Footer with working newsletter</a></li>
                                        <li><a href=\"footer_5.html\"><i class=\"icon-columns\"></i> Footer with Twitter feed</a></li>
                                        <li><a href=\"icon_pack_1.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 1 (1900)</a></li>
                                        <li><a href=\"icon_pack_2.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 2 (100)</a></li>
                                        <li><a href=\"icon_pack_3.html\"><i class=\"icon-inbox-alt\"></i> Icon pack 3 (30)</a></li>
                                        <li><a href=\"shortcodes.html\"><i class=\"icon-tools\"></i> Shortcodes</a></li>
                                        <li><a href=\"newsletter_template/newsletter.html\" target=\"blank\"><i class=\" icon-mail\"></i> Responsive email template</a></li>
                                        <li><a href=\"admin.html\"><i class=\"icon-cog-1\"></i>  Admin area</a></li>
                                        <li><a href=\"general_page.html\"><i class=\"icon-light-up\"></i>  Weather Forecast</a></li>
                                    </ul>
                                </div>
                            </div><!-- End menu-wrapper -->
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id=\"top_tools\">
                    <li>
                        <div class=\"dropdown dropdown-search\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-search\"></i></a>
                            <div class=\"dropdown-menu\">
                                <form>
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\" style=\"margin-left:0;\">
                                            <i class=\"icon-search\"></i>
                                            </button>
                                            </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class=\"dropdown dropdown-cart\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\" icon-basket-1\"></i>Cart (0) </a>
                            <ul class=\"dropdown-menu\" id=\"cart_items\">
                                <li>
                                    <div class=\"image\"><img src=\"{{ asset('Assets/img/thumb_cart_1.jpg') }}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Louvre museum</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"{{ asset('Assets/img/thumb_cart_2.jpg') }}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>2x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div class=\"image\"><img src=\"{{ asset('Assets/img/thumb_cart_3.jpg') }}\" alt=\"image\"></div>
                                    <strong>
                                        <a href=\"#\">Versailles tour</a>1x \$36.00 </strong>
                                    <a href=\"#\" class=\"action\"><i class=\"icon-trash\"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>\$120.00</span></div>
                                    <a href=\"cart.html\" class=\"button_drop\">Go to cart</a>
                                    <a href=\"payment.html\" class=\"button_drop outline\">Check out</a>
                                </li>
                            </ul>
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
            {% else %}
            {% endif %}
        </div>
    </div><!-- container -->
</header><!-- End Header -->

{% block login %}
{% endblock login %}
{% block index %}
<!-- Slider -->
<div class=\"tp-banner-container\">
    <div class=\"tp-banner\">
        <ul>
            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"{{    asset('Assets/img/slides_bg/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('Assets/img/cup.jpg') }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">Affordable Paris Tours
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        City Tours / Tour Tickets / Tour Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"{{ asset('Assets/img/slides_bg/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('Assets/img/cup2.jpg') }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">More than 100 tours available
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        Historic Buildings / Open Bus Tours / Museums Guides</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"{{ asset('Assets/img/slides_bg/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('Assets/img/cup3.jpg') }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">Discover fantastic places
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        We offer a variety of services and options</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>

            <!-- SLIDE  -->
            <li data-transition=\"fade\" data-slotamount=\"7\" data-masterspeed=\"500\" data-saveperformance=\"on\" data-title=\"Intro Slide\">
                <!-- MAIN IMAGE -->
                <img src=\"{{ asset('Assets/img/slides_bg/dummy.png') }}\" alt=\"slidebg1\" data-lazyload=\"{{ asset('Assets/img/slides_bg/slide_5.jpg') }}\" data-bgposition=\"center top\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\">
                <!-- LAYER NR. 1 -->
                <div class=\"tp-caption white_heavy_40 customin customout text-center text-uppercase\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"-20\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;\" data-customout=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"1000\" data-start=\"1700\" data-easing=\"Back.easeInOut\" data-endspeed=\"300\" style=\"z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;\">CityTours provides tour guides
                </div>
                <!-- LAYER NR. 2 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"15\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2600\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.05\" data-endelementdelay=\"0.1\" style=\"z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;\">
                    <div style=\"color:#ffffff; font-size:16px; text-transform:uppercase\">
                        Visit museum with a dedicated tour guide</div>
                </div>
                <!-- LAYER NR. 3 -->
                <div class=\"tp-caption customin tp-resizeme rs-parallaxlevel-0\" data-x=\"center\" data-y=\"center\" data-hoffset=\"0\" data-voffset=\"70\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;\" data-speed=\"500\" data-start=\"2900\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-linktoslide=\"next\" style=\"z-index: 12;\"><a href='all_tour_list.html' class=\"button_intro\">View tours</a> <a href='single_tour.html' class=\" button_intro outline\">Read more</a>
                </div>
            </li>


        </ul>
        <div class=\"tp-bannertimer tp-bottom\"></div>
    </div>
</div>
<!-- End Slider -->

<div class=\"container margin_60\">

    <div class=\"main_title\">
        <h2>Paris <span>Top</span> Tours</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <div class=\"row\">

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_1.jpg') }}\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Arc Triomphe</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_2.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-43\"></i>Churches<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Notredame</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_3.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"badge_save\">Save<strong>30%</strong></div>
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>48</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Versailles</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_4.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"badge_save\">Save<strong>20%</strong></div>
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-30\"></i>Walking tour<span class=\"price\"><sup>\$</sup>36</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Pompidue</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_14.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-28\"></i>Skyline tours<span class=\"price\"><sup>\$</sup>42</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Tour Eiffel</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"tour_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_tour.html\">
                        <img src=\"{{ asset('Assets/img/tour_box_5.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"short_info\">
                            <i class=\"icon_set_1_icon-44\"></i>Historic Buildings<span class=\"price\"><sup>\$</sup>40</span>
                        </div>
                    </a>
                </div>
                <div class=\"tour_title\">
                    <h3><strong>Pantheon</strong> tour</h3>
                    <div class=\"rating\">
                        <i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile voted\"></i><i class=\"icon-smile\"></i><small>(75)</small>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box tour -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class=\"text-center add_bottom_30\">
        <a href=\"all_tours_list.html\" class=\"btn_1 medium\"><i class=\"icon-eye-7\"></i>View all tours (144) </a>
    </p>

    <hr>

    <div class=\"main_title\">
        <h2>Paris <span>Top</span> Hotels</h2>
        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
    </div>

    <div class=\"row\">

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.1s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_1.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>7.5</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>59</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Park Hyatt</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3 popular\"><span>Popular</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_2.jpg') }}\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>9.0</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Mariott</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.3s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_3.jpg') }}\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>9.5</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Lumiere</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_4.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>7.5</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Novelle</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.5s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_5.jpg') }}\"  width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>8.0</span>Good</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>39</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Louvre</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"#\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

        <div class=\"col-md-4 col-sm-6 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"hotel_container\">
                <div class=\"ribbon_3\"><span>Top rated</span></div>
                <div class=\"img_container\">
                    <a href=\"single_hotel.html\">
                        <img src=\"{{ asset('Assets/img/hotel_6.jpg') }}\" width=\"800\" height=\"533\" class=\"img-responsive\" alt=\"image\">
                        <div class=\"score\"><span>8.5</span>Superb</div>
                        <div class=\"short_info hotel\">
                            From/Per night<span class=\"price\"><sup>\$</sup>45</span>
                        </div>
                    </a>
                </div>
                <div class=\"hotel_title\">
                    <h3><strong>Concorde</strong> Hotel</h3>
                    <div class=\"rating\">
                        <i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star voted\"></i><i class=\"icon-star-empty\"></i>
                    </div><!-- end rating -->
                    <div class=\"wishlist\">
                        <a class=\"tooltip_flip tooltip-effect-1\" href=\"javascript:void(0);\">+<span class=\"tooltip-content-flip\"><span class=\"tooltip-back\">Add to wishlist</span></span></a>
                    </div><!-- End wish list-->
                </div>
            </div><!-- End box -->
        </div><!-- End col-md-4 -->

    </div><!-- End row -->
    <p class=\"text-center nopadding\">
        <a href=\"all_hotels_list.html\" class=\"btn_1 medium\"><i class=\"icon-eye-7\"></i>View all hotels (70) </a>
    </p>
</div><!-- End container -->

<div class=\"white_bg\">
    <div class=\"container margin_60\">
        <div class=\"main_title\">
            <h2>Other <span>Popular</span> tours</h2>
            <p>
                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <div class=\"row add_bottom_45\">
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Tour Eiffel<span class=\"other_tours_price\">\$42</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Shopping tour<span class=\"other_tours_price\">\$35</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Versailles tour<span class=\"other_tours_price\">\$20</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Montparnasse skyline<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Pompidue<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Senna River tour<span class=\"other_tours_price\">\$32</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>Notredame<span class=\"other_tours_price\">\$48</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-4\"></i>Lafaiette<span class=\"other_tours_price\">\$55</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Trocadero<span class=\"other_tours_price\">\$76</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Open Bus tour<span class=\"other_tours_price\">\$55</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-30\"></i>Louvre museum<span class=\"other_tours_price\">\$24</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-3\"></i>Madlene Cathedral<span class=\"other_tours_price\">\$24</span></a>
                    </li>
                </ul>
            </div>
            <div class=\"col-md-4 other_tours\">
                <ul>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-37\"></i>Montparnasse<span class=\"other_tours_price\">\$36</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-1\"></i>D'Orsey museum<span class=\"other_tours_price\">\$28</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Gioconda Louvre musuem<span class=\"other_tours_price\">\$44</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Tour Eiffel<span class=\"other_tours_price\">\$56</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-50\"></i>Ladefanse<span class=\"other_tours_price\">\$16</span></a>
                    </li>
                    <li><a href=\"#\"><i class=\"icon_set_1_icon-44\"></i>Notredame<span class=\"other_tours_price\">\$26</span></a>
                    </li>
                </ul>
            </div>
        </div><!-- End row -->

        <div class=\"banner colored\">
            <h4>Discover our Top tours <span>from \$34</span></h4>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.
            </p>
            <a href=\"single_tour.html\" class=\"btn_1 white\">Read more</a>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"{{ asset('Assets/img/bus.jpg') }}\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Sightseen tour</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"{{ asset('Assets/img/transfer.jpg') }}\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Transfer</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"{{ asset('Assets/img/guide.jpg') }}\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Tour guide</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
            <div class=\"col-md-3 col-sm-6 text-center\">
                <p>
                    <a href=\"#\"><img src=\"{{ asset('Assets/img/hotel.jpg') }}\" alt=\"Pic\" class=\"img-responsive\"></a>
                </p>
                <h4><span>Hotel</span> booking</h4>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End white_bg -->

<section class=\"promo_full\">
    <div class=\"promo_full_wp magnific\">
        <div>
            <h3>BELONG ANYWHERE</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex.
            </p>
            <a href=\"https://www.youtube.com/watch?v=Zz5cu72Gv5Y\" class=\"video\"><i class=\"icon-play-circled2-1\"></i></a>
        </div>
    </div>
</section><!-- End section -->

<div class=\"container margin_60\">

    <div class=\"main_title\">
        <h2>Some <span>good</span> reasons</h2>
        <p>
            Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
        </p>
    </div>

    <div class=\"row\">

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.2s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-41\"></i>
                <h3><span>+120</span> Premium tours</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.4s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-30\"></i>
                <h3><span>+1000</span> Customers</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

        <div class=\"col-md-4 wow zoomIn\" data-wow-delay=\"0.6s\">
            <div class=\"feature_home\">
                <i class=\"icon_set_1_icon-57\"></i>
                <h3><span>H24 </span> Support</h3>
                <p>
                    Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
                </p>
                <a href=\"about.html\" class=\"btn_1 outline\">Read more</a>
            </div>
        </div>

    </div><!--End row -->

    <hr>

    <div class=\"row\">
        <div class=\"col-md-8 col-sm-6 hidden-xs\">
            <img src=\"{{ asset('Assets/img/laptop.png') }}\" alt=\"Laptop\" class=\"img-responsive laptop\">
        </div>
        <div class=\"col-md-4 col-sm-6\">
            <h3><span>Get started</span> with CityTours</h3>
            <p>
                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.
            </p>
            <ul class=\"list_order\">
                <li><span>1</span>Select your preferred tours</li>
                <li><span>2</span>Purchase tickets and options</li>
                <li><span>3</span>Pick them directly from your office</li>
            </ul>
            <a href=\"all_tour_list.html\" class=\"btn_1\">Start now</a>
        </div>
    </div><!-- End row -->

</div><!-- End container -->
{% endblock index %}
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-sm-3\">
                <h3>Need help?</h3>
                <a href=\"tel://004542344599\" id=\"phone\">+45 423 445 99</a>
                <a href=\"mailto:help@citytours.com\" id=\"email_footer\">help@citytours.com</a>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>About</h3>
                <ul>
                    <li><a href=\"#\">About us</a></li>
                    <li><a href=\"#\">FAQ</a></li>
                    <li><a href=\"#\">Login</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li><a href=\"#\">Terms and condition</a></li>
                </ul>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <h3>Discover</h3>
                <ul>
                    <li><a href=\"#\">Community blog</a></li>
                    <li><a href=\"#\">Tour guide</a></li>
                    <li><a href=\"#\">Wishlist</a></li>
                    <li><a href=\"#\">Gallery</a></li>
                </ul>
            </div>
            <div class=\"col-md-2 col-sm-3\">
                <h3>Settings</h3>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"lang\" id=\"lang\">
                        <option value=\"English\" selected>English</option>
                        <option value=\"French\">French</option>
                        <option value=\"Spanish\">Spanish</option>
                        <option value=\"Russian\">Russian</option>
                    </select>
                </div>
                <div class=\"styled-select\">
                    <select class=\"form-control\" name=\"currency\" id=\"currency\">
                        <option value=\"USD\" selected>USD</option>
                        <option value=\"EUR\">EUR</option>
                        <option value=\"GBP\">GBP</option>
                        <option value=\"RUB\">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"social_footer\">
                    <ul>
                        <li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-google\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-instagram\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-pinterest\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-vimeo\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-youtube-play\"></i></a></li>
                        <li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id=\"toTop\"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src=\"{{ asset('Assets/js/jquery-1.11.2.min.js') }}\"></script>
<script src=\"{{ asset('Assets/js/common_scripts_min.js') }}\"></script>
<script src=\"{{ asset('Assets/js/functions.js') }}\"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src=\"{{ asset('Assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}\"></script>
<script src=\"{{ asset('Assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}\"></script>
<script src=\"{{ asset('Assets/js/revolution_func.js') }}\"></script>


</body>

</html>", "template.html.twig", "C:\\Users\\Amine Sboui\\PhpstormProjects\\pidevWebGit\\pidevweb\\app\\Resources\\views\\template.html.twig");
    }
}
