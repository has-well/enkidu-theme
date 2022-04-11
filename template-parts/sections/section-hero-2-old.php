<section id="hero-section-2" class="px-6 md:px-10 p-4 lg:py-20 pb-4 pb-10 sm:pb-8">
    <div class="container pt-10 md:pt-0 flex-col sm:flex-row flex justify-between md:w-full">
        <div class="flex justify-right flex-col items-start w-full md:w-1/2 sm-bordered">
            <h2 class="text-4xl	text-blue-dark max-w-text-head-2 font-bold"><?php the_field('hero3'); ?></h2>
            <p class="md:w-full lg:w-4/5 mt-4 text-lg"><?php the_field('hero3-1'); ?></p>
        </div>
        <div class="flex justify-right flex-col items-start w-full md:w-1/2 lg:pl-0 md:pl-3 mt-10 sm:mt-0">
            <h2 class="text-3xl sm:text-4xl	text-blue-dark max-w-text-head-2 font-bold"><?php the_field('hero4'); ?></h2>
            <p class="md:w-full pl-2 lg:w-4/5 mt-4 text-lg"><?php the_field('hero4-1'); ?></p>
        </div>
    </div>
    <div class="container flex justify-center mt-8 lg:mt-32 lg:mb-8">
        <a href="<?php the_field('learn_more_link'); ?>" class="btn btn-yellow text-lg font-bold"><?php _e('Learn more', 'enkidu-v2'); ?></a>
    </div>
</section>
