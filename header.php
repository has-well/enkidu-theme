<!DOCTYPE>
<html lang="<?php echo pll_current_language(); ?>">
<head>
    <?php
        $enkiduGlobal = $GLOBALS['enkidu_global'];
        $baseURL = get_bloginfo('template_url');
        include(__DIR__ . '/inc/utils.php');
        wp_head();
    ?>
    <meta charset="<?php bloginfo('charset') ?>">
    <title><?php echo $post->post_title ?></title>
    <link rel="icon" href="<?php echo $baseURL ?>/assets/img/enkidu.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JDXXTSQSG8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-JDXXTSQSG8');
    </script>       
</head>
<body class="w-full">
<header class="sticky top-0 py-2 bg-white">
    <div class="container overflow-vs">
        <nav class="relative z-50 h-14 md:h-24 select-none">
            <div class="container overflow-vs relative flex flex-wrap items-center justify-between h-14 md:h-24 mx-auto font-medium md:overflow-visible px-4 sm:px-4 md:px-2">
                <div class="flex items-center justify-start h-full mr-4">
                    <a href="<?php echo home_url() ?>" class="inline-block py-4 md:py-0">
                        <img class="h-5 sm:h-7" src="<?php echo $baseURL ?>/assets/img/logo.svg"
                             alt="<?php bloginfo('name') ?>">
                    </a>
                </div>
                <div id="main_nav" class="top-0 left-0 items-start invisible lg:visible w-full h-full p-0 md:p-4 text-sm bg-opacity-50 md:items-center w-2/3 lg:w-3/4 xl:w-10/12 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex">
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
                                        echo '<a class="inline-block text-sm lg:text-lg text-center w-full py-2 mx-0 font-bold text-left text-blue md:w-auto md:px-0 md:mx-2 hover:text-main_yellow transition-colors lg:mx-3 '. $active .'" href="' . $url . '">' . $item->title . '</a>';
                                    endforeach;
                                }
                            ?>
                        </div>

                        <div class="flex flex-col lg:flex-row items-center text-center justify-between w-full pt-4 items-center md:w-1/2 md:py-0">
                            <?php if ($headRightMenuItems = wp_get_nav_menu_items('head_right')): ?>
                            <?php foreach ($headRightMenuItems as $menuItem): ?>
                                <a class="w-full text-sm lg:text-lg font-bold text-blue md:px-0 my-2 lg:px-3 md:w-auto hover:text-main_yellow transition-colors"
                                   href="<?php echo esc_url($menuItem->url) ?>">
                                    <?php echo $menuItem->title ?>
                                </a>
                            <?php endforeach; ?>
                            <?php endif; ?>

                            <a href="<?php the_field('login_link'); ?>" class="btn btn-yellow font-bold my-2"><?php _e( 'Log in', 'enkidu-v2' ); ?></a>
                            <?php pll_the_languages(array('dropdown'=>1, 'display_names_as'=>'slug'));  ?>
                        </div>
                    </div>
                </div>
                <div class="absolute-r flex flex-col items-center items-end justify-center w-8 bg-white rounded-full cursor-pointer lg:hidden burger-menu">
                    <div class="p-2 space-y-1.5">
                        <span class="block w-8 h-0.5 bg-blue-dark animate-pulse"></span>
                        <span class="block w-8 h-0.5 bg-blue-dark animate-pulse"></span>
                        <span class="block w-8 h-0.5 bg-blue-dark animate-pulse"></span>
                    </div>
                </div>
            </div>
        </nav>

    </div>
</header>
