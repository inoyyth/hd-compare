<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compare Website</title>
    <link href="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstraptoggle/bootstrap-toggle.min.css');?>" rel="stylesheet" />
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/ODDY-DESIGN/compare/css/custom-style.less');?>" />
    <link rel="stylesheet" type="text/css" href="css/logo-nav.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.3/less.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="http://placehold.it/300x60?text=Company-Logo" width="150" height="30" alt="">
        </a>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 form-unit">
          <form class="form-inline" style="margin-top: 50px">
            <div class="form-group">
              <div class="col-sm-2">
                <label class="text-left">Select Type</label>
              </div>
              <div class="col-sm-5 form-option">
                <select class="form-control" id="sel_tgsel">
                  <option value="" disabled selected>Select Type</option>
                  <?php foreach ($type as $kType=>$vType) { ?>
                  <option style="" value="<?php echo $vType['id'];?>"><?php echo $vType['type_name'];?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label class="text-left">Select Vendor</label>
              </div>
              <div class="col-sm-10 form-option">
                <select class="form-control" id="vendor1" onchange="getSeries(this.value,1);" style="border-radius:0;">
                  <option value="" selected disabled>Select Vendor</option>
                </select>
                <select class="form-control" id="vendor2" onchange="getSeries(this.value,2);" style="border-radius:0;">
                  <option value="" selected disabled>Select Vendor</option>
                </select>
                <select class="form-control" id="vendor3" onchange="getSeries(this.value,3);" style="border-radius:0;">
                  <option value="" selected disabled>Select Vendor</option>
                </select>
                <select class="form-control" id="vendor4" onchange="getSeries(this.value,4);" style="border-radius:0;">
                  <option value="" selected disabled>Select Vendor</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label class="text-left">Select Series</label>
              </div>
              <div class="col-sm-10 form-option">
              <select class="form-control" id="series1" onchange="getModel(this.value,1);" style="border-radius:0;">
                <option value="" selected disabled>Select Series</option>
              </select>
              <select class="form-control" id="series2" onchange="getModel(this.value,2);" style="border-radius:0;">
                <option value="" selected disabled>Select Series</option>
              </select>
              <select class="form-control" id="series3" onchange="getModel(this.value,3);" style="border-radius:0;">
                <option value="" selected disabled>Select Series</option>
              </select>
              <select class="form-control" id="series4" onchange="getModel(this.value,4);" style="border-radius:0;">
                <option value="" selected disabled>Select Series</option>
              </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
                <label class="text-left">Select Model</label>
              </div>
              <div class="col-sm-10 form-option">
                <select class="form-control" id="model1" onchange="getModelResult(this.value,1);" style="border-radius:0;">
                  <option value="" selected disabled>Select Model</option>
                </select>
                <select class="form-control" id="model2" onchange="getModelResult(this.value,2);" style="border-radius:0;">
                  <option value="" selected disabled>Select Model</option>
                </select>
                <select class="form-control" id="model3" onchange="getModelResult(this.value,3);" style="border-radius:0;">
                  <option value="" selected disabled>Select Model</option>
                </select>
                <select class="form-control" id="model4" onchange="getModelResult(this.value,4);" style="border-radius:0;">
                  <option value="" selected disabled>Select Model</option>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row" id="title-row">
          <div class="col-md-12 table-unit">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th><span id="t1-1"></span><span id="t1-2"></span><span id="t1-3"></span></th>
                    <th><span id="t2-1"></span><span id="t2-2"></span><span id="t2-3"></span></th>
                    <th><span id="t3-1"></span><span id="t3-2"></span><span id="t3-3"></span></th>
                    <th><span id="t4-1"></span><span id="t4-2"></span><span id="t4-3"></span></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
      </div>
    
    <div class="row" id="row-params">
      
    </div>
  </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/ODDY-DESIGN/compare/vendor/bootstraptoggle/bootstrap-toggle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/matrix-admin-package/HTML/js/mustache.js');?>"></script>

    <script>
      /////// logic template
      /*var data = {
          title: "Constructing HTML Elements"
      }
  
      var template = $("#tutorial-template").html();
      // html: '<div ...>\n<h1 ...>{{title }}<h1>\n</div>'
  
      var html = Mustache.render(template, data);
      $("#title-row").append(html); */



      //////////////// Logic Dropdown ///////////////////////////
      $(document).ready(function () {
            $("#sel_tgsel").change(function(){
                getParams($(this).val());
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
                        html += '<option data-name='+item.vendor_name+' value=' + item.id + '>' + item.vendor_name + '</option>';
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
            //set title
            $("#t"+pos+"-1").text('');
            $("#t"+pos+"-2").text('');
            $("#t"+pos+"-3").text('');
            $("#t"+pos+"-1").text($("#vendor"+pos+ " option:selected").text());
            $.ajax({
               'url':'<?php echo base_url('dashboard/getSeries');?>',
               'type': 'GET',
               'dataType': 'json',
               'data': {id:val}
            }).done(function (e){
              var html = '';
              html += '<option value="" selected disabled>Select Series</option>';
              $.each(e,function(i,item){
                  html += '<option data-name='+item.series_name+' value=' + item.id + '>' + item.series_name + '</option>';
              });
              $("#series"+pos).append(html);
            });
        }

        function getModel(val,pos) {
            $("#model"+pos).find('option').remove();
            var html = '';
            //set title
            $("#t"+pos+"-2").text('');
            $("#t"+pos+"-3").text('');
            $("#t"+pos+"-2").text(" " + $("#series"+pos+ " option:selected").text());
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

        function getParams(idType) {
          $("#row-params").html('');
          $.ajax({
            'url': '<?php echo base_url('dashboard/getParamsCategory');?>',
            'data': {id:idType},
            'type': 'GET',
            'dataType': 'json'
          }).done(function(e, status){
          var html = '';
          $.each(e, function(i,item){
            html += '<div class="title">'+
                      '<div class="col-md-12 col-xs-12">'+
                        '<h5 class="text-center">'+item.category+'</h5>' +
                      '</div>'+
                    '</div>'+
                    '<div class="benchmark-unit">'+
                      '<div class="col-md-12">'+
                        '<div class="table-responsive">'+
                          '<table class="table table-bordered" id="item-table">';
                           item.subcategory.forEach(function(rv) {
                             //console.log(rv['spec_subcategory_name']);
                              /*if (rv['spec_subcategory_description'] !== "") {*/
                                html +='<tr class="tr-'+rv['id']+'" data-show="deactive">'+
                                '<td>'+
                                   rv['spec_subcategory_name'] +
                                  '<br> <a href="javascript:void(0);" class="toggle-row row-show-'+rv['id']+'" onclick="toggleShow('+rv['id']+')">show</a>' +
                                  '<a href="javascript:void(0);" style="display:none;" class="toggle-row row-hide-'+rv['id']+'" onclick="toggleHide('+rv['id']+')">hide</a>' +
                                  '<br><span class="hidden-notes'+rv['id']+'" style="display:none;">'+
                                      '<small style="color: #b3b3b3;">'+rv['spec_subcategory_description']+'</small>'+
                                    '</span>'+
                                '</td>'+
                                '<td id="row1-'+rv['id']+'"></td>'+
                                '<td id="row2-'+rv['id']+'"></td>'+
                                '<td id="row3-'+rv['id']+'"></td>'+
                                '<td id="row4-'+rv['id']+'"></td>'+
                              '</tr>';
                            /*} else {
                              html += '<tr>'+
                                '<td>'+rv['spec_subcategory_name']+'</td>'+
                                '<td id="row1-'+rv['id']+'"></td>'+
                                '<td id="row2-'+rv['id']+'"></td>'+
                                '<td id="row3-'+rv['id']+'"></td>'+
                                '<td id="row4-'+rv['id']+'"></td>'+
                              '</tr>';
                              }*/
                          });
                html +=  '</table>'+
                        '</div>'+
                      '</div>'+
                    '</div>';
              });
              $("#row-params").append(html);
          });
        }

        function getModelResult(val,pos) {
          //set title
          $("#t"+pos+"-3").text('');
          $("#t"+pos+"-3").text(" " + $("#model"+pos+ " option:selected").text());

          $.ajax({
               'url':'<?php echo base_url('dashboard/getItem');?>',
               'type': 'GET',
               'dataType': 'json',
               'data': {id:val}
            }).done(function (e){
              //var pos_td = eval(pos) + 1;
              //var content = "";
              $("#item-table tr").find("td:eq("+pos+")").empty();
              $.each(e,function(i,item){
                var stt = $(".tr-"+item.id_sub_category).attr('data-show');
                if (stt === 'active') {
                  var cls = 'block';
                } else {
                  var cls = 'none';
                }
                var content = item.item_name + '<br><span class="hidden-notes'+item.id_sub_category+'" style="display:'+cls+';">'+
                            '<small style="color: #b3b3b3;">'+item.item_description+'</small>'+
                            '</span>';
                  $("#row"+pos+"-"+item.id_sub_category).html(content);
              });
            });
        }

        function toggleHide(row) {
          $(".hidden-notes"+row).hide();
          $(".row-hide-"+row).hide();
          $(".row-show-"+row).show();
          $(".tr-"+row).attr("data-show","deactive");
        }

        function toggleShow(row) {
          $(".hidden-notes"+row).show();
          $(".row-show-"+row).hide();
          $(".row-hide-"+row).show();
          $(".tr-"+row).attr("data-show","active");
        }
    </script>

  </body>

</html>
