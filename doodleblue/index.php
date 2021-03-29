<?PHP @include_once "header.php"; ?>
	<div class="page-info pt-1 pb-1">
		<div class="container-fluid">
			<div class=" clearfix">
				<div class="float-left">
					<nav aria-label="breadcrumb">
					    <ol class="breadcrumb mb-0">
					        <li class="breadcrumb-item"><a href="#">Home</a></li>
					        <li class="breadcrumb-item active" aria-current="page">All Contacts</li>
					    </ol>
					</nav>
				</div>
				<div class="float-right">
					<div class="input-group mt-1">
						<input type="text" class="form-control" placeholder="Search" aria-label="username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
						</div>
						<a class="btn btn-primary ml-1" href="#" role="button" data-toggle="modal" data-target="#addcontactModal" data-whatever="@mdo">Add Contact</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="mainWrapper" class="table-list p-3" >
		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th scope="col" width="50">#</th>
						<th scope="col">Name</th>
						<th scope="col">Company</th>
						<th scope="col">Email</th>
						<th scope="col">Phone Number</th>
						<th scope="col" class="text-right">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">
							<div class="checkbox-custom cus-dc-checkbox" >
	                            <label class="mb-0"><input type="checkbox" class="doc_pr"><b></b></label>&nbsp;
	                        </div>
	                        <!-- <span class="font-weight-normal">1</span> -->
						</th>
						<td>Naganajneya Reddy</td>
						<td>HighGo Info Solutions Pvt,Ltd.</td>
						<td>naganji.d17@gmail.com</td>
						<td>9966959635</td>
						<td class="text-right">
							<button type="button" class="btn text-primary btn-sm btn-outline-light" onclick="openNav()"><i class="bi bi-info-circle"></i></button>
							<button type="button" class="btn text-primary btn-sm btn-outline-light"  data-toggle="modal" data-target="#editcontactModal" data-whatever="@mdo"><i class="bi bi-pencil"></i></button>
							<button type="button" class="btn text-danger btn-sm btn-outline-light"><i class="bi bi-trash"></i></button>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<div class="checkbox-custom cus-dc-checkbox" >
	                            <label class="mb-0"><input type="checkbox" class="doc_pr"><b></b></label>&nbsp;
	                        </div>
	                        <!-- <span class="font-weight-normal">2</span> -->
						</th>
						<td>Nagarjuna</td>
						<td>HighGo Info Solutions Pvt,Ltd.</td>
						<td>nagarjuna@gmail.com</td>
						<td>9012345678</td>
						<td class="text-right">
							<button type="button" class="btn text-primary btn-sm btn-outline-light" onclick="openNav()"><i class="bi bi-info-circle"></i></button>
							<button type="button" class="btn text-primary btn-sm btn-outline-light"  data-toggle="modal" data-target="#editcontactModal" data-whatever="@mdo"><i class="bi bi-pencil"></i></button>
							<button type="button" class="btn text-danger btn-sm btn-outline-light"><i class="bi bi-trash"></i></button>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<div class="checkbox-custom cus-dc-checkbox" >
	                            <label class="mb-0"><input type="checkbox" class="doc_pr"><b></b></label>&nbsp;
	                        </div>
	                        <!-- <span class="font-weight-normal">3</span> -->
						</th>
						<td>Ramana</td>
						<td>HighGo Info Solutions Pvt,Ltd.</td>
						<td>ramana@mail.com</td>
						<td>9876543210</td>
						<td class="text-right">
							<button type="button" class="btn text-primary btn-sm btn-outline-light" onclick="openNav()"><i class="bi bi-info-circle"></i></button>
							<button type="button" class="btn text-primary btn-sm btn-outline-light"  data-toggle="modal" data-target="#editcontactModal" data-whatever="@mdo"><i class="bi bi-pencil"></i></button>
							<button type="button" class="btn text-danger btn-sm btn-outline-light"><i class="bi bi-trash"></i></button>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<div class="checkbox-custom cus-dc-checkbox" >
	                            <label class="mb-0"><input type="checkbox" class="doc_pr"><b></b></label>&nbsp;
	                        </div>
	                        <!-- <span class="font-weight-normal">4</span> -->
						</th>
						<td>Aditya</td>
						<td>HighGo Info Solutions Pvt,Ltd.</td>
						<td>advit2007@gmail.com</td>
						<td>9564871230</td>
						<td class="text-right">
							<button type="button" class="btn text-primary btn-sm btn-outline-light" onclick="openNav()"><i class="bi bi-info-circle"></i></button>
							<button type="button" class="btn text-primary btn-sm btn-outline-light"  data-toggle="modal" data-target="#editcontactModal" data-whatever="@mdo"><i class="bi bi-pencil"></i></button>
							<button type="button" class="btn text-danger btn-sm btn-outline-light"><i class="bi bi-trash"></i></button>
						</td>
					</tr>
					<tr>
						<th scope="row">
							<div class="checkbox-custom cus-dc-checkbox" >
	                            <label class="mb-0"><input type="checkbox" class="doc_pr"><b></b></label>&nbsp;
	                        </div>
	                        <!-- <span class="font-weight-normal">5</span> -->
						</th>
						<td>Revanth</td>
						<td>HighGo Info Solutions Pvt,Ltd.</td>
						<td>revanth.dodda@gmail.com</td>
						<td>9966964635</td>
						<td class="text-right">
							<button type="button" class="btn text-primary btn-sm btn-outline-light" onclick="openNav()"><i class="bi bi-info-circle"></i></button>
							<button type="button" class="btn text-primary btn-sm btn-outline-light"  data-toggle="modal" data-target="#editcontactModal" data-whatever="@mdo"><i class="bi bi-pencil"></i></button>
							<button type="button" class="btn text-danger btn-sm btn-outline-light"><i class="bi bi-trash"></i></button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="modal fade" id="addcontactModal" tabindex="-1" aria-labelledby="addcontactModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="addcontactModalLabel">Add Contact</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
				<form class="needs-validation" novalidate>
	            	<div class="modal-body">
				        <div class="form-group">
				            <input type="text" class="form-control" id="fullName" placeholder="Name" value="Name" required/>
				            <div class="valid-feedback">Looks good!</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="companyEmail" placeholder="Company" value="" required/>
				            <div class="invalid-feedback">Please provide Company Name.</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="emailId" placeholder="Email" value="" required/>
				            <div class="invalid-feedback">Please provide a valid Email.</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="phoneNumber" placeholder="Phone" value="" required/>
				            <div class="invalid-feedback">Please provide a valid Phone Number.</div>
				        </div>
	            	</div>
	            	 <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-person-x">&nbsp;</i>Close</button>
		                <button class="btn btn-primary" type="submit"><i class="bi bi-person-plus">&nbsp;</i>Add Contact</button>
		            </div>
				</form>
	        </div>
	    </div>
	</div>
	<div class="modal fade" id="editcontactModal" tabindex="-1" aria-labelledby="editcontactModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="addcontactModalLabel">Edit Contact</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
				<form class="needs-validation" novalidate>
	            	<div class="modal-body">
				        <div class="form-group">
				            <input type="text" class="form-control" id="edit_fullname" placeholder="Name" value="Naganjaneya" required/>
				            <div class="valid-feedback">Looks good!</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="edit_company" placeholder="Company" value="" required/>
				            <div class="invalid-feedback">Please provide Company Name.</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="edit_email" placeholder="Email" value="" required/>
				            <div class="invalid-feedback">Please provide a valid Email.</div>
				        </div>
				        <div class="form-group">
				            <input type="text" class="form-control" id="edit_phonenumber" placeholder="Phone" value="" required/>
				            <div class="invalid-feedback">Please provide a valid Phone Number.</div>
				        </div>
	            	</div>
	            	 <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-person-x">&nbsp;</i>Close</button>
		                <button class="btn btn-primary" type="submit"><i class="bi bi-person-check">&nbsp;</i>Edit Contact</button>
		            </div>
				</form>
	           
	        </div>
	    </div>
	</div>
	<div id="mySidenav" class="contact-view sidenav">
		<div class="dir-title">
			<h4>Contact Details</h4>
			<a href="javascript:void(0)" class="hidebtn" onclick="closeNav()"><span aria-hidden="true">×</span></a>
		</div>
		<div class="drive-details mt-2">
		    <div class="profile_details">
		        <h4>Name&nbsp;:</h4>
		        <p><strong>Naganjaneya Reddy</strong></p>
		    </div>
		    <div class="profile_details">
		        <h4>Company Name&nbsp;:</h4>
		        <p>HighGo Info Solutions Pvt, Ltd.</p>
		    </div>
		    <div class="profile_details">
		        <h4>Mail Id&nbsp;:</h4>
		        <p>naganji.d17@gmail.com</p>
		    </div>
		    <div class="profile_details">
		        <h4>Phone Number&nbsp;:</h4>
		        <p>+91 9966959635</p>
		    </div>
		    <div class="profile_details">
		        <h4>Address&nbsp;:</h4>
		        <p>
		        	#401, Fouth Floor<br/>
		        	Sri Laxmi Residency<br/>
		        	Pragathi Nagar, Hyd - 90.
		        </p>
		    </div>
		</div>
	</div>
	<script type="text/javascript">
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    var forms = document.getElementsByClassName('needs-validation');
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
	</script>
<?PHP @include_once "footer.php"; ?>

