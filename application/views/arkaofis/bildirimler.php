
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="icon-bell"></i> <?php echo lang("ctn_412") ?></h4>
                <p class="card-description">

                <div class="form-group has-feedback no-margin">
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" placeholder="<?php echo lang("ctn_336") ?>" id="form-search-input" />
                        <div class="input-group-btn">
                            <input type="hidden" id="search_type" value="0">
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            <ul class="dropdown-menu small-text" style="min-width: 90px !important; left: -90px;">
                                <li><a href="#" onclick="change_search(0)"><span class="glyphicon glyphicon-ok" id="search-like"></span> <?php echo lang("ctn_337") ?></a></li>
                                <li><a href="#" onclick="change_search(1)"><span class="glyphicon glyphicon-ok no-display" id="search-exact"></span> <?php echo lang("ctn_338") ?></a></li>
                                <li><a href="#" onclick="change_search(2)"><span class="glyphicon glyphicon-ok no-display" id="user-exact"></span> <?php echo lang("ctn_339") ?></a></li>
                                <li><a href="#" onclick="change_search(3)"><span class="glyphicon glyphicon-ok no-display" id="message-exact"></span> <?php echo lang("ctn_412") ?></a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </div>
                <!-- ToDo: Tümü Okundu Yapılınca hata veriyor. Kontrol Edilecek -- HATA VE BILDIRIM UYARILARINI EKLEMEDIGIM ICIN GELIYOR OLABILIR -->
                <a href="<?php echo site_url("arkaofis/read_all_noti/" . $this->security->get_csrf_hash()) ?>" class="btn btn-primary btn-sm"><?php echo lang("ctn_413") ?></a>
                </p>
                <div  class="table-responsive">
                    <table id="noti-table" class="table table-hover">
                        <thead>
                        <tr>
                            <th><?php echo lang("ctn_339") ?></th>
                            <th><?php echo lang("ctn_413") ?></th>
                            <th><?php echo lang("ctn_293") ?></th>
                            <th><?php echo lang("ctn_52") ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        var st = $('#search_type').val();
        var table = $('#noti-table').DataTable({
            "dom" : "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            "processing": false,
            "pagingType" : "full_numbers",
            "pageLength" : 15,
            "serverSide": true,
            "orderMulti": false,
            "order": [
                [2, "desc"]
            ],
            "columns": [
                { "orderable": false },
                { "orderable": false },
                null,
                { "orderable": false },
            ],
            "ajax": {
                url : "<?php echo site_url("arkaofis/notifications_page/") ?>",
                type : 'GET',
                data : function ( d ) {
                    d.search_type = $('#search_type').val();
                }
            },
            "drawCallback": function(settings, json) {
                $('[data-toggle="tooltip"]').tooltip();
            }
        });
        $('#form-search-input').on('keyup change', function () {
            table.search(this.value).draw();
        });

    } );
    function change_search(search)
    {
        var options = [
            "search-like",
            "search-exact",
            "user-exact",
            "message-exact",
        ];
        set_search_icon(options[search], options);
        $('#search_type').val(search);
        $( "#form-search-input" ).trigger( "change" );
    }

    function set_search_icon(icon, options)
    {
        for(var i = 0; i<options.length;i++) {
            if(options[i] == icon) {
                $('#' + icon).fadeIn(10);
            } else {
                $('#' + options[i]).fadeOut(10);
            }
        }
    }
</script>