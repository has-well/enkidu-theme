<!DOCTYPE>
<html lang="en">
<head>
    <?php
    $enkiduGlobal = $GLOBALS['enkidu_global'];
    $baseURL = get_bloginfo('template_url');

    include(__DIR__ . '/inc/utils.php');
    wp_head();
    ?>
    <title><?php echo $post->post_title ?></title>
    <link rel="icon" href="<?php echo $baseURL ?>/assets/img/enkidu.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
</head>
<body class="w-full">
<header class="sticky top-0 py-2 bg-white border-b border-gray-300">
    <div class="container">
        <nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium md:overflow-visible px-4 sm:px-4 md:px-2">
                <div class="flex items-center justify-start h-full pr-4">
                    <a href="<?php echo home_url() ?>" class="inline-block py-4 md:py-0">
                        <img class="h-5 sm:h-7" src="<?php echo $baseURL ?>/assets/img/logo.svg"
                             alt="<?php bloginfo('name') ?>">
                    </a>
                </div>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/5 lg:w-4/5 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                        <div class="flex flex-col items-start w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <?php
                                $menu = wp_get_nav_menu_items('head_left', array());
                                if ($menu) {
                                    foreach ($menu as $item) :
                                        $url = esc_url(get_permalink(get_page_by_title($item->title)));
                                        echo '<a class="inline-block w-full py-2 mx-0 font-bold text-left text-blue-dark md:w-auto md:px-0 md:mx-2 hover:text-blue-600 lg:mx-3 md:text-center" href="' . $url . '">' . $item->title . '</a>';
                                    endforeach;
                                }
                            ?>
                        </div>

                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <?php
                            $menu = wp_get_nav_menu_items('head_right', array());
                            if ($menu) {
                                foreach ($menu as $item) :
                                    $url = esc_url(get_permalink(get_page_by_title($item->title)));
                                    echo '<a class="w-full px-6 py-2 mr-0 font-bold text-blue-dark md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto" href="' . $url . '">' . $item->title . '</a>';
                                endforeach;
                            }
                            ?>
                            <a href="https://fondy.ua" class="btn btn-blue"><?php _e( 'Register', 'enkidu-v2' ); ?></a>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>

    </div>
    </div>
</header>
