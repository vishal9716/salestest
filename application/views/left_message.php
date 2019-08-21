<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>user/add_user"><i class="fa fa-angle-right"></i> Add User</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>user/"><i class="fa fa-angle-right"></i> User List</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Type<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>type/add_type"><i class="fa fa-angle-right"></i> Add Type</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url(); ?>type/"><i class="fa fa-angle-right"></i> Type List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Access control</a>
                        </li>
												
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Estimation/Quotation<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>operations"><i class="fa fa-angle-right"></i> Add Quotation</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url(); ?>operations/quotation_list"><i class="fa fa-angle-right"></i> Quotation List</a>
                                </li>
								
								<li>
                                    <a href="<?php echo base_url(); ?>operations/customer_list"><i class="fa fa-angle-right"></i> Customer List</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url(); ?>operations/project_list"><i class="fa fa-angle-right"></i> Project List</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url(); ?>operations/activity_list"><i class="fa fa-angle-right"></i> Activity List</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> MHR <span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>mhr"><i class="fa fa-angle-right"></i> MHR Calculations</a>
                                </li>
								<li>
                                    <a href="<?php echo base_url(); ?>mhr/mhr_list"><i class="fa fa-angle-right"></i> MHR List</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> JTN Issue<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add_jtn.php"><i class="fa fa-angle-right"></i> Add JTN</a>
                                </li>
								<li>
                                    <a href="jtn_list.php"><i class="fa fa-angle-right"></i> JTN List</a>
                                </li>
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						<!-- purchase request/ purchase order -->
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Purchase Request<span class="fa arrow"></span></a>

<ul class="nav nav-second-level">
<li> <a href="<?php echo base_url(); ?>purchase_request/internal"><i class="fa fa-angle-right"></i> Purchase Request - Internal</a> </li>
<li> <a href="<?php echo base_url(); ?>purchase_request/purchase_request_list"><i class="fa fa-angle-right"></i> Purchase Request List</a></li>
<!--<li> <a href="<?php echo base_url(); ?>purchase_request/display_memo"><i class="fa fa-angle-right"></i> Memo</a></li>
<li> <a href="<?php echo base_url(); ?>purchase_request/checklist"><i class="fa fa-angle-right"></i> Checklist</a> </li>-->
	<li><a href="<?php echo base_url(); ?>purchase_request/checklist_listing"><i class="fa fa-angle-right"></i> Checklist Listing</a></li>
<!--	<li> <a href="<?php echo base_url(); ?>purchase_request/comparision"><i class="fa fa-angle-right"></i> Comparision</a> </li>-->
	<li> <a href="<?php echo base_url(); ?>purchase_request/comparision_history"><i class="fa fa-angle-right"></i> Comparision History</a> </li>
<!--<li><a href="<?php echo base_url(); ?>purchase_request/audit_checklist"><i class="fa fa-angle-right"></i> Audit Checklist</a></li>-->
<li><a href="<?php echo base_url(); ?>purchase_request/audit_checklist_listing"><i class="fa fa-angle-right"></i> Audit Checklist Listing</a></li>
<!--<li> <a href="<?php echo base_url(); ?>purchase_request/negotiation"><i class="fa fa-angle-right"></i> Negotiation</a> </li>-->

<li> <a href="<?php echo base_url(); ?>purchase_request/negotiation_list"><i class="fa fa-angle-right"></i> Negotiation List</a> </li>
<li> <a href="<?php echo base_url(); ?>purchase_request/import"><i class="fa fa-angle-right"></i> Purchase Request - Import</a> </li>
								
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Purchase Order<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>purchase_order"><i class="fa fa-angle-right"></i> Purchase Order</a>
                                </li>
								
								
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
</div>