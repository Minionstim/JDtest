<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>商品搜索_电脑_京东网上商城-综合网购首选</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="__ROOT__/public/js/global.js"></script>
    <script type="text/javascript" src="__ROOT__/public/js/compare.js"></script>
    <script type="text/javascript" src="__ROOT__/public/js/common.js"></script>
    <link href="__ROOT__/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <style type="text/css">
	<!--
	.age_box a{float: left; height:22px; line-height:22px; width:70px; background:url(__ROOT__/public/themes/jindong/images/biao6.gif) 0 center no-repeat; padding-left:10px;font-family:Arial, Helvetica, sans-serif;color:#333333}
	-->
	</style>
	<script type="Text/Javascript" language="JavaScript">
	function selectPage(sel)
	{
	  sel.form.submit();
	}
	var button_compare = "比较选定商品";
    var exist = "您已经选择了%s";
    var count_limit = "最多只能选择4个商品进行对比";
    var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
    var button_compare = '';
    var exist = "您已经选择了%s";
    var count_limit = "最多只能选择4个商品进行对比";
    var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
    var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
	window.onload = function()
	{
	Compare.init();
	//fixpng();
	}
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
      <div id="globalLeft">
        <div id="o-search" style="bottom:50px;">
          <div class="allsort">
            <div class="mt">
              <strong><a href="__APP__/Catalog/index">全部商品分类</a></strong>
              <div class="extra">&nbsp;</div>
            </div>
            <div class="mc">
              <!-- 左上动态菜单 -->
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="item  fore" onMouseOver="this.className='item  fore  hover';"  onMouseOut="this.className='item  fore';">
                <span>
                  <h3><a href="category.php?id=355">展销会专栏</a></h3>
                  <s></s>
                </span>
                <div class="i-mc">
                  <div class="subitem">
                    <dl  class="fore" >
                      <dt><a href="category.php?id=356">红酒</a></dt>
                      <dd>
                        <em><a href="category.php?id=363">长城干红系列</a></em>
                        <em><a href="category.php?id=356">更多&gt;&gt;</a></em>
                      </dd>
                    </dl>
                  </div>
                  <div class="fr">
				    <dl class="brands">
				      <dt>推荐品牌</dt>
				      <dd> 
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				        <a href="#" style="margin-right:3px;width:70px;display:block; float:left; height:18px; line-height:18px; margin:0 0 3px; overflow:hidden;">飞利浦</a>
				      </dd>
				    </dl>
				  </div>
                </div>
              </div>
              <div class="extra">
                <a href="__APP__/Catalog/index">全部商品分类</a>
              </div>
            </div>
          </div>
        </div>
        <div class="blank"></div>
        <div id="brandlist" class="globalModule" style="margin-top:355px;">
          <h3><div id="list_t_l"><div id="list_t_r"><b>按年龄查询</b></div></div></h3>
          <div id="global_box">
            <div style="clear:both"></div>
            <div class="age_box">
              <a target="_blank" href="#">出生-12个月</a>
              <a target="_blank" href="#">12-24个月</a>
              <a target="_blank" href="#">2岁</a>
              <a target="_blank" href="#">3-4岁</a>
              <a target="_blank" href="#">5-7岁</a>
              <a target="_blank" href="#">8-11岁</a>
              <a target="_blank" href="#">12-14岁</a>
              <a target="_blank" href="#">15岁以上</a>
            </div>
          </div>
        </div>
        <div class="blank"></div>
        <div id="topList" class="globalModule">
          <h3><div id="list_t_l"><div id="list_t_r"><b>销售排行</b></div></div></h3>
          <div id="global_box">
            <ul>
              <li style=" overflow:hidden;">
                <span class="count" >1</span>
                <div class="top_one">
                  <a style="color:#FFF" href="__APP__/Goods/index" title=""><img style=" width:50px; height:38px;" src="__ROOT__/public/images/201001/thumb_img/4753_thumb_G_1264530751217.jpg" alt="" class="samllimg" /> </a>
                  <a style="float:left" href="__APP__/Goods/index" title="">贝尔莱德 蒸汽挂烫机GS18-DJ/H ... 
                  <br/>美智价：<font class="f1">￥199元</font></a>
                </div>
                <div style="clear:both"></div>
              </li>
              <li style=" overflow:hidden;">
                <span class="count" >2</span>
                <a href="__APP__/Goods/index" title="">多普达(Dopod) S505 CDMA...</a>
              </li>
              <li style=" overflow:hidden;">
                <span class="count" >3</span>
                <a href="__APP__/Goods/index" title="">多普达(Dopod) S505 CDMA...</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="globalBigRight">
        <div id="globalGoodsList" class="globalModule">
          <div class="globalGoodsListMenu">
            <form action="" method="post" class="sort" name="listform">
              <span>搜索结果</span>
              <span style="float: right; margin-top:-26px;" >
                <span class="globalGoodsListMenuDisplay">显示方式：  <a href="javascript:;" onclick="javascript:display_mode('list')"><img src="__ROOT__/public/themes/jindong/images/btn_display_mode_list.gif" alt="" /></a> <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="__ROOT__/public/themes/jindong/images/btn_display_mode_grid_act.gif" alt="" /></a></span>
                <select name="sort">
                  <option value="goods_id" selected>按上架时间排序</option>
                  <option value="shop_price">按价格排序</option>
                  <option value="last_update">按更新时间排序</option>
                </select>
                <select name="order">
                  <option value="DESC" selected>倒序</option>
                  <option value="ASC">正序</option>
                </select>
                <input type="image" name="imageField" src="__ROOT__/public/themes/jindong/images/btn_submit.gif" />
                <input type="hidden" name="page" value="1" />
                <input type="hidden" name="display" value="grid" id="display" />
                <input type="hidden" name="keywords" value="电脑" />
                <input type="hidden" name="category" value="0" />
                <input type="hidden" name="brand" value="0" />
                <input type="hidden" name="min_price" value="0" />
                <input type="hidden" name="max_price" value="0" />
                <input type="hidden" name="action" value="" />
                <input type="hidden" name="intro" value="" />
                <input type="hidden" name="goods_type" value="0" />
                <input type="hidden" name="sc_ds" value="0" />
                <input type="hidden" name="outstock" value="0" />
              </span>
            </form>
          </div>
          <div class="itemGrid">
            <div class="item">
              <p class="pic"><a href="__APP__/Goods/index"><img src="__ROOT__/public/images/201001/thumb_img/4730_thumb_G_1262451940947.jpg" alt="惠普（HP）DX2355MT WE572..." /></a></p>
              <p class="name" style="height:36px; overflow:hidden; margin:0 15px;">
                <a href="__APP__/Goods/index" title="">惠普（HP）DX2355MT WE572...<span>三年上门服务 主流配置 HP品质</span></a>
              </p>
              <p class="price">
                <span class="marketPrice">￥3838元</span>
                <span class="goodsPrice">￥3199元</span>
              </p>			
              <p class="btnList">
                <a href="javascript:collect(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4730,'惠普（HP）DX2355MT WE572...')"><img src="__ROOT__/public/themes/jindong/images/buttons_comp.gif"></a>
              </p>
            </div>
            <div class="item">
              <p class="pic"><a href="__APP__/Goods/index"><img src="__ROOT__/public/images/201001/thumb_img/4730_thumb_G_1262451940947.jpg" alt="惠普（HP）DX2355MT WE572..." /></a></p>
              <p class="name" style="height:36px; overflow:hidden; margin:0 15px;">
                <a href="__APP__/Goods/index" title="">惠普（HP）DX2355MT WE572...<span>三年上门服务 主流配置 HP品质</span></a>
              </p>
              <p class="price">
                <span class="marketPrice">￥3838元</span>
                <span class="goodsPrice">￥3199元</span>
              </p>			
              <p class="btnList">
                <a href="javascript:collect(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4730,'惠普（HP）DX2355MT WE572...')"><img src="__ROOT__/public/themes/jindong/images/buttons_comp.gif"></a>
              </p>
            </div>
            <div class="item">
              <p class="pic"><a href="__APP__/Goods/index"><img src="__ROOT__/public/images/201001/thumb_img/4730_thumb_G_1262451940947.jpg" alt="惠普（HP）DX2355MT WE572..." /></a></p>
              <p class="name" style="height:36px; overflow:hidden; margin:0 15px;">
                <a href="__APP__/Goods/index" title="">惠普（HP）DX2355MT WE572...<span>三年上门服务 主流配置 HP品质</span></a>
              </p>
              <p class="price">
                <span class="marketPrice">￥3838元</span>
                <span class="goodsPrice">￥3199元</span>
              </p>			
              <p class="btnList">
                <a href="javascript:collect(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_coll.gif"></a> <a href="javascript:addToCart(4730)"><img src="__ROOT__/public/themes/jindong/images/buttons_buy.gif"></a> <a href="javascript:;" onClick="Compare.add(4730,'惠普（HP）DX2355MT WE572...')"><img src="__ROOT__/public/themes/jindong/images/buttons_comp.gif"></a>
              </p>
            </div>
          </div>
          <div class="blank"></div>
          <form name="selectPageForm" action="" method="get">
            <div id="pager"></div>
          </form>
        </div>
      </div>
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