<?php
/**
 * Template Name: TOS
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

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
        rgba(0, 0, 0, 0.6),
        rgba(0, 0, 0, 0.6)
        ), url('<?php the_field('header_image') ?>') center center; background-repeat: no-repeat; background-size: cover;
        height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-4xl mb-7 px-2">Terms of Service</h1>
        </div>
    </div>


    <div class="m-4 md:m-10 lg:max-w-4xl lg:mx-auto privacy-policy wysiwyg">
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 p-5">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php get_footer();
