<footer class="bg-blue-background text-white pt-12 pb-8 px-4">
    <div class="mx-auto container overflow-hidden flex flex-col lg:flex-row justify-between">
        <div class="md:w-full lg:w-10/12 block sm:flex text-sm mt-6 lg:mt-0">
            <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-2 text-white font-extrabold text-lg tracking-wide"><?php _e( 'Solution & Networks', 'enkidu-v2' ); ?></li>
                <?php
                $menu = wp_get_nav_menu_items('footer_left', array());
                if ($menu) {
                    foreach ($menu as $item) :
                        $url = esc_url($item->url);
                        echo '<a class="transition-all duration-300 inline-block py-0 px-2 text-white hover:bg-main_yellow no-underline text-lg" href="' . $url . '">' . $item->title . '</a>';
                    endforeach;
                }
                ?>
            </ul>
            <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-2 sm:px-3 text-white font-extrabold tracking-wide text-lg"><?php _e( 'Partners', 'enkidu-v2' ); ?></li>
                <?php
                $menu = wp_get_nav_menu_items('footer_center', array());
                if ($menu) {
                    foreach ($menu as $item) :
                        $url = esc_url($item->url);
                        echo '<a class="transition-all duration-300 inline-block py-0 px-2 sm:px-3 text-white hover:bg-main_yellow no-underline text-lg" href="' . $url . '">' . $item->title . '</a>';
                    endforeach;
                }
                ?>
            </ul>
            <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-2 sm:px-3 text-white font-extrabold text-lg tracking-wide"><?php _e( 'Sitemap', 'enkidu-v2' ); ?></li>
                <?php
                $menu = wp_get_nav_menu_items('footer_right', array());
                if ($menu) {
                    foreach ($menu as $item) :
                        $pg = get_page_by_title($item->title);
                        $active = '';
                        if ($post and $pg and $post->ID === $pg->ID){
                            $active = 'bg-main_yellow';
                        }
                        $url = esc_url($item->url);
                        echo '<a class="transition-all duration-300 inline-block py-0 px-2 sm:px-3 text-white hover:bg-main_yellow no-underline text-lg '.$active.'" href="' . $url . '">' . $item->title . '</a>';
                    endforeach;
                }
                ?>
            </ul>
            <div class="text-white flex flex-col w-full">
                <div class="inline-block py-2 px-2 sm:px-3 text-white text-lg font-extrabold tracking-wide"><?php _e( 'Follow Us', 'enkidu-v2' ); ?></div>
                <div class="flex pl-2 justify-start mt-1">
                    <?php
                        if ( function_exists('cn_social_icon') ) echo cn_social_icon( );
                    ?>
                </div>
                <div class="pt-12 pl-3">
                    Copyright by ENKIDU
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>

