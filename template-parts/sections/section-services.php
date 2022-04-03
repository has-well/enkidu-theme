<section id="project-for" class="body-font border-t pt-10 md:pt-0">
    <div class="container px-2 sm:px-5 py-6 sm:py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-4">
            <h1 class="text-blue-dark text-3xl sm:text-4xl font-bold"><?php _e('This project for', 'enkidu-v2'); ?></h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2 pb-2">
                <div class="flex rounded-lg h-full md:p-2 lg:p-12 pb-2">
                    <div class="w-16 h-16 sm:w-32 sm:h-32 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                        <img class="solution-image" src="<?php bloginfo('template_url'); ?>/assets/img/icon-support.png">
                    </div>
                    <div class="flex items-start mb-3 flex-col pt-4 sm:pt-8">
                        <h2 class="text-xl sm:text-2xl title-font font-medium pb-6 font-bold"><?php _e('Buyer account', 'enkidu-v2'); ?></h2>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm text-main_text">
                                <?php the_field('buyeracc'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/2 pb-2">
                <div class="flex rounded-lg h-full md:p-2 lg:p-12 pb-2">
                    <div class="w-16 h-16 sm:w-32 sm:h-32 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                        <img class="solution-image" src="<?php bloginfo('template_url'); ?>/assets/img/icon-hosting.png">
                    </div>
                    <div class="flex items-start mb-3 flex-col pt-4 sm:pt-8">
                        <h2 class="text-xl sm:text-2xl title-font font-medium pb-6 font-bold"><?php _e('Procurement', 'enkidu-v2'); ?></h2>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm text-main_text">
                                <?php the_field('procurement'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -m-4 lg:-mt-10">
            <div class="p-4 pt-0 md:w-1/2">
                <div class="flex rounded-lg h-full md:p-2 lg:p-12 lg:pt-0">
                    <div class="w-16 h-16 sm:w-32 sm:h-32 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                        <img class="solution-image" src="<?php bloginfo('template_url'); ?>/assets/img/icon-support.png">
                    </div>
                    <div class="flex items-start mb-3 flex-col pt-4 sm:pt-8">
                        <h2 class="text-xl sm:text-2xl title-font font-medium pb-6 font-bold"><?php _e('Suppliers management', 'enkidu-v2'); ?></h2>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm text-main_text">
                                <?php the_field('suppliers_management'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 pt-0 md:w-1/2">
                <div class="flex rounded-lg h-full md:p-2 lg:p-12 lg:pt-0">
                    <div class="w-16 h-16 sm:w-32 sm:h-32 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
                        <img class="solution-image" src="<?php bloginfo('template_url'); ?>/assets/img/icon-experiences.png">
                    </div>
                    <div class="flex items-start mb-3 flex-col pt-4 sm:pt-8">
                        <h2 class="text-xl sm:text-2xl title-font font-medium pb-6 font-bold"><?php _e('Invoices workflow', 'enkidu-v2'); ?></h2>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-sm text-main_text">
                                <?php the_field('invoices'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

