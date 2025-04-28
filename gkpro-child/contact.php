<?php
// Template Name: Contact
get_header();
?>

        <section class="our-courses-banner abt-banner">
            <div class="container">
                <div class="our-course-content">
                    <h1><?php the_field('contact_heading'); ?></h1>
                    <div class="banner-img">
                        <img src="<?php the_field('contact_image'); ?>" alt="">
                    </div>
                </div>
            </div>
            
        </section>

        <section class="get-in-touch">
            <div class="container">
                <div class="git-content">
                    <div class="git-header">
                        <h3><?php the_field('contact_detail_subheading'); ?></h3>
                        <h4><?php the_field('contact_detail_heading'); ?></h4>
                </div>

                        <div class="contact-form-div">
                        <?php echo do_shortcode(get_field('contact_form')); ?>

                            <!-- <form>
                                <div class="input-div">
                                    <label for="name" class="form-label">Your name<sup>*</sup></label>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <div class="input-div">
                                    <label for="number" class="form-label">Phone Number<sup>*</sup></label>
                                    <input type="tel" class="form-control" id="number" placeholder="Your Number">
                                </div>
                                <div class="input-div">
                                    <label for="email" class="form-label">Email<sup>*</sup></label>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email Address">
                                </div>
                                <div class="input-div">
                                    <label for="message" class="form-label">Your Message <sup>*</sup></label>
                                    <textarea class="form-control" id="message" rows="6" placeholder="Write Your Message"></textarea>
                                </div>
                                <button class="submit">Send Message</button>
                            </form> -->
                        </div>
                        <div class="contact-detail">
                            <h3><?php the_field('available_text'); ?></h3>
                            <ul>
                                <li><a href="tel:<?php the_field('whats_app_number'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg" alt=""> <?php the_field('whats_app_number'); ?></a></li>
                                <li><a href="tel:<?php the_field('number'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tele-icon.svg" alt=""><?php the_field('number'); ?></a></li>
                                <li><a href="mailto:<?php the_field('email_text'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail-icon.svg" alt=""><?php the_field('email_text'); ?></a></li>
                            </ul>
                        </div>
                </div>
            </div>
        </section>

<?php
get_footer();
?>