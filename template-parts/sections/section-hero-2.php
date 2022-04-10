<section id="hero-section-2" class="px-6 md:px-10 py-14 lg:py-24 pb-4 pb-10 sm:pb-8">
    <div class="container">
        <div class="flex flex-wrap justify-between">
            <div class="lg:w-1/2 max-w-xl mb-14 lg:mb-0">
                <h2 class="text-4xl	text-blue-dark max-w-text-head-2 font-bold"><?php the_field('hero3'); ?></h2>
                <p class="mt-4 text-lg"><?php the_field('hero3-1'); ?></p>
            </div>

            <div class="lg:w-1/2 max-w-xl mb-14 lg:mb-0">
                <h2 class="text-3xl lg:text-4xl	text-blue-dark max-w-text-head-2 font-bold"><?php the_field('hero4'); ?></h2>
                <p class="mt-4 text-lg"><?php the_field('hero4-1'); ?></p>
            </div>
        </div>

        <div class="flex justify-center mt-5 lg:mt-14 lg:mb-8">
            <a href="<?php the_field('learn_more_link'); ?>" class="btn btn-yellow font-medium text-xl "><?php _e('Learn more', 'enkidu-v2'); ?></a>
        </div>
    </div>
</section>
