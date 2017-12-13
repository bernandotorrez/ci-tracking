<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?=$title;?></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?=base_url('template/assets/css/bootstrap.min.css');?>" />
		<link rel="stylesheet" href="<?=base_url('template/assets/font-awesome/4.5.0/css/font-awesome.min.css');?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?=base_url('template/assets/css/fonts.googleapis.com.css');?>" />


		<!-- ace styles -->
		<link rel="stylesheet" href="<?=base_url('template/assets/css/ace.min.css');?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?=base_url('template/assets/css/ace.min.css');?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">ER </span>
									<span class="white" id="id-text2">- TRACKING</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; PT. Bussan Auto Finance</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main center">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Login Admin

												<?php
												if(isset($_GET['gagal'])){
													echo "<div class='alert alert-danger center'><strong>Username</strong> atau <strong>Password</strong> Salah</div>";
												} else {
													echo "&nbsp;";
												}
												?>
											</h4>

											<div class="space-6"></div>

											<form method="post" action="<?=base_url('login/aksi_login_admin');?>" id="login-form">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus required/>
															<i class="ace-icon fa fa-user"></i>

														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" name="password" id="password" required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
													

														<button type="submit" class="width-35 pull-center btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix center">
											<div>
												
												
											</div>

										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								

								
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?=base_url('template/assets/js/jquery-2.1.4.min.js');?>"></script>
	<!-- 	<script src="<?=base_url('template/assets/js/jquery.validate.min.js');?>"></script>
		<script src="<?=base_url('assets/js/ace-elements.min.js');?>"></script>
		<script src="<?=base_url('assets/js/ace.min.js');?>"></script>
		-->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_url("template/assets/js/jquery.mobile.custom.min.js");?>'>"+"<"+"/script>");
		</script>

// 		<script type="text/javascript">
// 		jQuery(function($) {
			
			
// 				$('#login-form').validate({
// 					errorElement: 'div',
// 					errorClass: 'help-block',
// 					focusInvalid: false,
// 					ignore: "",
// 					rules: {
// 						username: {
// 							required: true
						
// 						},
// 						password: {
// 							required: true
							
// 						}
						
// 					},
			
// 					messages: {
						
// 						username: "Masukkan Username",
// 						password: "Masukkan Password"
// 					},
			
			
// 					highlight: function (e) {
// 						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
// 					},
			
// 					success: function (e) {
// 						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
// 						$(e).remove();
// 					},
			
// 					errorPlacement: function (error, element) {
// 						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
// 							var controls = element.closest('div[class*="col-"]');
// 							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
// 							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
// 						}
// 						else if(element.is('.select2')) {
// 							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
// 						}
// 						else if(element.is('.chosen-select')) {
// 							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
// 						}
// 						else error.insertAfter(element.parent());
// 					},
			
// 					submitHandler: function (form) {
// 					},
// 					invalidHandler: function (form) {
// 					}
// 				});
			
				
				
				
// 				$('#modal-wizard-container').ace_wizard();
// 				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
// 				/**
// 				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
// 					$(this).closest('form').validate().element($(this));
// 				});
				
// 				$('#mychosen').chosen().on('change', function(ev) {
// 					$(this).closest('form').validate().element($(this));
// 				});
// 				*/
				
				
// 				$(document).one('ajaxloadstart.page', function(e) {
// 					//in ajax mode, remove remaining elements before leaving page
// 					$('[class*=select2]').remove();
// 				});

// 		})
// </script>
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
				 $('#btn-login-dark').on('click', function(e) {
					$('body').attr('class', 'login-layout');
					$('#id-text2').attr('class', 'white');
					$('#id-company-text').attr('class', 'blue');
					
					e.preventDefault();
				 });
				 $('#btn-login-light').on('click', function(e) {
					$('body').attr('class', 'login-layout light-login');
					$('#id-text2').attr('class', 'grey');
					$('#id-company-text').attr('class', 'blue');
					
					e.preventDefault();
				 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
