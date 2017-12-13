<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

						
							<li class="active">Admin</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Admin
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Atur Hak Akses
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="space-24"></div>
						

						<!-- ============================== FORM ============== -->
						  <form method="POST" action="<?=base_url('Admin/update');?>">
					<div class="col-xs-11">
						<div class="row">
                                           
	<!-- ============================== KIRI ============== -->
            <div class="col-xs-6">
<?php
if(isset($_GET['sukses'])){
      echo '<div class="alert alert-success text-center">Input Data Berhasil</div>';
} elseif(isset($_GET['gagal'])){
      echo '<div class="alert alert-danger text-center">Input Data Gagal</div>';
}

?>

<?php
foreach ($userakses->result() as $row) {
	
}
?>

            	<div class="row">
            		<div class="form-group">
            		<div class="col-xs-5">
            			<label>Domain : </label>
            		</div>
            		<div class="col-xs-4">
            		
                              <input type="text" name="domain" id="domain" class="form-control" autofocus data-placement="bottom" data-original-title="Input Domain" minlength="5" maxlength="5" required value="<?=$row->ac;?>">
                       		
            		</div>
            		
            		</div>
            		</div>
                    
					<div class="space-2"></div>
            	<div class="row">
            		<div class="form-group">
            		<div class="col-xs-5">
            			<label>Status Hak : </label>
            		</div>
            		<div class="col-xs-7">
            		<select name="status" id="status" class="form-control">
                        <option value=''>- Status -</option>  
                        <option value='Ijinkan' <?php if($row->status=="Ijinkan"){ echo 'selected'; }?>> Ijinkan</option>  
                        <option value='Tolak' <?php if($row->status=="Tolak"){ echo 'selected'; }?>> Tolak</option>  
                        
                      </select>
            		</div>
            		</div>
            		</div>
            		<div class="space-2"></div>
            		<div class="row">
            		
            		<div class="col-xs-5">
            			<label>Control Cost User : </label>
            		</div>
            		<div class="col-xs-7">
            		<select name="cost" id="cost" class="form-control">
                        <option value=''>- Control Cost User -</option>  
                        <option value='1' <?php if($row->is_super_user=="1"){ echo 'selected'; }?>> 1</option>  
                        <option value='0' <?php if($row->is_super_user=="0"){ echo 'selected'; }?>> 0</option>  
                        
                      </select>
            		</div>
            	
            		</div>
            		
<div class="space-12"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                             &nbsp;
                        </div>
                        <div class="col-xs-7 text-center">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                  
                        </div>
            		</div>
            		

           
               
            
                  
		</form>
     
            <div class="col-md-11">
                  <div class="space-24"></div><div class="space-24"></div>
  

</div>
</div></div>
		
           
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->