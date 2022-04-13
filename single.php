<?php

get_header();

/** ARTICLES **/
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <!-- post content-->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="container p-6">

                <div class="flex justify-center">

                    <div class="lg:w-3/4">

                        <div class="post-detail">
                            <h3 class="post-title font-bold text-3xl mb-4"><?php the_title() ?></h3>

                            <div class="post-info flex items-center">
                                <div class="img-fake rounded-full bg-gray-400 w-12 h-12 mr-5"></div>
                                <div>
                                    <a class="post-author block">By <?php echo get_the_author() ?></a>
                                    <time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="post-date text-sm text-gray-600"><?php the_date() ?></time>
                                </div>
                            </div>

                        </div>

                        <article class="space-y-6 my-16 leading-relaxed">
                            <?php the_content(); ?>
                        </article>

                    </div>

                </div>

            </div>
        </article>

    <?php endwhile;
endif;
/** ARTICLES ENDS **/


get_footer();

?>
