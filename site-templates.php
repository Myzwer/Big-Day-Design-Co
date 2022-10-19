<?php
/**
 * Template Name: The Templates
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
            <h1 class="text-4xl mb-7 px-2">Know exactly what you are getting</h1>
            <a href="/contact"
               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                Schedule My Free Consultation
            </a>
        </div>
    </div>

    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-6">
                    <div class="text-center md:py-5 font-bold uppercase">
                        <img class = "shadow-lg rounded-xl" src="<?php the_field('template_image') ?> " alt="Template Images">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:ml-10 md:mt-5">

                    <div class="pb-5 font-bold">
                        <h2 class="text-2xl text-left uppercase pb-3">3 elegant options, with all the features you want and none you don’t.</h2>
                        <ul class="list-disc pl-5">
                            <li>All 3 templates are available to you for free</li>
                            <li>Pick and choose the pages you want</li>
                            <li>Templates are custom for my clients, no one else has these</li>
                        </ul>
                    </div>
                    <a href="/contact"
                       class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                        Start the Process
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
