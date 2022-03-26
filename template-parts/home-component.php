<section id="hero-section" class="w-screen px-10 md:p-4 lg:p-10">
    <div class="container flex flex-col justify-between h-full custom">
        <div class="flex justify-right flex-col items-end">
            <h1 class="text-3xl sm:text-4xl font-bold text-white max-w-text-head"><?php the_field('hero1'); ?></h1>
        </div>
        <div class="flex justify-right flex-col items-end">
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-dark max-w-text-head"><?php the_field('hero2'); ?></h2>
        </div>
    </div>
</section>
<section id="hero-section-2" class="w-screen px-6 md:px-10 p-4 lg:p-10 pb-4 pb-10 sm:pb-8 bg-blue">
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
<section id="connected" class="bg-blue pt-10 md:pt-0">
    <div class="container flex justify-center flex-col p-4 md:p-10 pb-6 pt-4 md:pb-16 md:pt-14">
        <div class="container text-center w-full">
            <h2 class="text-white text-3xl sm:text-4xl font-bold"><?php _e('Get Connected', 'enkidu-v2'); ?></h2>
            <div class="flex flex-wrap md:flex-col lg:flex-row pt-6 pt:8 md:pt-8 lg:pt-16 justify-around md:items-center">

                <div class="p-4 md:w-full lg:w-1/3 flex-col circled">
                    <div class="flex rounded-lg h-full p-4 pt-2 xl:p-8 xl:pt-8 flex-col justify-center">
                        <div class="flex flex-col items-center mb-3 h-64 justify-between mt-6 h-full">
                            <h3 class="text-white md:text-xl lg:text-4xl"><?php _e('You Are in Need', 'enkidu-v2'); ?></h3>
                            <p class="text-white w-72 md:text-md lg:text-md mb-4 mt-6 leading-5">
                                <?php the_field('connected1'); ?>
                            </p>
                            <a href="<?php the_field('go_here_need_link'); ?>"
                               class="btn px btn-yellow text-lg font-bold"><?php _e('Go here', 'enkidu-v2'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="p-4 mt-4 sm:mt-0 md:w-full lg:w-1/3 flex-col circled">
                    <div class="flex rounded-lg h-full p-4 pt-2 xl:p-8 xl:pt-8 flex-col justify-center">
                        <div class="flex flex-col items-center mb-3 h-64 justify-between mt-6 h-full">
                            <h3 class="text-white md:text-xl lg:text-4xl"><?php _e('You Can Supply', 'enkidu-v2'); ?></h3>
                            <p class="text-white w-72 md:text-md lg:text-md mt-6 mb-4 leading-5">
                                <?php the_field('connected2'); ?>
                            </p>
                            <a href="<?php the_field('go_here_supply_link'); ?>"
                               class="btn px btn-yellow text-lg font-bold"><?php _e('Go here', 'enkidu-v2'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="p-4 mt-4 sm:mt-0 md:w-full lg:w-1/3 flex-col circled">
                    <div class="flex rounded-lg h-full p-4 pt-2 xl:p-8 xl:pt-8 flex-col justify-center">
                        <div class="flex flex-col items-center mb-3 h-64 justify-between mt-6 h-full">
                            <h3 class="text-white md:text-xl lg:text-4xl"><?php _e('You Can Carrier', 'enkidu-v2'); ?></h3>
                            <p class="text-white w-72 md:text-md lg:text-md mt-6 mb-4 leading-5">
                                <?php the_field('connected3'); ?>
                            </p>
                            <a href="<?php the_field('go_here_carriers_link'); ?>"
                               class="btn px btn-yellow text-lg font-bold"><?php _e('Carriers', 'enkidu-v2'); ?></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="body-font border-t pt-10 md:pt-0">
    <div class="container px-2 sm:px-5 py-6 sm:py-12 mx-auto">
        <div class="flex flex-col text-center w-full mb-4">
            <h1 class="text-blue-dark text-3xl sm:text-4xl font-bold"><?php _e('Services', 'enkidu-v2'); ?></h1>
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