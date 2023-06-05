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
            <h1 class="text-5xl mb-2 px-2">Pick Your Template</h1>
            <h2 class="text-2xl  mb-5 font-bold uppercase body-font">Know exactly what you are getting</h2>
            <a href="/contact"
               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                Start The Process
            </a>
        </div>
    </div>

    <div class="bg-purple-gradient text-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('waves_background') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 md:ml-10 relative">
                        <div class="pb-5 font-bold md:text-center">
                            <div class="mb-8">
                                <h2 class="text-3xl uppercase pb-2 text-center">3 elegant options</h2>
                                <h4 class="text-xl uppercase pb-5 font-bold">All the features you want and none you
                                    don’t</h4>

                                <p>All 3 templates are available to you for free</p>
                                <p>Pick and choose the pages you want</p>
                                <p>Templates are custom for our clients, no one else has these</p>

                            </div>
                            <a href="/contact"
                               class="bg-rose uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                                Start the Process
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center">Imagine your guests reaction to your
                        site</h2>
                </div>

                <div class="col-span-12">
                    <div class="grid grid-cols-12 gap-4 md:gap-10">
                        <div class="col-span-12 md:col-span-6">
                            <img src="<?php the_field('template_1') ?>"
                                 alt="Template 1">
                        </div>
                        <div class="col-span-12 lg:col-span-6 relative">
                            <div class="content-middle-large">
                                <h4 class="capitalize text-2xl font-bold">Template 1: Veluthe</h4>
                                <ul class="list-disc pl-5  mb-5">
                                    <li>Means "Elegant"</li>
                                    <li>Simple and straightforward design that's easy to navigate</li>
                                    <li>Classic look and feel that's perfect for traditional weddings</li>
                                    <li>Mobile-friendly design that looks great on all devices</li>
                                    <li>Built with cutting edge web technology to ensure speed and reliability</li>
                                    <li>Uses the least photos of all templates, good for those who don't have a lot of photos</li>
                                    <li>Perfect for couples who want a clean, elegant, and timeless wedding website</li>
                                </ul>
                                <a href="https://fairbankfairytale.com/"
                                   target="_blank"
                                   class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:hidden">
                    <hr class="my-10">
                </div>

                <div class="col-span-12">
                    <div class="grid grid-cols-12 gap-4 md:gap-10">
                        <div class="col-span-12 md:col-span-6">
                            <img src="<?php the_field('template_2') ?>"
                                 alt="Template 1">
                        </div>
                        <div class="col-span-12 lg:col-span-6 relative">
                            <div class="content-middle-large">
                                <h4 class="capitalize text-2xl font-bold">Template 2: Alushor</h4>
                                <ul class="list-disc pl-5  mb-5">
                                    <li>Means "Waves"</li>
                                    <li>Fun and whimsical design with a lot of personality</li>
                                    <li>Unique and eye-catching blob-shaped images</li>
                                    <li>Playful wavy sections that add movement and interest to the design</li>
                                    <li>Built with cutting edge web technology to ensure speed and reliability</li>
                                    <li>Uses plenty of photos across the site</li>
                                    <li>Perfect for couples who want to showcase their fun and creative side</li>
                                </ul>
                                <a href="http://foreverafairbank.com/"
                                   target="_blank"
                                   class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:hidden">
                    <hr class="my-10">
                </div>

                <div class="col-span-12">
                    <div class="grid grid-cols-12 gap-4 md:gap-10">
                        <div class="col-span-12 md:col-span-6">
                            <img src="<?php the_field('template_3') ?>"
                                 alt="Template 3">
                        </div>
                        <div class="col-span-12 lg:col-span-6 relative">
                            <div class="content-middle-large">
                                <h4 class="capitalize text-2xl font-bold">Template 3: Lersaat</h4>
                                <ul class="list-disc pl-5 mb-5">
                                    <li>Means "Split"</li>
                                    <li>A modern and stylish design</li>
                                    <li>Large images create a visually striking and engaging experience</li>
                                    <li>Soft gradients add depth and dimension</li>
                                    <li>Built with cutting edge web technology to ensure speed and reliability</li>
                                    <li>The most photo heavy template of the bunch</li>
                                    <li>Perfect for couples who want a chic, contemporary website that showcases their personality and style</li>
                                </ul>
                                <a href="https://finallyafairbank.com/"
                                   target="_blank"
                                   class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bg-purple-gradient text-white">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 pb-10">
                    <h2 class="capitalize text-3xl font-bold text-center">Picked a template? You have more options!</h2>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <h3 class="text-xl uppercase pb-3 body-font text-center font-bold">Website</h3>
                    <ul class="list-disc pl-5">
                        <li>Choice of any template</li>
                        <li>Wedding Color Palette</li>
                        <li>Custom URL</li>
                        <li>Website hosting until your wedding day (up to 2 years)</li>
                    </ul>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <h3 class="text-xl uppercase body-font text-center font-bold">PAGES</h3>
                    <h3 class="text-lg pb-3 body-font text-center">Your Choice Of...</h3>
                    <ul class="list-disc pl-5">
                        <li>Home</li>
                        <li>Bride / Groom Bio</li>
                        <li>Couple Bio</li>
                        <li>Wedding Party Info</li>
                        <li>Venue Details</li>
                        <li>Lodging</li>
                        <li>Schedule</li>
                        <li>Contact</li>
                        <li>Registry</li>
                    </ul>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <h3 class="text-xl text-left uppercase pb-3 body-font text-center font-bold">Add Ons</h3>
                    <ul class="list-disc pl-5">
                        <li>RSVP
                            <ul class="list-disc pl-5">
                                <li>Online RSVP</li>
                                <li>Menu / Meal Preferences</li>
                                <li>Email Confirmations</li>
                                <li>Guest List Management</li>
                                <li>Custom Questions</li>
                                <li>Easy Export for Thank You Notes</li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="list-disc pl-5">
                        <li>Wedding Photo Downloads
                            <ul class="list-disc pl-5">
                                <li>Goes live after wedding</li>
                                <li>Lets your guests easily download your wedding photos</li>
                                <li>Avoid teaching relatives how to use Dropbox, Drive or something else that needs an app to use</li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

<?php get_footer();
