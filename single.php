<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wordpack-theme
 */

get_header();
?>
<?php
// Get Author ID for profile photo
$get_author_id = get_the_author_meta('ID');
?>
    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.0),
            rgba(0, 0, 0, 0.0)
            ), url('<?php the_post_thumbnail_url(); ?>') center center;
            height: 40vh; background-repeat: no-repeat; background-size: cover;">
    </div>


    <div class="bg-blue">
        <div class="grid grid-cols-12 gap-4 pb-10 p-5">
            <div class="col-span-12 md:col-span-7 md:col-start-2">
                <h1 class="text-4xl text-black font-bold uppercase pt-10"><?php echo get_the_title(); ?></h1>
                <h3 class="font-bold mt-2 mb-5 text-xl"><?php echo get_the_date(); ?></h3>
                <div class="mb-5">
                <hr>
                </div>
                <div class="blog-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="next-prev grid grid-cols-12 bg-purple">
        <div class="col-span-12 text-center mx-auto my-5">
            <h3 class="text-2xl md:text-3xl font-bold text-white">Read More</h3>
        </div>

        <div class="col-span-12 md:col-span-6 md:col-start-4 text-center my-5">
            <div class="next-prev grid grid-cols-12">
                <div class="col-span-12 md:col-span-4 mb-10">
                    <?php $next = get_permalink(get_adjacent_post(false, '', false));
                    if ($next != get_permalink()) { ?>
                        <a href="<?php echo $next; ?>"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white mt-4">
                            Next Post
                        </a>
                    <?php } ?>
                </div>

                <div class="col-span-12 md:col-span-4 mb-10">
                    <a href="/blog"
                       class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white mt-4">
                        All Posts
                    </a>
                </div>


                <div class="col-span-12 md:col-span-4 mb-10">
                    <?php $prev = get_permalink(get_adjacent_post(false, '', true));
                    if ($prev != get_permalink()) { ?>
                        <a href="<?php echo $prev; ?>"
                           class="border-2 border-white uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white mt-4">
                            Previous Post
                        </a>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

<?php
get_footer();
