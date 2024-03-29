<?php
/**
 * Template Name: Contact
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Big_Day_Design
 * @since 1.0.0
 */

get_header(); ?>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
            ), url('<?php the_field('header_image') ?>') center center; background-repeat: no-repeat; background-size: cover;
            height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-4xl mb-7 px-2"><?php the_field('title') ?></h1>
        </div>
    </div>

    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-3xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center pb-2"><?php the_field('subtitle') ?></h2>
                    <p class="text-xl font-bold text-center"><?php the_field('paragraph') ?></p>
                </div>

                <div class="col-span-12">
                    <!-- This will generate your form when you add it in WP Admin. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                    <p class = "opacity-60 text-xs">This site is protected by reCAPTCHA and the Google
                        <a class = "underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                        <a class = "underline" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
                </div>


            </div>
        </div>
    </div>


    <div class="bg-purple-gradient text-white">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center">Frequently Asked Questions</h2>
                </div>

                <div class="col-span-12">

                    <?php

                    // Check rows existexists.
                    if (have_rows('faq')):

                        // Loop through rows.
                        while (have_rows('faq')) : the_row();
                            ?>

                            <div class="py-5">
                                <h5 class="uppercase font-bold text-xl"><?php the_sub_field('question') ?></h5>
                                <p><?php the_sub_field('answer') ?></p>
                            </div>

                            <?php if (get_sub_field('button_link')): ?>
                                <div class="mb-10">
                                    <a href="<?php the_sub_field('button_link') ?>"
                                       class="bg-rose uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-hover hover:text-black mt-10">
                                        <?php the_sub_field('button_text') ?>
                                    </a>
                                </div>

                            <?php endif; ?>

                            <hr>

                        <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php get_footer();