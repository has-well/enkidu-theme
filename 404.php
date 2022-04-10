<?php get_header(); ?>

    <div class="flex items-center justify-center w-full max-h-full lg:h-full bg-gradient-to-r from-indigo-600 to-blue-400">
        <div class="px-16 lg:px-40 py-20 bg-white rounded-md shadow-xl">
            <div class="flex flex-col items-center">
                <h1 class="font-bold text-blue-600 text-9xl">404</h1>

                <h6 class="mb-2 text-2xl font-bold text-center text-gray-800 md:text-3xl">
                    <span class="text-main_yellow">Oops!</span> <?php _e( 'Page not found', 'enkidu-v2' ); ?>
                </h6>

                <p class="mb-8 text-center text-gray-500 md:text-lg">
                    <?php _e( 'The page you’re looking for doesn’t exist.', 'enkidu-v2' ); ?>
                </p>

                <a href="<?php echo get_bloginfo( 'url' ); ?>"
                   class="btn btn-yellow"
                ><?php _e( 'Go Home', 'enkidu-v2' ); ?></a
                >
            </div>
        </div>
    </div>

<?php get_footer() ?>