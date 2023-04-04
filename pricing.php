<?php
/**
 * Template Name: Pricing
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
            <h1 class="text-4xl mb-7 px-2 capitalize">Simple, Upfront Pricing</h1>
        </div>
    </div>

    <div class="bg-blue-gradient">
        <div class="grid grid-cols-12 gap-4 py-8 max-w-6xl text-center mx-auto">
            <div class="col-span-12 bg-rose-gradient text-white rounded-xl shadow-xl mx-5">
                <h2 class="text-5xl text-left uppercase pb-3 font-bold text-center pt-5 px-2">$750</h2>
                <p class="text-2xl text-left uppercase text-center body-font font-bold mb-5">That's it. No hidden
                    fees.</p>
                <hr class="mx-5">


                <div class="grid grid-cols-12 gap-4 text-left px-10">
                    <div class="col-span-12 md:col-span-6">
                        <h3 class="text-lg uppercase font-bold body-font pt-5">Website</h3>
                        <p>Choice of three professionally-designed templates</p>
                        <p>Use your own wedding color palette</p>
                        <p>We can write all the text for your site</p>
                        <p>We can use free to you stock photos where needed</p>
                        <p>Custom URL - Easy for guests (and you!) to remember</p>
                        <p>Website hosting until your wedding day</p>
                    </div>

                    <div class="col-span-12 md:col-span-6">
                        <h3 class="text-lg uppercase font-bold body-font pt-5">Pages</h3>
                        <p class="text-sm  pb-2 font-bold">Your Choice of...</p>
                        <p>Homepage</p>
                        <p>Meet the Groom</p>
                        <p>Meet the Bride</p>
                        <p>Meet the Couple</p>
                        <p>Meet the Bridesmaids</p>
                        <p>Meet the Groomsmen</p>
                        <p>The Venue</p>
                        <p>Schedule</p>
                        <p>Registry</p>
                        <p>Contact</p>
                    </div>

                    <div class="col-span-12">
                        <div class="my-10 text-center">
                            <a href="/contact"
                               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                                Start the Process
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-span-12 lg:col-span-6 bg-purple-gradient text-white rounded-xl shadow-xl relative mx-5">
                <h2 class="text-5xl text-left uppercase pb-3 font-bold text-center pt-5 px-2">+$250</h2>
                <p class="text-2xl text-left uppercase text-center body-font font-bold mb-5">RSVP Feature</p>
                <hr class="mx-5">
                <div class="text-left px-5">
                    <h3 class="text-lg text-left uppercase font-bold body-font pt-5">What you get</h3>
                    <p>Dedicated RSVP page</p>
                    <p>Customizable form - Unlimited Options</p>
                    <p>Simple form for guests</p>
                    <p>Track guest meal preference</p>
                    <p>Real-time email notifications</p>
                    <p>Full guest list at your fingertips</p>
                    <p>Print guest list for day of</p>
                    <p>Collect addresses for Thank You notes</p>

                    <div class="text-center my-10">
                        <a href="/add-ons"
                           class="border-2 border-white uppercase rounded-md font-bold text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white">
                            Show Me
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-6 bg-purple-gradient text-white rounded-xl shadow-xl relative mx-5">
                <h2 class="text-5xl text-left uppercase pb-3 font-bold text-center pt-5 px-2">+$250</h2>
                <p class="text-2xl text-left uppercase text-center body-font font-bold mb-5">Photo Downloader</p>
                <hr class="mx-5">
                <div class="text-left px-5">
                    <h3 class="text-lg text-left uppercase font-bold body-font pt-5">What you get</h3>
                    <p>Goes live after your wedding day</p>
                    <p>Homepage converts to have all your photos</p>
                    <p>We import them for you</p>
                    <p>Convenient download buttons for easy access</p>
                    <p>No permissions or Dropbox/Google Drive tutorials required</p>
                    <p>Custom URL ensures easy access for guests</p>
                    <p>Keep your site for 6 months after the wedding</p>
                    <p>Share with family and friends who couldn't attend</p>

                    <div class="text-center my-10">
                        <a href="/add-ons"
                           class="border-2 border-white uppercase rounded-md font-bold text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white">
                            Show Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();