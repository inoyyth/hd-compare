<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Series List</h5>
            <a href="#" id="btn-delete" class="label btn btn-danger" onclick="return confirm('Remove Data?');">Delete</a>
            <a href="#" id="btn-edit" class="label btn btn-warning">Edit</a>
            <a id="btn-add" href="<?php echo site_url('series/add');?>" class="label btn btn-success">New</a>
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
            layout:"fitData",
            fitColumns: true,
            pagination: true,
            movableCols: true,
            height: "320px", // set height of table (optional),
            pagination:"remote",
            paginationSize: 10,
            ajaxType: "GET", //ajax HTTP request type
            ajaxURL: "<?php echo base_url('series/getListTable'); ?>", //ajax URL
            //ajaxParams:{key1:"value1", key2:"value2"}, //ajax parameters
            columns: [//Define Table Columns
                {formatter: "rownum", align: "center", width: 40, headerSort:false, frozen:true,},
                {title: "Type", field: "type_name", sorter: "string", tooltip: true},
				{title: "Vendor", field: "vendor_name", sorter: "string", tooltip: true},
                {title: "Name", field: "series_name", sorter: "string", tooltip: true},
                {title: "Description", field: "series_description", sorter: "string", tooltip: true},
                {title: "Status", field: "status", sorter: "string", tooltip: true}
            ],
            selectable: 1,
            rowSelectionChanged: function (data, rows) {
                console.log(data);
                if (data.length > 0) {
                    $('#btn-edit').attr('href', '<?php echo site_url(); ?>series-edit-' + data[0]['id'] + '.html');
                    $('#btn-delete').attr('href', '<?php echo site_url(); ?>series-delete-' + data[0]['id'] + '.html');
                } else {
                    $('#btn-edit').attr('href', '#');
                    $('#btn-delete').attr('href', '#');
                }
            },
            rowDblClick:function(e, row){
                location.replace('<?php echo site_url(); ?>series-edit-' + row + '.html');
            },
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

        $("#main-list-table").tabulator("setData", "<?php echo base_url('series/getListTable'); ?>", params);
    }
</script>