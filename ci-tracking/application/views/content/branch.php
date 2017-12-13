<div class="main-content">
                        <div class="main-content-inner">
                              <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                    <ul class="breadcrumb">
                                          <li>
                                                <i class="ace-icon fa fa-home home-icon"></i>
                                                <a href="#">Home</a>
                                          </li>

                                    
                                          <li class="active">Branch</li>
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
                                                Branch
                                                <small>
                                                      <i class="ace-icon fa fa-angle-double-right"></i>
                                                      ER - TRACKING
                                                </small>
                                          </h1>
                                    </div><!-- /.page-header -->
                                    <div class="space-24"></div>
                                    

                                    <!-- ============================== FORM ============== -->
                                      <form method="POST" id="dialog_edit_profile" name="dialog_edit_profile">
                              <div class="col-xs-11">
                                    <div class="row">
                                              <input type="hidden" name="txt_tipe" id="txt_tipe" class="form-control" style="width:220px;" value="<?=$this->session->userdata('info');?>" readonly>
                                           <input type="hidden" name="txt_nameapp" id="txt_nameapp" value="<?=$this->session->userdata('info');?>">
                                           <input type="hidden" name="htxt_nameapp" id="htxt_nameapp">
      <!-- ============================== KIRI ============== -->
            <div class="col-xs-6">

                        <div class="row">
                        <div class="form-group">
                        <div class="col-xs-5">
                              <label> Your ID :  </label>&nbsp;<label id="tips1" style="color:#0069d9;"> <?=$this->session->userdata('info');?></label>
                        </div>
                       
                       
                        </div>
                        </div>
                              <div class="space-2"></div>
                         <div class="row">
                        <div class="form-group">
                        <div class="col-xs-7">
                             <label> Status :  </label>&nbsp;<label id="data" style="color:#4CAF50;"> </label><label id="nodata" style="color:#F44336;"> </label>
                        </div>
                       
                       
                        </div>
                        </div>
<div class="space-24"></div>
                  <div class="row">
                        <div class="form-group">
                        <div class="col-xs-5">
                              <label>NO PR / ER : </label>
                        </div>
                        <div class="col-xs-4">
                        
                              <input type="text" name="txt_noerpr" id="txt_noerpr" class="form-control" autofocus onkeyup="CheckKey(event)" data-placement="bottom" data-original-title="Input NO ER / PR" data-rel="tooltip" title="Input No ER / PR">
                              
                        </div>
                        <div class="col-xs-3">
                        
                              
                              <button type="button" class="btn btn-primary btn-sm" id="btn-search">Search</button> 
                
                        </div>
                        </div>
                        </div>
                    
                              <div class="space-2"></div>
                  <div class="row">
                        <div class="form-group">
                        <div class="col-xs-5">
                              <label>NO PR : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" type="text" name="txt_nopr" id="htxt_nopr" title="NO PR" data-placement="bottom" data-original-title="NO PR">
                        </div>
                        </div>
                        </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>NO ER : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" type="text" name="txt_noer" id="htxt_noer" title="NO ER" data-placement="bottom" data-original-title="NO ER">
                        </div>
                  
                        </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>ER DATE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_erdate" id="txt_erdate" title="ER DATE"  data-placement="bottom" data-original-title="ER DATE">
                        </div>
                  
                        </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>PR_APPROVED_DATE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" title="PR APPROVED DATE" data-placement="bottom" data-original-title="PR APPROVED DATE" name="txt_appdate" id="txt_appdate">
                        </div>
                  
                        </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>PAY GROUP : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" type="text" name="txt_paygroup" id="txt_paygroup" title="PAY GROUP" data-placement="bottom" data-original-title="PAY GROUP">
                        </div>
                  
                        </div>
                        <?php if($user =='1') { ?>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>AMOUNT : </label>
                        </div>
                        <div class="col-xs-7">
                        <div class="input-group">

  <span class="input-group-addon" id="basic-addon1">IDR</span>
  <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="txt_amount" id="txt_amount" data-rel="tooltip" title="AMOUNT" data-placement="bottom" data-original-title="AMOUNT">
</div>
                        </div>
                  
                        </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>NAMA KEGIATAN / BARANG : </label>
                        </div>
                        <div class="col-xs-7">
                        <textarea data-rel="tooltip" class="form-control" type="text" title="NAMA KEGIATAN" data-placement="bottom" data-original-title="NAMA KEGIATAN" rows="4" name="txt_kegiatan" id="txt_kegiatan"></textarea>
                        </div>
                  
                        </div>
                        <?php } ?>
                        <div class="space-10"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>AKTIFKAN : </label>
                        </div>
                        <div class="col-xs-7">
                        <select name="aktif" id="aktif" class="">
                               <option value="nonaktif">Non Aktif</option>
                                     <option value="aktifkan">Aktifkan</option>
                              </select>
                        </div>
                  
                        </div>
                        <div class="space-10"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>CHECKER : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" type="text" name="txt_checker" id="txt_checker" title="CHECKER" data-placement="bottom" data-original-title="CHECKER">
                        </div>
                  
                        </div>
                              <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>VALIDATOR 1 : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" type="text" name="txt_validator1" id="txt_validator1" title="VALIDATOR 1" data-placement="bottom" data-original-title="VALIDATOR 1">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>PERIODE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_periode" id="txt_periode" title="PERIODE" data-placement="bottom" data-original-title="PERIODE">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>TGL PROSES CHECKER : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_tpc" id="txt_tpc" title="TANGGAL PROSES CHECKER" data-placement="bottom" data-original-title="TANGGAL PROSES CHECKER">
                        </div>
                  
                        </div>


                        </div>
                        <!-- ============================== KANAN ============== -->
                    <div class="col-xs-6">
                           <div class="row">
                        <div class="form-group">
                       

                       
                        </div>
                        </div>
                        <div class="space-12"></div>
                        <div class="space-24"></div>
                         <div class="space-24"></div>
                        <div class="row">
                        <div class="form-group">
                        <div class="col-xs-5">
                              <label>TIPE : </label>
                        </div>
                        <div class="col-xs-4">
                        
                              <select name="txt_tipeer" id="txt_tipeer" class="form-control">
                        <option value=''>Silahkan Pilih Tipe ER</option>  
                        <option value='MultiPaid'> MultiPaid</option>  
                        <option value='MultiBranch'> MultiBranch</option>  
                        <option value='Business_Trip'> Business Trip</option>
                        <option value='Expense_Request'> Expense Request</option>  
                        
                      </select>
                              
                        </div>
                       
                        </div>
                        </div>
                        <div class="space-2"></div>
                  <div class="row">
                        
                        <div class="col-xs-5">
                              <label>PR DATE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_prdate" id="txt_prdate" title="PR DATE" data-placement="bottom" data-original-title="PR DATE">
                        </div>
                        
                        </div>
                        <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>PO_DATE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_podate" id="txt_podate" title="PO DATE" data-placement="bottom" data-original-title="PO DATE">
                        </div>
                  
                        </div>

                              <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>ACCOUNTING DATE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_accdate" id="txt_accdate" title="ACCOUNTING DATE" data-placement="bottom" data-original-title="ACCOUNTING DATE">
                        </div>
                  
                        </div>
                              
                                    <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>TANGGAL CAIR : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_tglcair" id="txt_tglcair" title="TANGGAL CAIR" data-placement="bottom" data-original-title="TANGGAL CAIR">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>BRANCH ID : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="txt_branchid" id="txt_branchid" title="BRANCH ID" data-placement="bottom" data-original-title="BRANCH ID">
                        </div>
                  
                        </div>
 <?php if($user =='1') { ?>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>BENEFICIARY : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="txt_beneficiary" id="txt_beneficiary" title="BENEFICIARY" data-placement="bottom" data-original-title="BENEFICIARY">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>ACCOUNT NUMBER : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="txt_accnumber" id="txt_accnumber" title="ACCOUNT NUMBER" data-placement="bottom" data-original-title="ACCOUNT NUMBER">
                        </div>
                  
                        </div>
                        <?php } ?>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>TIPE ER : </label>
                        </div>
                        <div class="col-xs-7">
                        <select name="txt_tipeerpr" id="txt_tipeerpr" class="form-control">
                        <option value=''>- TIPE ER -</option>  
                        <?php
                        foreach($tipeer as $data){

                        ?>
                         <option value='<?=$data->TIPE_ER;?>'><?=$data->TIPE_ER;?></option>  
                         <?php } ?>
                        
                      </select>
                        </div>
                                    </div>
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>VALIDATOR 2 : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="txt_validator2" id="txt_validator2" title="VALIDATOR 2" data-placement="bottom" data-original-title="VALIDATOR 2">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>TANGGAL INCOMING : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_ti" id="txt_ti" title="TANGGAL INCOMING" data-placement="bottom" data-original-title="TANGGAL INCOMING">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>TANGGAL INCOMING FINANCE : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control date-picker" data-date-format="yyyy-mm-dd" type="text" name="txt_tif" id="txt_tif" title="TANGGAL INCOMING FINANCE" data-placement="bottom" data-original-title="TANGGAL INCOMING FINANCE">
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>REMARKS : </label>
                        </div>
                        <div class="col-xs-7">
                        <input data-rel="tooltip" class="form-control" data-date-format="yyyy-mm-dd" type="text" name="txt_remarks" id="txt_remarks" title="REMARKS" data-placement="bottom" data-original-title="REMARKS">
                        </div>
                  
                        </div>
                       
                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>STATUS : </label>
                        </div>
                        <div class="col-xs-7">
                        <select name="txt_status" id="txt_status" class="">
                        <option value=''>Status</option>  
                        <option value='Validate'> Validate</option>  
                        <option value='Pending'> Pending</option>  
                        <option value='Cancel'> Cancel</option>
                        
                        
                      </select>
                        </div>
                  
                        </div>

                        <div class="space-2"></div>
                        <div class="row">
                        
                        <div class="col-xs-5">
                              <label>DEPARTMENT : </label>
                        </div>
                        <div class="col-xs-7">
                        <select name="txt_dep" id="txt_dep" class="form-control">
                        <option value=''>- DEPARTMENT -</option>  
                        <?php
                        foreach($departement as $data){

                        ?>
                         <option value='<?=$data->Title;?>'><?=$data->Title;?></option>  
                         <?php } ?>
                        
                      </select>
                        </div>
                  
                        </div>
                  

                        </div>

                  </div>
                  <div class="space-10"></div>
                  <div class="col-xs-12 text-center">
                    <input class="form-control btn btn-primary" type="button" name="btn_save" id="btn_save" value="SAVE" style="width:200px;display:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               
               <input class="form-control btn btn-danger" type=<?php echo ($this->session->userdata('cek') == 'Cabang'?'hidden':'button'); ?> name="btn_update" id="btn_update" value="UPDATE" style="width:200px;display:none;">

                  </div>
                  </div>

                   <input type="hidden" name="txt_slapr" id="txt_slapr"/>
<input type="hidden" name="txt_slapo" id="txt_slapo"/>
<input type="hidden" name="txt_slaerdate" id="txt_slaerdate"/>
<input type="hidden" name="txt_slakirim" id="txt_slakirim"/>
<input type="hidden" name="txt_slacabang" id="txt_slacabang"/>
<input type="hidden" name="txt_acct" id="txt_acct"/>
<input type="hidden" name="txt_slafin" id="txt_slafin"/>
<input type="hidden" name="txt_slahq" id="txt_slahq"/>
            </form>
            
            <div class="col-md-11">
                  <div class="space-24"></div><div class="space-24"></div>
    <table cellspacing="1" cellpadding="1" class="table table-responsive text-center table-bordered1">
  <tbody>
  <thead>
  <tr>
  <td colspan="8">SLA (days)</td>
  </tr>
   <tr>
      <td>SLA PR</td>
      <td>SLA PO</td>
      <td>SLA ER DATE</td>
      <td>SLA KIRIM</td>
      <td>SLA CABANG</td>
      <td>ACCT</td>
      <td>SLA FIN</td>
      <td>SLA HQ</td>
    </tr>
     <tr>
      <td id="slapr" class="text-bold">&nbsp;</td>
      <td id="slapo" class="text-bold">&nbsp;</td>
      <td id="slaerdate" class="text-bold">&nbsp;</td>
      <td id="slakirim" class="text-bold">&nbsp;</td>
      <td id="slacabang" class="text-bold">&nbsp;</td>
      <td id="acct" class="text-bold">&nbsp;</td>
      <td id="slafin" class="text-bold">&nbsp;</td>
      <td id="slahq" class="text-bold">&nbsp;</td>
    </tr>
  </thead>
   
  </tbody>
</table>
</div>
            
           
                              </div><!-- /.page-content -->
                        </div>
                  </div><!-- /.main-content -->