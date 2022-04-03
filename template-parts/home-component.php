<section id="hero-section" class="px-10 md:p-4 lg:p-10">
    <div class="container flex flex-col justify-between h-full custom">
        <div class="flex justify-right flex-col items-end">
            <h1 class="text-3xl sm:text-4xl font-bold text-white max-w-text-head"><?php the_field('hero1'); ?></h1>
        </div>
        <div class="flex justify-right flex-col items-end">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-dark max-w-text-head"><?php the_field('hero2'); ?></h2>
        </div>
    </div>
</section>

<section id="hero-section-2" class="px-6 md:px-10 p-4 lg:p-10 pb-4 pb-10 sm:pb-8 bg-blue">
    <div class="container pt-10 md:pt-0 flex-col sm:flex-row flex justify-between md:w-full lg:w-11/12">
        <div class="flex justify-right flex-col items-start w-full md:w-1/2 sm-bordered">
            <h2 class="text-3xl sm:text-4xl	text-white max-w-text-head-2 font-bold"><?php the_field('hero3'); ?></h2>
            <p class="text-white md:w-full lg:w-4/5 pt-8 text-lg font-bold"><?php the_field('hero3-1'); ?></p>
        </div>
        <div class="flex justify-right flex-col items-start w-full md:w-1/2 lg:pl-0 md:pl-3 mt-10 sm:mt-0">
            <h2 class="text-3xl sm:text-4xl	text-white max-w-text-head-2 font-bold"><?php the_field('hero4'); ?></h2>
            <p class="text-white md:w-full pl-2 lg:w-4/5 pt-8 text-lg font-bold"><?php the_field('hero4-1'); ?></p>
        </div>
    </div>
    <div class="container flex justify-center mt-8 lg:mt-32 lg:mb-8">
        <a href="<?php the_field('learn_more_link'); ?>" class="btn btn-yellow text-lg font-bold"><?php _e('Learn more', 'enkidu-v2'); ?></a>
    </div>
</section>

<?php get_template_part('template-parts/sections/section', 'project-for') ?>

<?php get_template_part('template-parts/sections/section', 'solution') ?>

<?php get_template_part('template-parts/sections/section', 'connected') ?>

<?php get_template_part('template-parts/sections/section', 'partners') ?>

