<section id="solution" class="pt-6 md:pt-0 pb-10 sm:pb-0 overflow-hidden">
    <div class="container flex justify-center flex-col p-4 md:p-10">
        <div class="container text-center">
            <h2 class="text-blue-dark text-3xl sm:text-4xl font-bold"><?php _e('Our Solution', 'enkidu-v2'); ?></h2>
            <div class="container my-10 custom-over">
                <?php if (get_field('solution_image')): ?>
                    <?php $image = get_field('solution_image'); ?>
                    <img class="solution-image" src="<?php echo $image['url']; ?>"
                         alt="<?php echo $image['alt']; ?>"/>
                <?php else: ?>
                    <img class="solution-image"
                         src="<?php bloginfo('template_url'); ?>/assets/img/our_solution.svg">
                <?php endif; ?>
            </div>
            <?php /*
            <div class="container flex justify-center mt-20">
                <a href="<?php the_field('more_about_link'); ?>"
                   class="btn px btn-blue text-lg font-bold"><?php _e('More about SAP Ariba', 'enkidu-v2'); ?></a>
            </div>
            */?>
        </div>
    </div>
</section>