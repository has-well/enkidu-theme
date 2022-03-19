<footer class="bg-blue-background text-white pt-12 pb-8 px-4">
    <div class="mx-auto container overflow-hidden flex flex-col lg:flex-row justify-between">
        <div class="md:w-full lg:w-10/12 block sm:flex text-sm mt-6 lg:mt-0">
            <ul class="text-white list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-2 text-white font-extrabold text-lg tracking-wide"><?php _e( 'Solution & Networks', 'enkidu-v2' ); ?></li>
                <?php
                $menu = wp_get_nav_menu_items('footer_left', array());
                if ($menu) {
                    foreach ($menu as $item) :
                        $url = esc_url(get_permalink(get_page_by_title($item->title)));
                        echo '<a class="inline-block py-0 px-2 text-white hover:text-white no-underline text-lg" href="' . $url . '">' . $item->title . '</a>';
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
                        $url = esc_url(get_permalink(get_page_by_title($item->title)));
                        echo '<a class="inline-block py-0 px-2 sm:px-3 text-white hover:text-white no-underline text-lg" href="' . $url . '">' . $item->title . '</a>';
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
                        $url = esc_url(get_permalink(get_page_by_title($item->title)));
                        echo '<a class="inline-block py-0 px-2 sm:px-3 text-white hover:text-white no-underline text-lg" href="' . $url . '">' . $item->title . '</a>';
                    endforeach;
                }
                ?>
            </ul>
            <div class="text-white flex flex-col w-full">
                <div class="inline-block py-2 px-2 sm:px-3 text-white text-lg font-extrabold tracking-wide"><?php _e( 'Follow Us', 'enkidu-v2' ); ?></div>
                <div class="flex pl-4 justify-start mt-2">
                    <a class="block flex items-center text-white hover:text-white mr-6 no-underline" href="#">
                        <svg width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9267 2.40897C23.8359 2.5608 23.3703 3.09375 22.8725 3.58054C22.0289 4.41793 21.9835 4.50871 21.9835 5.20915C21.9835 6.28915 21.4724 8.54306 20.9606 9.77488C20.0113 12.0891 17.9789 14.4791 15.9457 15.6836C13.0852 17.3724 9.27548 17.7998 6.06757 16.8098C4.99931 16.4732 3.16174 15.621 3.16174 15.4699C3.16174 15.423 3.71818 15.3635 4.39748 15.3471C5.81587 15.3172 7.20378 14.9299 8.43261 14.2209L9.24496 13.7333L8.31131 13.414C6.98557 12.957 5.79679 11.9067 5.49548 10.9175C5.4047 10.5974 5.43522 10.5818 6.27809 10.5818L7.14992 10.5669L6.4127 10.2163C5.53853 9.7741 4.74026 9.02984 4.34974 8.26758C4.06409 7.71975 3.70253 6.33454 3.8074 6.2281C3.8387 6.18271 4.15487 6.27506 4.51487 6.39636C5.5534 6.77749 5.68879 6.68593 5.08696 6.04575C3.95844 4.88828 3.61174 3.16888 4.15331 1.53949L4.40922 0.80932L5.40313 1.79854C7.43713 3.79262 9.83113 4.98062 12.5703 5.32967L13.3231 5.42045L13.2777 4.67384C13.1424 2.7408 14.3319 0.97445 16.2141 0.289668C16.9067 0.0454938 18.0822 0.0157546 18.8499 0.227842C19.1512 0.318624 19.7225 0.623841 20.1295 0.897754L20.8675 1.40019L21.6798 1.14036C22.1322 1.00419 22.734 0.774885 23.0048 0.623059C23.2607 0.48532 23.4861 0.409407 23.4861 0.454798C23.4861 0.713059 22.9289 1.59741 22.4632 2.08419C21.8293 2.76897 22.0109 2.83002 23.2904 2.37375C24.0613 2.11941 24.077 2.11941 23.9267 2.40897Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <a class="block flex items-center text-white hover:text-white mr-6 no-underline" href="#">
                        <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.73304 17.4169H2.82782V5.66602H6.73304V17.4169Z" fill="white"/>
                            <path d="M4.7765 4.06017H4.75145C3.44058 4.06017 2.59302 3.15626 2.59302 2.0293C2.59302 0.877304 3.46641 0 4.80154 0C6.13745 0 6.96076 0.876522 6.98502 2.0293C6.98502 3.15783 6.13745 4.06017 4.7765 4.06017Z"
                                  fill="white"/>
                            <path d="M20.8145 17.4114H16.9093V11.1239C16.9093 9.54462 16.3442 8.46776 14.9293 8.46776C13.8516 8.46776 13.2091 9.19402 12.9266 9.8968C12.824 10.1472 12.7974 10.4986 12.7974 10.8492V17.4114H8.89301C8.89301 17.4114 8.94466 6.76402 8.89301 5.66054H12.7982V7.32515C13.3171 6.52454 14.246 5.38428 16.3192 5.38428C18.8885 5.38428 20.8145 7.06454 20.8145 10.6731V17.4114Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <a class="block flex items-center text-white hover:text-white mr-6 no-underline" href="#">
                        <svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.3015 5.73453C20.3015 5.81787 20.2851 5.90038 20.2532 5.97736C20.2213 6.05433 20.1745 6.12427 20.1155 6.18315C20.0566 6.24204 19.9866 6.28873 19.9096 6.32054C19.8325 6.35236 19.75 6.36868 19.6667 6.36857H17.1321C16.964 6.36857 16.8027 6.30177 16.6838 6.18287C16.5649 6.06396 16.4981 5.90269 16.4981 5.73453V3.2C16.4981 2.84946 16.7816 2.56596 17.1321 2.56596H19.6667C20.0172 2.56596 20.3007 2.84946 20.3007 3.2L20.3015 5.73453ZM20.3015 17.1416C20.3015 17.5858 20.1117 17.7756 19.6667 17.7756H5.7259C5.28167 17.7756 5.09186 17.5858 5.09186 17.1416V8.26988L6.6709 8.61396C6.49757 9.17733 6.40963 9.76349 6.41002 10.3529C6.41002 13.7226 9.2321 16.4591 12.71 16.4591C16.1912 16.4591 19.0116 13.7242 19.0116 10.3529C19.0116 9.74715 18.9204 9.16561 18.7507 8.61396L20.2999 8.26988V17.1416H20.3015ZM12.7108 6.18846C14.9594 6.18846 16.7816 7.95488 16.7816 10.1332C16.7816 12.3116 14.9594 14.078 12.7108 14.078C10.463 14.078 8.64006 12.31 8.64006 10.1332C8.64006 7.95326 10.463 6.18846 12.7108 6.18846V6.18846ZM20.3007 0.0322266H5.09267C3.65983 0.0322266 2.55652 1.13553 2.55652 2.56757V17.7756C2.55652 19.2068 3.65983 20.3101 5.09186 20.3101H20.2999C21.7311 20.3101 22.8344 19.2068 22.8344 17.7756V2.56676C22.8361 1.13473 21.7311 0.0322266 20.3015 0.0322266H20.3007Z"
                                  fill="white"/>
                        </svg>
                    </a>
                    <a class="block flex items-center text-white hover:text-white no-underline" href="#">
                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_77_40)">
                                <path d="M8.94417 10.0464H6.19167V20.0381H2.0625V10.0473H0V6.60477H2.0625V4.53727C2.0625 1.72894 3.22667 0.0581055 6.535 0.0581055H9.29V3.50144H7.56833C6.28083 3.50144 6.19417 3.98394 6.19417 4.88061L6.19167 6.60477H9.31083L8.94417 10.0464Z"
                                      fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_77_40">
                                    <rect width="10" height="20" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
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

