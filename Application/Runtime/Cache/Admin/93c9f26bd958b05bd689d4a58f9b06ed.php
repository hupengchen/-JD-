<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/icons/icol16.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/jd/Application/Admin/Common/Template//css/themer.css" media="screen">

<title>MWS Admin - Form Wizard</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
    <!-- Themer End -->

	<script>
        var session=new Array();
            session['levelId']='<?php session_start(); echo $_SESSION['admin']['levelId']; ?>'; 
</script>
<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/jd/Application/Admin/Common/Template//images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/jd/Application/Admin/Common/Template//example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                       你好,<?php echo ($_SESSION['admin']['nickName']); ?>
                    </div>
                    <ul>
                    	<li><a href="javascript:void(0)">
                        <?php  $level=$_SESSION['admin']['levelId']; if($level==1){ echo "超级管理员"; }elseif($level==2){ echo "高级管理员"; }elseif ($level==3) { echo "中级管理员"; }else{ echo "初级管理员"; } ?></a></li>
                        <li><a href="<?php echo U("Aedit/gedit");?>">更改密码</a></li>
                        <li><a href="<?php echo U("Logout/logout");?>">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	  
     	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <div id="mws-navigation">
                <ul>  
                    <li>
                        <a href="<?php echo U('Home/index');?>"><i class="icon-home"></i>显示</a>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(2,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="<?php echo U('Admin/index');?>"><i class="icon-users"></i>管理员系统</a>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(3,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                       <a href='<?php echo U("Window/showWindow");?>'><i class="icon-monitor"></i>橱窗信息管理</a>
                    </li>
                    <li>
                        <a href='<?php echo U("Aedit/gEdit");?>'><i class="icon-pencil"></i>管理员信息修改</a>
                    </li>

                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(4,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href='<?php echo U("User/user");?>'><i class="icon-user"></i>会员信息管理</a>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(5,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href='<?php echo U("Comments/comments");?>'><i class="icon-comments"></i>商品评论管理</a>
                    </li>
                   
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(6,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-shopping-cart"></i>订单管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Order/orderAll');?>">订单列表</a></li>

                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(7,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-television"></i>广告管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('advance/advance');?>">广告列表</a></li>
                            <li><a href="<?php echo U('advance/advanceAdd');?>">添加广告</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(8,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-bended-arrow-down"></i>友情链接</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('link/link');?>">链接列表</a></li>
                            <li><a href="<?php echo U('link/addLink');?>">添加链接</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(9,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-cogs"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Cate/index');?>">浏览分类</a></li>
                            <li><a href="<?php echo U('Cate/add');?>">添加分类</a></li>
                        </ul>
                    </li>

                     <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(10,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-tools"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Goods/index');?>">浏览商品</a></li>
                            <li><a href="<?php echo U('Goods/add');?>">添加商品</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(11,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-clubs"></i> 品牌管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Brands/index');?>">浏览品牌</a></li>
                            <li><a href="<?php echo U('Brands/add');?>">添加品牌</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(12,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-magic"></i> 尺寸管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Sizes/index');?>">浏览尺寸</a></li>
                            <li><a href="<?php echo U('Sizes/add');?>">添加尺寸</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(13,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-feather"></i> 颜色配置</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Colors/index');?>">浏览颜色</a></li>
                            <li><a href="<?php echo U('Colors/add');?>">添加颜色</a></li>
                        </ul>
                    </li>
                    <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(14,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a href="#"><i class="icon-camera"></i> 多图管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Multipics/index');?>">浏览</a></li>
                            
                        </ul>
                    </li>
                     <li style='display:<?php  if($_SESSION['admin']['power']==1){ echo 'block'; }else{ if(in_array(15,$_SESSION['admin']['power'])){ echo 'block'; }else{ echo 'none'; } } ?>'>
                        <a id='15' href="#"><i class="icon-newspaper"></i>站内新闻</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('News/news');?>">新闻展示</a></li>
                            <li><a href="<?php echo U('News/addNews');?>">添加新闻信息</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-box-add"></i>站内信管理</a>
                        <ul class="closed">
                            <li><a href="<?php echo U('Message/messageAll');?>">站内信息列表</a></li>
                            <li><a href="<?php echo U('Message/addMessage');?>">发送站内信息</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="<?php echo U('Survey/index');?>"><i class="icon-question-sign"></i>问卷调查</a>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">             
                <!-- Panels Start -->
                <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-magic"></i>管理员信息修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form " action="#" onsubmit="return false;" method="post">
                            
                            <fieldset class="wizard-step mws-form-inline">
                            <legend class="wizard-label"><i class="icol-user"></i> Edit</legend>
                                <input type="hidden" name="adminId" value='<?php echo ($data['adminId']); ?>'>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">账户名称<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input disabled type="text" name="uname" 
                                        value='<?php echo ($data['uname']); ?>'class="required large">
                                    </div>
                                    <label style="margin-left:160px" for="uname">字母数字下划线组成6到20位</label>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">帐号密码<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="password" name="upwd" class="large">
                                    </div>
                                    <label style="margin-left:160px" for="upwd">字母数字下划线组成6到20位</label>
                                </div>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">重复密码<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="password" name="r_upwd" class="large">
                                    </div>
                                     <label style="margin-left:160px" for="r_upwd">再次输入密码</label>
                                </div>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">管理员昵称<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="nickName"
                                        value="<?php echo ($data['nickName']); ?>" class="large">
                                    </div>
                                     <label style="margin-left:160px" for="nickName">字母数字下划线组成4到20位</label>
                                </div>
                                <div id class="mws-form-row">
                                    <label class="mws-form-label">角色名称<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select disabled name="levelId" class="required large">
                                            <option <?php echo $data['levelId']==4?'selected':''?> value="4">初级管理员</option>
                                            <option <?php echo $data['levelId']==3?'selected':''?> value="3">中级管理员</option>
                                            <option <?php echo $data['levelId']==2?'selected':''?> value="2">高级管理员</option>            
                                            <option <?php echo $data['levelId']==1?'selected':''?> value="1">超级管理员</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <div style="width:100%;padding-top:20px;padding-bottom:20px;background-color:#D2D2D2">
                                <!-- <button style="margin-left:90%"class="btn btn-success" type="button">提交</button> -->
                                 <a style="margin-left:80%"  href="<?php echo U("Home/index");?>"><button type='button' class='btn btn-primary'>退出</button></a>
                                 <input  type="submit" value="提交" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Panels End -->
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/jd/Application/Admin/Common/Template//js/libs/jquery-1.8.3.min.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    
    <script src="/jd/Application/Admin/Common/Template//jui/js/jquery-ui-1.9.2.min.js"></script>
   
    <!-- Plugin Scripts -->
    <script src="/jd/Application/Admin/Common/Template//plugins/colorpicker/colorpicker-min.js"></script>
    
    <!-- Wizard Plugin -->
    <script src="/jd/Application/Admin/Common/Template//custom-plugins/wizard/wizard.min.js"></script>
    <script src="/jd/Application/Admin/Common/Template//custom-plugins/wizard/jquery.form.min.js"></script>

    <!-- Core Script -->
    <script src="/jd/Application/Admin/Common/Template//bootstrap/js/bootstrap.min.js"></script>
    <script src="/jd/Application/Admin/Common/Template//js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/jd/Application/Admin/Common/Template//js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/jd/Application/Admin/Common/Template//js/demo/demo.wizard.js"></script>

    <!--自定以的js文件-->
    <script src="/jd/Application/Admin/Common/Js//style_change.js"></script>
    <script src="/jd/Application/Admin/Common/Js//admin_edit.js"></script>


</body>
</html>