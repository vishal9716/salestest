<?php echo $this->load->view("common/top"); ?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <?php $this->load->view('header_message'); ?>
    <?php $this->load->view('left_message'); ?>
</nav>
<div id="page-wrapper" style="width:100%;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Purchase Request List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Purchase Request listing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><a href="<?php echo base_url(); ?>index.php/purchase_request/internal">Add Purchase Request</a></span>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <?php
                    if (empty($purchase_request_list)) {
                        echo '<center>No Records Available</center>';
                    } else {
                        ?>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>PR SNo.</th>
                                    <th>department_id</th>
                                    <th>Issue Date</th>
                                    <th>Supplier</th>
                                    <th>Order Placed</th>
                                    <th>Action Taken</th>
                                    <th>Status</th>
                                    <!--<th>phone_person</th> -->

                                    <th>Action</th>
                                </tr>
                            </thead>								
                            <tbody>

                                <?php
                                //echo "<pre/>"; print_r($purchase_request_list); die;
                                $i = 0;
                                foreach ($purchase_request_list as $list) {
                                    $i++;
                                    if ($i % 2 == 0) {
                                        $classname = "odd gradeX";
                                    } else {
                                        $classname = "even gradeC";
                                    }
                                    ?>
                                    <tr class="<?php echo $classname; ?>">
                                        <td><?php echo $i; ?></td>
                                        <td id="pr_srno"><a prsno="<?php echo $list['sr_no']; ?>" class="prsno" href='#' data-toggle='modal' data-target='#prQuot'>
                                         <?php echo $list['sr_no']; ?></a></td>
                                        <td><?php echo $list['department_id']; ?></td>
                                        <td><?php echo $list['pr_issue_date']; ?></td>
                                        <td><?php echo $list['supplier_name']; ?></td>
                                        <!--<td><?php echo $list['pr_recd_on']; ?></td>-->
                                        <td><?php echo $list['order_placed_by']; ?></td>
                                        <td><?php echo $list['action_taken_by']; ?></td>
                                        <td>
                                                <!--<span class="label label-danger">Reject</span>-->
                                            <span class="label label-warning">Pending</span>
                                            <!--<span class="label label-success">Approved</span>-->
                                        </td>
                                   <!-- <td><?php echo $list['phone_person']; ?></td>-->


                                        <td><a href="<?php echo base_url(); ?>index.php/purchase_request/edit_purchase_request?sr_no=<?php echo $list['sr_no']; ?>">Edit</a> | <a href="<?php echo base_url(); ?>index.php/purchase_request/internal_memo?sr_no=<?php echo $list['sr_no']; ?>">Memo</a> | <a href="<?php echo base_url(); ?>index.php/purchase_request/pr_quotation">Quotation</a> | <a href="<?php echo base_url(); ?>index.php/purchase_request/checklist?sr_no=<?php echo $list['sr_no']; ?>">Checklist</a> | <a href="<?php echo base_url(); ?>index.php/purchase_request/negotiation?sr_no=<?php echo $list['sr_no']; ?>">Negotiation</a> | <a href="<?php echo base_url(); ?>index.php/purchase_request/comparision?sr_no=<?php echo $list['sr_no']; ?>">Comparision </a>| <a href="<?php echo base_url(); ?>index.php/purchase_request/audit_checklist?sr_no=<?php echo $list['sr_no']; ?>">Audit</a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>


                        </tbody>
                    </table>

                </div>

            </div>

        </div>						

    </div>
    <!-- /.row -->

    <!-- BODY section -->


    <!-- /.row -->
</div>
<!-- /#page-wrapper -->


<!--Purchase Modal Start-->
<div class="modal fade" id="prQuot" role="dialog" style="overflow:hidden;">
    <div class="modal-dialog modal-lg" style="width:95%;">
        <div class="modal-content">
            <div class="modal-header" style="overflow:hidden;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-info">PURCHASE REQUISITION Listing</h4>
            </div>
            <div class="modal-body">
                <div class="container">

                    <!-- Editable table -->
                    <div class="card">

                        <!-- <h3 class="card-header text-center font-weight-bold text-uppercase py-4">PURCHASE REQUISITION</h3>-->
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-md-1">PR S. No.</div>
                            <div class="col-md-2"><input class="form-control" placeholder="Enter PR S. No." id="sr_no" name="sr_no" value=""></div>
                        </div>
                        <div class="card-body">
                            <div id="table" class="table-editable">

                                <table class="table table-bordered table-responsive-md table-striped text-center" id="crud_table">
                                    <thead> 	
                                        <tr>
                                            <th rowspan="2">S.No.</th>
                                            <th rowspan="2">PR No.</th>
                                            <th rowspan="2">Description</th>
                                            <th rowspan="2">Unit</th>
                                            <th rowspan="2">Avg. Cods.</th>
                                            <th rowspan="2">Qty. in Stock</th>
                                            <th rowspan="2">Reorder Point</th>
                                            <th rowspan="2">Reorder Quantity</th>
                                            <th rowspan="2">Qty. Req.</th>
                                            <th rowspan="2">Status</th>
                                            <th colspan="2"> Supplier</th>
                                            <th colspan="2">Order Placed on</th>
                                        </tr>
                                        <tr>
                                            <th> Rate </th>
                                            <th> Supplier </th>
                                            <th> Rate </th>
                                            <th> Supplier </th>
                                        </tr>


                                    </thead>
                                    <tbody class="test">

                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Editable table -->

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(".prsno").click(function() {
            //I need to get the child of this-> then I need to fetch prsno attr
            var pr_srno = $(this).attr('prsno');
            var pr_srnumber = pr_srno.trim();
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/purchase_request/display_pr_list/" + pr_srnumber,
                method: "POST",

                success: function (data) {
                    $('#crud_table tbody').empty();
                    data = JSON.parse(data);
                    var objList = data['pr_list'];
                    $.each(objList, function (index, obj) {
                        var row = $('<tr>');
                        row.append('<td>' + eval(index + 1) + '</td>');
                        row.append('<td>' + obj.sr_no + '</td>');
                        row.append('<td>' + obj.pr_description + '</td>');
                        row.append('<td>' + obj.units + '</td>');
                        row.append('<td>' + obj.avg_cods + '</td>');
                        row.append('<td>' + obj.qty_in_stock + '</td>');
                        row.append('<td>' + obj.reorder_point + '</td>');
                        row.append('<td>' + obj.reorder_quantity + '</td>');
                        row.append('<td>' + obj.qty_req + '</td>');
                        row.append('<td><span class="label label-warning">' + obj.status + '</span></td>');
                        row.append('<td>' + obj.pr_supplier_rate + '</td>');
                        row.append('<td>' + obj.pr_supplier_supplier + '</td>');
                        row.append('<td>' + obj.order_placed_rate + '</td>');
                        row.append('<td>' + obj.order_placed_supplier + '</td>');
                        $('#crud_table tbody').append(row);
                    });
                    // Display Modal
                    // ('#prQuot').modal('show'); 
                },
                error: function (data) {

                    alert("error");
                }
            });



        });
    });
</script>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url(); ?>data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
