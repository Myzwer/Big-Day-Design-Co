<?php
/**
 * Template Name: Posts Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Big_Day_Design
 * @since 1.0.0
 */

get_header(); ?>

<?php
// Get the post ID for use later in the page
$post_id = false;
if (is_home()) {
    $post_id = 48; // specif ID of home page
}
?>

    <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
            rgba(0, 0, 0, 0.45),
            rgba(0, 0, 0, 0.45)
            ), url('<?php the_field('blog_header', $post_id) ?>') center center; background-repeat: no-repeat; background-size: cover;
            height: 60vh;">
        <div class="content-middle text-white text-center">
            <h1 class="text-4xl mb-5">Big Day Blog</h1>
        </div>
    </div>


    <!-- Featured Post -->
    <div class="bg-blue">
        <div class="grid grid-cols-12 pt-10">
<!--            <div class="col-span-12 text-center mx-auto">
                <h3 class="text-2xl md:text-3xl mb-3 font-bold">Latest Post</h3>
            </div>-->
        </div>

        <div class="lg:max-w-6xl lg:text-center lg:mx-auto pt-10">
            <div class="grid grid-cols-12 gap-4 text-black bg-white shadow-xl rounded-xl featured-card">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number
                $posts_query = new WP_Query(array(
                    'posts_per_page' => 1,
                    'paged' => $paged // Pass the current page number to the query
                ));
                while ($posts_query->have_posts()) : $posts_query->the_post();
                    if ($paged === 1) { // Only display the featured post on the first page
                        ?>
                        <div class="col-span-12 lg:col-span-7 rounded-xl">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="col-span-12 lg:col-span-5 text-left p-3 relative">
                            <div class="content-middle-medium">
                                <h6 class="">
                                    <span class="font-bold">Category</span> - <span
                                            class="opacity-60"> <?php echo get_the_date(); ?> </span>
                                </h6>

                                <h2 class="text-3xl font-bold capitalize"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>
                                <?php the_excerpt('<p class = "blog-excerpt">', '</p>'); ?>

                                <a href="<?php echo get_permalink(); ?>">
                                    <button class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover my-4">
                                        Read More
                                    </button>
                                </a>
                            </div>
                        </div>
                    <?php }
                endwhile;
                wp_reset_query();
                ?>
            </div>

            <!-- All Other Posts -->
            <div class="grid grid-cols-12 gap-4 mt-6">
                <div class="col-span-12 text-center mx-auto">
                </div>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $per_page = 10; // How many posts do you want per page?
                $default_offset = 1; // How much offset do you want?

                if ($paged == 1) {
                    $offset = $default_offset;
                } else {
                    $offset = (($paged - 1) * $per_page) + $default_offset;
                }

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $per_page,
                    'order' => 'DESC',
                    'offset' => $offset,
                    'paged' => $paged
                );
                $loop = new WP_Query($args);

                // Start loop for all posts.
                while ($loop->have_posts()) :
                    $loop->the_post();
                    ?>

                    <div class="col-span-12 md:col-span-6 bg-white text-black blog-card rounded-xl shadow-xl">
                        <?php the_post_thumbnail(); ?>
                        <div class="p-4 text-left">
                            <h6 class=""><span class="font-bold">Category</span> - <span
                                        class="opacity-60"> <?php echo get_the_date(); ?> </span>
                            </h6>
                            <h2 class="text-2xl font-bold capitalize"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>
                            <?php the_excerpt('<p class = "blog-excerpt">', '</p>'); ?>
                            <a href="<?php echo get_permalink(); ?>">
                                <button class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover mt-4">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
            <div class="pb-10">
            <?php wpbeginner_numeric_posts_nav(); ?>
            </div>

        </div>
    </div>

<?php
get_footer();

