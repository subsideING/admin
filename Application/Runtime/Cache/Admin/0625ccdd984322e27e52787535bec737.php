<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>网站后台系统管理</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="/Public/assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
        <link rel="stylesheet" href="/Public/assets/css/slackck.css" />
		<!-- ace settings handler -->
		<script src="/Public/assets/js/ace-extra.js"></script>
		
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/assets/js/html5shiv.js"></script>
		<script src="/Public/assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default    navbar-collapse">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="<?php echo U('Index/index');?>" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Slakck System
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->
					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons">
						<span class="sr-only">Toggle user menu</span>

						<img src="/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						<li class="transparent">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
							</a>

							<div class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a data-toggle="tab" href="#navbar-tasks">
												Tasks
												<span class="badge badge-danger">4</span>
											</a>
										</li>

										<li>
											<a data-toggle="tab" href="#navbar-messages">
												Messages
												<span class="badge badge-danger">5</span>
											</a>
										</li>
									</ul><!-- .nav-tabs -->

									<div class="tab-content">
										<div id="navbar-tasks" class="tab-pane in active">
											<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
												<li class="dropdown-content">
													<ul class="dropdown-menu dropdown-navbar">
														<li>
															<a href="#">
																<div class="clearfix">
																	<span class="pull-left">Software Update</span>
																	<span class="pull-right">65%</span>
																</div>

																<div class="progress progress-mini">
																	<div style="width:65%" class="progress-bar"></div>
																</div>
															</a>
														</li>

														<li>
															<a href="#">
																<div class="clearfix">
																	<span class="pull-left">Hardware Upgrade</span>
																	<span class="pull-right">35%</span>
																</div>

																<div class="progress progress-mini">
																	<div style="width:35%" class="progress-bar progress-bar-danger"></div>
																</div>
															</a>
														</li>

														<li>
															<a href="#">
																<div class="clearfix">
																	<span class="pull-left">Unit Testing</span>
																	<span class="pull-right">15%</span>
																</div>

																<div class="progress progress-mini">
																	<div style="width:15%" class="progress-bar progress-bar-warning"></div>
																</div>
															</a>
														</li>

														<li>
															<a href="#">
																<div class="clearfix">
																	<span class="pull-left">Bug Fixes</span>
																	<span class="pull-right">90%</span>
																</div>

																<div class="progress progress-mini progress-striped active">
																	<div style="width:90%" class="progress-bar progress-bar-success"></div>
																</div>
															</a>
														</li>
													</ul>
												</li>

												<li class="dropdown-footer">
													<a href="#">
														See tasks with details
														<i class="ace-icon fa fa-arrow-right"></i>
													</a>
												</li>
											</ul>
										</div><!-- /.tab-pane -->

										<div id="navbar-messages" class="tab-pane">
											<ul class="dropdown-menu-right dropdown-navbar dropdown-menu">
												<li class="dropdown-content">
													<ul class="dropdown-menu dropdown-navbar">
														<li>
															<a href="#">
																<img src="/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Alex:</span>
																		Ciao sociis natoque penatibus et auctor ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>a moment ago</span>
																	</span>
																</span>
															</a>
														</li>

														<li>
															<a href="#">
																<img src="/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Susan:</span>
																		Vestibulum id ligula porta felis euismod ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>20 minutes ago</span>
																	</span>
																</span>
															</a>
														</li>

														<li>
															<a href="#">
																<img src="/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Bob:</span>
																		Nullam quis risus eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>3:15 pm</span>
																	</span>
																</span>
															</a>
														</li>

														<li>
															<a href="#">
																<img src="/Public/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Kate:</span>
																		Ciao sociis natoque eget urna mollis ornare ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>1:33 pm</span>
																	</span>
																</span>
															</a>
														</li>

														<li>
															<a href="#">
																<img src="/Public/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
																<span class="msg-body">
																	<span class="msg-title">
																		<span class="blue">Fred:</span>
																		Vestibulum id penatibus et auctor  ...
																	</span>

																	<span class="msg-time">
																		<i class="ace-icon fa fa-clock-o"></i>
																		<span>10:09 am</span>
																	</span>
																</span>
															</a>
														</li>
													</ul>
												</li>

												<li class="dropdown-footer">
													<a href="inbox.html">
														See all messages
														<i class="ace-icon fa fa-arrow-right"></i>
													</a>
												</li>
											</ul>
										</div><!-- /.tab-pane -->
									</div><!-- /.tab-content -->
								</div><!-- /.tabbable -->
							</div><!-- /.dropdown-menu -->
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo ($_COOKIE['admin_username']); ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										个人设置
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										会员中心
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="javascript:;"  id="logout">
										<i class="ace-icon fa fa-power-off"></i>
										注销
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>
<script src="/Public/assets/js/jquery.min.js"></script>
<script src="/Public/assets/js/jquery.form.js"></script>
<script src="/Public/layer/layer.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#logout").click(function(){
		layer.confirm('你确定要退出吗？', {icon: 3}, function(index){
	    layer.close(index);
	    window.location.href="<?php echo U('Login/logout');?>";
	});
	});
});
</script>
	<!-- /section:basics/navbar.layout -->
	<div class="main-container" id="main-container">
		<!-- #section:basics/sidebar -->
					<div id="sidebar" class="sidebar responsive">

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<!-- #section:basics/sidebar.layout.shortcuts -->
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
<?php use Common\Controller\AuthController; use Think\Auth; $m = M('auth_rule'); $field = 'id,name,title,css,sort'; $data = $m->field($field)->where('pid=0 AND status=1')->order('sort')->select(); $auth = new Auth(); foreach ($data as $k=>$v){ if(!$auth->check($v['name'], cookie('aid')) && cookie('aid') != 1){ unset($data[$k]); } } ?>

<?php if(is_array($data)): foreach($data as $key=>$v): ?><li class="<?php if(CONTROLLER_NAME == $v['name']): ?>active open<?php endif; ?>"><!--open代表打开状态-->
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa <?php echo ($v["css"]); ?>"></i>
							<span class="menu-text">
								<?php echo ($v["title"]); ?>
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
    <?php $m = M('auth_rule'); $dataa = $m->where(array('pid'=>$v['id'],'status'=>1))->order('sort')->select(); foreach ($dataa as $kk=>$vv){ if(!$auth->check($vv['name'], cookie('aid')) && cookie('aid') != 1){ unset($dataa[$kk]); } } ?>
    <?php if(is_array($dataa)): foreach($dataa as $key=>$j): ?><li class="<?php if(($_COOKIE['s'] == $j['id'])): ?>active<?php endif; ?>">
								<a href="<?php echo U($j['name'],array('s'=>$j['id']));?>">
									<i class="menu-icon fa fa-caret-right"></i>
									<?php echo ($j["title"]); ?>
								</a>
								<b class="arrow"></b>
							</li><?php endforeach; endif; ?>
						</ul>
					</li><?php endforeach; endif; ?>
                    
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<!--主题-->
						<div class="page-header">
							<h1>
								您当前操作
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									添加商品
								</small>
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<form class="form-horizontal" name="form0" id="form0"  method="post" action="<?php echo U('goodsAdd');?>"  enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品名称：
										</label>
										<div class="col-sm-10">
											<input type="text" name="goods_name" id="goods_name" placeholder="必填：商品名称" class="col-xs-10 col-sm-6"/>
										</div>
									</div>
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											市场价格：
										</label>
										<div class="col-sm-10">
											<input type="text" name="market_price" id="market_price" placeholder="必填：市场价格" class="col-xs-10 col-sm-2"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											本店价格：
										</label>
										<div class="col-sm-10">
											<input type="text" name="shop_price" id="shop_price" placeholder="必填：本店价格" class="col-xs-10 col-sm-2"/>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品主图：
										</label>
										<div class="col-sm-10">
											<a href="javascript:;" class="file">
												<input type="file" name="logo[]" id="file0"/>
												
											</a>
											<span class="lbl">
												&nbsp;&nbsp;
												<img src="/Public/img/no_img.jpg" width="100" height="70" id="img0"/>
											</span>
											&nbsp;&nbsp;
											<a href="javascript:;" onClick="return backpic('/Public/img/no_img.jpg');" title="还原修改前的图片" class="file">
												撤销上传
											</a>
											<span class="lbl">
												&nbsp;&nbsp;上传前先用PS处理成等比例图片后上传，默认比例100*70、600*420、800*560像素
												<br/>
											</span>
										</div>
									</div>
									<!-- <div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											主图显示模式：
										</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input name="news_pic_type" id="news_pic_list" checked type="radio" class="ace" value="1"/>
													<span class="lbl">
														普通模式
													</span>
												</label>
												<label>
													<input name="news_pic_type" id="news_pic_qqlist" type="radio" class="ace" value="2"/>
													<span class="lbl">
														多图模式
													</span>
												</label>
											</div>
										</div>
									</div> -->
									<!-- <div class="space-4"></div>
									<link href="/Public/ppy/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
									<script src="/Public/ppy/js/fileinput.js" type="text/javascript"></script>
									<script src="/Public/ppy/js/fileinput_locale_zh.js" type="text/javascript"></script>
									<div class="form-group" id="pic_list">
										<div class="col-sm-12" style="padding-top:5px;">
											<input id="file-5" name="pic_all[]" type="file" class="file"  multiple data-preview-file-type="any" data-upload-url="#" data-preview-file-icon=""/>
											<br/>
											<textarea name="news_pic_content" class="col-xs-12 col-sm-12" id="news_pic_content"  placeholder="多图对应文章说明，例如： 图片一说明 | 图片二说明 | 图片三说明    每个文字说明以 | 分割"></textarea>
										</div>
									</div>
									<div class="space-4"></div> -->
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											是否上架：
										</label>
										<div class="col-sm-10" style="padding-top:5px;">
											<input name="is_on_sale" id="is_on_sale" value="是" class="ace ace-switch ace-switch-4 btn-flat" type="checkbox"/>
											<span class="lbl">
												&nbsp;&nbsp;默认关闭
											</span>
											<!-- <input type="checkbox" name="is_on_sale"
											value="是" >是

											<input type="checkbox" name="is_on_sale"
											value="否">否 -->
										</div>
									</div>
									
									<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-2 control-label no-padding-right" for="form-field-1">
											商品描述：
										</label>
										<div class="col-sm-10">
											<script src="/Public/ueditor/ueditor.config.js" type="text/javascript"></script>
											<script src="/Public/ueditor/ueditor.all.js" type="text/javascript"></script>
											<textarea name="goods_desc" rows="100%" style="width:100%" id="myEditor"></textarea>
											<script type="text/javascript">
											var editor = new UE.ui.Editor();
											editor.render("myEditor"); 											</script>
										</div>
									</div>
									<div class="space-4"></div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												保存
											</button>
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="hr hr-24"></div>
												<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="hidden">

									<div id="sidebar2" class="sidebar h-sidebar navbar-collapse collapse">
										<ul class="nav nav-list">
                                        
    <?php $m = M('auth_rule'); $dataaa = $m->where(array('pid'=>$_COOKIE['s'],'status'=>1))->select(); foreach ($dataaa as $kkk=>$vvv){ if(!$auth->check($vvv['name'], cookie('aid')) && cookie('aid') != 1){ unset($dataaa[$kkk]); } } ?>
    <?php if(is_array($dataaa)): foreach($dataaa as $key=>$k): ?><li>
												<a href="<?php echo U(''.$k['name'].'');?>">
													<o class="font12 <?php if((CONTROLLER_NAME.'/'.ACTION_NAME == $k['name'])): ?>rigbg<?php endif; ?>"><?php echo ($k["title"]); ?></o>
												</a>

												<b class="arrow"></b>
											</li><?php endforeach; endif; ?>


										</ul><!-- /.nav-list -->
									</div><!-- .sidebar -->
								</div>

							</div><!-- /.col -->
						</div><!-- /.row -->
						</div>
						<!-- /.page-content  -->
					</div>
				</div>
				<!-- /.main-content  -->
							<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">slackck</span>
							后台管理系统 &copy; 2015-2016
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>
            

		<!-- basic scripts -->


		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="/Public/assets/js/maxlength.js"></script>
		<script src="/Public/assets/js/ace/ace.js"></script>
		<script src="/Public/assets/js/ace/ace.sidebar.js"></script>
		<script src="/Public/assets/js/ace/ace.submenu-hover.js"></script>


		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			   $('#sidebar2').insertBefore('.page-content');
			   
			   $('.navbar-toggle[data-target="#sidebar2"]').insertAfter('#menu-toggler');
			   
			   
			   $(document).on('settings.ace.two_menu', function(e, event_name, event_val) {
				 if(event_name == 'sidebar_fixed') {
					 if( $('#sidebar').hasClass('sidebar-fixed') ) {
						$('#sidebar2').addClass('sidebar-fixed');
						$('#navbar').addClass('h-navbar');
					 }
					 else {
						$('#sidebar2').removeClass('sidebar-fixed')
						$('#navbar').removeClass('h-navbar');
					 }
				 }
			   }).triggerHandler('settings.ace.two_menu', ['sidebar_fixed' ,$('#sidebar').hasClass('sidebar-fixed')]);
			})
		</script>
		<script src="/Public/assets/js/jquery.form.js"></script>

				</div>
				<!-- /.main-container  -->
			</body>
		</html>
		<script>
		function backpic(picurl){
			$("#img0").attr("src",picurl);//还原修改前的图片
			$("input[name='file0']").val("");//清空文本框的值
		}
		
		$(document).ready(function(){
		
		//多图设置
		  $("#pic_list").hide();
		  $("#news_pic_list").click(function(){
		  	$("#pic_list").hide();
		  });
		  $("#news_pic_qqlist").click(function(){
		  	$("#pic_list").show();
		  });
		  
		  $("#pptaddress").hide();
		  $("#news_flag_vaj").click(function(){
		    $("#pptaddress").toggle(500);
		  });
		});
		
		
		$(function(){
			$('#form0').ajaxForm({
				beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
				success: complete, // 这是提交后的方法
				dataType: 'json'
			});
			
			function checkForm(){
				if( '' == $("#goods_name").val()){
					layer.alert('商品名称不能为空', {icon: 6}, function(index){
		 			layer.close(index);
					$('#goods_name').focus(); 
					});
					return false;
				}
			
				if( '' == $.trim($('#market_price').val())){
					layer.alert('商品名称不能为空', {icon: 6}, function(index){
		 			layer.close(index);
					$('#market_price').focus(); 
					});
					return false;
				}

				if( '' == $.trim($('#shop_price').val())){
					layer.alert('商品名称不能为空', {icon: 6}, function(index){
		 			layer.close(index);
					$('#shop_price').focus(); 
					});
					return false;
				}
		 }
			function complete(data){
				if(data.status==1){
					layer.alert(data.info, {icon: 6}, function(index){
		 			layer.close(index);
					window.location.href=data.url;
					});
				}else{
					layer.alert(data.info, {icon: 6}, function(index){
		 			layer.close(index);
					window.location.href=data.url;
					});
				}
			}
		 
		});
		
		$("#file0").change(function(){
			var objUrl = getObjectURL(this.files[0]) ;
			console.log("objUrl = "+objUrl) ;
			if (objUrl) {
				$("#img0").attr("src", objUrl) ;
			}
		}) ;
		//建立一個可存取到該file的url
		function getObjectURL(file) {
			var url = null ; 
			if (window.createObjectURL!=undefined) { // basic
			$("#news_flag_vap").attr("checked", true);
				url = window.createObjectURL(file) ;
			} else if (window.URL!=undefined) { // mozilla(firefox)
			$("#news_flag_vap").attr("checked", true);
				url = window.URL.createObjectURL(file) ;
			} else if (window.webkitURL!=undefined) { // webkit or chrome
				$("#news_flag_vap").attr("checked", true);
				url = window.webkitURL.createObjectURL(file) ;
			}
			return url ;
		}
		//来源
		function souadd(val){
			$('#news_source').val(val);
		}
		
		</script>