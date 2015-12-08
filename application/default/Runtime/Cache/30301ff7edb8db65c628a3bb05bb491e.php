<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>购物流程_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__ROOT__/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="__ROOT__/public/js/shopping_flow.js"></script>
    <script type="text/javascript" src="__ROOT__/public/js/region.js"></script>
    <script type="text/javascript">
      region.isAdmin = false;
      var consignee_not_null = "收货人姓名不能为空！";
      var country_not_null = "请您选择收货人所在国家！";
      var province_not_null = "请您选择收货人所在省份！";
      var city_not_null = "请您选择收货人所在城市！";
      var district_not_null = "请您选择收货人所在区域！";
      var invalid_email = "您输入的邮件地址不是一个合法的邮件地址。";
      var address_not_null = "收货人的详细地址不能为空！";
      var tele_not_null = "电话不能为空！";
      var shipping_not_null = "请您选择配送方式！";
      var payment_not_null = "请您选择支付方式！";
      var goodsattr_style = "1";
      var tele_invaild = "电话号码不有效的号码";
      var zip_not_num = "邮政编码只能填写数字";
      var mobile_invaild = "手机号码不是合法号码";
      onload = function() {
        if (!document.all)
        {
          document.forms['theForm'].reset();
        }
      }
      var process_request = "正在处理您的请求...";
      var username_empty = "- 用户名不能为空。";
      var username_shorter = "- 用户名长度不能少于 3 个字符。";
      var username_invalid = "- 用户名只能是由字母数字以及下划线组成。";
      var password_empty = "- 登录密码不能为空。";
      var password_shorter = "- 登录密码不能少于 6 个字符。";
      var confirm_password_invalid = "- 两次输入密码不一致";
      var email_empty = "- Email 为空";
      var email_invalid = "- Email 不是合法的地址";
      var agreement = "- 您没有接受协议";
      var msn_invalid = "- msn地址不是一个有效的邮件地址";
      var qq_invalid = "- QQ号码不是一个有效的号码";
      var home_phone_invalid = "- 家庭电话不是一个有效号码";
      var office_phone_invalid = "- 办公电话不是一个有效号码";
      var mobile_phone_invalid = "- 手机号码不是一个有效号码";
      var msg_un_blank = "* 用户名不能为空";
      var msg_un_length = "* 用户名最长不得超过7个汉字";
      var msg_un_format = "* 用户名含有非法字符";
      var msg_un_registered = "* 用户名已经存在,请重新输入";
      var msg_can_rg = "* 可以注册";
      var msg_email_blank = "* 邮件地址不能为空";
      var msg_email_registered = "* 邮箱已存在,请重新输入";
      var msg_email_format = "* 邮件地址不合法";
      var msg_blank = "不能为空";
      var no_select_question = "- 您没有完成密码提示问题的操作";
      var passwd_balnk = "- 密码中不能包含空格";
      var username_exist = "用户名 %s 已经存在";
      var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
      var btn_buy = "购买";
      var is_cancel = "取消";
      var select_spe = "请选择商品属性";
    </script>
  </head>
  <body>
    <div id="container">
      
      <Script language="JavaScript">
function show_menu(obj_s,obj){
	var  s_id = document.getElementById(obj_s);
	var  sc_id = document.getElementById(obj);
	     s_id.style.display = "";
	     //sc_id.className = "ahv";
}
     	
function hide_menu(obj_h,obj){
	var  h_id = document.getElementById(obj_h);
	var  hc_id = document.getElementById(obj);
	     h_id.style.display = "none";
	     //hc_id.className = "alk";
}
window.onload = function()
{
  //fixpng();
}
function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
        return true;
    }
    else
    {
		   alert("请输入搜索关键词！");
        return false;
    }
}
</Script>
      <div id="globalHeader">
        <ul id="top_nav_ul">
          <div id=navigation1_03 style=" float:right;">
          <dl>
            <dt style="POSITION: relative; z-index:999999999">
              <a style="float:right; background:url(__ROOT__/public/themes/jindong/images/biao.gif) 55px center no-repeat; padding-right:23px;display:block; line-height:29px;"  class=alk 
              onmouseover="show_menu('float_menu2','c_fship_c')"
              onmouseout="hide_menu('float_menu2','c_fship_c')"
              href="#"  target=_self>客服中心</a>
              <div id=float_menu2 onMouseOver="show_menu('float_menu2','c_fship_c')" style="border: #ccc 1px solid; border-top:none;DISPLaY: none; Z-INDEX: 20; LEFT: 0px; top:0; WIdtH:70px; padding:0 0 5px 8px;POSITION: absolute;" 
              onmouseout="hide_menu('float_menu2','c_fship_c')">
                <ul class=cship_list>
			      <li style="padding-bottom:7px; padding-top:5px;"><a target="_blank" href="user.php">客服中心</a> </li>
			      <li><a target="_blank" href="__APP__/User/index">会员后台</a> </li>
			      <li><a target="_blank" href="__APP__/User/order">我的订单</a> </li>
			      <li><a target="_blank" href="__APP__/User/message">我的留言</a> </li>
                </ul>
              </div>
            </dt>
            <dd></dd>
          </dl>
          </div>
          <div style="float:right; _padding-top:9px; background: url(__ROOT__/public/themes/jindong/images/nav_bg2.gif) 0 top no-repeat; height:29px; padding-left:28px;">
            <a href="__APP__/Promotion/index"  >今日特价</a> <img style="vertical-align:middle" src="__ROOT__/public/themes/jindong/images/nav_li.gif">
            <a href="#"  >极品源码</a> <img style="vertical-align:middle" src="__ROOT__/public/themes/jindong/images/nav_li.gif">
            <a href="__APP__/Cart/index"  >查看购物车</a> <img style="vertical-align:middle" src="__ROOT__/public/themes/jindong/images/nav_li.gif">
            <a href="__APP__/Quotation/index"  >报价单</a> <img style="vertical-align:middle" src="__ROOT__/public/themes/jindong/images/nav_li.gif">
          </div>
          <div  style="float:right; color:#acacac; padding-right:15px;">
            <script type="text/javascript" src="__ROOT__/public/js/transport.js"></script>
            <script type="text/javascript" src="__ROOT__/public/js/utils.js"></script>
            <font id="ECS_MEMBERZONE">您好，欢迎您光临万联商城！
              <a href="__APP__/Login/index">
              <?php if ($_SESSION['userMsg']!=null): ?>
                <?php echo ($_SESSION['userMsg']['userName']); ?>
                <?php else: ?>【登录】
              <?php endif ?>
              </a>
              <span>，新用户？</span>
              <a style="color:#ff6600" href="__APP__/Register/index">[免费注册]</a>
            </font>
          </div>
        </ul>
        <p id="logo"><img style="float:left" src="__ROOT__/public/themes/jindong/images/logo.gif"/></a></p>
      </div>
      <div id="globalNav">
        <ul>
          <?php if($pageName == index): ?><li><a href="__APP__/Index/index" class="cur">首页</a></li>
          <?php else: ?>
          <li><a href="__APP__/Index/index">首页</a></li><?php endif; ?>
          <?php if($pageName == category1): ?><li><a href="__APP__/Category/index/id/1" class="cur">服饰鞋帽</a></li>
          <?php else: ?>
          <li><a href="__APP__/Category/index/id/1"  >服饰鞋帽</a></li><?php endif; ?>
          <?php if($pageName == auction): ?><li><a href="__APP__/Auction/index" target="_blank" class="cur">夺宝岛</a></li>
          <?php else: ?>
          <li><a href="__APP__/Auction/index" target="_blank"  >夺宝岛</a></li><?php endif; ?>
          <?php if($pageName == Diy): ?><li><a href="__APP__/Diy/index" class="cur">装机大师</a></li>
          <?php else: ?>
          <li><a href="__APP__/Diy/index">装机大师</a></li><?php endif; ?>
          <?php if($pageName == Message): ?><li><a href="__APP__/Message/index" class="cur">留言板</a></li>
          <?php else: ?>
          <li><a href="__APP__/Message/index">留言板</a></li><?php endif; ?>
          <?php if($pageName == category2): ?><li><a href="__APP__/Category/index/id/2" class="cur">汽车用品</a></li>
          <?php else: ?>
          <li><a href="__APP__/Category/index/id/2"  >汽车用品</a></li><?php endif; ?>
          <?php if($pageName == category3): ?><li><a href="__APP__/Category/index/id/3" class="cur">展销会专栏</a></li>
          <?php else: ?>
          <li><a href="__APP__/Category/index/id/3"  >展销会专栏</a></li><?php endif; ?>
        </ul>
      </div>
      <div id="globalSearch">
        <img style="position:absolute; left:0;" src="__ROOT__/public/themes/jindong/images/search_box_l.gif">
        <img  style="position:absolute; right:0;" src="__ROOT__/public/themes/jindong/images/search_box_r.gif">
        <form id="searchForm" name="searchForm" method="post" action="__APP__/Search/index" onSubmit="return checkSearchForm()" style="background:#99CC00; padding-left:13px;">
          <div class="search_left">
            <input style="float:left;" name="keywords" type="text" id="keyword" value="请输入商品关键字" onclick="javascript:this.value='';this.style.color='#333333';" />
            <input type="image" src="__ROOT__/public/themes/jindong/images/search.gif" style="float:left" />
            <span class="key2">热门搜索 ：
              <a target="_blank" style=" color:#ffcccc" href="__APP__/Search/index">品牌日用品</a>
              <a target="_blank" style=" color:#ffcccc" href="__APP__/Search/index">品牌服装</a>
            </span>
          </div>
          <div class="search_right">
            <div class="buy_car_bg clearfix" id="ECS_CaRTINFO" >
              <a href="__APP__/Cart/index">
                <span>购物车中有<b>0</b>件商品</span>
                <ul class="car_ul">
                <a href="#" style="color:#999; padding-left:30px;">您的购物车暂无商品 赶快选择心爱的商品吧</a>
                </ul>
              </a>
            </div>
            <a href="__APP__/Cart/flow"><img src="__ROOT__/public/themes/jindong/images/qujiesuan.gif"></a>
          </div>
        </form>
      </div>
      
      <div class="p_w" style="clear:both; overflow:hidden"></div>
      <div id="urHere" class="globalModule">
        <h3><a href=".">首页</a> <code>&gt;</code> 购物流程</h3>
      </div>
      <div class="blank"></div>
      <form action="__APP__/Cart/checkflow" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <div class="flowBox_title">
          <dl></dl><dt>填写配送信息</dt><dd></dd>
        </div>
        <div class="flowBox">
        <table border="0" cellspacing="0" class="tableList" >
          <tr>
            <th>配送区域:</th>
            <td colspan="3">
            <select name="country" id="selCountries_0" onchange="region.changed(this, 1, 'selProvinces_0')">
              <option value="0">请选择国家</option>
              <option value="1" selected>中国</option>
            </select>
            <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, 'selCities_0')">
              <option value="0">请选择省</option>
              <option value="2" >北京</option>
              <option value="3" >安徽</option>
              <option value="4" >福建</option>
              <option value="5" >甘肃</option>
              <option value="6" >广东</option>
              <option value="7" >广西</option>
              <option value="8" >贵州</option>
              <option value="9" >海南</option>
              <option value="10" >河北</option>
              <option value="11" >河南</option>
              <option value="12" >黑龙江</option>
              <option value="13" >湖北</option>
              <option value="14" >湖南</option>
              <option value="15" >吉林</option>
              <option value="16" >江苏</option>
              <option value="17" >江西</option>
              <option value="18" >辽宁</option>
              <option value="19" >内蒙古</option>
              <option value="20" >宁夏</option>
              <option value="21" >青海</option>
              <option value="22" >山东</option>
              <option value="23" >山西</option>
              <option value="24" >陕西</option>
              <option value="25" >上海</option>
              <option value="26" >四川</option>
              <option value="27" >天津</option>
              <option value="28" >西藏</option>
              <option value="29" >新疆</option>
              <option value="30" >云南</option>
              <option value="31" >浙江</option>
              <option value="32" >重庆</option>
              <option value="33" >香港</option>
              <option value="34" >澳门</option>
              <option value="35" >台湾</option>
            </select>
            <select name="city" id="selCities_0" onchange="region.changed(this, 3, 'selDistricts_0')">
              <option value="0">请选择市</option>
            </select>
            <select name="district" id="selDistricts_0" style="display:none">
              <option value="0">请选择区</option>
            </select>
            <span class="textStrong">(必填)</span>
          </td>
        </tr>
        <tr>
          <th>收货人姓名:</th>
          <td><input name="consignee" type="text" value="" id="consignee_0" class="textInput" /> <span class="textStrong">(必填)</span></td>
          <th>电子邮件地址:</th>
          <td><input name="email" type="text" value="123@yahoo.com.cn" id="email_0" class="textInput" /> <span class="textStrong">(必填)</span></td>
        </tr>
        <tr>
          <th>详细地址:</th>
          <td><input name="address" type="text" value="" id="address_0" class="textInput" /> <span class="textStrong">(必填)</span></td>
          <th>邮政编码:</th>
          <td><input name="zipcode" type="text" value="" id="zipcode_0" class="textInput" /></td>
        </tr>
        <tr>
          <th>电话:</th>
          <td><input name="tel" type="text" value="" id="tel_0" class="textInput" /> <span class="textStrong">(必填)</span></td>
          <th>手机:</th>
          <td><input name="mobile" type="text" value="" id="mobile_0" class="textInput" /></td>
        </tr>
        <tr>
          <th>标志建筑:</th>
          <td><input name="sign_building" type="text" value="" id="sign_building_0" class="textInput" /></td>
          <th>最佳送货时间:</th>
          <td><input name="best_time" type="text" value="" id="best_time_0" class="textInput" /></td>
        </tr>
        <tr>
          <td colspan="4" align="center">
            <input type="submit" name="Submit" value="配送至这个地址" />
            <input type="hidden" name="step" value="consignee" />
            <input type="hidden" name="act" value="checkout" />
            <input name="address_id" type="hidden" value="" />
          </td>
        </tr>
      </table>
    </div>
    <div class="blank"></div>
  </form>
  <div class="blank"></div>
  <div class="blank"></div>
  
      <div id="globalHelp" class="globalModule">
     <div class="clearfix">
       <dl>
         <dt>
           <img src="__ROOT__/public/themes/jindong/images/help_1.gif" />
           <a href='article_cat.php?id=5' title="购物指南">购物指南</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=9" title="购物流程">购物流程</a></dd>
         <dd><a href="article.php?id=10" title="会员介绍">会员介绍</a></dd>
         <dd><a href="article.php?id=36" title="常见问题">常见问题</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="__ROOT__/public/themes/jindong/images/help_2.gif" />
           <a href='article_cat.php?id=7' title="配送方式">配送方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=15" title="快递运输">快递运输</a></dd>
         <dd><a href="article.php?id=16" title="特快专递(EMS)">特快专递(EMS)</a></dd>
         <dd><a href="article.php?id=43" title="上门自提">上门自提</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="__ROOT__/public/themes/jindong/images/help_3.gif" />
           <a href='article_cat.php?id=10' title="支付方式">支付方式</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=18" title="货到付款">货到付款</a></dd>
         <dd><a href="article.php?id=19" title="在线支付">在线支付</a></dd>
         <dd><a href="article.php?id=20" title="银行转账">银行转账</a></dd>
         <dd><a href="article.php?id=37" title="分期付款">分期付款</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="__ROOT__/public/themes/jindong/images/help_4.gif" />
           <a href='article_cat.php?id=8' title="售后服务">售后服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=21" title="退换货原则">退换货原则</a></dd>
         <dd><a href="article.php?id=22" title="退换货流程">退换货流程</a></dd>
         <dd><a href="article.php?id=23" title="价格保护">价格保护</a></dd>
         <dd><a href="article.php?id=38" title="退款说明">退款说明</a></dd>
       </dl>
       <dl>
         <dt>
           <img src="__ROOT__/public/themes/jindong/images/help_5.gif" />
           <a href='article_cat.php?id=9' title="特色服务">特色服务</a>
         </dt>
         <div class="blank5"></div>
         <dd><a href="article.php?id=24" title="商品拍卖">商品拍卖</a></dd>
         <dd><a href="article.php?id=25" title="DIY装机">DIY装机</a></dd>
         <dd><a href="article.php?id=26" title="上门服务">上门服务</a></dd>
         <dd><a href="article.php?id=39" title="上门装机">上门装机</a></dd>
         <dd><a href="article.php?id=40" title="香港代购">香港代购</a></dd>
       </dl>
     </div>
     <div class="blank"></div>
     <div class="blank"></div>
     <div class="serve clearfix">
       <ul  class="line"><img src="__ROOT__/public/themes/jindong/images/serve_1.gif"></ul>
       <ul  class="line"><img src="__ROOT__/public/themes/jindong/images/serve_2.gif"></ul>
       <ul  class="line"><img src="__ROOT__/public/themes/jindong/images/serve_3.gif"></ul>
       <ul ><img src="__ROOT__/public/themes/jindong/images/serve_4.gif"></ul>
     </div>
   </div>
   <div class="blank"></div>
   <div id="globalFooter">
     <p id="footerNav">
       <a href="article.php?id=1" >关于我们</a>
       |
       <a href="article.php?id=2" >联系我们</a>
       |
       <a href="article.php?id=3" >广告服务</a>
       |
       <a href="http://jetli.taobao.com/" >品牌加盟</a>
       |
       <a href="wholesale.php" >批发方案</a>
       |
       <a href="myship.php" >配送方式</a>
       |
       <script type="text/javascript" src="__ROOT__/public/js/dialog3.js"></script>
     </p>
     <p id="copyright">&copy; 2005-2012 京东网上商城 版权所有，并保留所有权利。</p>
     <p id="address"></p>
     <p id="phone"></p>
     <p id="imlist">
       <img src="__ROOT__/public/images/pa.gif" alt="QQ" /> <a href="#" target="_blank">393769718</a>
       <img src="__ROOT__/public/images/T1B7m_XeXuXXaHNz_X-16-16.gif" alt="淘宝旺旺" /><a href="#" target="_blank"> tddt8</a>
     </p>
     <p id="qureyInfo">共执行 12 个查询，用时 0.017868 秒，在线 3 人，Gzip 已禁用，占用内存 3.160 MB<img src="" alt="" style="width:0px;height:0px;" /></p>
     <div align="center" ></div>
     <div class="blank"></div>
     <div style="text-align:center">
       <a href="#"><img src="__ROOT__/public/themes/jindong/images/fot_1.gif"></a>
       <a href="#"><img src="__ROOT__/public/themes/jindong/images/fot_2.gif"></a>
       <a href="#"><img src="__ROOT__/public/themes/jindong/images/fot_3.gif"></a>
     </div>
   </div>
  </div>
 </body>
</html>