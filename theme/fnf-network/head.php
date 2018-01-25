<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
add_stylesheet('<Link rel="stylesheet" href="'.G5_THEME_JS_URL.'/plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css">',1);
add_stylesheet('<Link rel="stylesheet" href="'.G5_THEME_JS_URL.'/plugin/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">',2);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/style.css">', 3);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/layer.css">', 4);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/module.css">', 5);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_CSS_URL.'/mobile_menu.css">', 6);
//include_once(G5_LIB_PATH.'/latest.lib.php');
//include_once(G5_LIB_PATH.'/outlogin.lib.php');
//include_once(G5_LIB_PATH.'/poll.lib.php');
//include_once(G5_LIB_PATH.'/visit.lib.php');
//include_once(G5_LIB_PATH.'/connect.lib.php');
//include_once(G5_LIB_PATH.'/popular.lib.php');
?>
        <!-- MOBILE HEADER -->
        <header class="mobile_header">
            <nav>
                <div class="header_bg clearfix">
                    <ul class="mobile_lang">
                        <li><a href="/">한국어</a></li>
                        <li><a href="/en">English</a></li>
                    </ul>
                </div>
                
                <div class="menu_wrap clearfix">
                    <div class="mobile_logo">
                        <a href="./index.html">
                            <img src="<?=G5_THEME_IMG_URL?>/site/logo.jpg">
                        </a>
                    </div> 
                    <div class="hamburger" id="m_btn">
                            <img src="/img/m_menu.jpg">
                    </div>				
                </div>
            </nav>
               <div class="m_menu_list">
                  <ul>
                        <li><a href="/introduce/introduce_greeting.html">회사소개</a></li>
                        <li><a href="/technology/technology_feature.html">기술력</a></li>
                        <li><a href="/product/air_heat_pump_1.html">공기열히트펌프</a></li>
                        <li><a href="/product/geothermal_heat_pump_1.html">지열/수열히트펌프</a></li>
                        <li><a href="/product/hybrid_heat_pump_1.html">하이브리드히트펌프</a></li>
                        <li><a href="/customer_center/cs_inqury.html">고객센터</a></li>						
                    </ul>
                </div>				
        </header>
        
        <!-- PC HEADER -->
        <header class="pc_header">
            <nav>
                <div class="header_bar"></div>
                <div class="header_wrap clearfix">
                    <div class="logo">
                        <a href="/index.html">
                            <img src="<?=G5_THEME_IMG_URL?>/site/logo.jpg">
                        </a>
                    </div> 
                    <div class="menu">
                        <ul class="menu_list">
                            <li>
                                <a href="/introduce/introduce_greeting.html">
                                    회사소개
                                </a>
                            </li>
                            <li>
                                <a href="/technology/technology_feature.html">
                                    기술력
                                </a>
                            </li>
                            <li>
                                <a href="/product/air_heat_pump_1.html">
                                    공기열히트펌프
                                </a>
                            </li>
                            <li>
                                <a href="/product/water_heat_pump_1.html">
                                    지열/수열히트펌프
                                </a>
                            </li>
                            <li>
                                <a href="/product/hybrid_heat_pump_1.html">
                                    하이브리드히트펌프
                                </a>
                            </li>
                            <li>
                                <a href="/customer_center/cs_inqury.html">
                                   고객센터 
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="lang">
                        <ul class="lang_menu">
                            <li>
                                <a href="/">한국어</a>
                            </li>
                            <li>
                                <a href="/en">English</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
