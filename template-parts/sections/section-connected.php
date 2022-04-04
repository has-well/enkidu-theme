<section id="connected" class="bg-blue pt-10 md:pt-0">
    <div class="container px-5 py-20 mx-auto">
        <div class="flex flex-wrap w-full mb-16 flex-col items-center text-center">
            <h2 class="sm:text-4xl text-3xl font-bold title-font mb-2 text-white"><?php _e('Get Connected', 'enkidu-v2'); ?></h2>
        </div>

        <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 px-7 mb-4">
                <div class="flex flex-col justify-evenly items-center text-center h-80 lg:h-96 rounded-full"
                     style="background-image: linear-gradient(rgba(0, 91, 187, 0.7),rgba(0, 91, 187, 0.7)),url('<?php bloginfo('template_url'); ?>/assets/img/connected/medicine.jpg'); background-size: cover; background-repeat: no-repeat">
                    <h2 class="md:text-xl lg:text-4xl text-white font-bold title-font mb-2"><?php _e('Suppliers', 'enkidu-v2'); ?></h2>
                    <p class="text-white md:text-md lg:text-lg px-16 leading-5">
                        Can supply medicine? Tap into the SAP Business Network to be discoverable and engage with Medical Procurement of Ukraine
                    </p>
                    <a href="<?php the_field('go_here_need_link'); ?>"
                       class="btn px-6 btn-yellow w-fit"><?php _e('Contact us', 'enkidu-v2'); ?></a>
                </div>
            </div>

            <div class="xl:w-1/3 md:w-1/2 px-7 mb-4">
                <div class="flex flex-col justify-evenly items-center text-center h-80 lg:h-96 rounded-full"
                     style="background-image: linear-gradient(rgba(0, 91, 187, 0.7),rgba(0, 91, 187, 0.7)),url('<?php bloginfo('template_url'); ?>/assets/img/connected/donors.jpg'); background-size: cover; background-repeat: no-repeat">
                    <h2 class="md:text-xl lg:text-4xl text-white font-bold title-font mb-2"><?php _e('Donors', 'enkidu-v2'); ?></h2>
                    <p class="text-white md:text-md lg:text-lg px-16 leading-5">
                        Want to pay for medical goods directly or donate to Medical Procurement of Ukraine. We will match you donation with needs and coordinate the invoicing
                    </p>
                    <a href="<?php the_field('go_here_need_link'); ?>"
                       class="btn px-6 btn-yellow w-fit"><?php _e('Contact us', 'enkidu-v2'); ?></a>
                </div>
            </div>

            <div class="xl:w-1/3 md:w-1/2 px-7 mb-4">
                <div class="flex flex-col justify-evenly items-center text-center h-80 lg:h-96 rounded-full"
                     style="background-image: linear-gradient(rgba(0, 91, 187, 0.7),rgba(0, 91, 187, 0.7)),url('<?php bloginfo('template_url'); ?>/assets/img/connected/carriers.jpg'); background-size: cover; background-repeat: no-repeat">
                    <h2 class="md:text-xl lg:text-4xl text-white font-bold title-font mb-2"><?php _e('Carriers', 'enkidu-v2'); ?></h2>
                    <p class="text-white md:text-md lg:text-lg px-16 leading-5">
                        Do you have capabilities to deliever medicine to Ukraine or Poland? We encourage you to contact us and join our list of logistic providers
                    </p>
                    <a href="<?php the_field('go_here_need_link'); ?>"
                       class="btn px-6 btn-yellow w-fit"><?php _e('Contact us', 'enkidu-v2'); ?></a>
                </div>
            </div>
        </div>

    </div>
</section>