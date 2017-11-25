<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compare Website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/ODDY-DESIGN/compare/css/logo-nav.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <style>
      body {
        font-size: 14px;
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Company-Logo" width="150" height="30" alt="">
        </a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    <div class="container">
      <div class="col-lg-12">
        <div class="cmp_s_conf">

          <table style="width:100%; height:85px;" id="top_conf" cellspacing="0" cellpadding="0" border="0">
        		<tbody>
              <tr>
          			<td style="width:20%; text-align:left;" class="tcf_font ctl_pos">
          			SELECT TYPE
          			</td>
	               <td style="width:50%; padding-left:8px;">
        						<script>
          						$(document).ready(function(){
          							document.cmp_set_form.tgsel.value=1;
          							tabhints_tg();
          						});
        						</script>
						        <div style="width:413px; overflow:hidden; height:37px; border:#d0d0d0 1px solid; background-image:URL('/usermode/img/selarrow1.gif'); background-repeat:no-repeat; background-position:right;">
                      <select name="tgsel" id="sel_tgsel" style="width:433px;  color:#636363; border:0px; height:100%; font-family:Helvetica, sans-serif; font-size:12pt; background:transparent; padding-left:6px; padding-top:7px; ">
                         <option value="" disabled selected>Select Type</option>
                         <?php foreach ($type as $kType=>$vType) { ?>
                         <option style="" value="<?php echo $vType['id'];?>"><?php echo $vType['type_name'];?></option>
                         <?php } ?>
                      </select>
			              </div>
	               </td>
                 <td style="text-align:right"><a href="/?mode=printversion&amp;p=cr" target="_blank" class="imgblink">
	                  <img src="/usermode/img/printlistA.gif" style="display:none" border="0">
              			<img src="/usermode/img/printlist.gif" onmouseover="this.src='/usermode/img/printlistA.gif'" onmouseout="this.src='/usermode/img/printlist.gif'" border="0"></a>
                 </td>
            </tr>
          </tbody>
        </table>
     </div>
    </div>
    </div>
    <!-- Page Content -->
    <div class="container">
      <p></p>
      <div class="col-md-12">
        <table class="table table-bordered" style="table-layout: fixed;">
         <tbody>
           <tr>
             <th scope="row">Select Vendor</th>
             <td>
               <select class="form-control" id="vendor1" onchange="getSeries(this.value,1);" style="border-radius:0;">
                <option value="" selected disabled>Select Vendor</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="vendor2" onchange="getSeries(this.value,2);" style="border-radius:0;">
                <option value="" selected disabled>Select Vendor</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="vendor3" onchange="getSeries(this.value,3);" style="border-radius:0;">
                <option value="" selected disabled>Select Vendor</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="vendor4" onchange="getSeries(this.value,4);" style="border-radius:0;">
                <option value="" selected disabled>Select Vendor</option>
               </select>
             </td>
           </tr>
           <tr>
             <th scope="row">Select Series</th>
             <td>
               <select class="form-control" id="series1" onchange="getModel(this.value,1);" style="border-radius:0;">
                 <option value="" selected disabled>Select Series</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="series2" onchange="getModel(this.value,2);" style="border-radius:0;">
                 <option value="" selected disabled>Select Series</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="series3" onchange="getModel(this.value,3);" style="border-radius:0;">
                 <option value="" selected disabled>Select Series</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="series4" onchange="getModel(this.value,4);" style="border-radius:0;">
                 <option value="" selected disabled>Select Series</option>
               </select>
             </td>
           </tr>
           <tr>
             <th scope="row">Select Model</th>
             <td>
               <select class="form-control" id="model1" style="border-radius:0;">
                 <option value="" selected disabled>Select Model</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="model2" style="border-radius:0;">
                 <option value="" selected disabled>Select Model</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="model3" style="border-radius:0;">
                 <option value="" selected disabled>Select Model</option>
               </select>
             </td>
             <td>
               <select class="form-control" id="model4" style="border-radius:0;">
                 <option value="" selected disabled>Select Model</option>
               </select>
             </td>
           </tr>
         </tbody>
        </table>
        <table class="table table-bordered" style="table-layout: fixed;">
         <tbody>
           <tr>
             <th scope="row" style="color: #23B4CC;">Title</th>
             <td style="font-weight: bold;color: #23B4CC;">Dell EMC Unity	Unity 500</td>
             <td style="font-weight: bold;color: #23B4CC;">IBM DS8880DS8886 Model 981</td>
             <td style="font-weight: bold;color: #23B4CC;">Hitachi VSP G G800</td>
             <td style="font-weight: bold;color: #23B4CC;">NetApp FAS9000	FAS9000</td>
           </tr>
           <tr>
             <th scope="row">Announced, date</th>
             <td>01-Apr-2016</td>
             <td>01-Oct-2015</td>
             <td>01-Aug-2015</td>
             <td>26-Sept-2016</td>
           </tr>
           <tr>
             <th scope="row">End Of Sale, date</th>
             <td>N/A</td>
             <td>N/A</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
         </tbody>
        </table>
        
        <script id="tutorial-template" type="text/template">
            <!--<div class="tutorial">
                <h1 class="tutorial-heading">{{title}}<h1>
            </div>-->
        </script>

        <div class="col-sm-12">
          <h5 class="text-center">SPC Benchmark 1</h5>
        </div>
        <table class="table table-bordered" style="table-layout: fixed;">
         <tbody>
           <tr>
             <th scope="row">SPC-1 IOPS
               <p class="merge" style="font-size:11px;display:none;">Test</p>
             </th>
             <td>N/A</td>
             <td>1.500.187</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
           <tr>
             <th scope="row">Average Response Time, ms</th>
             <td>N/A</td>
             <td>0.60</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
           <tr>
             <th scope="row">SPC-1 Price-Performance</th>
             <td>N/A</td>
             <td>$1.32/SPC-1 IOPS</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
           <tr>
             <th scope="row">Total Logical Capacity</th>
             <td>N/A</td>
             <td>34,36 TB</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
           <tr>
             <th scope="row">Data Protection Level</th>
             <td>N/A</td>
             <td>Protected 2 (mirroring)</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
           <tr>
             <th scope="row">Application Utilization, %</th>
             <td>N/A</td>
             <td>N/A</td>
             <td>N/A</td>
             <td>N/A</td>
           </tr>
         </tbody>
        </table>
      </div>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/matrix-admin-package/HTML/js/mustache.js');?>"></script>

    <script>
      /////// logic template
      var data = {
          title: "Constructing HTML Elements"
      }
  
      var template = $("#tutorial-template").html();
      // html: '<div ...>\n<h1 ...>{{title }}<h1>\n</div>'
  
      var html = Mustache.render(template, data);
      $("body").append(html);



      //////////////// Logic Dropdown ///////////////////////////
      $(document).ready(function () {
            console.log(123);
            $("#sel_tgsel").change(function(){
                var ajxVendor = getVendor($(this).val());
                ajxVendor.done(function(e){
                    $("#vendor1").find('option').remove();
                    $("#vendor2").find('option').remove();
                    $("#vendor3").find('option').remove();
                    $("#vendor4").find('option').remove();
                    clearSeries();
                    clearModel(0);
                    var html = '';
                    html += '<option value="" selected disabled>Select Vendor</option>';
                    $.each(e,function(i,item){
                        html += '<option value=' + item.id + '>' + item.vendor_name + '</option>';
                    });
                    $("#vendor1").append(html);
                    $("#vendor2").append(html);
                    $("#vendor3").append(html);
                    $("#vendor4").append(html);
                });
            });
        });

        function getVendor(id) {
            return $.ajax({
               'url':'<?php echo base_url('dashboard/getVendor');?>',
               'type': 'GET',
               'dataType': 'json',
               'data': {id:id}
            });
        }

        function getSeries(val,pos) {
            $("#series"+pos).find('option').remove();
            clearModel(pos);
            var html = '';
            $.ajax({
               'url':'<?php echo base_url('dashboard/getSeries');?>',
               'type': 'GET',
               'dataType': 'json',
               'data': {id:val}
            }).done(function (e){
              var html = '';
              html += '<option value="" selected disabled>Select Series</option>';
              $.each(e,function(i,item){
                  html += '<option value=' + item.id + '>' + item.series_name + '</option>';
              });
              $("#series"+pos).append(html);
            });
        }

        function getModel(val,pos) {
            $("#model"+pos).find('option').remove();
            var html = '';
            $.ajax({
               'url':'<?php echo base_url('dashboard/getModel');?>',
               'type': 'GET',
               'dataType': 'json',
               'data': {id:val}
            }).done(function (e){
              var html = '';
              html += '<option value="" selected disabled>Select Model</option>';
              $.each(e,function(i,item){
                  html += '<option value=' + item.id + '>' + item.model_name + '</option>';
              });
              $("#model"+pos).append(html);
            });
        }

        function clearSeries() {
            var html = '<option value="" selected disabled>Select Series</option>';
            for (i = 0; i <= 4; i++) {
                $("#series"+i).find('option').remove();
                $("#series"+i).append(html);
            }
        }

        function clearModel(pos) {
            var html = '<option value="" selected disabled>Select Model</option>';
            if (pos == 0) {
              for (i = 0; i <= 4; i++) {
                  $("#model"+i).find('option').remove();
                  $("#model"+i).append(html);
              }
            } else {
              $("#model"+pos).find('option').remove();
              $("#model"+pos).append(html);
            }
        }
    </script>

  </body>

</html>
