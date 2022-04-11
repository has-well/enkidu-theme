<section id="partners" class="body-font border-t pt-10 md:pt-0">
    <div class="container px-2 sm:px-5 lg:py-32 sm:py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-4 lg:mb-20">
            <h1 class="text-blue-dark text-3xl lg:text-6xl font-bold"><?php _e('Our partners', 'enkidu-v2'); ?></h1>
        </div>
        <div class="flex mb-4 flex-col">
            <div class="flex flex-col lg:flex-row space-evently justify-evenly items-center space-x-6">
                <?php foreach (get_field('partners') as $partner): ?>
                    <img class="object-contain h-40 w-80 mb-8 lg:mb-0" alt="<?php echo $partner['title'] ?>" src="<?php echo $partner['image']['sizes']['medium'] ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>