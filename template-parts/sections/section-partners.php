<section id="partners" class="body-font border-t pt-10 md:pt-0">
    <div class="container px-2 sm:px-5 lg:py-56 sm:py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-4">
            <h1 class="text-blue-dark text-3xl sm:text-4xl font-bold"><?php _e('Our partners', 'enkidu-v2'); ?></h1>
        </div>
        <div class="flex mb-3 flex-col pt-4 sm:pt-8">
            <div class="flex space-evently pt-8 lg:justify-evenly sm:justify-start items-center overflow-auto space-x-6">
                <?php foreach (get_field('partners') as $partner): ?>
                    <img class="object-contain h-40 w-80" alt="<?php echo $partner['title'] ?>" src="<?php echo $partner['image']['sizes']['medium'] ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>