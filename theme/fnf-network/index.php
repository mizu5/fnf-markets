<?php

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 최신글 시작 { -->
        
        <!-- MOBILE BANNER -->
        <div class="mobile_banner">
            <img src="<?php echo G5_THEME_IMG_URL?>/site/m_banner1.jpg">
        </div>
        
        <!-- PC BANNER -->
    <!--main slider-->	
	<link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_JS_URL ?>/plugin/slider-pro-master/dist/css/slider-pro.min.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_JS_URL ?>/plugin/slider-pro-master/examples/css/examples.css" media="screen"/>
	<script type="text/javascript" src="<?php echo G5_THEME_JS_URL ?>/plugin/slider-pro-master/dist/js/jquery.sliderPro.min.js"></script>
	<!-- main slider -->
	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#mainSlider' ).sliderPro({
				width: 1920,
				height: 580,
				arrows: true,
				buttons: true,
				waitForLayers: true,
				thumbnailPointer: true,
				autoplay: true,
				autoScaleLayers: true,
				autoHeight: false,
				autoplayDelay:6000,
				gotoSlide: function( event ) {
			      
			    },
			    init:function(event){

			    },
			});
		});
		var depth1 = 0;
		var depth2 = 0;
	</script>			
				<!-- mainSlider -->
				<div id="mainSlider" class="slider-pro mainSlider">
					<div class="sp-slides" data-init="true" data-loaded="true">

						<div class="sp-slide">						
							<img class="sp-image" src="./js/plugin/slider-pro-master/src/css/images/blank.gif"	data-src="<?php echo G5_THEME_IMG_URL?>/site/banner1.jpg" data-retina="<?php echo G5_THEME_IMG_URL?>/site/banner1.jpg"/>
							<div class="sp-layer" data-position="CenterCenter"  data-horizontal="-33.3%" data-vertical="-8%" data-show-transition="down" data-show-offset="200" data-hide-offset="200" data-hide-transition="down" data-show-delay="800">
							<img src="<?php echo G5_THEME_IMG_URL?>/site/banner1_txt.png">
							</div>	
						</div>
						<div class="sp-slide">						
							<img class="sp-image" src="./js/plugin/slider-pro-master/src/css/images/blank.gif"	data-src="<?php echo G5_THEME_IMG_URL?>/site/banner2.jpg" data-retina="<?php echo G5_THEME_IMG_URL?>/site/banner2.jpg"/>
							<div class="sp-layer" data-position="CenterCenter" data-horizontal="-33.3%" data-vertical="-15%" data-show-transition="right" data-show-offset="200" data-hide-offset="200" data-hide-transition="left" data-show-delay="800">
							<img src="<?php echo G5_THEME_IMG_URL?>/site/banner2_txt.png">
							</div>								
						</div>				
						<div class="sp-slide">						
							<img class="sp-image" src="./js/plugin/slider-pro-master/src/css/images/blank.gif"	data-src="<?php echo G5_THEME_IMG_URL?>/site/banner3.jpg" data-retina="<?php echo G5_THEME_IMG_URL?>/site/banner3.jpg"/>
							<div class="sp-layer" data-position="CenterCenter" data-horizontal="31.3%" data-vertical="-1%" data-show-transition="down" data-show-offset="200" data-hide-offset="200" data-hide-transition="down" data-show-delay="800">
							<img src="<?php echo G5_THEME_IMG_URL?>/site/banner3_txt.png">
							</div>								
						</div>											
					</div>					
			    </div>
				<!-- mainSlider -->
				
        <!--div class="pc_banner">
            <img src="<?php echo G5_THEME_IMG_URL?>/site/banner1.jpg">
        </div-->
        
        <!-- PRODUCT TAB -->
        <div class="wrapper">
            <ul class="product_tab clearfix">
                <li>
                    <a href="./product/air_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product_tab_1.jpg">
                    </a>
                </li>
                <li>
                    <a href="./product/geothermal_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product_tab_2.jpg">
                    </a>
                </li>
                <li>
                    <a href="./product/water_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product_tab_3.jpg">
                    </a>
                </li>
                <li>
                    <a href="./product/hybrid_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product_tab_4.jpg">
                    </a>
                </li>
            </ul>
        </div>


        <!-- CUSTOMER CENTRE BAR -->
        <div class="customer_table">
            <table class="table wrapper">
                <tr>
                    <td>
                        <div class="padding">
                        <a href="./customer_center/cs_inqury.html">견적요청</a>
                        </div>
                    </td>
                    <td>
                        <a href="./customer_center/cs_as.html">A/S 접수</a>
                    </td>
                    <td>
                        <a href="./customer_center/cs_catalog.html">카탈로그</a>
                    </td>
                    <td class="big">
                        고객센터 031. 527. 4181
                    </td>
                </tr>
            </table>
        </div>

        <!-- CUSTOMER CENTRE BAR -->

        <div class="customer clearfix">
            <div class="wrapper">
                <ul class="customer_1">
                    <li>
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/contact1.png">
                        <a href="./customer_center/cs_inqury.html">견적요청</a>
                    </li>
                    <li>
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/contact2.png">
                        <a href="./customer_center/cs_as.html">A/S 접수</a>
                    </li>
                    <li>
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/contact3.png">
                        <a href="./customer_center/cs_catalog.html">카탈로그</a>
                    </li>
                </ul>
                <ul class="customer_2">
                    <li>
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/contact4.png">
                        <span>고객센터</span>
                        <span class="strong">
                            031. 527. 4181
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- MOBILE PRODUCT -->
        <div class="mobile_product">
            <div class="mobile_product_text">
                <div class="wrap">
                    <h4>DAEHO HEATPUMP</h4>
                    <h2>Will lead the future of industry.</h2>
                    <p>전기대비 약 57%, 도시가스 대비 약 50%, LPG 60%, 벙커C유 대비 57% 이상 절감됩니다. 월간 연료별 최대 월 250만원 연료비용이 절감되며, 1~3년 정도에 투자비회수가 가능합니다.</p>
                </div>
            </div>
            
            <ul class="mobile_product_list">
                <li class="mobile_product_1">
                    <a href="./product/air_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/m_product1.jpg">
                    </a>
                </li>
                <li class="mobile_product_2">
                    <a href="./product/geothermal_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/m_product2.jpg">
                    </a>
                </li>
                <li class="mobile_product_3">
                    <a href="./product/hybrid_heat_pump_1.html">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/m_product3.jpg">
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- PC PRODUCT -->
        <div class="pc_product">
            <div class="product_1 clearfix">
                <div class="wrapper">
                    <div class="product_1_wrap">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product1.png">
                        <a href="./product/air_heat_pump.html">
                            <img src="<?php echo G5_THEME_IMG_URL?>/site/plus_btn.png">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="product_2 clearfix">
                <div class="wrapper">
                    <div class="product_2_wrap">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product2.png">
                        <a href="./product/geothermal_heat_pump.html">
                            <img src="<?php echo G5_THEME_IMG_URL?>/site/plus_btn.png">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="product_3 clearfix">
                <div class="wrapper">
                    <div class="product_3_wrap">
                        <img src="<?php echo G5_THEME_IMG_URL?>/site/product3.png">
                        <a href="./product/hybrid_heat_pump.html">
                            <img src="<?php echo G5_THEME_IMG_URL?>/site/plus_btn.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 시공 예제 -->
        <div class="case wrapper">
            <h4>DAEHO HEATPUMP BENEFITS</h4>
            <h2>편리한 시공성, 다목적 활용성, 이미 히트펌프가 대세입니다.</h2>
            <ul class="case_list clearfix">
<!-- 최신글 시작 { -->
<?php
//  최신글
$sql = " select bo_table
            from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
            where a.bo_device <> 'mobile' ";
if(!$is_admin)
    $sql .= " and a.bo_use_cert = '' ";
$sql .= " order by b.gr_order, a.bo_order ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
    if ($i%2==1) $lt_style = "margin-left:20px";
    else $lt_style = "";
?>
    <div style="float:left;<?php echo $lt_style ?>">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 5, 25);
        ?>
    </div>
<?php
}
?>
<!-- } 최신글 끝 -->


            </ul>
</div>
<!-- } 최신글 끝 -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>