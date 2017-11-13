<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Form Add</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo site_url('vendor/save');?>" method="post" class="form-horizontal">
				<div class="control-group">
                    <label class="control-label">Type :</label>
                    <div class="controls">
                    <select name="id_type" required="true" class="span11" placeholder="Type">
						<?php foreach($type as $k=>$v) {?>
							<option value="<?php echo $v['id'];?>"><?php echo $v['type_name'];?></option>
						<?php } ?>
					</select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Name :</label>
                    <div class="controls">
                    <input type="text" name="vendor_name" required="true" class="span11" placeholder="Name" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description :</label>
                    <div class="controls">
                        <textarea name="vendor_description" class="textarea_editor span11" rows="6" placeholder="Enter text ..."></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Status</label>
                    <div class="controls">
                        <select class="span11" name="vendor_status" >
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
    });
</script>