<?php
/**
 * Template Name: Process
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
            <h1 class="text-4xl mb-7 px-2">The quickest process in your wedding planning</h1>
            <a href="/contact"
               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                Schedule My Free Consultation
            </a>
        </div>
    </div>

    <div class="bg-purple-gradient text-white">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center">A target run takes longer than this</h2>
                </div>

                <div class="col-span-12 md:col-span-3">
                    <h3 class="capitalize text-3xl font-bold">1</h3>
                    <h4 class="capitalize text-2xl font-bold">Get In Touch</h4>
                    <p>Schedule a free consultation with me and we’ll get a time set up to meet.</p>
                    <p class = "font-bold">YOUR time required: 5 Minutes</p>
                </div>
                <div class="col-span-12 md:col-span-3">
                    <h3 class="capitalize text-3xl font-bold">2</h3>
                    <h4 class="capitalize text-2xl font-bold">We'll Chat</h4>
                    <p>We’ll hop on a zoom call and talk about what you need from your new website.</p>
                    <p class = "font-bold">YOUR time required: 30 Minutes</p>
                </div>

                <div class="col-span-12 md:col-span-3">
                    <h3 class="capitalize text-3xl font-bold">3</h3>
                    <h4 class="capitalize text-2xl font-bold">Fill out the form</h4>
                    <p>Answer some fun questions about yourself and your future spouse to give me content for your site.</p>
                    <p class = "font-bold">YOUR time required: 25 Minutes</p>
                </div>
                <div class="col-span-12 md:col-span-3">
                    <h3 class="capitalize text-3xl font-bold">4</h3>
                    <h4 class="capitalize text-2xl font-bold">Get your website!</h4>
                    <p>I’ll spin up your site and send you a version for you to view and request edits, then send to all your guests!</p>
                </div>

                <div class="col-span-12">
                    <h3 class="capitalize text-3xl font-bold text-center">Got an Hour to Spare?</h3>
                    <div class="my-5 text-center">
                        <a href="#"
                           class="bg-rose uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            Start The Process
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
