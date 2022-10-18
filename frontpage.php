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

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.0),
            rgba(0, 0, 0, 0.0)
            ), url('<?php the_field('header_image') ?>') center center; background-repeat: no-repeat; background-size: cover;
            height: 60vh;">
        <div class="content-middle text-black text-center">
            <h1 class="text-4xl mb-5">Plan your wedding, not your website.</h1>
            <a href="/contact"
               class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover mt-10">
                Start the Process
            </a>
        </div>
    </div>

    <div class="bg-peach">
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

    <div class="bg-silver">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-6">
                    <div class="text-center md:py-5 font-bold uppercase">
                        <img src="<?php the_field('template_image') ?> " alt="Template Images">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:ml-10 md:mt-5">

                    <div class="pb-5 font-bold">
                        <h2 class="text-2xl text-left uppercase pb-3">Want an awesome website without the
                            hassle?</h2>
                        <ul class="list-disc pl-5">
                            <li>Creating a website will take up your limited time</li>
                            <li>You’d rather spend that time planning your wedding</li>
                            <li>You need an effective, elegant website</li>
                            <li>Doing it yourself is going to cost you hours</li>
                            <li>All I need is 60 minutes of your time</li>
                        </ul>
                    </div>
                    <a href="/contact"
                       class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                        Start the Process
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-silver-dark">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center text-white py-5">A perfect Wedding website made
                        for you</h2>
                </div>
                <div class="col-span-12 md:col-span-4">
                    <div class="bg-peach rounded-t-xl shadow-xl">
                        <div class="text-center py-10">
                            <i class="fa-regular fa-images text-6xl"></i>
                        </div>
                    </div>
                    <div class="bg-tan rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">3 Templates to Choose from</h4>
                            <p class="py-3">All templates are free for you to choose from, and you know exactly what
                                you’re getting
                                when you pick one!</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="bg-peach rounded-t-xl shadow-xl">
                        <div class="text-center py-10">
                            <i class="fa-regular fa-images text-6xl"></i>
                        </div>
                    </div>
                    <div class="bg-tan rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">1 hour of your time</h4>
                            <p class="py-3">My goal is to give you the best site possible for the minimum amount of your
                                time. The whole process only takes an hour.</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <div class="bg-peach rounded-t-xl shadow-xl">
                        <div class="text-center py-10">
                            <i class="fa-regular fa-images text-6xl"></i>
                        </div>
                    </div>
                    <div class="bg-tan rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">Flexible Options</h4>
                            <p class="py-3">Want bare bones? I’ve got it. Want RSVP functionality? Done. Want somewhere
                                the fam can download wedding photos? Easy. Pick and choose what you like.</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 text-center mt-10 mb-5">
                    <a href="/contact"
                       class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                        Start the Process
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.7),
            rgba(0, 0, 0, 0.7)
            ), url('<?php the_field('pricing_image') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-20">
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center text-white pb-5">Simple, Upfront Pricing</h2>
                </div>


                <div class="col-span-12 md:col-span-4 bg-tan rounded-xl">
                    <h2 class="text-2xl text-left uppercase pb-3 font-bold text-center pt-4 px-2">All Tiers Include</h2>
                    <h3 class="text-lg text-left uppercase font-bold text-center body-font">website</h3>
                    <ul class="list-disc pl-5 list-inside mb-5">
                        <li>Choice of any tempate</li>
                        <li>Wedding Color Palette</li>
                        <li>Custom URL</li>
                        <li>Website hosting until your wedding day</li>
                    </ul>

                    <h3 class="text-lg text-left uppercase font-bold text-center body-font">Pages</h3>
                    <p class="text-sm text-center pb-2">Your Choice of...</p>
                    <ul class="list-disc pl-5 list-inside pb-5">
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
                            <div class="bg-tan rounded-xl shadow-xl price-card relative">
                                <div class="content-middle-medium py-10 md:py-0">
                                    <h3 class="text-2xl text-left uppercase font-bold text-center">BASE</h3>
                                    <h4 class="text-lg text-left uppercase font-bold text-center body-font">$750</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12">
                            <div class="bg-peach rounded-xl shadow-xl price-card relative">
                                <div class="content-middle-medium py-10 md:py-0">
                                    <h3 class="text-2xl text-left uppercase font-bold text-center">standard</h3>
                                    <h4 class="text-lg text-left uppercase font-bold text-center body-font">$1000</h4>
                                    <p class="text-center font-bold">Everything in Base + RSVP Feature</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-12">
                            <div class="bg-tan rounded-xl shadow-xl price-card relative">
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

    <div class="bg-no-repeat bg-scroll bg-cover bg-silver">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center text-black pb-5">Three Templates to Choose
                        From</h2>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_1') ?>" alt="Template 1">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_2') ?>" alt="Template 2">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_3') ?>" alt="Template 3">
                    <div class="my-10 text-center">
                        <a href="#"
                           class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-no-repeat bg-scroll bg-cover" style = "background-image: linear-gradient(#eae5df, #DFD4C7);">
        <div class="mx-4 md:mx-10 lg:max-w-2xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center text-black">This is The Easiest Process of Your Wedding</h2>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <h3 class="capitalize text-3xl font-bold text-black">1</h3>
                    <h4 class="capitalize text-2xl font-bold text-black">Get In Touch</h4>
                    <p>Schedule a free consultation with me and we’ll get a time set up to meet.</p>
                    <p class = "font-bold">YOUR time required: 5 Minutes</p>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <h3 class="capitalize text-3xl font-bold text-black">2</h3>
                    <h4 class="capitalize text-2xl font-bold text-black">We'll Chat</h4>
                    <p>We’ll hop on a zoom call and talk about what you need from your new website.</p>
                    <p class = "font-bold">YOUR time required: 30 Minutes</p>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <h3 class="capitalize text-3xl font-bold text-black">3</h3>
                    <h4 class="capitalize text-2xl font-bold text-black">Fill out the form</h4>
                    <p>Answer some fun questions about yourself and your future spouse to give me content for your site.</p>
                    <p class = "font-bold">YOUR time required: 25 Minutes</p>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <h3 class="capitalize text-3xl font-bold text-black">4</h3>
                    <h4 class="capitalize text-2xl font-bold text-black">Get your website!</h4>
                    <p>I’ll spin up your site and send you a version for you to view and request edits, then send to all your guests!</p>
                </div>

                <div class="col-span-12">
                    <h3 class="capitalize text-3xl font-bold text-center text-black">Got an Hour to Spare?</h3>
                    <div class="my-5 text-center">
                        <a href="#"
                           class="bg-peach uppercase rounded-md font-bold shadow-lg text-black px-8 py-3 transition duration-300 ease-in-out hover:bg-peach-hover">
                            Start The Process
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();