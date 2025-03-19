@extends('layouts.app')
@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.row-padded {
        background-color: #00000;
        padding: 1px;
        margin: 4px;
        border: 1px solid #DDD;
        height: 25px;
    }

    .row-color {
        background-color: #00000;
        padding: 1px;
        margin: 4px;
        border: 1px solid #DDD;
        height: 25px;
    }
</style>
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User Types</div>
            <div class="ms-auto">
                <div class="btn-group">
					<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEditUser">Add User Type</button>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="" class="table table-striped table-bordered" style="width:100%">
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



										<!-- Modal -->
										<div class="modal fade" id="addEditUser" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-scrollable">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Add User Type</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<div class="card-body">
         
			    <div class="form-group mb-3">
            			<label class="form-control form-control-sm"><input type="text" class="form-control" id="name"  placeholder="Enter User Role Name"></label>
            	</div>
				
				
             <div class="row row-color">
            		<label class="col-sm-4">Dashboard</label>
            	</div>

            	<div class="row row-padded">
            		<label for="dashboard" class="col-sm-2">1</label>
            		<label for="dashboard" class="col-sm-8">Dashboard</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="dashboard" id="dashboard" checked></label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="dashboard" id="dashboard"></label>
            	</div>
               
               <div class="row row-color">
            		<label class="col-sm-4">Roles</label>
            	</div>

            	<div class="row row-padded">
            		<label for="roles" class="col-sm-2">2</label>
            		<label for="roles" class="col-sm-8">Roles</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="roles" id="roles" checked></label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="roles" id="roles"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="addrole" class="col-sm-2">3</label>
            		<label for="addrole" class="col-sm-8">Add Role</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="addrole" id="addrole" checked></label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="addrole" id="addrole"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="editrole" class="col-sm-2">4</label>
            		<label for="editrole" class="col-sm-8">Edit Role</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="editrole" id="editrole" checked></label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="editrole" id="editrole"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="deleterole" class="col-sm-2">5</label>
            		<label for="deleterole" class="col-sm-8">Delete Role</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="deleterole" id="deleterole" checked></label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="deleterole" id="deleterole"></label>
            	</div>
               
                <div class="row row-color">
            		<label class="col-sm-4">Users</label>
            	</div>

            	<div class="row row-padded">
            		<label for="users" class="col-sm-2">6</label>
            		<label for="users" class="col-sm-8">Users</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="users" id="users" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="users" id="users"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="adduser" class="col-sm-2">7</label>
            		<label for="adduser" class="col-sm-8">Add User</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="adduser" id="adduser" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="adduser" id="adduser"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="edituser" class="col-sm-2">8</label>
            		<label for="edituser" class="col-sm-8">Edit User</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="edituser" id="edituser" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="edituser" id="edituser"></label>
            	</div>

            	<div class="row row-padded">
            		<label for="deleteuser" class="col-sm-2">9</label>
            		<label for="deleteuser" class="col-sm-8">Delete User</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="deleteuser" id="deleteuser" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="deleteuser" id="deleteuser"></label>
            	</div>
               
               <div class="row row-color">
            		<label class="col-sm-4">Patients</label>
            	</div>

            	<div class="row row-padded">
            		<label for="patients" class="col-sm-2">10</label>
            		<label for="patients" class="col-sm-8">Patients</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="patients" id="patients" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="patients" id="patients"></label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">11</label>
            		<label class="col-sm-8">Add Patient</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="addpatient" id="addpatient" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="addpatient" id="addpatient"></label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">12</label>
            		<label class="col-sm-8">Edit Patient</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="editpatient" id="editpatient" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="editpatient" id="editpatient"></label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">13</label>
            		<label class="col-sm-8">Delete Patient</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="deletepatient" id="deletepatient" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="deletepatient" id="deletepatient"></label>
            	</div>
                
                <div class="row row-color">
            		<label class="col-sm-4">Blocks</label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">14</label>
            		<label class="col-sm-8">Blocks</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="blocks" id="blocks" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="blocks" id="blocks"></label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">15</label>
            		<label class="col-sm-8">Add Block</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="addblock" id="addblock" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="addblock" id="addblock"></label>
            	</div>

            	<div class="row row-padded">
            		<label class="col-sm-2">16</label>
            		<label class="col-sm-8">Edit Block</label>
            			<label class="col-sm-1"><input value="1" type="checkbox" name="editblock" id="editblock" checked></label>
            			<label class="col-sm-1"><input value="0" type="checkbox" name="editblock" id="editblock"></label>
            	</div>
			   
			   <div class="row row-padded">
			   <label class="col-sm-2">17</label>
			   <label class="col-sm-8">Delete Block</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="deleteblock" id="deleteblock" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="deleteblock" id="deleteblock"></label>
        </div>
            
            <div class="row row-color">
            		<label class="col-sm-4">Rooms</label>
            	</div>

          <div class="row row-padded">
			   <label class="col-sm-2">18</label>
			   <label class="col-sm-8">Rooms</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="rooms" id="rooms" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="rooms" id="rooms"></label>
         </div>

           <div class="row row-padded">
			   <label class="col-sm-2">19</label>
			   <label class="col-sm-8">Add Room</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="addroom" id="addroom" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="addroom" id="addroom"></label>
        </div>

        <div class="row row-padded">
			   <label class="col-sm-2">20</label>
			   <label class="col-sm-8">Edit Room</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="editroom" id="editroom" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="editroom" id="editroom"></label>
        </div>

			<div class="row row-padded">
			<label class="col-sm-2">21</label>
			   <label class="col-sm-8">Delete Room</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="deleteroom" id="deleteroom" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="deleteroom" id="deleteroom"></label>
        </div> 

        <div class="row row-color">
            		<label class="col-sm-4">Admission</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">22</label>
			   <label class="col-sm-8">Admission</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="admission" id="admission" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="admission" id="admission"></label>
        </div>

        <div class="row row-color">
            		<label class="col-sm-4">Billing</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">23</label>
			   <label class="col-sm-8">Billing</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="billing" id="billing" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="billing" id="billing"></label>
        </div>
        
        <div class="row row-color">
            		<label class="col-sm-4">Pharmacy</label>
            	</div>

      <div class="row row-padded">
			<label class="col-sm-2">24</label>
			   <label class="col-sm-8">Pharmacy</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="pharmacy" id="pharmacy" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="pharmacy" id="pharmacy"></label>
        </div>

        <div class="row row-color">
            		<label class="col-sm-4">Investigation</label>
            	</div>

        <div class="row row-padded">
			<label class="col-sm-2">25</label>
			   <label class="col-sm-8">Investigation</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="investigation" id="investigation" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="investigation" id="investigation"></label>
          </div>

          <div class="row row-color">
            		<label class="col-sm-4">OT</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">26</label>
			   <label class="col-sm-8">OT</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="ot" id="ot" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="ot" id="ot"></label>
        </div>

        <div class="row row-color">
            		<label class="col-sm-4">MRD</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">27</label>
			   <label class="col-sm-8">MRD</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="mrd" id="mrd" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="mrd" id="mrd"></label>
        </div>

        <div class="row row-color">
            		<label class="col-sm-4">Appointments</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">28</label>
			   <label class="col-sm-8">Appointments</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="appointments" id="appointments" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="appointments" id="appointments"></label>
        </div>
               <div class="row row-color">
            		<label class="col-sm-4">MIS</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">29</label>
			   <label class="col-sm-8">MIS</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="mis" id="mis" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="mis" id="mis"></label>
        </div>
               <div class="row row-color">
            		<label class="col-sm-10">User Type Status</label>
            	</div>

          <div class="row row-padded">
			<label class="col-sm-2">30</label>
			   <label class="col-sm-8">Status</label>
			   <label class="col-sm-1"><input value="1" type="checkbox" name="status" id="status" checked></label>
			   <label class="col-sm-1"><input value="0" type="checkbox" name="status" id="status"></label>
        </div>


            </div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
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
            $('#email').val('');
            $('#phone').val('');
            $('.modal-title').text('Add User');
            $('#SaveUser').prop('disabled', false).text('Save changes');
        });

        $('#SaveUser').click(function () {
            let btn = $(this);
            let id = $('#userId').val();
            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();

            if (!name.trim()) {
                toastr.error("Name field is required!");
                return;
            }

            if (!email.trim()) {
                toastr.error("Email field is required!");
                return;
            }

            if (!phone.trim()) {
                toastr.error("Phone field is required!");
                return;
            }

            btn.prop('disabled', true).text(id ? 'Updating...' : 'Saving...');

            let data = {
                _token: $('meta[name="csrf-token"]').attr('content'),
                id: id,
                name: name,
                email: email,
                phone: phone,
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
                $('#email').val(user.email).trigger('change');
                $('#phone').val(user.phone).trigger('change');
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
