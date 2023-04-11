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

    <div class="bg-rose-gradient">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
                rgba(0, 0, 0, 0.0),
                rgba(0, 0, 0, 0.0)
                ), url('<?php the_field('blog_header', $post_id) ?>') center center;  background-repeat: no-repeat; background-size: cover;">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number
            $posts_query = new WP_Query(array(
                'posts_per_page' => 1,
                'paged' => $paged // Pass the current page number to the query
            ));
            while ($posts_query->have_posts()) : $posts_query->the_post();
                if ($paged === 1) { // Only display the featured post on the first page
                    ?>
                    <div class="lg:max-w-5xl lg:text-center lg:mx-auto py-5 md:py-20 px-5">
                        <div class="grid grid-cols-12 text-black shadow-xl rounded-xl ">
                            <div class="col-span-12 lg:col-span-7 rounded-xl">
                                <div class="bg-no-repeat bg-scroll bg-cover relative featured-background "
                                     style="background: linear-gradient(
                                             rgba(0, 0, 0, 0.0),
                                             rgba(0, 0, 0, 0.0)
                                             ), url('<?php the_post_thumbnail_url(); ?>') center center;  background-repeat: no-repeat; background-size: cover;">
                                </div>
                            </div>

                            <div class="col-span-12 lg:col-span-5 text-left relative bg-blue featured-card">
                                <div class="content-middle-card px-5 py-10">
                                    <h6 class="">
                                        <span class="font-bold">Latest Post</span> - <span
                                                class="opacity-60"> <?php echo get_the_date(); ?> </span>
                                    </h6>

                                    <h2 class="text-3xl font-bold capitalize"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>

                                    <a href="<?php echo get_permalink(); ?>">
                                        <button class="bg-purple uppercase rounded-md font-bold shadow-lg text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-purple-hover my-4">
                                            Read More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } else {
                    ?>
                    <div class="lg:max-w-5xl lg:text-center lg:mx-auto py-5 md:py-20 px-5">
                        <div class="text-white">
                            <h1 class="text-4xl mb-7 px-2">Older Posts</h1>
                        </div>
                    </div>
                    <?php
                }
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>


    <div class="bg-blue">
        <div class="lg:max-w-5xl lg:text-center lg:mx-auto py-5 px-5">
            <div class="grid grid-cols-12 gap-4 mt-6 mb-5">
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

                    <div class="col-span-12 md:col-span-4 text-black blog-card mb-10">
                        <?php the_post_thumbnail(); ?>
                        <div class="pt-4 text-left">
                            <h6 class=""><span class="opacity-60"> <?php echo get_the_date(); ?> </span>
                            </h6>
                            <h2 class="text-2xl font-bold capitalize"><?php echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>'; ?></h2>
                            <a href="<?php echo get_permalink(); ?>">
                                <button class="border-2 border-rose uppercase rounded-md font-bold shadow-lg text-rose px-8 py-3 transition duration-300 ease-in-out hover:bg-rose-hover hover:text-white mt-4">
                                    Read More
                                </button>
                            </a>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
            <?php
            // Check if there are more than one page of posts
            if ($loop->max_num_pages > 1) {
                ?>
                <div class="pb-10">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

<?php
get_footer();

