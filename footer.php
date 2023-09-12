<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package We_Revolt
 */

$rightArrow = get_template_directory_uri() . '/front-end-assets/icons/arrow-right.svg';
$emailIcon = get_template_directory_uri() . '/front-end-assets/icons/email.svg';
$phoneIcon = get_template_directory_uri() . '/front-end-assets/icons/phone.svg';

?>


<footer id="footer" class="overflow-hidden border-0 m-0" style="background-image: url(<?php echo ASSETS . '/img/design-associates-footer-bg.jpg'; ?>); background-repeat: no-repeat; background-position: center bottom;">
    <div class="container pt-5">
        <div class="row pt-4 mb-5 gy-4">
            <div class="col-lg-2 align-self-center">
                <a href="/">
                    <img alt="Porto" class="img-fluid logo" width="123" height="48" src="<?php echo get_template_directory_uri() . '/front-end-assets/img/Design-Associates-Logo.png'; ?>">
                </a>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Navigation</h4>
                <ul class="list list-unstyled columns-lg-2">
                    <li>
                        <a href="demo-construction.html" class="text-color-hover-primary">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="demo-construction-company.html" class="text-color-hover-primary">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="demo-construction-services.html" class="text-color-hover-primary">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="demo-construction-projects.html" class="text-color-hover-primary">
                            Projects
                        </a>
                    </li>
                    <li>
                        <a href="demo-construction-blog.html" class="text-color-hover-primary">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="demo-construction-contact.html" class="text-color-hover-primary">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5">
                <h4 class="text-color-dark font-weight-bold mb-4-5">Newsletter</h4>
                <div class="newsletter">
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mb-4-5">
                        <div class="input-group">
                            <input class="form-control border-0" placeholder="Email Address..." name="newsletterEmail" id="newsletterEmail" type="email">
                            <button class="btn btn-primary px-3" type="submit">
                                <img width="27" height="27" src="<?php echo $rightArrow; ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" style="width: 27px;" />
                            </button>
                        </div>
                    </form>
                </div>
                <ul class="list list-unstyled list-inline">
                    <li class="list-inline-item d-inline-flex align-items-center">
                        <img width="23" height="23" src="<?php echo $phoneIcon; ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                        <a href="tel:0123456789" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">(800) 123-4567</a>
                    </li>
                    <li class="list-inline-item d-inline-flex align-items-center ms-0 ms-sm-4 ms-lg-1 ms-xl-4">
                        <img width="23" height="23" src="<?php echo $emailIcon; ?>" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                        <a href="mailto:0123456789" class="text-decoration-none text-color-dark text-color-hover-primary font-weight-bold text-3-5 ms-2">porto@construction.com</a>
                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="footer-copyright bg-transparent pb-5 mt-5-5">
            <div class="row pb-5">
                <div class="col text-center mb-5">
                    <p class="text-color-grey text-3 mb-3">Porto Construction © 2023. All Rights Reserved. </p>
                    <ul class="footer-social-icons social-icons social-icons-clean social-icons-medium mb-5">
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram text-4"></i></a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-4"></i></a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-4"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="position-absolute left-100pct transform3dx-n50 top-0 d-none d-lg-block">
        <div class="appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-appear-animation-duration="1500ms">
            <div class="custom-square-1 custom-square-1-big bg-dark mt-0 mb-5 me-5"></div>
        </div>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
