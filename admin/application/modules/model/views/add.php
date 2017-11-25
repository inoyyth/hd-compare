<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Form Add</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo site_url('model/save');?>" method="post" class="form-horizontal">
				<div class="control-group">
                    <label class="control-label">Type :</label>
                    <div class="controls">
                    <select name="id_type" id="id_type" required="true" class="span11" placeholder="Type">
                        <option value="" disabled selected> - Select -</option>
                    <?php foreach($type as $k=>$v) {?>
                        <option value="<?php echo $v['id'];?>"><?php echo $v['type_name'];?></option>
						<?php } ?>
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Vendor :</label>
                    <div class="controls">
                    <select name="id_vendor" id="id_vendor" required="true" class="span11" placeholder="Type">
						<option value="" disabled selected> - Select Type First -</option>
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Series :</label>
                    <div class="controls">
                    <select name="id_series" id="id_series" required="true" class="span11" placeholder="Type">
                        <option value="" disabled selected> - Select Vendor First -</option>
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Name :</label>
                    <div class="controls">
                    <input type="text" name="model_name" required="true" class="span11" placeholder="Name" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description :</label>
                    <div class="controls">
                        <textarea name="model_description" class="textarea_editor span11" rows="6" placeholder="Enter text ..."></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Status</label>
                    <div class="controls">
                        <select class="span11" name="model_status" >
                            <option value="1">Active</option>
                            <option value="2" selected>Not Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Save</button>
					<a href="<?php echo site_url('vendor');?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('.textarea_editor').wysihtml5();
        $("#id_type").change(function (){
            $("#id_vendor").find('option').remove();
            $("#id_series").find('option').remove();
            $("#id_series").append('<option value="" selected disabled> - Select Vendor First -</option>');
            var ajx = ajaxVendor($(this).val());
            var html = '<option value="" selected disabled> - Select -</option>';
            ajx.done(function(e){
                $.each(e, function(i,v){
                    html += '<option value=' + v.id + '>' + v.vendor_name + '</option>';
                });
            $("#id_vendor").append(html);
            });
        });

        $("#id_vendor").change(function (){
            $("#id_series").find('option').remove();
            var ajx = ajaxSeries($(this).val());
            var html = '<option value="" selected disabled> - Select -</option>';
            ajx.done(function(e){
                $.each(e, function(i,v){
                    html += '<option value=' + v.id + '>' + v.series_name + '</option>';
                });
            $("#id_series").append(html);
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

    function ajaxSeries(id) {
        return $.ajax({
            url:"<?php echo base_url('model/getSeries');?>",
            data:{id:id},
            type:'GET',
            dataType: 'json'
        });
    }
</script>