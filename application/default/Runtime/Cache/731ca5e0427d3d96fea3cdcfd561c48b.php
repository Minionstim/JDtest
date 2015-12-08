<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>购物流程_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="__ROOT__/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="__ROOT__/public/js/shopping_flow.js"></script>
    <script type="text/javascript" src="__ROOT__/publicjs/showdiv.js"></script>
    <script type="text/javascript">
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
	var user_name_empty = "请输入您的用户名！";
    var email_address_empty = "请输入您的电子邮件地址！";
    var email_address_error = "您输入的电子邮件地址格式不正确！";
    var new_password_empty = "请输入您的新密码！";
    var confirm_password_empty = "请输入您的确认密码！";
    var both_password_error = "您两次输入的密码不一致！";
    var show_div_text = "请点击更新购物车按钮";
    var show_div_exit = "关闭";
    function collect_to_flow(goodsId)
    {
      var goods        = new Object();
      var spec_arr     = new Array();
      var fittings_arr = new Array();
      var number       = 1;
      goods.spec     = spec_arr;
      goods.goods_id = goodsId;
      goods.number   = number;
      goods.parent   = 0;
      Ajax.call('flow.php?step=add_to_cart', 'goods=' + goods.toJSONString(), collect_to_flow_response, 'POST', 'JSON');
    }
    function collect_to_flow_response(result)
    {
      if (result.error > 0)
      {
        // 如果需要缺货登记，跳转
        if (result.error == 2)
        {
          if (confirm(result.message))
          {
            location.href = 'user.php?act=add_booking&id=' + result.goods_id;
          }
        }
        else if (result.error == 6)
        {
          openSpeDiv(result.message, result.goods_id);
        }
        else
        {
          alert(result.message);
        }
      }
      else
      {
        location.href = 'flow.php';
      }
    }


//删除单个商品
      function delBook(carId)
      {
        window.location = "__APP__/Action/delete/carId/"+carId;
      }
      //清空购物车
      function clearCar()
      {
        if(confirm("是否清空购物车？"))
        {
          window.location = "__APP__/Action/clear";
        }
      }
      //修改产品数量
      function changeCount(carId)
      {
        //要修改成的数量
        var goodsCount = $("#txt"+carId).val();
        //利用ajax修改数量
        $.ajax({
          type:"post",
          url:"__APP__/Action/change",
          data:"carId="+carId+"&goodsCount="+goodsCount,
          dataType:"json",
          success:function(re){
            var new_price = re.new_price;
            var totalPrice = re.totalPrice;
            $("#totalSpan").html(totalPrice);
            $("#td"+carId).html(new_price);
          }
        });
      }





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
      <div style="width:80%; margin:0 AUTO">
        <div class="flow_tou">
          <img  style="float:left"src="__ROOT__/public/themes/jindong/images/cart_001.gif" />
          <span> 购物满400元，部分地区免运费，<a href="#">详细了解>></a></span>
        </div>
        <div class="blank5"></div>
        <div class="flowBox_title">
          <dl></dl><dt>我挑选的商品</dt><dd></dd>
        </div>
        <div class="flowBox">
          <form id="formCart" name="formCart" method="post" action="__APP__/Cart/update">
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#aacded">
              <tr>
                <th bgcolor="#ebf4fb">商品名称</th>
                <th bgcolor="#ebf4fb">属性</th>
                <th bgcolor="#ebf4fb">美智价</th>
                <th bgcolor="#ebf4fb">购买数量</th>
                <th bgcolor="#ebf4fb">小计</th>
                <th bgcolor="#ebf4fb">操作</th>
              </tr>
              <?php if(is_array($carInfo)): foreach($carInfo as $key=>$v): ?><tr>
                <td bgcolor="#ffffff" align="left">
                  <a href="__APP__/Goods/index" target="_blank"><img src="__ROOT__/public/images/201003/thumb_img/4759_thumb_G_1268730511818.jpg" border="0" title="完美搭配之夏秋装韩版磨破火辣牛仔小短裤" /></a><br />
                  <a href="__APP__/Goods/index" target="_blank" class="f6"><?php echo ($v["goodstitle"]); ?></a>
                </td>
                <td bgcolor="#ffffff"></td>
                <td align="center" bgcolor="#ffffff">￥<?php echo ($v["new_price"]); ?>元</td>
                <td align="center" bgcolor="#ffffff">
                  <input type="text" name="goods_number[42]" id="txt<?php echo ($v["carId"]); ?>" value="<?php echo ($v["goodsCount"]); ?>" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)"/>
                </td>
                <td align="center" bgcolor="#ffffff" id="td<?php echo ($v["carId"]); ?>"><?php echo (sum($v["new_price"],$v["goodsCount"])); ?></td>
                <td align="center" bgcolor="#ffffff">
                  <a class="f6" onclick="delBook(<?php echo ($v["carId"]); ?>)">删除</a>
                </td>
              </tr><?php endforeach; endif; ?>
              <tr>
                <td colspan="7" align="right" bgcolor="#ebf4fb" style="color:#F00; font-weight:bold">
          &nbsp;&nbsp;&nbsp;所有商品总价为：<span id="totalSpan"><?php echo (total($carInfo)); ?></span>￥
          &nbsp;&nbsp;&nbsp;          
                </td>
              </tr>
            </table>
            <input type="hidden" name="step" value="update_cart" />
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#aacded">
              <tr>
                <td bgcolor="#ffffff" style="padding:20px;0">
                  <a href="__APP__/Index/index"><img title="123" style="vertical-align:middle;" src="__ROOT__/public/themes/jindong/images/jixubuy.gif" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <input onclick="clearCar()" style="vertical-align:middle;"  type="button" value="" class="clear_car" />&nbsp;&nbsp;&nbsp;&nbsp;
                  <input style="vertical-align:middle;" name="submit" type="submit" class="gengxin_car" value="" />
                </td>
                <td bgcolor="#ffffff" align="right" style="padding:20px;0"><a href="__APP__/Cart/flow"><img title="456" src="__ROOT__/public/themes/jindong/images/checkout.gif" alt="checkout" /></a></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="blank"></div>
        <div class="blank5"></div>
      </div>
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