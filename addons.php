<?php
/**
 * Template Name: Add Ons
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
            <h1 class="text-4xl mb-7 px-2 capitalize">Make the wedding planning even easier</h1>
        </div>
    </div>



    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <div class="grid grid-cols-12 gap-4 md:gap-10">
                        <div class="col-span-12 md:col-span-6">
                            <img src="<?php the_field('rsvp') ?>"
                                 alt="Template 1">
                        </div>
                        <div class="col-span-12 lg:col-span-6 relative">
                            <div class="content-middle-large">
                                <h4 class="capitalize text-2xl font-bold">RSVP's are now a breeze</h4>
                                <ul class="list-disc pl-5  mb-5">
                                    <li>ZERO additional setup on your part, it's all part of the main form</li>
                                    <li>We create a microsite to manage your wedding RSVPs</li>
                                    <li>Simple guest form with customizable questions (like meal preferences, music
                                        suggestions,
                                        tips
                                        for the bride and groom, etc.)
                                    </li>
                                    <li>Receive real-time email notifications when guests RSVP (if you want)</li>
                                    <li>Admin portal to view RSVP list and manage guest count</li>
                                    <li>Export or print RSVP list for vendors or thank you notes</li>
                                </ul>
                               <!-- <a href="#"
                                   class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                                </a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-purple-gradient text-white">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <div class="grid grid-cols-12 gap-4 md:gap-10">
                        <div class="col-span-12 md:col-span-6">
                            <img src="<?php the_field('collage') ?>"
                                 alt="Template 1">
                        </div>
                        <div class="col-span-12 lg:col-span-6 relative">
                            <div class="content-middle-large">
                                <h4 class="capitalize text-2xl font-bold">Wedding Photo Downloader</h4>
                                <ul class="list-disc pl-5  mb-5">
                                    <li>Goes live after your big day and stays live for 6 months</li>
                                    <li>All wedding photos in one place on your website homepage</li>
                                    <li>Convenient download buttons for easy access to your wedding photos</li>
                                    <li>No need to hassle with permissions or teach guests how to use Dropbox or Google Drive</li>
                                    <li>Share your wedding photos easily with family and friends who couldn't attend</li>
                                    <li>Your custom URL ensures guests know where to find your wedding photos easily</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();
