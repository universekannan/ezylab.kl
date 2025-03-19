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

<div class="modal fade" id="addEditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId">

                <div class="form-group mb-3"><span>Full Name</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="name" placeholder="Full Name" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Employee ID</span>
                    <input type="int" class="form-control form-control-sm mb-3" id="employee_id" placeholder="Employee ID" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3">Profile Picture
                    <input type="file" class="form-control form-control-sm mb-3" id="profile_picture" placeholder="Profile Picture" aria-label="readonly input example">
                </div>
                <div class="form-group row">
                                                        <label for="designation" class="col-sm-4 col-form-label"><span
                                                                style="color:red"></span>Designation
                                                            </label>
                                                        <div class="col-sm-8">
                                                            <select required="required" class="form-control"
                                                                id="designation" name="designation">
                                                                <option value="">Select Designation</option>
                                                                <option value="Doctor">Doctor</option>
                                                                <option value="Nurse">Nurse</option>
                                                                <option value="Administrator">Administrator</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class="form-group row">
                                                        <label for="department" class="col-sm-4 col-form-label"><span
                                                                style="color:red"></span>Department
                                                            </label>
                                                        <div class="col-sm-8">
                                                            <select required="required" class="form-control"
                                                                id="department" name="department">
                                                                <option value="">Select Department</option>
                                                                <option value="Cardiology">Cardiology</option>
                                                                <option value="ENT">ENT</option>
                                                                <option value="Nephrology">Nephrology</option>
                                                            </select>
                                                        </div>
                                                    </div>
                <div class="form-group mb-3"><span>Email</span>
                    <input type="email" class="form-control form-control-sm mb-3" id="email" placeholder="Enter Email" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Phone</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="phone" placeholder="Enter Phone" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Joining Date</span>
                    <input type="date" class="form-control form-control-sm mb-3" id="joining_date" placeholder="Joining Date" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Emergency Contact Information</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="emergency_contact_information" placeholder="Emergency Contact Information" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Address</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="address" placeholder="Address" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Payroll & Salary Details</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="payroll_salary_details" placeholder="Payroll & Salary Details" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Associated Hospitals/Clinics</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="associated_hospitals_clinics" placeholder="Associated Hospitals/Clinics" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Qualification & Specialization</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="qualification_specialization" placeholder="Qualification & Specialization" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Experience</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="experience" placeholder="Experience" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Shift Timings</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="shift_timings" placeholder="Shift Timings" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>License/Registration Number</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="license_registration_number" placeholder="License/Registration Number" aria-label="readonly input example">
                </div>
                <div class="form-group mb-3"><span>Consultation Fees</span>
                    <input type="text" class="form-control form-control-sm mb-3" id="consultation_fees" placeholder="Consultation Fees" aria-label="readonly input example">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button id="SaveUser" type="button" class="btn btn-primary btn-sm">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>

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
            $('#phone').val('');
            $('#address').val('');
            $('#payroll_salary_details').val('');
            $('#associated_hospitals_clinics').val('');
            $('#qualification_specialization').val('');
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

            let phone = $('#phone').val();
            let address = $('#address').val();
            let payroll_salary_details = $('#payroll_salary_details').val();
            let associated_hospitals_clinics = $('#associated_hospitals_clinics').val();
            let qualification_specialization = $('#qualification_specialization').val();
            let experience = $('#experience').val();
            let shift_timings = $('#shift_timings').val();
            let license_registration_number = $('#license_registration_number').val();
            let consultation_fees = $('#consultation_fees').val();





           
            if (!name.trim()) {
                toastr.error("Name field is required!");
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

                phone: phone,
                address: address,
                payroll_salary_details: payroll_salary_details,
                associated_hospitals_clinics: associated_hospitals_clinics,
                qualification_specialization: qualification_specialization,
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
                $('#phone').val(user.phone).trigger('change');
                $('#address').val(user.address).trigger('change');
                $('#payroll_salary_details').val(user.payroll_salary_details).trigger('change');
                $('#associated_hospitals_clinics').val(user.associated_hospitals_clinics).trigger('change');
                $('#qualification_specialization').val(user.qualification_specialization).trigger('change');
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
