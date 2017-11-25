<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Type List</h5>
            <a href="#" id="btn-edit" class="label btn btn-warning">Edit</a>
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
            height: "320px", // set height of table (optional),
            pagination:"remote",
            paginationSize: 10,
            fitColumns:true, //fit columns to width of table (optional),
            ajaxType: "GET", //ajax HTTP request type
            ajaxURL: "<?php echo base_url('item/getListTable'); ?>", //ajax URL
            //ajaxParams:{key1:"value1", key2:"value2"}, //ajax parameters
            columns: [//Define Table Columns
                {formatter: "rownum", align: "center", width: 40},
                {title: "Type", field: "type_name", sorter: "string", tooltip: true},
                {title: "Vendor", field: "vendor_name", sorter: "string", tooltip: true},
                {title: "Series", field: "series_name", sorter: "string", tooltip: true},
                {title: "Model", field: "model_name", sorter: "string", tooltip: true},
            ],
            selectable: 1,
            rowSelectionChanged: function (data, rows) {
                console.log(data);
                if (data.length > 0) {
                    $('#btn-edit').attr('href', '<?php echo site_url(); ?>item-edit-' + data[0]['id'] + '.html');
                } else {
                    $('#btn-edit').attr('href', '#');
                }
            },
            rowDblClick:function(e, row){
                location.replace('<?php echo site_url(); ?>item-edit-' + row + '.html');
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

        $("#main-list-table").tabulator("setData", "<?php echo base_url('item/getListTable'); ?>", params);
    }
</script>