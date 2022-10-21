<?php
/**
 * Template Name: Contact
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
            <h1 class="text-4xl mb-7 px-2">You plan happily ever after. I've got it from here.</h1>
        </div>
    </div>

    <div class="bg-rose-gradient text-white">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('waves_background') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-3xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4 md:gap-10">
                    <div class="col-span-12">
                        <h2 class="capitalize text-3xl font-bold text-center">Let's Connect.</h2>
                    </div>

                    <div class="col-span-12">
                        <!-- This will generate your form when you add it in WP Admin. -->
                        <?php if (have_posts()) : while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
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
                        <h5 class="uppercase font-bold text-xl">How long until I get my website?</h5>
                        <p>After the initall call, you'll sign the contract and fill out the form. Unless you are told
                            otherwise during contract signing, <span class="font-bold"> plan on 2 weeks from when you hit submit on the form</span>
                            until you get your website.</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">Can I edit my website myself?</h5>
                        <p>After you are sent your website, there is a period in which you can request changes to any
                            text, colors, or images. Since you already know exactly what you are getting in your
                            template, I typically do not allow any visual changes to your site. It already looks great,
                            I promise!</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">Who else is using the templates?</h5>
                        <p>The templates are designed and built by me for my customers. No one else is using them or has
                            them, so they are unique to you! If another couple chooses the same template as you, then
                            those sites would look similar, but you won't find anything like this on Squarespace /
                            WordPress / The Knot / etc.</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">How does this form work?</h5>
                        <p>The form is designed to be as fun for you as possible. Your website needs content, and the
                            form helps me get the information I need without being difficult for you. There are plenty
                            of sections where it will ask if you want to write the text yourself, but every section has
                            options to answer questions and I'll write it for you!</p>
                    </div>

                    <hr>

                    <div class="py-5">
                        <h5 class="uppercase font-bold text-xl">We don't have many good photos of us :(</h5>
                        <p>Not to worry! I will use what photos you do have where appropriate, and fill in stock photos
                            where there are gaps.</p>
                    </div>

                </div>

                <div class="col-span-12 ">
                    <h5 class="uppercase font-bold text-xl pb-5">Still have questions?</h5>
                    <a href="mailto:josh@onefortyfivedesign.com"
                       class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                        Email me
                    </a>
                </div>


            </div>
        </div>
    </div>

<?php get_footer();