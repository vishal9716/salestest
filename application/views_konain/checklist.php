<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Commercial/Billing Automation</title>

    <!-- Bootstrap Core CSS -->
	
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	function deleteuser(userid)
	{
		var txt;
		var r = confirm("Are you sure wants to delete!");
		if (r == true) {
		  window.location.href = "<?php echo base_url(); ?>index.php/user/delete_user?uid="+userid;
		} else {
		  window.location.href = "<?php echo base_url(); ?>/index.php/user/";
		} 
	}
	</script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<?php $this->load->view('header_message');?>
		<?php $this->load->view('left_message');?>
		  </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Checklist for CAPEX / PR SOP </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
            <!-- /.row -->
            <div class="row">
                 <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							
                            PR No: <?php echo $_GET['sr_no'];?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr. No</th>
                                        <th>Check Points</th>
                                        <th>Page Number</th>
                                        <th>Yes / No</th>
                                      
                                    </tr>
                                </thead>								
                                <tbody>
					
                                    <tr class="even gradeC">
                                        <td>1.</td>
                                        <td class="pr_sop_checklist_chk">Purchase SOP Audit Checklist</td>
                                         <td class="pr_sop_checklist" contenteditable="true"></td>
                                        <td>
									  <input type="radio" class="form-check-input" value="yes" name="pr_sop_checklist">
									  <label class="form-check-label">Yes</label>
										&nbsp;
									  <input type="radio" class="form-check-input" value="no" name="pr_sop_checklist">
									  <label class="form-check-label">No</label>
									</td>
                                    </tr>
									 <tr class="even gradeC">
                                        <td>2.</td>
                                        <td class="user_justification_chk">User Justification</td>
                                        <td class="user_justification" contenteditable="true"></td>
                                        <td>
									 <input type="radio" class="form-check-input" value="yes" name="user_justification">
								 	 <label class="form-check-label" for="">Yes</label>
									&nbsp;
								  <input type="radio" class="form-check-input" value="no" name="user_justification">
								  <label class="form-check-label">No</label>
										 </td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>3.</td>
                                        <td class="approved_pr_chk">Approved PR</td>
                                        <td class="approved_pr" contenteditable="true"></td>
                                        <td>
									<input type="radio" class="form-check-input" value="yes" name="approved_pr">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									    <input type="radio" class="form-check-input" value="no" name="approved_pr">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>4.</td>
                                        <td class="comparison_sheet_chk">Comparison sheet</td>
                                        <td class="comparison_sheet" contenteditable="true"></td>
                                        <td>
								 <input type="radio" class="form-check-input" value="yes" name="comparison_sheet">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									    <input type="radio" class="form-check-input" value="no" name="comparison_sheet">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>5.</td>
                                        <td class="negotiation_history_chk">Negotiation History</td>
                                        <td class="negotiation_history" contenteditable="true"></td>
                                        <td>
								<input type="radio" class="form-check-input" value="yes" name="negotiation_history">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									<input type="radio" class="form-check-input" value="no" name="negotiation_history">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>6.</td>
                                        <td class="negotiation_matrix_chk">Negotiation Matrix</td>
                                        <td class="negotiation_matrix" contenteditable="true"></td>
                                        <td>
								<input type="radio" class="form-check-input" value="yes" name="negotiation_matrix">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									<input type="radio" class="form-check-input" value="no" name="negotiation_matrix">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>7.</td>
								<td class="delivery_date_schedule_chk">Delivery date and schedule	</td>
								<td class="delivery_date_schedule" contenteditable="true"></td>
								<td>
							<input type="radio" class="form-check-input" value="yes" name="delivery_date_schedule">
								    <label class="form-check-label" for="">Yes</label>
										 &nbsp;
							<input type="radio" class="form-check-input" value="no" name="delivery_date_schedule">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>8.</td>
                         <td class="shortlisted_vendor_recommendation_chk">Shortlisted Vendor recommendation</td>
                                       <td class="shortlisted_vendor_recommendation" contenteditable="true"></td>
                                        <td>
					<input type="radio" class="form-check-input" value="yes" name="shortlisted_vendor_recommendation">
							 <label class="form-check-label" for="">Yes</label>
								 &nbsp;
				    <input type="radio" class="form-check-input" value="no" name="shortlisted_vendor_recommendation">
							    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>9.</td>
                         <td class="final_negotiated_rate_chk">Final Negotiated rate with payment term</td>
                                        <td class="final_negotiated_rate" contenteditable="true"></td>
                                        <td>
						 <input type="radio" class="form-check-input" value="yes" name="final_negotiated_rate">
									     <label class="form-check-label">Yes</label>
										 &nbsp;
						 <input type="radio" class="form-check-input" value="no" name="final_negotiated_rate">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>10.</td>
                                        <td class="capex_statement_chk">CAPEX Statement</td>
                                        <td class="capex_statement" contenteditable="true"></td>
                                        <td>
									<input type="radio" class="form-check-input" value="yes" name="capex_statement">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									 <input type="radio" class="form-check-input" value="no" name="capex_statement">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>11.</td>
                                        <td class="opex_chk">OPEX (Included within Budgeted Amount)</td>
                                        <td class="opex" contenteditable="true"></td>
                                        <td>
										 <input type="radio" class="form-check-input" value="yes" name="opex">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									    <input type="radio" class="form-check-input" value="no" id="" name="opex">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>
									<tr class="even gradeC">
                                        <td>12.</td>
										<td class="approval_chk">Approval<ul style="list-style: none;">
											<li>1. Upto 30,000 – Unit Head</li><br/>
											<li>2. 30,001 to 20,00,000 – Executive Director</li><br/>
											<li>3. 20,00,001 & Above - Managing Director</li><br/>
											</ul></td>
                                        <td class="approval" name="approval" id="approval" contenteditable="true"></td>
                                        <td>
										 <input type="radio" class="form-check-input" id="" value="yes" name="approval">
									     <label class="form-check-label" for="">Yes</label>
										 &nbsp;
									    <input type="radio" class="form-check-input" value="no" id="" name="approval">
									    <label class="form-check-label">No</label>
										</td>
                                    </tr>	
									
									<tr class="even gradeC">
										 <td colspan="4" style="align:'center';">
										 <button type="submit" class="btn btn-primary btn-flat pull-left" onclick="add_audit_checklist();" id="submit">Submit</button>
										</td>
									</tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
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
		
	<script>
	function add_audit_checklist() {
	var sr_no = "<?php echo $_GET['sr_no'];?>";
		
	var pr_sop_checklist_chk =$('.pr_sop_checklist_chk').text();
	var pr_sop_checklistRadio = $("input:radio[name=pr_sop_checklist]:checked").val();
	var pr_sop_checklist = $('.pr_sop_checklist').text();
    
	var user_justification_chk = $('.user_justification_chk').text();
	var user_justificationRadio = $("input:radio[name=user_justification]:checked").val();
	var user_justification = $('.user_justification').text();

	var approved_pr_chk = $('.approved_pr_chk').text();
	var approved_prRadio = $("input:radio[name=approved_pr]:checked").val();
	var approved_pr = $('.approved_pr').text();

	var comparison_sheet_chk = $('.comparison_sheet_chk').text();
	var comparison_sheetRadio = $("input:radio[name=comparison_sheet]:checked").val();
	var comparison_sheet = $('.comparison_sheet').text();

	var negotiation_history_chk = $('.negotiation_history_chk').text();
	var negotiation_historyRadio = $("input:radio[name=negotiation_history]:checked").val();
	var negotiation_history = $('.negotiation_history').text();

	var negotiation_matrix_chk = $('.negotiation_matrix_chk').text();
	var negotiation_matrixRadio = $("input:radio[name=negotiation_matrix]:checked").val();
	var negotiation_matrix = $('.negotiation_matrix').text();
		
	var delivery_date_schedule_chk = $('.delivery_date_schedule_chk').text();
	var delivery_date_scheduleRadio = $("input:radio[name=delivery_date_schedule]:checked").val();
	var delivery_date_schedule = $('.delivery_date_schedule').text();
			
	var shortlisted_vendor_recommendation_chk = $('.shortlisted_vendor_recommendation_chk').text();
	var shortlisted_vendor_recommendationRadio = $("input:radio[name=shortlisted_vendor_recommendation]:checked").val();
	var shortlisted_vendor_recommendation = $('.shortlisted_vendor_recommendation').text();

	var final_negotiated_rate_chk = $('.final_negotiated_rate_chk').text();
	var final_negotiated_rateRadio = $("input:radio[name=final_negotiated_rate]:checked").val();
	var final_negotiated_rate = $('.final_negotiated_rate').text();

	var capex_statement_chk = $('.capex_statement_chk').text();
	var capex_statementRadio = $("input:radio[name=capex_statement]:checked").val();
	var capex_statement = $('.capex_statement').text();

	var opex_chk = $('.opex_chk').text();
	var opexRadio = $("input:radio[name=opex]:checked").val();
	var opex = $('.opex').text();

	var approval_chk = $('.approval_chk').text();
	var approvalRadio = $("input:radio[name=approval]:checked").val();
	var approval = $('.approval').text();
			
			//alert(approvalRadio);
			//alert(approval);
				     $.ajax({
                    url: "<?php echo base_url(); ?>index.php/purchase_request/add_sop_checklist/"+sr_no,
                    method: "POST",
 					data:{pr_sop_checklist_chk:pr_sop_checklist_chk,pr_sop_checklistRadio:pr_sop_checklistRadio,pr_sop_checklist:pr_sop_checklist,user_justification_chk:user_justification_chk,user_justificationRadio:user_justificationRadio,user_justification:user_justification,approved_pr_chk:approved_pr_chk,approved_prRadio:approved_prRadio,approved_pr:approved_pr,comparison_sheet_chk:comparison_sheet_chk,comparison_sheetRadio:comparison_sheetRadio,comparison_sheet:comparison_sheet,negotiation_history_chk:negotiation_history_chk,negotiation_historyRadio:negotiation_historyRadio,negotiation_history:negotiation_history,negotiation_matrix_chk:negotiation_matrix_chk,negotiation_matrixRadio:negotiation_matrixRadio,negotiation_matrix:negotiation_matrix,delivery_date_schedule_chk:delivery_date_schedule_chk,delivery_date_scheduleRadio:delivery_date_scheduleRadio,delivery_date_schedule:delivery_date_schedule,shortlisted_vendor_recommendation_chk:shortlisted_vendor_recommendation_chk,shortlisted_vendor_recommendationRadio:shortlisted_vendor_recommendationRadio,shortlisted_vendor_recommendation:shortlisted_vendor_recommendation,final_negotiated_rate_chk:final_negotiated_rate_chk,final_negotiated_rateRadio:final_negotiated_rateRadio,final_negotiated_rate:final_negotiated_rate,capex_statement_chk:capex_statement_chk,capex_statementRadio:capex_statementRadio,capex_statement:capex_statement,opex_chk:opex_chk,opexRadio:opexRadio,opex:opex,approval_chk:approval_chk,approvalRadio:approvalRadio,approval:approval},
                    success: function (data) {
                    alert(data);
	window.location.href = "<?php echo base_url(); ?>index.php/purchase_request/checklist_listing";  
						//$('.pr_sop_checklist').val('');
                        }
					  });
	}
	</script>
		

    </div>
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
