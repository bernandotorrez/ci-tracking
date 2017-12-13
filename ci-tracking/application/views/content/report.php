<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

						
							<li class="active">Report</li>
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
								Report
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Export To Excel
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="space-12"></div>
						

						<!-- ============================== FORM ============== -->
						  <form method="POST">
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

            		</div>
          
        
        <div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue text-right">
											
										</h3>


										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Results for Report
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div class="dt-buttons btn-overlap btn-group btn-overlap">
										</div>
										<div class="table-responsive">
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															NO
														</th>
														<th>PR_NUMBER</th>
														<th>ER_NUMBER</th>
														<th class="hidden-480">VALIDATOR1</th>

														<th>
															
															VALIDATOR2
														</th>
														<th class="hidden-480">CHECKER</th>

														<th>KODE CABANG</th>

														<th>CABANG</th>
														<th>TIPE_ER</th>
														<th>PERIODE</th>
														<th>TGL_INCOM</th>
														<th>TGL_PROS_CHECK</th>
														<th>STATUS</th>

														<th>REMARKS</th>
														<th>TGL_INCOM_FIN</th>
														<th>ACTIVE</th>
														<th>INSERT DATE</th>
														<th>TIPE ER/PR NUMBER</th>
														<th>APPROVERD DATE</th>
														<th>NAME_OF_APPROVERD</th>
														<th>SLA_PR</th>
														<th>SLA_PO</th>
														<th>SLA_ER_DATE</th>
														<th>SLA_KIRIM</th>
														<th>SLA_CABANG</th>
														<th>ACCT</th>
														<th>SLA_FIN</th>
														<th>SLA_HQ</th>
													</tr>
												</thead>

												<tbody>
													<?php
													$i = 1;
													
													foreach ($report['ArrayData'] as $key) {
 if($key['CABANG'] =='' OR empty($key['CABANG'])){
            $key['CABANG'] = '';
        }
		if($key['TIPE_ER'] =='' OR empty($key['TIPE_ER'])){
            $key['TIPE_ER'] = '';
        }	
        if($key['STATUS'] =='' OR empty($key['STATUS'])){
            $key['STATUS'] = '';
        }
         if($key['REMARKS'] =='' OR empty($key['REMARKS'])){
            $key['REMARKS'] = '';
        }											$PERIODE                   = substr($key['PERIODE'],0,10);
        $TANGGAL_INCOMING          = substr($key['TANGGAL_INCOMING'],0,10);
        $TANGGAL_PROSES_CHECKER    = substr($key['TANGGAL_PROSES_CHECKER'],0,10);
        $TANGGAL_INCOMING_FINANCE  = substr($key['TANGGAL_INCOMING_FINANCE'],0,10);
         $INSERT_DATE  = substr($key['INSERT_DATE'],0,10);
         $APPROVER_DATE  = substr($key['APPROVER_DATE'],0,10); ?>
													<tr>
														<td  id="no" class="text-bold"><?php echo $i++;?></td>

														  <td  id="prnumber" class="text-bold"><?php echo $key['PR_NUMBER'];?></td>
    													<td id="ernumber" class="text-bold"><?php echo $key['ER_NUMBER'];?></td>
      <td id="validator1" class="text-bold"><?php echo $key['VALIDATOR'];?></td>
      <td id="validator2" class="text-bold"><?php echo $key['VALIDATOR2'];?></td>
      <td id="checker" class="text-bold"><?php echo $key['CHECKER'];?></td>
      <td id="kode_cabang" class="text-bold"><?php echo $key['KODECABANG'];?></td>
       <td id="cabang" class="text-bold"><?php echo str_replace('', 'Asu', $key['CABANG']);?></td>
    													
      <td id="tipe_er" class="text-bold"><?php echo $key['TIPE_ER'];?></td>
      <td id="periode" class="text-bold"><?php echo $PERIODE;?></td>
      <td id="tgl_incom" class="text-bold"><?php echo $TANGGAL_INCOMING;?></td>
      <td id="tgl_pros_check" class="text-bold"><?php echo $TANGGAL_PROSES_CHECKER;?></td>
      <td id="status" class="text-bold"><?php echo $key['STATUS'];?></td>

      <td id="remarks" class="text-bold"><?php echo $key['REMARKS'];?></td>
      <td id="tif" class="text-bold"><?php echo $TANGGAL_INCOMING_FINANCE;?></td>
      <td id="active" class="text-bold"><?php echo $key['ACTIVE'];?></td>
       <td id="insert_date" class="text-bold"><?php echo $INSERT_DATE;?></td>
       <td id="tipeerpr" class="text-bold"><?php echo $key['TYPE_PR_ER_NUMBER'];?></td>
       <td id="appdate" class="text-bold"><?php echo $APPROVER_DATE;?></td>
       <td id="nameapp" class="text-bold"><?php echo $key['NAME_OF_APPROVERD'];?></td>
       <td id="slapr" class="text-bold"><?php echo $key['SLA_PR'];?></td>
       <td id="slapo" class="text-bold"><?php echo $key['SLA_PO'];?></td>
		<td id="slaerdate" class="text-bold"><?php echo $key['SLA_ER_DATE'];?></td>
		<td id="slakirim" class="text-bold"><?php echo $key['SLA_KIRIM'];?></td>	
		<td id="slacabang" class="text-bold"><?php echo $key['SLA_CABANG'];?></td>	
		<td id="acct" class="text-bold"><?php echo $key['ACCT'];?></td>	
		<td id="slafin" class="text-bold"><?php echo $key['SLA_FIN'];?></td>
		<td id="slahq" class="text-bold"><?php echo $key['SLA_HQ'];?></td>
												</tr>
												<?php } ?>
</tbody>
											</table>
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