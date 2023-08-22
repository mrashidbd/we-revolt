<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package We_Revolt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <meta name="keywords" content="Design Associates Limited" />
    <meta name="description" content="Top rated and leading architectural and interior design consultant in Bangladesh">
    <meta name="author" content="mrashid.me">

	<?php wp_head(); ?>
</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}" <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="body">
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'we-revolt' ); ?></a>
    <header id="header" class="header-transparent header-semi-transparent header-semi-transparent-light" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 1, 'stickySetTop': '1'}">
        <div class="header-body border-0">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo custom-header-logo">
                                <img class="logo" alt="Porto" width="123" height="48" src="img/demos/construction/logo.png">
                                <a href="demo-construction.html">
                                    <img class="logo-sticky" alt="Porto" width="123" height="48" src="img/demos/construction/logo-dark.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-3 order-lg-1">
                                <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse px-3-5">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li>
                                                <a class="nav-link active" href="demo-construction.html">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="demo-construction-company.html">
                                                    Company
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="nav-link dropdown-toggle" href="demo-construction-services.html">
                                                    Services
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="demo-construction-services-detail.html">Pre-Construction</a></li>
                                                    <li><a class="dropdown-item" href="demo-construction-services-detail.html">General Construction</a></li>
                                                    <li><a class="dropdown-item" href="demo-construction-services-detail.html">Plumbing</a></li>
                                                    <li><a class="dropdown-item" href="demo-construction-services-detail.html">Painting</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="demo-construction-projects.html">
                                                    Projects
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="demo-construction-blog.html">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" href="demo-construction-contact.html">
                                                    Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border d-none d-sm-flex ms-3 order-1 order-lg-2">
                                <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-medium ms-0">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-sm-show-border ms-3 ps-4 order-2 order-lg-3">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search">
                                        <i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                                <button class="btn" type="submit" aria-label="Search">
                                                    <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php //wp_nav_menu([
//    'theme_location' => 'menu-1',
//    'menu_id'        => 'primary-menu',
//]); ?>
