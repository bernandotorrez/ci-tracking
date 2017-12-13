function eraseText() {
 document.getElementById("txt_noerpr").value = "";
 document.getElementById("htxt_nopr").value = "";
 document.getElementById("txt_prdate").value = "";
 document.getElementById("htxt_noer").value = "";
 document.getElementById("txt_podate").value = "";
 document.getElementById("txt_erdate").value = "";
 document.getElementById("txt_accdate").value = "";
 document.getElementById("txt_appdate").value = "";
 document.getElementById("txt_tglcair").value = "";
 document.getElementById("txt_paygroup").value = "";
 document.getElementById("txt_branchid").value = "";
 document.getElementById("txt_amount").value = "";
 document.getElementById("txt_beneficiary").value = "";
 document.getElementById("txt_kegiatan").value = "";
 document.getElementById("txt_accnumber").value = "";
 document.getElementById("txt_checker").value = "";
 document.getElementById("txt_tipeer").value = "";
 document.getElementById("txt_validator1").value = "";
 document.getElementById("txt_validator2").value = "";
 document.getElementById("txt_periode").value = "";
 document.getElementById("txt_t_incoming").value = "";
 document.getElementById("txt_tpc").value = "";
 document.getElementById("txt_tif").value = "";
 document.getElementById("txt_status").value = "";
 document.getElementById("txt_remarks").value = "";
 document.getElementById("txt_dep").value = "";
 document.getElementById("txt_tipeerpr").value = "";

}

function enableText() {
 /* document.getElementById("htxt_nopr").disabled = false;
 document.getElementById("txt_prdate").disabled = false;
 document.getElementById("htxt_noer").disabled = false;
 document.getElementById("txt_podate").disabled = false;
 document.getElementById("txt_erdate").disabled = false;
 document.getElementById("txt_accdate").disabled = false;
 document.getElementById("txt_appdate").disabled = false;
 document.getElementById("txt_tglcair").disabled = false;
 document.getElementById("txt_paygroup").disabled = false;
 document.getElementById("txt_branchid").disabled = false;
 document.getElementById("txt_amount").disabled = false;
 document.getElementById("txt_beneficiary").disabled = false;
 document.getElementById("txt_kegiatan").disabled = false;
 document.getElementById("txt_accnumber").disabled = false;
 */
 document.getElementById("txt_checker").disabled = false;
 document.getElementById("txt_tipeer").disabled = false;
 document.getElementById("txt_validator1").disabled = false;
 document.getElementById("txt_validator2").disabled = false;
 document.getElementById("txt_periode").disabled = false;
 document.getElementById("txt_ti").disabled = false;
 document.getElementById("txt_tpc").disabled = false;
 document.getElementById("txt_tif").disabled = false;
 document.getElementById("txt_status").disabled = false;
 document.getElementById("txt_remarks").disabled = false;

 document.getElementById("txt_tipeerpr").disabled = false;
 document.getElementById("txt_dep").disabled = false;

}


function search() {
 $("#loading").show(); // Tampilkan loadingnya

 $.ajax({
  type: "POST", // Method pengiriman data bisa dengan GET atau POST
  url: "http://localhost:8080/ci-tracking/WebService/getWSBR", // Isi dengan url/path file php yang dituju
  data: {
   txt_noerpr: $("#txt_noerpr").val()
  }, // data yang akan dikirim ke file proses
  dataType: "json",
  beforeSend: function(e) {
   if (e && e.overrideMimeType) {
    e.overrideMimeType("application/json;charset=UTF-8");
   }
   $("#error").fadeOut();
        $("#btn-search").html('<i class="fa fa-spinner fa-pulse fa-fw"></i> Searching').prop('disabled', true);
  },
  success: function(response) { // Ketika proses pengiriman berhasil
   $("#loading").hide(); // Sembunyikan loadingnya

   if (response.status == "success") { // Jika isi dari array status adalah success

    if (response.txt_amount.length > 0) {
     var bilangan = response.txt_amount;


     var number_string = bilangan.toString(),
      sisa = number_string.length % 3,
      rupiah = number_string.substr(0, sisa),
      ribuan = number_string.substr(sisa).match(/\d{3}/g);

     if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
     }
    } else {
     var rupiah = "";
    }
    //akhir fungsi javascript bilangan dalam rupiah

    //fungsi memotong string branch id menjadi 3 digit
    if (response.txt_branchid.length > 0) {
     var string = response.txt_branchid;
     var length = 3;
     var trimmedString = string.substring(0, length);
    } else {
     var trimmedString = "";
    }

    //akhir fungsi memotong string branch id menjadi 3 digit

    if (response.txt_periode == '1900-01-01') {
     response.txt_periode = "";
    }
    if (response.txt_ti == '1900-01-01') {
     response.txt_ti = "";
    }
    if (response.txt_tpc == '1900-01-01') {
     response.txt_tpc = "";
    }
    if (response.txt_tif == '1900-01-01') {
     response.txt_tif = "";
    }
    if (response.txt_appdate == '1900-01-01') {
     response.txt_appdate = "";
    }
    if (response.txt_podate == '1900-01-01') {
     response.txt_podate = "";
    }
    if (response.txt_erdate == '1900-01-01') {
     response.txt_erdate = "";
    }
    if (response.txt_prdate == '1900-01-01') {
     response.txt_prdate = "";
    }
    if (response.txt_tglcair == '1900-01-01') {
     response.txt_tglcair = "";
    }
    if (response.txt_accdate == '1900-01-01') {
     response.txt_accdate = "";
    }
     if (response.button == 'save') {
    	document.getElementById("btn_save").style.display = "inline";
     
 } else if (response.button == 'hide') {
    document.getElementById("btn_save").style.display = "none";
      
    }

    $("#txt_noerpr").val(response.txt_noerpr);
   $("#txt_noerpr").val(response.txt_noerpr);
   $('<input>').attr({
    type: 'hidden',
    id: 'foo',
    name: 'txt_noer',
    value: response.txt_noer
}).appendTo('form');
   $('<input>').attr({
    type: 'hidden',
    id: 'foo',
    name: 'txt_nopr',
    value: response.txt_nopr
}).appendTo('form');
   $('<input>').attr({
    type: 'hidden',
    id: 'htxt_branchid',
    name: 'htxt_branchid',
    value: response.txt_branchid
}).appendTo('form')
   
    $("#txt_prdate").val(response.txt_prdate);
    
    $("#htxt_nopr").val(response.txt_nopr);
	$("#htxt_noer").val(response.txt_noer);
    $("#txt_podate").val(response.txt_podate);
    $("#txt_erdate").val(response.txt_erdate);
    $("#txt_accdate").val(response.txt_accdate);
    $("#txt_appdate").val(response.txt_appdate);
    $("#txt_paygroup").val(response.txt_paygroup);
    $("#txt_branchid").val(trimmedString);
    $("#txt_amount").val(rupiah);
    $("#txt_beneficiary").val(response.txt_beneficiary);
    $("#txt_accnumber").val(response.txt_accnumber);

    $("#txt_validator1").val(response.txt_validator1);
    $("#txt_validator2").val(response.txt_validator2);
    $("#txt_checker").val(response.txt_checker);
    $("#txt_tipeer").val(response.txt_tipeer);
    $("#txt_periode").val(response.txt_periode);
    $("#txt_ti").val(response.txt_ti);
    $("#txt_tpc").val(response.txt_tpc);
    $("#txt_status").val(response.txt_status);
    $("#txt_remarks").val(response.txt_remarks);
    $("#txt_tif").val(response.txt_tif);
    $("#txt_tipeerpr").val(response.txt_tipeerpr);
    $("#txt_dep").val(response.txt_dep);
    $("#txt_tglcair").val(response.txt_tglcair);
    $("#data1").val(response.data1);
        function convertdate(date1, date2){
      var selisih;
      if(!date1 || !date2){
        selisih = '-';
        return selisih;
      }
    var date1 = new Date(date1);
    var date2 = new Date(date2);

    var timeDiff = Math.abs(date1.getTime() - date2.getTime());
   selisih = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

    return selisih+" Hari";

    }

    function convertdatetampil(date1, date2){
      var selisih;
      if(!date1 || !date2){
        selisih = '-';
        return selisih;
      }
    var date1 = new Date(date1);
    var date2 = new Date(date2);

    var timeDiff = Math.abs(date1.getTime() - date2.getTime());
   selisih = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

    return selisih;

    }

    
   document.getElementById("slapr").innerHTML = convertdate(response.txt_appdate, response.txt_prdate);
    document.getElementById("slapo").innerHTML = convertdate(response.txt_podate, response.txt_appdate);
    document.getElementById("slaerdate").innerHTML = convertdate(response.txt_erdate, response.txt_podate);
     document.getElementById("slakirim").innerHTML = convertdate(response.txt_ti, response.txt_erdate);
      document.getElementById("slacabang").innerHTML = convertdate(response.txt_ti, response.txt_prdate);
      document.getElementById("acct").innerHTML = convertdate(response.txt_accdate, response.txt_tpc);
       document.getElementById("slafin").innerHTML = convertdate(response.txt_tglcair, response.txt_accdate);
       document.getElementById("slahq").innerHTML = convertdate(response.txt_tglcair, response.txt_ti);

       document.getElementById("txt_slapr").value = convertdatetampil(response.txt_appdate, response.txt_prdate);
        document.getElementById("txt_slapo").value = convertdatetampil(response.txt_podate, response.txt_appdate);
    document.getElementById("txt_slaerdate").value = convertdatetampil(response.txt_erdate, response.txt_podate);
     document.getElementById("txt_slakirim").value = convertdatetampil(response.txt_ti, response.txt_erdate);
      document.getElementById("txt_slacabang").value = convertdatetampil(response.txt_ti, response.txt_prdate);
      document.getElementById("txt_acct").value = convertdatetampil(response.txt_accdate, response.txt_tpc);
       document.getElementById("txt_slafin").value = convertdatetampil(response.txt_tglcair, response.txt_accdate);
       document.getElementById("txt_slahq").value = convertdatetampil(response.txt_tglcair, response.txt_ti);

   document.getElementById("txt_prdate").disabled = true;
    document.getElementById("htxt_noer").disabled = true;
    document.getElementById("htxt_nopr").disabled = true;

    document.getElementById("txt_podate").disabled = true;
    document.getElementById("txt_erdate").disabled = true;
    document.getElementById("txt_accdate").disabled = true;
    document.getElementById("txt_appdate").disabled = true;
    document.getElementById("txt_tglcair").disabled = true;
    document.getElementById("txt_paygroup").disabled = true;
    document.getElementById("txt_branchid").disabled = true;
    // document.getElementById("txt_amount").disabled = true;
    // document.getElementById("txt_beneficiary").disabled = true;
    // document.getElementById("txt_kegiatan").disabled = true;
    // document.getElementById("txt_accnumber").disabled = true;
document.getElementById("txt_checker").disabled = true;
    document.getElementById("txt_tipeer").disabled = true;
    document.getElementById("txt_validator1").disabled = true;
    document.getElementById("txt_validator2").disabled = true;
    document.getElementById("txt_periode").disabled = true;
    document.getElementById("txt_ti").disabled = true;
    document.getElementById("txt_tpc").disabled = true;
    document.getElementById("txt_tif").disabled = true;
    document.getElementById("txt_status").disabled = true;
    document.getElementById("txt_remarks").disabled = true;

    document.getElementById("txt_tipeerpr").disabled = true;
    document.getElementById("txt_dep").disabled = true;
    document.getElementById("data").innerHTML = "Data Ditemukan";
    document.getElementById("nodata").innerHTML = "";
    document.getElementById("aktif").checked = false;
    $("#btn-search").html('Search').prop('disabled', false);
   } else { // Jika isi dari array status adalah failed
    // alert("Data Tidak Ditemukan");
    //swal("Tidak Di Temukan/isi No PR!", "Silahkan Cari Berdasarkan No PR", "error");
    // document.location='Page_Input';
    document.getElementById("btn_save").style.display = "none";
    document.getElementById("htxt_nopr").value = "";
    document.getElementById("htxt_nopr").disabled = false;
    document.getElementById("txt_prdate").value = "";
    document.getElementById("txt_prdate").disabled = false;
    document.getElementById("htxt_noer").value = "";
    document.getElementById("htxt_noer").disabled = false;
    document.getElementById("txt_podate").value = "";
    document.getElementById("txt_podate").disabled = false;
    document.getElementById("txt_erdate").value = "";
    document.getElementById("txt_erdate").disabled = false;
    document.getElementById("txt_accdate").value = "";
    document.getElementById("txt_accdate").disabled = false;
    document.getElementById("txt_appdate").value = "";
    document.getElementById("txt_appdate").disabled = false;
    document.getElementById("txt_tglcair").value = "";
    document.getElementById("txt_tglcair").disabled = false;
    document.getElementById("txt_paygroup").value = "";
    document.getElementById("txt_paygroup").disabled = false;
    document.getElementById("txt_branchid").value = "";
    document.getElementById("txt_branchid").disabled = false;
    // document.getElementById("txt_amount").value = "";
    // document.getElementById("txt_amount").disabled = false;
    // document.getElementById("txt_beneficiary").value = "";
    // document.getElementById("txt_beneficiary").disabled = false;
    // document.getElementById("txt_kegiatan").value = "";
    // document.getElementById("txt_kegiatan").disabled = false;
    // document.getElementById("txt_accnumber").value = "";
    // document.getElementById("txt_accnumber").disabled = false;
    document.getElementById("txt_checker").value = "";
    document.getElementById("txt_checker").disabled = false;
    document.getElementById("txt_tipeer").value = "";
    document.getElementById("txt_tipeer").disabled = false;
    document.getElementById("txt_validator1").value = "";
    document.getElementById("txt_validator1").disabled = false;
    document.getElementById("txt_validator2").value = "";
    document.getElementById("txt_validator2").disabled = false;
    document.getElementById("txt_periode").value = "";
    document.getElementById("txt_periode").disabled = false;
    document.getElementById("txt_ti").value = "";
    document.getElementById("txt_ti").disabled = false;
    document.getElementById("txt_tpc").value = "";
    document.getElementById("txt_tpc").disabled = false;
    document.getElementById("txt_tif").value = "";
    document.getElementById("txt_tif").disabled = false;
    document.getElementById("txt_status").value = "";
    document.getElementById("txt_status").disabled = false;
    document.getElementById("txt_remarks").value = "";
    document.getElementById("txt_remarks").disabled = false;
    document.getElementById("txt_dep").value = "";
    document.getElementById("txt_dep").disabled = false;

    document.getElementById("txt_tipeerpr").value = "";
    document.getElementById("txt_tipeerpr").disabled = false;
    document.getElementById("nodata").innerHTML = "Data Tidak Ditemukan";
    document.getElementById("data").innerHTML = "";
    document.getElementById("aktif").checked = false;
    $("#btn-search").html('Search').prop('disabled', false);
   }
  },
  error: function(xhr, ajaxOptions, thrownError) { // Ketika ada error
   alert(xhr.responseText);
  }
 });
}

$(document).ready(function() {
 $("#loading").hide(); // Sembunyikan loadingnya

 $("#btn-search").click(function() { // Ketika user mengklik tombol Cari
  search(); // Panggil function search
 });

 $("#txt_noerpr").keyup(function() { // Ketika user menekan tombol di keyboard
  if (event.keyCode == 13) { // Jika user menekan tombol ENTER
   search(); // Panggil function search
  }
 });


});

function CheckKey(e) //receives event object as parameter
{
 var code = e.keyCode ? e.keyCode : e.which;
 if (code === 13) {
  search();
 }
}