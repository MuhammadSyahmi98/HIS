<?php
	if(isset($_GET['billing'])) {
		?>
		<div class="pageSize" style="display: flex; margin-top: 50px;" >
			<div>
				<div class="sidebar">
					<a href="?dashboard"><i class="fas fa-columns"></i><span style="margin-left: 10px;">Dashboard</span></a>
					<div class="dropdown-divider"></div>
					<a href="?patient"><i class="fas fa-user-injured"></i><span style="margin-left: 10px;">Patient</span></a>
					<a href="?doctor"><i class="fas fa-user-md"></i><span style="margin-left: 10px;">Doctor</span></a>
					<a href="?order"><i class="fas fa-list-alt"></i><span style="margin-left: 10px;">Order</span></a>
					<a href="?drugs"><i class="fas fa-capsules"></i><span style="margin-left: 10px;">Drugs</span></a>
					<a href="?billing" class="active"><i class="fas fa-money-bill-alt"></i></i><span style="margin-left: 10px;">Billing</span></a>
					<div class="dropdown-divider"></div>
					<a href="?profile"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">User Profile</span></a>
				</div>
			</div>
			<div style="width: 100%;">
				<div>
					<div style="width: 100%;
								margin-left: 10px;
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding-top: 10px;
								padding-bottom: 10px;">
						<div class="container-xl">
						    <div class="table-responsive">
						        <div class="table-wrapper">
						            <div class="table-title">
						                <div class="row">
						                    <div class="col-sm-8"><h2><b>Billing</b> Details</h2></div>
						                    <div class="col-sm-4">
						                        <div class="search-box">
						                            <i class="material-icons">&#xE8B6;</i>
						                            <input type="text" class="form-control" id="myInput" placeholder="Search&hellip;">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <table class="table table-striped table-hover table-bordered">
						                <thead>
						                    <tr>
						                        <th>#</th>
						                        <th>Name</th>
						                        <th>Total</th>
						                        <th>Status</th>
						                        <th>Actions</th>
						                    </tr>
						                </thead>
						                <tbody id="myTable">
						                    <tr>
						                        <td>1</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>89 Chiaroscuro Rd.</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>2</td>
												<td>Maria Anders</td>
						                        <td>Thomas Hardy</td>
						                        <td>Obere Str. 57</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>3</td>
						                        <td>Fran Wilson</td>
						                        <td>Thomas Hardy</td>
						                        <td>C/ Araquil, 67</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>4</td>
						                        <td>Dominique Perrier</td>
						                        <td>Thomas Hardy</td>
						                        <td>25, rue Lauriston</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>5</td>
						                        <td>Martin Blank</td>
						                        <td>Thomas Hardy</td>
						                        <td>Via Monte Bianco 34</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>        
						                </tbody>
						            </table>
						            <div class="clearfix">
						                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
						                <ul class="pagination">
						                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						                    <li class="page-item  active"><a href="#" class="page-link">1</a></li>
						                    <li class="page-item"><a href="#" class="page-link">2</a></li>
						                    <li class="page-item"><a href="#" class="page-link">3</a></li>
						                    <li class="page-item"><a href="#" class="page-link">4</a></li>
						                    <li class="page-item"><a href="#" class="page-link">5</a></li>
						                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
						                </ul>
						            </div>
						        </div>
						    </div>  
						</div>   
					</div>
				</div>
				<br>
				<div>
					<div style="width: 100%;
								margin-left: 10px;
								height: auto;
								background-color: white;
								box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
								padding-top: 10px;
								padding-bottom: 10px;">
						<div class="container-xl">
						    <div class="table-responsive">
						        <div class="table-wrapper">
						            <div class="table-title">
						                <div class="row">
						                    <div class="col-sm-8"><h2><b>Completed</b> Billing Details</h2></div>
						                    <div class="col-sm-4">
						                        <div class="search-box">
						                            <i class="material-icons">&#xE8B6;</i>
						                            <input type="text" class="form-control" id="myInput2" placeholder="Search&hellip;">
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <table class="table table-striped table-hover table-bordered">
						                <thead>
						                    <tr>
						                        <th>#</th>
						                        <th>Name</th>
						                        <th>Total</th>
						                        <th>Date</th>
						                        <th>Type</th>
						                        <th>Actions</th>
						                    </tr>
						                </thead>
						                <tbody id="myTable2">
						                    <tr>
						                        <td>1</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>89 Chiaroscuro Rd.</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>2</td>
												<td>Maria Anders</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>Obere Str. 57</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>3</td>
						                        <td>Fran Wilson</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>C/ Araquil, 67</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>4</td>
						                        <td>Dominique Perrier</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>25, rue Lauriston</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>
						                    <tr>
						                        <td>5</td>
						                        <td>Martin Blank</td>
						                        <td>Thomas Hardy</td>
						                        <td>Thomas Hardy</td>
						                        <td>Via Monte Bianco 34</td>
						                        <td>
						                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
						                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
						                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
						                        </td>
						                    </tr>        
						                </tbody>
						            </table>
						            <div class="clearfix">
						                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
						                <ul class="pagination">
						                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
						                    <li class="page-item  active"><a href="#" class="page-link">1</a></li>
						                    <li class="page-item"><a href="#" class="page-link">2</a></li>
						                    <li class="page-item"><a href="#" class="page-link">3</a></li>
						                    <li class="page-item"><a href="#" class="page-link">4</a></li>
						                    <li class="page-item"><a href="#" class="page-link">5</a></li>
						                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
						                </ul>
						            </div>
						        </div>
						    </div>  
						</div>   
					</div>
				</div>
			</div>
		</div>

		<?php
	}

 ?>