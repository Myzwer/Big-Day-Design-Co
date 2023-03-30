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

    <!-- Start Hero -->
    <video class="header-video" src="<?php the_field('header_video') ?> " autoplay loop playsinline muted></video>
    <div class="viewport-header">
        <div class="head-container text-white">
            <h2 class="text-2xl font-bold uppercase body-font">Big Day Design</h2>
            <h1 class="text-4xl mb-7 px-2 capitalize">Plan your wedding, not your website.</h1>
            <a href="/contact"
               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                Start the Process
            </a>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Start Hero Tags -->
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
    <!-- End Hero Tags -->

    <!-- Start Value Proposition -->
    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 text-center">
                    <h2 class="text-3xl pb-3">Got <span class="text-rose font-bold uppercase">big</span> website plans
                        but <span class="text-rose font-bold uppercase">small</span> time?</h2>
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
    <!-- End Value Proposition -->

    <!-- Start Process -->
    <div class="bg-rose-gradient text-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('waves_background') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4 md:gap-10">
                    <div class="col-span-12">
                        <h2 class="capitalize text-3xl font-bold text-center">This is The Easiest Process of Your
                            Entire Wedding</h2>
                    </div>

                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">1</h3>
                        <h4 class="capitalize text-2xl font-bold">Start the Process</h4>
                        <p>We'll send you everything you need, including a fun form to fill out. We're also here to
                            answer any questions you have.</p>
                    </div>
                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">2</h3>
                        <h4 class="capitalize text-2xl font-bold">Send us your Answers</h4>
                        <p>Spend about an hour filling out the form, which gets us everything we need to make your site
                            the best it can be.</p>

                    </div>

                    <div class="col-span-12 md:col-span-4">
                        <h3 class="capitalize text-3xl font-bold">3</h3>
                        <h4 class="capitalize text-2xl font-bold">Share your site</h4>
                        <p>Within 2 weeks, you'll have a custom URL that links to your beautiful website to share with
                            your guests!</p>
                    </div>


                    <div class="col-span-12">
                        <h3 class="capitalize text-2xl font-bold text-center">Got an Hour to Spare?</h3>
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
    <!-- End Process -->

    <!-- Start Features -->
    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10 md:py-20">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-3">
                    <h2 class="capitalize text-4xl md:text-5xl font-bold text-center md:text-left text-black ">All the
                        features you want, and none that you don't.</h2>
                </div>
                <div class="col-span-12 md:col-span-3">
                    <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl"
                         style="background: linear-gradient(
                                 rgba(0, 0, 0, 0.0),
                                 rgba(0, 0, 0, 0.0)
                                 ), url('<?php the_field('card_image_1') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="bg-rose-gradient text-white rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">3 Templates to Choose from</h4>
                            <p class="py-3">All templates are free for you to choose from, and you know exactly what
                                you’re getting
                                when you pick one!</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-3 text-charcoal">
                    <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl"
                         style="background: linear-gradient(
                                 rgba(0, 0, 0, 0.0),
                                 rgba(0, 0, 0, 0.0)
                                 ), url('<?php the_field('card_image_3') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="bg-rose-gradient text-white rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">Custom Website URL</h4>
                            <p class="py-3">Don't end up with a website no one can remember. All of our clients get a
                                free URL like "fairbankfairytale.com" with every site plan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-3">
                    <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl"
                         style="background: linear-gradient(
                                 rgba(0, 0, 0, 0.0),
                                 rgba(0, 0, 0, 0.0)
                                 ), url('<?php the_field('card_image_2') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                    </div>
                    <div class="bg-rose-gradient text-white rounded-b-xl shadow-xl frontpage-card">
                        <div class="p-5">
                            <h4 class="capitalize font-bold text-xl text-center">We can handle RSVP's too</h4>
                            <p class="py-3">Worried about RSVP's? Simply include your custom URL on your invitations,
                                and we'll take care of the rest, so you can focus on other aspects of your big day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->


    <div class="bg-purple-gradient bg-no-repeat bg-scroll bg-cover">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center pb-2 text-white">Three Templates to Choose
                        From</h2>
                    <h4 class="text-center text-white text-xl pb-5 capitalize">Three unique designs, all the same
                        content so you get the best website no matter what you pick. </h4>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_1') ?>" alt="Template 1">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize">Template 1: Veluthe</h4>
                        <a href="#"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_2') ?>" alt="Template 2">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize">Template 2: Alushor</h4>
                        <a href="#"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_3') ?>" alt="Template 3">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize">Template 3: Lersaat</h4>
                        <a href="#"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12">
                    <h3 class="capitalize text-2xl font-bold text-center text-white">Picked your favorite? Tell us about
                        it.</h3>
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

    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center">Frequently Asked Questions</h2>
                </div>

                <div class="col-span-12">
                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">Do I really need a wedding website?</h5>
                        <p>In 2023, having a website is becoming not only an expectation from guests, but a necessity to
                            keep your sanity in check. It's a great way to keep your guests informed about all the
                            details of your big day, from the date and location to travel information and registry
                            links. However, creating and maintaining a website can be a headache, especially when you're
                            already dealing with all the other aspects of wedding planning. That's where we come in - we
                            make the process quick and easy, so you can focus on what really matters.</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">The Knot and Squarespace are really cheap, why should I
                            use Big Day Design?</h5>
                        <p>While services like The Knot and Squarespace are affordable, they often require a significant
                            time investment from you. You'll need to figure out how to use the platform, design your
                            site, optimize images, set up RSVPs, and more. With Big Day Design, we handle all of that
                            for you, so you can focus on other aspects of your wedding planning. Plus, you'll get a
                            custom website URL that's easy to remember and looks great on your invitations and
                            save-the-dates.</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">What sets your website templates apart?</h5>
                        <p>Our templates are all custom-coded by our designer for Big Day Design, so you won't find them
                            anywhere else. They're also fully loaded with all the information and features you need,
                            from guest instructions to RSVP's, from venue maps to registry links. Plus, they're
                            optimized for every device, so your site will look great whether you're browsing on your
                            phone, computer, tablet or smart fridge.</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">How long does it take to get my site?</h5>
                        <p>Once you sign a contract with us and fill out our form, we'll get to work on your site right
                            away. Our standard turnaround time is about 2 weeks from the time we receive your completed
                            form. For more details on our process, you can check out our <a href="/the-process" class = "underline">process page.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();