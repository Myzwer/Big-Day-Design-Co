<?php
/**
 * Template Name: Promo Landing Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Big_Day_Design
 * @since 1.0.0
 */

get_header(); ?>

    <video class="header-video" src="<?php the_field('background_video') ?> " autoplay loop playsinline muted></video>


        <div class=" md:max-w-5xl lg:max-w-2xl mx-auto text-center">
            <div class="grid grid-cols-12 p-5 rounded-t-xl">
                <div class="col-span-12 text-center rounded-t-xl">
                    <div class="grid grid-cols-12 mx-auto bg-white p-5 rounded-t-xl">
                        <div class="col-span-3">
                            <p class="font-bold text-3xl md:text-5xl body-font" id="days"></p>
                            <p class="font-bold text-xl md:text-2xl">Days</p>
                        </div>
                        <div class="col-span-3">
                            <p class="font-bold text-3xl md:text-5xl body-font" id="hours"></p>
                            <p class="font-bold text-xl md:text-2xl">Hours</p>
                        </div>
                        <div class="col-span-3">
                            <p class="font-bold text-3xl md:text-5xl body-font" id="minutes"></p>
                            <p class="font-bold text-xl md:text-2xl">Minutes</p>
                        </div>
                        <div class="col-span-3">
                            <p class="font-bold text-3xl md:text-5xl body-font" id="seconds"></p>
                            <p class="font-bold text-xl md:text-2xl">Seconds</p>
                        </div>
                    </div>

                    <div class="col-span-12 text-center relative">
                        <img src="<?php the_field('card_image') ?>" alt="">
                    </div>

                    <div class="form-width mx-auto  bg-blue rounded-b-xl">
                        <div class="rsvp-form px-5">
                            <div class=" mx-auto">
                                <h2 class="text-2xl font-bold uppercase body-font text-black pt-5">Want a free wedding
                                    website?</h2>
                                <p class="pb-5 text-left">Ready to impress your guests with a beautiful wedding website,
                                    complete with an
                                    RSVP feature? Enter for a chance to win a wedding website from Big Day Design,
                                    valued at $1000, and take one big item off your wedding planning checklist! Our
                                    websites are guaranteed to impress your guests. Don't miss this opportunity to skip
                                    the website planning and get back to the wedding planning!</p>

                                <div class="text-left">
                                    <?php if (have_posts()) : while (have_posts()) : the_post();
                                        the_content();
                                    endwhile;
                                    else: ?>
                                        <p>Sorry, no posts matched your criteria.</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<?php get_footer();