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
<?php get_footer();