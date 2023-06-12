<?php
/**
 * Template Name: Form Confirmation
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Big_Day_Design
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-6 text-center">
            <div class="md:text-left md:mx-10">

                <p class="mt-10"><?php the_field('top_title'); ?></p>
                <h1 class="uppercase text-2xl md:text-3xl md:mb-5"><?php the_field('middle_title'); ?></h1>
                <p><?php the_field('bottom_title'); ?></p>
                <div class="my-10">
                    <a href = "/" class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                        Back to Homepage
                    </a>
                </div>
            </div>
        </div>

        <div class="col-span-12 md:col-span-6">
            <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
				  rgba(0, 0, 0, 0.45),
				  rgba(0, 0, 0, 0.45)
				), url('<?php the_field('side_image'); ?>') center center;
				 height: 80vh;">
            </div>
        </div>
    </div>

<?php get_footer();
