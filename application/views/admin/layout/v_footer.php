                    <!-- BEGIN Page Footer -->
                    <footer class="page-footer" role="contentinfo">
                        <div class="d-flex align-items-center flex-1 text-muted">
                            Versi <strong> <?= $versi;?></strong>
                        </div>
                        <div><?=$created;?></div>
                    </footer>
                    <!-- END Page Footer -->
                </div>
            </div>
        </div>
<!-- END Page Wrapper -->
        <?for($i=0;$i<count($js);$i++){echo "<script src='".$js_url['js'].$js[$i]."'></script>";}?>
        <script>
            /* Activate smart panels */
            $('#js-page-content').smartPanel();
            $(document).ready(function()
            {
                // Setup - add a text input to each footer cell
                $('#dt-basic-example thead tr').clone(true).appendTo('#dt-basic-example thead');
                $('#dt-basic-example thead tr:eq(1) th').each(function(i)
                {
                    var title = $(this).text();
                    $(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search ' + title + '" />');

                    $('input', this).on('keyup change', function()
                    {
                        if (table.column(i).search() !== this.value)
                        {
                            table
                                .column(i)
                                .search(this.value)
                                .draw();
                        }
                    });
                });

                var table = $('#dt-basic-example').DataTable(
                {
                    //responsive: true,
                    orderCellsTop: true,
                    fixedHeader: false,
                    sScrollX:"100%",
                    sScrollXInner:"110%",
                    bScrollCollapse:true,
                });

            });

            $(document).ready(function()
            {
                
            });

        </script>
    </body>
</html>
