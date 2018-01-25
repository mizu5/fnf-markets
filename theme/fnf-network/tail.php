<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

      <!-- MOBILE FOOTER -->
        <footer class="mobile_footer">
            <div class="mobile_footer_1 clearfix">
                <a href="../index.html" class="footer_logo">
                    <img src="<?php echo $mroot ?>/img/footer_logo.png">
                </a>
                
                <ul class="sns">
                    <li>
                        <a href="../index.html">
                            <img src="<?php echo $mroot ?>/img/footer_btn_1.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://blog.naver.com/dhcrt">
                            <img src="<?php echo $mroot ?>/img/footer_btn_2.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/daehocooler/">
                            <img src="<?php echo $mroot ?>/img/footer_btn_3.png">
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="mobile_footer_2">
                <p>경기도 남양주시 화도읍 마치로 284번길 112</p>
                <p><strong>Tel.</strong> 031-527-4181    <strong>fax.</strong> 031-527-3563</p> <p><strong>E-mail.</strong> daeho1@daum.net</p>
            </div>
            
            <div class="mobile_footer_3 clearfix">
                <p>Copyright 2017 DAEHO all rights reserved.</p>
                
                <ul class="policy_btn">
                    <li>
                            <a href="#" onclick="layer_open('layer1');return false;">이메일 무단수집거부</a>
                    </li>
                    <li>
							<a href="#" data-toggle="modal" data-target=".private-modal1">개인정보 취급방침</a>
                    </li>
                </ul>
            </div>
        </footer>
        
        <!-- PC FOOTER -->
        <footer class="pc_footer">
            <div class="footer_top">
                <div class="wrapper clearfix">
                    <ul class="footer_top_1">
                        <li>
                            <a href="<?php echo $mroot;?>/customer_center/cs_inqury.html">고객센터</a>
                        </li>
                        <li>
                            <a href="#" onclick="layer_open('layer1');return false;">이메일 무단수집거부</a>
                        </li>
                        <li>                            
							<a href="#" data-toggle="modal" data-target=".private-modal1">개인정보 취급방침</a>
							
                        </li>
                    </ul>

                    <ul class="footer_top_2">
                        <li>
                            <a href="../index.html">
                                <img src="<?= G5_THEME_IMG_URL?>/site/footer_btn_1.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://blog.naver.com/dhcrt">
                                <img src="<?= G5_THEME_IMG_URL?>/site/footer_btn_2.png">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/daehocooler/">
                                <img src="<?= G5_THEME_IMG_URL?>/site/footer_btn_3.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_bottom wrapper clearfix">
                <div class="footer_logo">
                    <a href="../index.html">
                        <img src="<?= G5_THEME_IMG_URL?>/site/footer_logo.png">
                    </a>
                </div>
                <ul class="footer_bottom_1">
                    <li>
                        경기도 남양주시 화도읍 마치로 284번길 112
                    </li>
                    <li>
                        <strong>Tel.</strong> 031-527-4181 <strong>Fax.</strong> 031-527-3563    <strong>E-mail.</strong> daeho1@daum.net
                    </li>
                    <li>
                        Copyright 2017 DAEHO all rights reserved.
                    </li>
                </ul>
            </div>
        </footer>
	<div id="layer1" class="pop-layer">			
		<div class="pop-container">
				<div class="pop-conts">
					<!--content //-->
					<p class="ctxt mb20">개인정보 취급방침<br>
						본 웹사이트에 게시된 이메일주소가 전자우편 수집 프로그램이나 그 밖의 기술적 장치를
	이용하여 무단으로 수집되는 것을 거부하며, 이를 위반시 정보통신망법에 의해 형사처벌
	됨을 유의하여 주시기 바랍니다.또한 당사에서 보낸 것으로 오해 하도록 작성한 이메일
	발송 시에도 법적 조치를 취할 것임을 알려드립니다.</p>
					<div class="btn-r">
						<a href="#" class="cbtn">Close</a>
					</div>
					<!--// content-->
				</div>
			</div>				
		</div>							    

<!-- Modal02 -->
<div class="modal fade organ-modal private-modal1" id="orga_Modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">개인정보 취급방침</h4>
      </div>
      <div class="modal-body" style="white-space: pre-line;word-break:break-all;line-height:20px;"><(주)대호냉각기>('http://http://dhheatpump.com'이하 'http://dhheatpump.com')은(는)개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.

<(주)대호냉각기>('http://dhheatpump.com') 은(는) 회사는 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.

○ 본 방침은부터 2016년 1월 1일부터 시행됩니다.

1. 개인정보의 처리 목적 <(주)대호냉각기>('http://http://dhheatpump.com'이하 'http://dhheatpump.com')은(는) 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.

가. 홈페이지 회원가입 및 관리 각종 고지·통지 등을 목적으로 개인정보를 처리합니다.

나. 마케팅 및 광고에의 활용
접속빈도 파악 또는 회원의 서비스 이용에 대한 통계 등을 목적으로 개인정보를 처리합니다.

2. 개인정보 파일 현황
1. 개인정보 파일명 : 
- 개인정보 항목 : 이메일
- 수집방법 : 이메일
- 보유근거 : 문의사항 등록
- 보유기간 : 1년
- 관련법령 : 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년

3. 개인정보의 처리 및 보유 기간

① <(주)대호냉각기>('http://dhheatpump.com')은(는) 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.

② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.

1.<홈페이지 회원가입 및 관리>
<홈페이지 회원가입 및 관리>와 관련한 개인정보는 수집.이용에 관한 동의일로부터 까지 위 이용목적을 위하여 보유.이용됩니다.
-보유근거 : 
-관련법령 : 
-예외사유 : 				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<img src="<?=G5_THEME_IMG_URL?>/site/page-top.png" class="btn-up point"/>



<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>