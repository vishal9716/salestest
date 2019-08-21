<?php echo $this->load->view("common/top"); ?>

                <?php $this->load->view('header_message'); ?>
                <?php $this->load->view('left_message'); ?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Comparision Sheet</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Add Comparision Sheet - <?php echo $_GET['sr_no'];?>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="table" class="table-editable table-responsive">
                                    <table class="table table-bordered table-responsive-md table-striped text-center" id="crud_table">
                                      <thead>
      <tr>
        <th rowspan="2">S.No.</th>
        <th rowspan="2">Item Description</th>
		<th rowspan="2">Unit</th>
        <th rowspan="2">Qty</th>
		<th colspan="2">Vendor 1</th>
		<th colspan="2">Vendor 2</th>
		<th colspan="2">Vendor 3</th>
	    <th rowspan="2">Action</th>
    </tr>
    <tr>
		<th> Unit Price-(INR) </th>
		<th> Total Amount-(INR) </th>
        <th> Unit Price-(INR) </th>
		<th> Total Amount-(INR) </th>
		<th> Unit Price-(INR) </th>
		<th> Total Amount-(INR) </th>
     </tr>
   </thead>							
                                        <tbody>

                                            <tr class="even gradeC">
                                                <td class="srno" contenteditable="true">1.</td>
                                                <td class="item_desp" contenteditable="true"></td>
                                                <td class="unit" contenteditable="true"></td>
                                                <td class="qty" contenteditable="true"></td>
                                                <td class="quoted_unit_price" contenteditable="true"></td>
                                                <td class="quoted_total_price" contenteditable="true"></td>
                                                <td class="final_quoted_unit_price" contenteditable="true"></td>
                                                <td class="final_quoted_total_price" contenteditable="true"></td>
												<td class="final_quoted_unit_price" contenteditable="true"></td>
                                                <td class="final_quoted_total_price" contenteditable="true"></td>
                                                <td>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <span style="float:right;">
                                        <button type="button" name="add" id="add" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                    </span>
                                    <span style="float: center;">
                                        <button type="button" name="save_comp" id="save_comp" class="btn btn-info btn-sm">Save</button>
                                    </span>
                                    <br />
                                    <!-- /.table-responsive -->
                                </div>     
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>



                </div>
                <!-- /.row -->

                <!-- BODY section -->


                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                var count = 1;
                $('#add').click(function () {
				//alert("in");
                    count = count + 1;
                    var html_code = "<tr id='row" + count + "'>";
                    html_code += "<td class='srno' contenteditable='true'></td>";
                    html_code += "<td class='item_desp' contenteditable='true'></td>";
                    html_code += "<td class='unit' contenteditable='true'></td>";
                    html_code += "<td class='qty' contenteditable='true'></td>";
                    html_code += "<td class='quoted_unit_price' contenteditable='true'></td>";
                    html_code += "<td class='quoted_total_price' contenteditable='true'></td>";
                    html_code += "<td class='final_quoted_unit_price' contenteditable='true'></td>";
                    html_code += "<td class='final_quoted_total_price' contenteditable='true'></td>";
					html_code += "<td class='' contenteditable='true'></td>";
                    html_code += "<td class='' contenteditable='true'></td>";
                    html_code += "<td><button type='button' name='remove' data-row='row" + count + "' class='btn btn-danger btn-xs remove'>-</button></td>";
                    html_code += "</tr>";
                    $('#crud_table').append(html_code);
                });
                $(document).on('click', '.remove', function () {
                    var delete_row = $(this).data("row");
                    $('#' + delete_row).remove();
                });
                $('#save_comp').click(function () {
                    //alert("in--");
					var sr_no = "<?php echo $_GET['sr_no'];?>";
					//alert(sr_no);
                    var item_desp = [];
                    var unit = [];
                    var qty = [];
                    var quoted_unit_price = [];
                    var quoted_total_price = [];
                    var final_quoted_unit_price = [];
                    var final_quoted_total_price = [];
                  
                    $('.item_desp').each(function () {
                        item_desp.push($(this).text());
                    });
                    $('.unit').each(function () {
                        unit.push($(this).text());
                    });
                    $('.qty').each(function () {
                        qty.push($(this).text());
                    });
                    $('.quoted_unit_price').each(function () {
                        quoted_unit_price.push($(this).text());
                    });
                    $('.quoted_total_price').each(function () {
                        quoted_total_price.push($(this).text());
                    });
                    $('.final_quoted_unit_price').each(function () {
                        final_quoted_unit_price.push($(this).text());
                    });
                    $('.final_quoted_total_price').each(function () {
                        final_quoted_total_price.push($(this).text());
                    });
                
                    $.ajax({
                        url: "<?php echo base_url(); ?>index.php/purchase_request/add_comparision/"+sr_no,
                        method: "POST",
 data: {item_desp: item_desp, unit: unit, qty: qty, quoted_unit_price: quoted_unit_price, quoted_total_price: quoted_total_price, final_quoted_unit_price: final_quoted_unit_price, final_quoted_total_price: final_quoted_total_price},
                        success: function (data) {
                            alert(data);
window.location.href = "<?php echo base_url(); ?>index.php/purchase_request/comparision_history";  
                            $('#prModal').modal('hide');
                            jsonData = JSON.parse(data);
                            document.getElementById("pr_srno").value = jsonData[0].sr_no;
                            $("td[contentEditable='true']").text("");
                            for (var i = 2; i <= count; i++)
                            {
                                $('tr#' + i + '').remove();
                            }
                            fetch_item_data();
                        }
                    });
                });
            });
        </script>

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