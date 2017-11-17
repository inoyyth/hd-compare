<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Form Edit</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo site_url('series/save');?>" method="post" class="form-horizontal">
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
				<div class="control-group">
                    <label class="control-label">Type :</label>
                    <div class="controls">
                    <select name="id_type" id="id_type" required="true" class="span11" placeholder="Type">
						<?php foreach($type as $k=>$v) {?>
							<option value="<?php echo $v['id'];?>" <?php echo ($data['id_type'] == $v['id'] ? "selected" : "");?>><?php echo $v['type_name'];?></option>
						<?php } ?>
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Vendor :</label>
                    <div class="controls">
                    <select name="id_vendor" id="id_vendor" required="true" class="span11" placeholder="Type">
						
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Name :</label>
                    <div class="controls">
                    <input type="text" name="series_name" value="<?php echo $data['series_name'];?>" required="true" class="span11" placeholder="Name" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description :</label>
                    <div class="controls">
                        <textarea name="series_description" class="textarea_editor span11" rows="6" placeholder="Enter text ..."><?php echo $data['series_description'];?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Status</label>
                    <div class="controls">
                        <select class="span11" name="series_status" >
                            <option value="1" <?php echo ($data['series_status'] == "1" ? "selected" : "") ;?>>Active</option>
                            <option value="2" <?php echo ($data['series_status'] == "2" ? "selected" : "") ;?>>Not Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Save</button>
					<a href="<?php echo site_url('series');?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('.textarea_editor').wysihtml5();
        //onload
        var ajx = ajaxVendor($("#id_type").val());
        var html = '';
        ajx.done(function(e){
            $.each(e, function(i,v){
                var a = "";
                if (v.id == <?php echo $data['id_vendor'];?>) {
                     a  = "selected";
                }
                html += '<option value=' + v.id + ' ' + a + '>' + v.vendor_name + '</option>';
            });
            $("#id_vendor").append(html);
        });

        $("#id_type").change(function (){
            $("#id_vendor").find('option').remove();
            var ajx = ajaxVendor($(this).val());
            var html = '<option value="" selected disabled> - Select -</option>';
            ajx.done(function(e){
                $.each(e, function(i,v){
                    html += '<option value=' + v.id + '>' + v.vendor_name + '</option>';
                });
            $("#id_vendor").append(html);
            });
        });
    });

    function ajaxVendor(id) {
        return $.ajax({
            url:"<?php echo base_url('model/getVendor');?>",
            data:{id:id},
            type:'GET',
            dataType: 'json'
        });
    }
</script>