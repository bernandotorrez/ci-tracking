<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?=base_url('Home/index');?>" class="navbar-brand">
						<small>
							<i class="fa fa-search"></i>
							ER - TRACKING
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								<span class="user-info">
									<small>Welcome,</small>
									<?php 
									if($this->session->userdata('cek') == 'Headquarter' OR 
										$this->session->userdata('cek') == 'Cabang')
									{
									echo $this->session->userdata("gn"); 
								} else {
									echo $this->session->userdata("nama"); 
								}?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							

								<li>
									<a href="<?=base_url('Home/profil');?>">
										<i class="ace-icon fa fa-user-circle-o"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?=base_url('login/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<!-- <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div> -->

					<img src="<?=base_url('template/assets/images');?>/logo.png" style="height: 60px; width: 150px;"/>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<ul class="nav nav-list">
				<?php if($url=='Home/index' OR $url=='Home'){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Home/index');?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

						<?php if($url=='Home/profil' OR $url=='home/profil'){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Home/profil');?>">
							<i class="menu-icon fa fa-user-circle-o"></i>
							<span class="menu-text"> Profil </span>
						</a>

						<b class="arrow"></b>
					</li>
						<?php if($this->session->userdata('cek') =='Headquarter') { ?>
						<?php if($url=='Home/headquarter' OR $url=='home/headquarter'){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Home/headquarter');?>">
							<i class="menu-icon fa fa-check-circle-o"></i>
							<span class="menu-text"> Headquarter </span>
						</a>

						<b class="arrow"></b>
					</li>
						<?php } else { ?>
						<?php if($this->session->userdata('cek') =='Cabang') { ?>
					<?php if($url=='Home/branch' OR $url=="home/branch"){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Home/branch');?>">
							<i class="menu-icon fa fa-check-circle-o"></i>
							<span class="menu-text"> Branch </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php } } ?>
					<?php if(!empty($this->session->userdata('login_admin'))) { ?>
					<?php if($url=='Admin/akses' OR $url=='admin/akses' OR $url=='Admin/akses/(:any)'){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Admin/akses');?>">
							<i class="menu-icon fa fa-cog"></i>
							<span class="menu-text"> Akses </span>
						</a>

						<b class="arrow"></b>
					</li>

					
					<?php } ?>

					<?php if($url=='Home/report' OR $url=='home/report'){
					echo '<li class="active">';
					 } else { 
					echo '<li class="">';
				}
					?>
						<a href="<?php echo base_url('Home/report');?>">
							<i class="menu-icon fa fa-file-excel-o"></i>
							<span class="menu-text"> Report </span>
						</a>

						<b class="arrow"></b>
					</li>
				</ul><!-- /.nav-list -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>
