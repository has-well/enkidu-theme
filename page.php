<?php get_header(); ?>
    <section class="main-page bg-blue-background h-40">
        <div class="container flex h-full items-center">
            <h1 class="text-3xl sm:text-4xl font-bold text-white max-w-text-head px-2"><?php the_title() ?></h1>
        </div>
    </section>
    <div class="container pt-6 pb-6 lg:pt-12 lg:pb-12">
        <?php the_content(); ?>
    </div>
<?php get_footer(); ?>