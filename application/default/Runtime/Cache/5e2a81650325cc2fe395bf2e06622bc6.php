<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>DIY装机-986万资源社区</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="__ROOT__/public/js/common.js"></script>
    <script type="text/javascript" src="__ROOT__/public/js/index.js"></script>
    <script src="__ROOT__/public/themes/jindong/images/nav.js" type=text/javascript></script>
    <script src="__ROOT__/public/themes/jindong/images/jscook.js" type=text/javascript></script>
    <script src="__ROOT__/public/themes/jindong/images/xiangdao.js" type=text/javascript></script>
    <script src="__ROOT__/public/themes/jindong/images/commit.js" type=text/javascript></script>
    <link href="__ROOT__/public/themes/jindong/stye1024.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript">
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
      <div class="diy_body">
        <div class="block clearfix " >
          <div class=main>
            <div class=diynav>
              <a href="/" target="_blank" style="padding:0 10px;"> <img src="__ROOT__/public/themes/jindong/images/recommand.GIF" /></a>
              <a href="__APP__/Diy/diy"><img src="__ROOT__/public/themes/jindong/images/div.GIF" /></a>
              <img src="__ROOT__/public/themes/jindong/images/comment.GIF" />
            </div>
            <div style="padding:8px;">
              <script src="__ROOT__/public/themes/jindong/images/info.js" type=text/javascript></script>
            </div>
            <!--[if !ie]>正文左侧开始<![endif]-->
            <div class=left>
              <div class=pzd_t><img src="__ROOT__/public/themes/jindong/images/b1.gif" width=426 height=88></div>
              <div class=pzd_c>
                <div class=pzdlist_wrap>
                  <div class=pzdlist_thead>
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60>配件</td>
                          <td>名称</td>
                          <td width=66>价格</td>
                          <td width=54>数量</td>
                          <td width=45>取消</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60>CPU</td>
                          <td class=align_left><span id=span_M_CPU1 style="margin-left:10px">&nbsp;</span></td>
                          <td class="machineFittingsPrice price" width=66><span class=￥ id=span_M_CPU2>&nbsp;</span></td>
                          <td width=54><span id=span_M_CPU3>&nbsp;</span></td>
                          <td width=45>
                            <a onclick='javascript:deltitle("M_CPU")' href="javascript:;">
                              <img height=22 src="__ROOT__/public/themes/jindong/images/DIY_ZX_26.gif" width=22 />
                            </a>
                            <input id=Id_M_CPU type=hidden name=Id_M_CPU />
                            <input id=Price_M_CPU  type=hidden value=0 name=Price_M_CPU />
                            <input id=Price1_M_CPU type=hidden value=0 name=Price1_M_CPU />
                            <input id=num_M_CPU type=hidden value=0 name=num_M_CPU />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60>CPU</td>
                          <td class=align_left><span id=span_M_CPU1 style="margin-left:10px">&nbsp;</span></td>
                          <td class="machineFittingsPrice price" width=66><span class=￥ id=span_M_CPU2>&nbsp;</span></td>
                          <td width=54><span id=span_M_CPU3>&nbsp;</span></td>
                          <td width=45>
                            <a onclick='javascript:deltitle("M_CPU")' href="javascript:;">
                              <img height=22 src="__ROOT__/public/themes/jindong/images/DIY_ZX_26.gif" width=22 />
                            </a>
                            <input id=Id_M_CPU type=hidden name=Id_M_CPU />
                            <input id=Price_M_CPU  type=hidden value=0 name=Price_M_CPU />
                            <input id=Price1_M_CPU type=hidden value=0 name=Price1_M_CPU />
                            <input id=num_M_CPU type=hidden value=0 name=num_M_CPU />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60>CPU</td>
                          <td class=align_left><span id=span_M_CPU1 style="margin-left:10px">&nbsp;</span></td>
                          <td class="machineFittingsPrice price" width=66><span class=￥ id=span_M_CPU2>&nbsp;</span></td>
                          <td width=54><span id=span_M_CPU3>&nbsp;</span></td>
                          <td width=45>
                            <a onclick='javascript:deltitle("M_CPU")' href="javascript:;">
                              <img height=22 src="__ROOT__/public/themes/jindong/images/DIY_ZX_26.gif" width=22 />
                            </a>
                            <input id=Id_M_CPU type=hidden name=Id_M_CPU />
                            <input id=Price_M_CPU  type=hidden value=0 name=Price_M_CPU />
                            <input id=Price1_M_CPU type=hidden value=0 name=Price1_M_CPU />
                            <input id=num_M_CPU type=hidden value=0 name=num_M_CPU />
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60><a style="color: #3366ff">装机服务</a></td>
                          <td class=align_left><div class=name><a class=link_1 title="点击链接查看介绍" href="/" target=_blank>选择自提取货装机服务，专人指导不用愁，点击马上了解装机服务各个细节及付款情况</a></div></td>
                        </tr>
                      </tbody>
					</table>
				  </div>
				  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60><a style="color: #3366ff">装机服务</a></td>
                          <td class=align_left><div class=name><a class=link_1 title="点击链接查看介绍" href="/" target=_blank>选择自提取货装机服务，专人指导不用愁，点击马上了解装机服务各个细节及付款情况</a></div></td>
                        </tr>
                      </tbody>
					</table>
				  </div>
				  <div class="pzdlist_td machineFittingsItem">
                    <table border=0 cellspacing=0 cellpadding=0 width="100%">
                      <tbody>
                        <tr>
                          <td class=first width=60><a style="color: #3366ff">装机服务</a></td>
                          <td class=align_left><div class=name><a class=link_1 title="点击链接查看介绍" href="/" target=_blank>选择自提取货装机服务，专人指导不用愁，点击马上了解装机服务各个细节及付款情况</a></div></td>
                        </tr>
                      </tbody>
					</table>
				  </div>
				  <FORM name=Form1 action="" method=post>
				    <div class=collect>
				      <strong id=wareallprice class=price>总价：￥<SPAN id=spanallprice>0</SPAN></strong>
				    </div>
				    <div class=operate>
				      <input class="button_qk" onclick="javascript:isclsall();" type="button"/>
				      <input type="image" src="__ROOT__/public/themes/jindong/images/b13.gif" onClick="javascript:return ispost();"  style="margin:0 0 0 100px"/>
				    </div>
				    <INPUT id=strwareid type=hidden name=strwareid>
				    <INPUT id=strwarenum type=hidden name=strwarenum>
				  </FORM>
				</div>
		      </div>
		      <div class=pzd_b></div>
		    </div>
		    
		    <!--[if !ie]>正文左侧结束<![endif]-->
		    <!--[if !ie]>正文右侧开始<![endif]-->
		    
		    <div class=right>
		      <ul class=pzlist>
		        <table class="txt_14" style="border: 0px solid rgb(51, 102, 204);" width="510" cellpadding="0" cellspacing="0" height="52">
		          <tbody>
		            <tr>
		              <td class="txt_14" align="middle" height="25">
		                <a class="curr" href="javascript:ifrurlcpu();">C&nbsp;P&nbsp;U&nbsp;</a>&nbsp; | 
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> |
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> | 
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> | 
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> | 
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> | 
						<a class="abc" href="javascript:ifrurlmainboard();">主　板</a> 
					  </td>
					</tr>
					<tr>
					  <td class="txt_14" align="middle" height="25">
					    <a href="javascript:ifurl('display');">显示器</a> |
					    <a href="javascript:ifurl('display');">显示器</a> | 
					    <a href="javascript:ifurl('display');">显示器</a> | 
					    <a href="javascript:ifurl('display');">显示器</a> | 
					    <a href="javascript:ifurl('display');">显示器</a> | 
					    <a href="javascript:ifurl('display');">显示器</a> | 
					    <a href="javascript:ifurl('display');">显示器</a> 
				      </td>
				    </tr>
				  </tbody>
				</table>
		      </ul>
		      <div class="GoodsListBox">
		        <div class="listloading"></div>
		        <div>
		          <IFRAME id=if1 name=if1 src="__APP__/Diy/diy" frameBorder=0 width=545 style="float:left; overflow:hidden; height:860px"></IFRAME>
		        </div>
		        <script>//addprice1();</script>
		      </div>
		    </div>
		    
		    <!--[if !ie]>正文右侧结束<![endif]-->
		  
		  </div>
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