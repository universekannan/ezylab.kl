@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Users List</div>
         
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEditUser"><i class='bx bx-plus mr-1'></i> Add User</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="usersTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addEditUser" tabindex="-1" aria-labelledby="examplePrimaryModal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h5 class="modal-title" id="examplePrimaryModal">Add/Edit User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
   

      

<div id="stepper2" class="bs-stepper">
	<div class="card">
	  
	  <div class="card-header">
		  <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
			  <div class="step" data-target="#test-nl-1">
				<div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1">
				  <div class="bs-stepper-circle"><i class='bx bx-user fs-4'></i></div>
				  <div class="">
					  <h5 class="mb-0 steper-title">Personal Info</h5>
					  <p class="mb-0 steper-sub-title">Enter Your Details</p>
				  </div>
				</div>
			  </div>
			  <div class="bs-stepper-line"></div>
			  <div class="step" data-target="#test-nl-2">
				  <div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
					<div class="bs-stepper-circle"><i class='bx bx-file fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">Account Details</h5>
						<p class="mb-0 steper-sub-title">Setup Account Details</p>
					</div>
				  </div>
				</div>
			  <div class="bs-stepper-line"></div>
			  <div class="step" data-target="#test-nl-3">
				  <div class="step-trigger" role="tab" id="stepper2trigger3" aria-controls="test-nl-3">
					<div class="bs-stepper-circle"><i class='bx bxs-graduation fs-4'></i></div>
					<div class="">
						<h5 class="mb-0 steper-title">Education</h5>
						<p class="mb-0 steper-sub-title">Education Details</p>
					</div>
				  </div>
				</div>
				<div class="bs-stepper-line"></div>
				  <div class="step" data-target="#test-nl-4">
					  <div class="step-trigger" role="tab" id="stepper2trigger4" aria-controls="test-nl-4">
					  <div class="bs-stepper-circle"><i class='bx bx-briefcase fs-4'></i></div>
					  <div class="">
						  <h5 class="mb-0 steper-title">Work Experience</h5>
						  <p class="mb-0 steper-sub-title">Experience Details</p>
					  </div>
					  </div>
				  </div>
			</div>
	  </div>
	  <div class="card-body">
	  
		<div class="bs-stepper-content">
		  <form onSubmit="return false">
			<div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">
			  <h5 class="mb-1">Your Personal Information</h5>
			  <p class="mb-4">Enter your personal information to get closer to copanies</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="name" class="form-label">Full Name</label>
					  <input type="text" class="form-control" id="name" placeholder="Full Name">
				  </div>

                  
				  <div class="col-12 col-lg-6">
					  <label for="fisrt_name" class="form-label">First Name</label>
					  <input type="text" class="form-control" id="fisrt_name" placeholder="First Name">
				  </div>

                
				  <div class="col-12 col-lg-6">
					  <label for="father_name" class="form-label">Father Name</label>
					  <input type="text" class="form-control" id="father_name" placeholder="Father Name">
				  </div> 

                  <div class="col-12 col-lg-6">
					  <label for="age" class="form-label">Age</label>
					  <input type="text" class="form-control" id="age" placeholder="Age ">
				  </div> 

                  <div class="col-12 col-lg-6">
					  <label for="sex" class="form-label">sex</label>
					  <input type="text" class="form-control" id="sex" placeholder="sex ">
				  </div> 

                  <div class="col-12 col-lg-6">
					  <label for="employee_id " class="form-label">Employee ID </label>
					  <input type="int" class="form-control" id="employee_id " placeholder="Employee ID ">
				  </div> 


                  <div class="col-12 col-lg-6">
                        <label for="Address" class="form-label">Address</label>
                        <textarea class="form-control" id="Address" placeholder="Enter your address"></textarea>
                    </div>

                    

				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Contact No</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Contact No">
				  </div>


                  <div class="col-12 col-lg-6">
					  <label for="Aadhar No" class="form-label">Aadhar No</label>
					  <input type="text" class="form-control" id="Aadhar No" placeholder="Aadhar No">
				  </div>

                  <div class="col-12 col-lg-6">
					  <label for="Emergency contact No" class="form-label">Emergency contact No</label>
					  <input type="text" class="form-control" id="Emergency contact No" placeholder="Emergency contact No">
				  </div>


				  <div class="col-12 col-lg-6">
					  <label for="Email ID" class="form-label">Email ID</label>
					  <input type="email" class="form-control" id="Email ID" placeholder="Email ID">
				  </div>

                  <div class="col-12 col-lg-6">
					  <label for="profile_picture" class="form-label">Profile Picture</label>
					  <input type="file" class="form-control" id="profile_picture" placeholder="Profile Picture">
				  </div>
				 
				  <div class="col-12 col-lg-6">
					  <label for="InputLanguage" class="form-label">language Known</label>
					  <select class="form-select" id="InputLanguage" aria-label="Default select example">
						  <option selected>---</option>
						  <option value="Tamil">Tamil</option>
						  <option value="English">English</option>
						  <option value="Hindi">Hindi</option>
						</select>
				  </div>
				  <div class="col-12 col-lg-6">
					  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

			  <h5 class="mb-1">Account Details</h5>
			  <p class="mb-4">Enter Your Account Details.</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="InputUsername" class="form-label">Username</label>
					  <input type="text" class="form-control" id="InputUsername" placeholder="jhon@123">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputEmail2" class="form-label">E-mail Address</label>
					  <input type="text" class="form-control" id="InputEmail2" placeholder="example@xyz.com">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputPassword" class="form-label">Password</label>
					  <input type="password" class="form-control" id="InputPassword" value="12345678">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
					  <input type="password" class="form-control" id="InputConfirmPassword" value="12345678">
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger3">
			  <h5 class="mb-1">Your Education Information</h5>
			  <p class="mb-4">Inform companies about your education life</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="SchoolName" class="form-label">School Name</label>
					  <input type="text" class="form-control" id="SchoolName" placeholder="School Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="BoardName" class="form-label">Board Name</label>
					  <input type="text" class="form-control" id="BoardName" placeholder="Board Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="UniversityName" class="form-label">University Name</label>
					  <input type="text" class="form-control" id="UniversityName" placeholder="University Name">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="InputCountry" class="form-label">Course Name</label>
					  <select class="form-select" id="InputCountry" aria-label="Default select example">
						  <option selected>---</option>
						  <option value="1">One</option>
						  <option value="2">Two</option>
						  <option value="3">Three</option>
						</select>
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-outline-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-light px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>

			<div id="test-nl-4" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger4">
			  <h5 class="mb-1">Work Experiences</h5>
			  <p class="mb-4">Can you talk about your past work experience?</p>

			  <div class="row g-3">
				  <div class="col-12 col-lg-6">
					  <label for="Experience1" class="form-label">Experience 1</label>
					  <input type="text" class="form-control" id="Experience1" placeholder="Experience 1">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Position1" class="form-label">Position</label>
					  <input type="text" class="form-control" id="Position1" placeholder="Position">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience2" class="form-label">Experience 2</label>
					  <input type="text" class="form-control" id="Experience2" placeholder="Experience 2">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Position</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="Experience3" class="form-label">Experience 3</label>
					  <input type="text" class="form-control" id="Experience3" placeholder="Experience 3">
				  </div>
				  <div class="col-12 col-lg-6">
					  <label for="PhoneNumber" class="form-label">Position</label>
					  <input type="text" class="form-control" id="PhoneNumber" placeholder="Position">
				  </div>
				  <div class="col-12">
					  <div class="d-flex align-items-center gap-3">
						  <button class="btn btn-light px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
						  <button class="btn btn-white px-4" onclick="stepper2.next()">Submit</button>
					  </div>
				  </div>
			  </div><!---end row-->
			  
			</div>
		  </form>
		</div>
		 
	  </div>
	 </div>
   </div>
  <!--end stepper two--> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper2 = new Stepper(document.querySelector('#stepper2'), {
            linear: true,
            animation: true
        });

        // Clicking on step headers to navigate
        document.querySelectorAll('.step-trigger').forEach(trigger => {
            trigger.addEventListener('click', function () {
                const targetStep = this.getAttribute('aria-controls').split('-').pop();
                stepper2.to(parseInt(targetStep));
            });
        });
    });
</script>
<script>
    $(document).ready(function () {

        let table = $('#usersTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('users.list') }}",
            columns: [
                { data: 'DT_RowIndex' },
                { data: 'name' },
                { data: 'email' },
                { data: 'phone' },

                { data: 'status', render: function(data, type, row) {
                    let checked = data == '1' ? 'checked' : '';
                    return `<label class="switch">
                                <input type="checkbox" class="toggle-status" data-id="${row.id}" ${checked}>
                                <span class="slider round"></span>
                            </label>`;
                }},
                { data: 'action', orderable: false, searchable: false }
            ]
        });

        $('#addUser').click(function () {
            $('#addEditUser').modal('show');
            $('#userId').val('');
            $('#name').val('');
            $('#employee_id').val('');
            $('#email').val('');
            $('#joining_date').val('');
            $('#department').val('');
            $('#designation').val('');
            $('#phone').val('');
            $('#address').val('');
            $('#payroll_salary_details').val('');
            $('#associated_hospitals_clinics').val('');
            $('#qualification_specialization').val('');
            $('#emergency_contact_information').val('');
            $('#experience').val('');
            $('#shift_timings').val('');
            $('#license_registration_number').val('');
            $('#consultation_fees').val('');




            $('.modal-title').text('Add User');
            $('#SaveUser').prop('disabled', false).text('Save changes');
        });

        $('#SaveUser').click(function () {
            let btn = $(this);
            let id = $('#userId').val();
            let name = $('#name').val();
            let employee_id = $('#employee_id').val();
            let email = $('#email').val();
            let joining_date = $('#joining_date').val();
            let department = $('#department').val();
            let designation = $('#designation').val();
            let phone = $('#phone').val();
            let address = $('#address').val();
            let payroll_salary_details = $('#payroll_salary_details').val();
            let associated_hospitals_clinics = $('#associated_hospitals_clinics').val();
            let qualification_specialization = $('#qualification_specialization').val();
            let experience = $('#experience').val();
            let shift_timings = $('#shift_timings').val();
            let license_registration_number = $('#license_registration_number').val();
            let emergency_contact_information = $('#emergency_contact_information').val();
            let consultation_fees = $('#consultation_fees').val();






            if (!name.trim()) {
                toastr.error("Name field is required!");
                return;
            }
            if (!emergency_contact_information.trim()) {
                toastr.error("emergency_contact_information field is required!");
                return;
            }
            if (!employee_id.trim()) {
                toastr.error("employee_id field is required!");
                return;
            }

            if (!email.trim()) {
                toastr.error("Email field is required!");
                return;
            }
            if (!joining_date.trim()) {
                toastr.error("joining_date field is required!");
                return;
            }
            if (!department.trim()) {
                toastr.error("department field is required!");
                return;
            }
            if (!designation.trim()) {
                toastr.error("designation field is required!");
                return;
            }
            if (!phone.trim()) {
                toastr.error("Phone field is required!");
                return;
            }
            if (!address.trim()) {
                toastr.error("address field is required!");
                return;
            }
            if (!payroll_salary_details.trim()) {
                toastr.error("payroll_salary_details field is required!");
                return;
            }
            if (!associated_hospitals_clinics.trim()) {
                toastr.error("associated_hospitals_clinics field is required!");
                return;
            }
            if (!qualification_specialization.trim()) {
                toastr.error("qualification_specialization field is required!");
                return;
            }
            if (!experience.trim()) {
                toastr.error("experience field is required!");
                return;
            }
            if (!shift_timings.trim()) {
                toastr.error("shift_timings field is required!");
                return;
            }
            if (!license_registration_number.trim()) {
                toastr.error("license_registration_number field is required!");
                return;
            }
            if (!consultation_fees.trim()) {
                toastr.error("consultation_fees field is required!");
                return;
            }

            btn.prop('disabled', true).text(id ? 'Updating...' : 'Saving...');

            let data = {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
                name: name,
                employee_id: employee_id,
                email: email,
                joining_date: joining_date,
                department: department,
                designation: designation,
                phone: phone,
                address: address,
                payroll_salary_details: payroll_salary_details,
                associated_hospitals_clinics: associated_hospitals_clinics,
                qualification_specialization: qualification_specialization,
                emergency_contact_information: emergency_contact_information,
                experience: experience,
                shift_timings: shift_timings,
                license_registration_number: license_registration_number,
                consultation_fees: consultation_fees,






            };

            let url = id ? "{{ route('users.update') }}" : "{{ route('users.store') }}";

            $.post(url, data, function (response) {
                toastr.success(response.message);
                $('#addEditUser').modal('hide');
                table.ajax.reload();
            }).fail(function (xhr) {
                toastr.error(xhr.responseJSON.message);
            }).always(function () {
                btn.prop('disabled', false).text('Save changes');
            });
        });

        $(document).on('click', '.editUser', function () {
            let id = $(this).data('id');
            $.get("{{ route('users.list') }}", function (data) {
                let user = data.data.find(user => user.id == id);
                $('#userId').val(user.id);
                $('#name').val(user.name).trigger('change');
                $('#employee_id').val(user.employee_id).trigger('change');
                $('#email').val(user.email).trigger('change');
                $('#joining_date').val(user.joining_date).trigger('change');
                $('#department').val(user.department).trigger('change');
                $('#designation').val(user.designation).trigger('change');
                $('#phone').val(user.phone).trigger('change');
                $('#address').val(user.address).trigger('change');
                $('#payroll_salary_details').val(user.payroll_salary_details).trigger('change');
                $('#associated_hospitals_clinics').val(user.associated_hospitals_clinics).trigger('change');
                $('#qualification_specialization').val(user.qualification_specialization).trigger('change');
                $('#emergency_contact_information').val(user.emergency_contact_information).trigger('change');
                $('#experience').val(user.experience).trigger('change');
                $('#shift_timings').val(user.shift_timings).trigger('change');
                $('#license_registration_number').val(user.license_registration_number).trigger('change');
                $('#consultation_fees').val(user.consultation_fees).trigger('change');





                $('.modal-title').text('Edit User');
                $('#addEditUser').modal('show');
                $('#SaveUser').prop('disabled', false).text('Update User');
            });
        });

        $(document).on('click', '.deleteUser', function () {
            if (confirm("Are you sure you want to delete this User?")) {
                let id = $(this).data('id');
                $.post("{{ route('users.destroy') }}", {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: id
                }, function (response) {
                    toastr.success(response.message);
                    table.ajax.reload();
                }).fail(function (xhr) {
                    toastr.error(xhr.responseJSON.message);
                });
            }
        });

        $(document).on('change', '.toggle-status', function () {
            let id = $(this).data('id');
            let status = $(this).prop('checked') ? '1' : '0';
            let toggleBtn = $(this);

            toggleBtn.prop('disabled', true);

            $.ajax({
                url: "{{ route('users.status') }}",
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: id,
                    status: status
                },
                success: function(response) {
                    toastr.success(response.message);
                },
                error: function(xhr) {
                    toastr.error(xhr.responseJSON.message);
                    toggleBtn.prop('checked', !toggleBtn.prop('checked'));
                },
                complete: function () {
                    toggleBtn.prop('disabled', false);
                }
            });
        });

    });

</script>
@endsection
