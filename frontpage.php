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
                    Simple, Elegant Website designs
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
                            <li>Let's face it. A website will take up your limited time.</li>
                            <li>You’d rather spend that time planning your wedding</li>
                            <li>You want an effective, elegant website</li>
                            <li>Doing it yourself is going to cost you hours</li>
                            <li>You might not even like the end result</li>
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


<?php
get_footer();