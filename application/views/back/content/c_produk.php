<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Wizards + Validation</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Wizards + Validation <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Form Wizards</h4>
                        </div>
                        <div class="panel-body">
                            <form action="/" method="POST" data-parsley-validate="true" name="form-wizard">
								<div id="wizard">
									<ol>
										<li>
										    Produk Detail
										</li>
										<li>
										    Upload Foto
										</li>
										<li>
										    Ukuran Qty & Harga
										</li>
										<li>
										    Finish & Publish
										</li>
									</ol>
									<!-- begin wizard step-1 -->
									<div class="wizard-step-1">
                                        <fieldset>
                                            <legend class="pull-left width-full">Produk Detail</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                
                                            	<div class="col-md-2">
                                            	<div class="form-group">
                                            	</div>
                                            	</div>
	                                            <div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" name="firstname" placeholder="John" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-2">
                                                <div class="form-group">
                                            	</div>
                                            	</div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Middle Initial</label>
														<input type="text" name="middle" placeholder="A" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-2">
                                                <div class="form-group">
                                            	</div>
                                            	</div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lastname" placeholder="Smith" class="form-control" />
													</div>
                                                </div>

                                                <div class="col-md-2">
                                                <div class="form-group">
                                            	</div>
                                            	</div>	
                                                <div class="col-md-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" name="firstname" placeholder="John" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-2">
                                                <div class="form-group">
                                            	</div>
                                            	</div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Middle Initial</label>
														<input type="text" name="middle" placeholder="A" class="form-control" />
													</div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-2">
                                                <div class="form-group">
                                            	</div>
                                            	</div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" name="lastname" placeholder="Smith" class="form-control" />
													</div>
                                                </div>


                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									<!-- begin wizard step-2 -->
									<div class="wizard-step-2">
										<fieldset>
											<legend class="pull-left width-full">Contact Information</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Phone Number</label>
														<input type="text" name="phone" placeholder="1234567890" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="number"  />
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                                <!-- begin col-6 -->
                                                <div class="col-md-6">
													<div class="form-group">
														<label>Email Address</label>
														<input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="wizard-step-2" data-parsley-type="email"  />
													</div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div class="wizard-step-3">
										<fieldset>
											<legend class="pull-left width-full">Login</legend>
                                            <!-- begin row -->
                                            <div class="row">
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div class="controls">
                                                            <input type="text" name="username" placeholder="johnsmithy" class="form-control" data-parsley-group="wizard-step-3"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="wizard-step-3"  />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-4 -->
                                                <!-- begin col-4 -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Pasword</label>
                                                        <div class="controls">
                                                            <input type="password" name="password2" placeholder="Confirmed password" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-6 -->
                                            </div>
                                            <!-- end row -->
                                        </fieldset>
									</div>
									<!-- end wizard step-3 -->
									<!-- begin wizard step-4 -->
									<div>
									    <div class="jumbotron m-b-0">
                                            <h1>Login Successfully</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                                            <p><a class="btn btn-success btn-lg" role="button">Proceed to User Profile</a></p>
                                        </div>
									</div>
									<!-- end wizard step-4 -->
								</div>
							</form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->