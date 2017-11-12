<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Form Edit</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="<?php echo site_url('type/save');?>" method="post" class="form-horizontal">
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                <div class="control-group">
                    <label class="control-label">Name :</label>
                    <div class="controls">
                    <input type="text" name="type_name" value="<?php echo $data['type_name'];?>" required="true" class="span11" placeholder="Name" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Description :</label>
                    <div class="controls">
                        <textarea name="type_description" class="textarea_editor span11" rows="6" placeholder="Enter text ..."><?php echo $data['type_description'];?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Password input</label>
                    <div class="controls">
                        <select class="span11" name="type_status" >
                            <option value="1" <?php echo ($data['type_status'] == "1" ? "selected" : "") ;?>>Active</option>
                            <option value="2" <?php echo ($data['type_status'] == "2" ? "selected" : "") ;?>>Not Active</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Save</button>
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