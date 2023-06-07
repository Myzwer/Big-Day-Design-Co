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
            <h2 class="text-2xl font-bold uppercase body-font"><?php the_field('subtitle') ?> </h2>
            <h1 class="text-4xl mb-7 px-2 capitalize"><?php the_field('title') ?> </h1>

            <!-- Open Global Button -->
            <?php if (have_rows('primary_cta', 'option')): ?>
                <?php while (have_rows('primary_cta', 'option')): the_row(); ?>

                    <a href="<?php the_sub_field('button_link', 'option') ?> "
                       class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                        <?php the_sub_field('button_text', 'option') ?>
                    </a>

                <?php endwhile; ?>
            <?php endif; ?>
            <!-- Close Global Button -->

        </div>
    </div>
    <!-- END Hero -->

    <!-- Start Highlights -->
    <div class="bg-purple-gradient text-white">
        <div class="grid grid-cols-12 gap-4 py-5 md:py-0">
            <div class="col-span-12 md:col-span-4 md:border-r-2">
                <div class="text-center md:py-5 font-bold uppercase">
                    <?php the_field('highlight_1') ?>
                </div>
            </div>

            <div class="col-span-12 md:hidden">
                <hr>
            </div>

            <div class="col-span-12 md:col-span-4 md:border-r-2">
                <div class="text-center md:py-5 font-bold uppercase">
                    <?php the_field('highlight_2') ?>
                </div>
            </div>

            <div class="col-span-12 md:hidden">
                <hr>
            </div>

            <div class="col-span-12 md:col-span-4">
                <div class="text-center md:py-5 font-bold uppercase">
                    <?php the_field('highlight_3') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Highlights -->

    <!-- Start Hero Tags -->
    <div class="bg-rose text-white">
        <div class="grid grid-cols-12 py-10">
            <div class="col-span-12 text-center">
                <h4 class="text-2xl pb-3 font-bold md:inline md:pr-5"><?php the_field('promo_text') ?></h4>
                <a href="<?php the_field('promo_button_link') ?>"
                   class="md: inline bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                    <?php the_field('button_promo_text') ?>
                </a>
            </div>
        </div>
    </div>
    <!-- End Hero Tags -->

    <!-- Start Value Proposition -->
    <div class="bg-blue-gradient text-black md:px-10">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 text-center">
                    <h2 class="text-3xl pb-3"><?php the_field('explain_title') ?></h2>
                </div>

                <div class="col-span-12 md:col-span-6">
                    <div class="text-center md:py-5 font-bold uppercase">
                        <img src="<?php the_field('template_image') ?> " alt="Template Images">
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:ml-10 md:mt-20">
                    <div class="pb-5 font-bold">
                        <ul class="list-disc pl-5">
                            <?php if (have_rows('brandscript_reasons')): ?>
                                <?php while (have_rows('brandscript_reasons')): the_row(); ?>
                                    <li><?php the_sub_field('point') ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Open Global Button -->
                    <?php if (have_rows('primary_cta', 'option')): ?>
                        <?php while (have_rows('primary_cta', 'option')): the_row(); ?>

                            <a href="<?php the_sub_field('button_link', 'option') ?> "
                               class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                                <?php the_sub_field('button_text', 'option') ?>
                            </a>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Close Global Button -->
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
                ), url('<?php the_field('waves_background', 'option') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
            <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
                <div class="grid grid-cols-12 gap-4 md:gap-10">
                    <div class="col-span-12">
                        <h2 class="capitalize text-3xl font-bold text-center"><?php the_field('process_title') ?></h2>
                    </div>

                    <?php if (have_rows('process_steps')): ?>
                        <?php while (have_rows('process_steps')): the_row(); ?>
                            <div class="col-span-12 md:col-span-4">
                                <h3 class="capitalize text-3xl font-bold"><?php the_sub_field('number') ?></h3>
                                <h4 class="capitalize text-2xl font-bold"><?php the_sub_field('title') ?></h4>
                                <p><?php the_sub_field('description') ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="col-span-12">
                        <h3 class="capitalize text-2xl font-bold text-center">Got an Hour to Spare?</h3>
                        <div class="my-5 text-center">
                            <!-- Open Global Button -->
                            <?php if (have_rows('primary_cta', 'option')): ?>
                                <?php while (have_rows('primary_cta', 'option')): the_row(); ?>

                                    <a href="<?php the_sub_field('button_link', 'option') ?> "
                                       class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                                        <?php the_sub_field('button_text', 'option') ?>
                                    </a>

                                <?php endwhile; ?>
                            <?php endif; ?>
                            <!-- Close Global Button -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Start Features -->
    <div class="bg-blue-gradient text-black md:px-10">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10 md:py-20">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-3">
                    <h2 class="capitalize text-4xl md:text-5xl font-bold text-center md:text-left text-black ">
                        <?php the_field('card_large_title') ?>
                    </h2>
                </div>


                <?php if (have_rows('card')): ?>
                    <?php while (have_rows('card')): the_row(); ?>
                        <div class="col-span-12 md:col-span-3">
                            <div class="bg-no-repeat bg-scroll bg-cover relative card-height rounded-t-xl"
                                 style="background: linear-gradient(
                                         rgba(0, 0, 0, 0.0),
                                         rgba(0, 0, 0, 0.0)
                                         ), url('<?php the_sub_field('card_image') ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                            </div>
                            <div class="bg-rose-gradient text-white rounded-b-xl shadow-xl frontpage-card">
                                <div class="p-5">
                                    <h4 class="capitalize font-bold text-xl text-center"><?php the_sub_field('card_title') ?></h4>
                                    <p class="py-3"><?php the_sub_field('card_description') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End Features -->


    <div class="bg-purple-gradient md:px-10">
        <div class="mx-4 md:mx-10 lg:max-w-7xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4 md:gap-10">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center pb-2 text-white"><?php the_field('template_title') ?></h2>
                    <h4 class="text-center text-white text-xl pb-5 capitalize"><?php the_field('template_subtitle') ?></h4>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_1') ?>" alt="Template 1">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize"><?php the_field('template_1_title') ?></h4>
                        <a href="<?php the_field('template_1', 'option'); ?>" target="_blank"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_2') ?>" alt="Template 2">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize"><?php the_field('template_2_title') ?></h4>
                        <a href="<?php the_field('template_2', 'option'); ?>" target="_blank"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-4">
                    <img class="rounded-lg shadow-lg" src="<?php the_field('template_3') ?>" alt="Template 3">
                    <div class="my-5 text-center">
                        <h4 class="text-center text-white text-lg pb-5 capitalize"><?php the_field('template_3_title') ?></h4>
                        <a href="<?php the_field('template_3', 'option'); ?>" target="_blank"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> View Demo Site
                        </a>
                    </div>
                </div>

                <div class="col-span-12">
                    <h3 class="capitalize text-2xl font-bold text-center text-white"><?php the_field('cta_line') ?></h3>
                    <div class="my-5 text-center">
                        <!-- Open Global Button -->
                        <?php if (have_rows('primary_cta', 'option')): ?>
                            <?php while (have_rows('primary_cta', 'option')): the_row(); ?>

                                <a href="<?php the_sub_field('button_link', 'option') ?> "
                                   class="bg-rose uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-10">
                                    <?php the_sub_field('button_text', 'option') ?>
                                </a>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <!-- Close Global Button -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-gradient text-black">
        <div class="mx-4 md:mx-10 lg:max-w-5xl lg:mx-auto py-10">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <h2 class="capitalize text-3xl font-bold text-center"><?php the_field('faq_title') ?></h2>
                </div>


                <div class="col-span-12">

                    <?php if (have_rows('faq')): ?>
                        <?php while (have_rows('faq')): the_row(); ?>
                            <div class="py-5">
                                <h5 class="uppercase font-bold text-xl"><?php the_sub_field('question') ?></h5>
                                <p><?php the_sub_field('answer') ?></p>
                            </div>

                            <hr>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>


<?php
get_footer();