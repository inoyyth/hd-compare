<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Category List</h5>
            <a href="#" id="btn-delete" class="label btn btn-danger" onclick="return confirm('Remove Data?');">Delete</a>
            <a href="#" id="btn-edit" class="label btn btn-warning">Edit</a>
            <a id="btn-add" href="<?php echo site_url('category/add');?>" class="label btn btn-success">New</a>
            </div>
            <div class="widget-content nopadding">
            <div id="main-list-table"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#main-list-table").tabulator({
            fitColumns: true,
            pagination: true,
            movableCols: true,
            movableRows:true,
            height: "320px", // set height of table (optional),
            pagination:"remote",
            paginationSize: 50,
            fitColumns:true, //fit columns to width of table (optional),
            ajaxType: "GET", //ajax HTTP request type
            ajaxURL: "<?php echo base_url('category/getListTable'); ?>", //ajax URL,
            //ajaxParams:{key1:"value1", key2:"value2"}, //ajax parameters
            columns: [//Define Table Columns
                {rowHandle:true, formatter:"handle", headerSort:false, frozen:true, width:30, minWidth:30},
                {title: "Type", field: "type_name", headerSort:false, tooltip: true},
                {title: "Name", field: "spec_category_name", headerSort:false, tooltip: true},
                {title: "Description", field: "spec_category_description", headerSort:false, tooltip: true},
                {title: "Status", field: "status", headerSort:false, tooltip: true}
            ],
            selectable: 1,
            rowSelectionChanged: function (data, rows) {
                //console.log(data);
                if (data.length > 0) {
                    $('#btn-edit').attr('href', '<?php echo site_url(); ?>category-edit-' + data[0]['id'] + '.html');
                    $('#btn-delete').attr('href', '<?php echo site_url(); ?>category-delete-' + data[0]['id'] + '.html');
                } else {
                    $('#btn-edit').attr('href', '#');
                    $('#btn-delete').attr('href', '#');
                }
            },
            rowDblClick:function(e, row){
                //console.log(row.row.data.id);
                location.replace('<?php echo site_url(); ?>category-detail-' + row.row.data.id + '.html');
            },
            rowMoved:function(row){
                //console.log(row.row.parent.activeRows);
                var dt = row.row.parent.activeRows;
                var params = {}
                $.each(dt, function(i,v){
                    params[i] = {'id':v.data.id};
                });
                $.ajax({
                    'url': '<?php echo site_url('category/sortData');?>',
                    type: 'post',
                    'data': {'data':JSON.stringify(params)},
                    'dataType': 'json',
                    success:function(e){
                        console.log('success');
                    },
                    error: function (e) {
                        console.log('failed');
                    }
                });
            }
        });
    });

    function clearFilterTable() {
        $(".form-filter-table")[0].reset();
        filterTable();
    }

    function filterTable() {
        var params = {
            area_code: $('#search-code').val(),
            area_name: $('#search-name').val(),
        };

        $("#main-list-table").tabulator("setData", "<?php echo base_url('category/getListTable'); ?>", params);
    }
</script>