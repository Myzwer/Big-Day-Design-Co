<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Wordpack Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Big_Day_Design
 * @since 1.0.0
 */

get_header(); ?>

    <video class="header-video" src="<?php the_field('header_video') ?> " autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <div class="head-container text-white">
            <h2 class="text-2xl font-bold uppercase body-font">Big Day Design</h2>
            <h1 class="text-4xl mb-7 px-2">Plan your wedding, not your website.</h1>
            <a href="/contact"
               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                Start the Process
            </a>
        </div>
    </div>

    <div class="bg-purple-gradient text-white">
        <div class="grid grid-cols-12 gap-4 py-5 md:py-0">
            <div class="col-span-12 md:col-span-4 md:border-r-2">
                <div class="text-center md:py-5 font-bold uppercase">
                    Elegant Wedding Website design
                </div>
            </div>

            <div class="col-span-12 md:hidden">
                <hr>
            </div>

            <div class="col-span-12 md:col-span-4 md:border-r-2">
                <div class="text-center md:py-5 font-bold uppercase">
                    Only one hour of your time required
                </div>
            </div>

            <div class="col-span-12 md:hidden">
                <hr>
            </div>

            <div class="col-span-12 md:col-span-4">
                <div class="text-center md:py-5 font-bold uppercase">
                    3 unique templates to choose from
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 text-center">
                    <h2 class="text-3xl uppercase pb-3">Got <span class = "text-rose font-bold">big</span> website plans but <span class = "text-rose font-bold">small</span> time?</h2>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <div class="text-center md:py-5 font-bold uppercase">
                        <img src="<?php the_field('template_image') ?> " alt="Template Images">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:ml-10 md:mt-20">
                    <div class="pb-5 font-bold">
                        <ul class="list-disc pl-5">
                            <li>Don't waste hours making a wedding website yourself</li>
                            <li>Get a custom website with all the bells and whistles</li>
                            <li>Only spend an hour filling out a fun form</li>
                            <li>Enjoy an informative, useful website without the hassle</li>
                            <li>We handle the heavy lifting so you don't have to</li>
                            <li>Say goodbye to boring code and hello to more free time with your Fiance</li>
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

    <div class="bg-rose-gradient text-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('waves_background') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <h2 class="capitalize text-3xl font-bold text-center text-white py-5">A perfect Wedding website
                            made
                            for you</h2>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl" style="background: linear-gradient(
                                rgba(0, 0, 0, 0.0),
                                rgba(0, 0, 0, 0.0)
                                ), url('<?php the_field('card_image_1') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <div class="bg-blue-gradient rounded-b-xl shadow-xl frontpage-card text-black">
                            <div class="p-5">
                                <h4 class="capitalize font-bold text-xl text-center">3 Templates to Choose from</h4>
                                <p class="py-3">All templates are free for you to choose from, and you know exactly what
                                    you’re getting
                                    when you pick one!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-4">
                        <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl" style="background: linear-gradient(
                                rgba(0, 0, 0, 0.0),
                                rgba(0, 0, 0, 0.0)
                                ), url('<?php the_field('card_image_2') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <div class="bg-blue-gradient rounded-b-xl shadow-xl frontpage-card text-black">
                            <div class="p-5">
                                <h4 class="capitalize font-bold text-xl text-center">1 hour of your time</h4>
                                <p class="py-3">Our goal is to give you the best site possible for the minimum amount of
                                    your
                                    time. The whole process only takes an hour.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-4 text-charcoal">
                        <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl" style="background: linear-gradient(
                                rgba(0, 0, 0, 0.0),
                                rgba(0, 0, 0, 0.0)
                                ), url('<?php the_field('card_image_3') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                        </div>
                        <div class="bg-blue-gradient rounded-b-xl shadow-xl frontpage-card text-charcoal">
                            <div class="p-5">
                                <h4 class="capitalize font-bold text-xl text-center">Flexible Options</h4>
                                <p class="py-3">Want bare bones? We’ve got it. Want RSVP functionality? Done. Want
                                    somewhere the fam can download wedding photos? Easy. Pick and choose what you like.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 text-center mt-10 mb-5">
                        <a href="/contact"
                           class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                            Start the Process
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.7)
            ), url('<?php the_field('pricing_image') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-20">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center text-white pb-5">Simple, Upfront Pricing</h2>
                </div>


                <div class="bg-blue-gradient col-span-12 md:col-span-4 rounded-xl px-5">
                    <h2 class="text-2xl text-left uppercase pb-3 font-bold text-center pt-4 px-2">All Tiers Include</h2>
                    <h3 class="text-lg text-left uppercase font-bold text-center body-font">website</h3>
                    <ul class="list-disc pl-5  mb-5">
                        <li>Choice of any tempate</li>
                        <li>Wedding Color Palette</li>
                        <li>Custom URL</li>
                        <li>Website hosting until your wedding day</li>
                    </ul>

                    <h3 class="text-lg text-left uppercase font-bold text-center body-font">Pages</h3>
                    <p class="text-sm text-center pb-2">Your Choice of...</p>
                    <ul class="list-disc pl-5 pb-5">
                        <li>Home</li>
                        <li>Bride / Groom Bio</li>
                        <li>Couple Bio</li>
                        <li>Wedding Party Info</li>
                        <li>Venue Details</li>
                        <li>Lodging</li>
                        <li>Schedule</li>
                        <li>Contact</li>
                        <li>Registry Directory</li>
                    </ul>
                </div>

                <div class="col-span-12 md:col-span-8">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <div class="bg-blue-gradient rounded-xl shadow-xl price-card relative">
                                <div class="content-middle-medium py-10 md:py-0">
                                    <h3 class="text-2xl text-left uppercase font-bold text-center">BASE</h3>
                                    <h4 class="text-lg text-left uppercase font-bold text-center body-font">$750</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12">
                            <div class="bg-rose-gradient rounded-xl shadow-xl price-card relative text-white">
                                <div class="content-middle-medium py-10 md:py-0">
                                    <h3 class="text-2xl text-left uppercase font-bold text-center">standard</h3>
                                    <h4 class="text-lg text-left uppercase font-bold text-center body-font">$1000</h4>
                                    <p class="text-center font-bold">Everything in Base + RSVP Feature</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12">
                            <div class="bg-blue-gradient rounded-xl shadow-xl price-card relative">
                                <div class="content-middle-medium py-10 md:py-0">
                                    <h3 class="text-2xl text-left uppercase font-bold text-center">extended</h3>
                                    <h4 class="text-lg text-left uppercase font-bold text-center body-font">$1250</h4>
                                    <p class="text-center font-bold">Everything in Standard + Post-wedding photo
                                        downloads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-gradient bg-no-repeat bg-scroll bg-cover">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center pb-5 text-black">Three Templates to Choose
                        From</h2>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_1') ?>" alt="Template 1">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="border-2 border-rose uppercase rounded-md font-bold shadow-lg text-rose px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_2') ?>" alt="Template 2">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="border-2 border-rose uppercase rounded-md font-bold shadow-lg text-rose px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_3') ?>" alt="Template 3">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="border-2 border-rose uppercase rounded-md font-bold shadow-lg text-rose px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-rose-gradient text-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('waves_background') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4 md:gap-10">
                    <div class="col-span-12">
                        <h2 class="capitalize text-3xl font-bold text-center">This is The Easiest Process of Your
                            Wedding</h2>
                    </div>

                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">1</h3>
                        <h4 class="capitalize text-2xl font-bold">Start the Process</h4>
                        <p>We'll send you everything you need, including a fun form to fill out. We're also here to answer any questions you have.</p>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">2</h3>
                        <h4 class="capitalize text-2xl font-bold">Send us your Answers</h4>
                        <p>Spend about an hour filling out the form, which gets us everything we need to make your site the best it can be.</p>

                    </div>

                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">3</h3>
                        <h4 class="capitalize text-2xl font-bold">Share your site</h4>
                        <p>Within 2 weeks, you'll have a custom URL that links to your beautiful website to share with your guests!</p>
                    </div>


                    <div class="col-span-12">
                        <h3 class="capitalize text-3xl font-bold text-center">Got an Hour to Spare?</h3>
                        <div class="my-5 text-center">
                            <a href="#"
                               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover">
                                Start The Process
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();