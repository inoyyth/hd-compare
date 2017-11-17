<div class="row-fluid">
    <div class="span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Storage Info</h5>
            </div>
            <div class="widget-content nopadding">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">Type :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $data['type_name'];?>" required="true" class="span11" placeholder="Name" readonly="true" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Vendor :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $data['vendor_name'];?>" required="true" class="span11" placeholder="Name" readonly="true" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Series :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $data['series_name'];?>" required="true" class="span11" placeholder="Name" readonly="true" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Model :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $data['model_name'];?>" required="true" class="span11" placeholder="Name" readonly="true" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="span6">
        <form method="post" action="<?php echo site_url('item/save');?>">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <?php foreach($category as $k=>$v) { ?>
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5><?php echo $v['spec_category_name'];?></h5>
            </div>
            <div class="widget-content nopadding">
                <?php
                    $this->db->select('*');
                    $this->db->from('spec_subcategory');
                    $this->db->where(array('id_spec_category'=>$v['id'],'spec_subcategory_status'=>'1'));
                    $this->db->order_by('spec_subcategory_position','asc');
                    $res = $this->db->get()->result_array();

                    foreach($res as $resK=>$resV) {
                        $val1 = "";
                        $val2 = "";
                        $getVal = $this->db->get_where('item',array('id_model'=>$data['id'],'id_category'=>$v['id'],'id_sub_category'=>$resV['id']))->row_array();
                        if ($getVal != NULL) {
                            $val1 = $getVal['item_name'];
                            $val2 = $getVal['item_description'];
                        }
                ?>
                    <div class="alert alert-info">
                        <strong><?php echo $resV['spec_subcategory_name'];?></strong>
                    </div>
                    <div class="controls">
                        <textarea name="<?php echo formatName($data['id'],$v['id'],$resV['id']);?>" placeholder="additional 1" class="span11 m-wrap textarea_editor" rows="4" cols="50"><?php echo $val1;?></textarea>
                        <textarea name="<?php echo formatName($data['id'],$v['id'],$resV['id']);?>" placeholder="additional 2" class="span11 m-wrap textarea_editor" rows="4" cols="50"><?php echo $val2;?></textarea>
                    </div>
                    <hr>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?php echo site_url('item');?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php 
    function formatName($model,$category,$subcategory) {
        $ds = "|";
        $res = $model.$ds;
        $res .= $category.$ds;
        $res .= $subcategory;
        $res .= "[]";
        return $res;
    }
?>
<script>
    $(document).ready(function () {
        $('.textarea_editor').each(function(){$(this).wysihtml5();});
    });
</script>