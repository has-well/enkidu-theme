<section id="connected" class="bg-blue pt-10 md:pt-0">
    <div class="container flex justify-center flex-col p-4 md:p-10 pb-6 pt-4 md:pb-16 md:pt-14">
        <div class="container text-center w-full">
            <h2 class="text-white text-3xl sm:text-4xl font-bold"><?php _e('Get Connected', 'enkidu-v2'); ?></h2>
            <div class="flex flex-wrap md:flex-col lg:flex-row pt-6 pt:8 md:pt-8 lg:pt-16 justify-around md:items-center">

                <div class="p-4 md:w-full lg:w-1/3 flex-col circled">
                    <div class="flex rounded-lg h-full p-4 pt-2 xl:p-8 xl:pt-8 flex-col justify-center">
                        <div class="flex flex-col items-center mb-3 h-64 justify-between mt-6 h-full">
                            <h3 class="text-white md:text-xl lg:text-4xl"><?php _e('You Are in Need', 'enkidu-v2'); ?></h3>
                            <p class="text-white w-54 md:w-72 md:text-md lg:text-md mb-4 mt-6 leading-5">
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
                            <p class="text-white w-54 md:w-72 md:text-md lg:text-md mt-6 mb-4 leading-5">
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
                            <p class="text-white w-54 md:w-72 md:text-md lg:text-md mt-6 mb-4 leading-5">
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