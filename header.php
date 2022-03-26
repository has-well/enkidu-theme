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
<header class="sticky top-0 py-2 bg-white">
    <div class="container overflow-vs">
        <nav class="relative z-50 h-14 md:h-24 select-none">
            <div class="container overflow-vs relative flex flex-wrap items-center justify-between h-14 md:h-24 mx-auto font-medium md:overflow-visible px-4 sm:px-4 md:px-2">
                <div class="flex items-center justify-start h-full pr-4">
                    <a href="<?php echo home_url() ?>" class="inline-block py-4 md:py-0">
                        <img class="h-5 sm:h-7" src="<?php echo $baseURL ?>/assets/img/logo.svg"
                             alt="<?php bloginfo('name') ?>">
                    </a>
                </div>
                <div id="main_nav" class="top-0 left-0 items-start invisible md:visible w-full h-full p-0 md:p-4 text-sm bg-opacity-50 md:items-center w-2/3 md:w-2/3 lg:w-9/12 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex">
                    <div id="main_menu" class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                        <div class="flex flex-col items-start w-full space-x-0 md:space-x-4 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            <?php
                                $menu = wp_get_nav_menu_items('head_left', array());
                                if ($menu) {
                                    foreach ($menu as $item) :
                                        $pg = get_post($item->object_id);
                                        $active = '';
                                        if ($post and $pg and $post->ID === $pg->ID){
                                            $active = 'text-main_yellow';
                                        }
                                        $url = esc_url($item->url);
                                        echo '<a class="inline-block text-lg md:text-sm text-center w-full py-2 mx-0 font-bold text-left text-blue-dark md:w-auto md:px-0 md:mx-2 hover:text-main_yellow lg:mx-3 '. $active .'" href="' . $url . '">' . $item->title . '</a>';
                                    endforeach;
                                }
                            ?>
                        </div>

                        <div class="flex flex-row items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:py-0">
                            <?php
                            $menu = wp_get_nav_menu_items('head_right', array());
                            if ($menu) {
                                foreach ($menu as $item) :
                                    $url = esc_url($item->url);
                                    echo '<a class="w-full text-sm px-6 py-2 mr-0 font-bold text-blue-dark md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto" href="' . $url . '">' . $item->title . '</a>';
                                endforeach;
                            }
                            ?>
                            <a href="<?php the_field('register_link'); ?>" class="btn btn-blue text-sm"><?php _e( 'Register', 'enkidu-v2' ); ?></a>
                            <?php pll_the_languages(array('dropdown'=>1, 'display_names_as'=>'slug'));  ?>
                        </div>
                    </div>
                </div>
                <div class="absolute-r flex flex-col items-center items-end justify-center w-6 h-6 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100 burger-menu">
                    <div class="p-2 space-y-1 bg-blue-dark rounded shadow">
                        <span class="block w-6 h-0.5 bg-main_yellow animate-pulse"></span>
                        <span class="block w-6 h-0.5 bg-main_yellow animate-pulse"></span>
                        <span class="block w-6 h-0.5 bg-main_yellow animate-pulse"></span>
                    </div>
                </div>
            </div>
        </nav>

    </div>
    </div>
</header>
