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
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEditUser">Add
                            User Type</button>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="usersTypeTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
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
                        <input type="hidden" id="role_id" value="">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control"id="name" placeholder="Enter User Role Name">
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Dashboard</label>
                        </div>

                        <div class="row row-padded">
                            <label for="dashboard" class="col-sm-2">1</label>
                            <label for="dashboard" class="col-sm-8">Dashboard</label>
                            <label class="switch">
                                <input id="dashboard" name="dashboard" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Roles</label>
                        </div>

                        <div class="row row-padded">
                            <label for="roles" class="col-sm-2">2</label>
                            <label for="roles" class="col-sm-8">Roles</label>
                            <label class="switch">
                                <input id="roles" name="roles" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="addrole" class="col-sm-2">3</label>
                            <label for="addrole" class="col-sm-8">Add Role</label>
                            <label class="switch">
                                <input id="addrole" name="addrole" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="editrole" class="col-sm-2">4</label>
                            <label for="editrole" class="col-sm-8">Edit Role</label>
                            <label class="switch">
                                <input id="editrole" name="editrole" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="deleterole" class="col-sm-2">5</label>
                            <label for="deleterole" class="col-sm-8">Delete Role</label>
                            <label class="switch">
                                <input id="deleterole" name="deleterole" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Users</label>
                        </div>

                        <div class="row row-padded">
                            <label for="users" class="col-sm-2">6</label>
                            <label for="users" class="col-sm-8">Users</label>
                            <label class="switch">
                                <input id="users" name="users" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="adduser" class="col-sm-2">7</label>
                            <label for="adduser" class="col-sm-8">Add User</label>
                            <label class="switch">
                                <input id="adduser" name="adduser" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="edituser" class="col-sm-2">8</label>
                            <label for="edituser" class="col-sm-8">Edit User</label>
                            <label class="switch">
                                <input id="edituser" name="edituser" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label for="deleteuser" class="col-sm-2">9</label>
                            <label for="deleteuser" class="col-sm-8">Delete User</label>
                            <label class="switch">
                                <input id="deleteuser" name="deleteuser" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Patients</label>
                        </div>

                        <div class="row row-padded">
                            <label for="patients" class="col-sm-2">10</label>
                            <label for="patients" class="col-sm-8">Patients</label>
                            <label class="switch">
                                <input id="patients" name="patients" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">11</label>
                            <label class="col-sm-8">Add Patient</label>
                            <label class="switch">
                                <input id="addpatient" name="addpatient" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">12</label>
                            <label class="col-sm-8">Edit Patient</label>
                            <label class="switch">
                                <input id="editpatient" name="editpatient" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">13</label>
                            <label class="col-sm-8">Delete Patient</label>
                            <label class="switch">
                                <input id="deletepatient" name="deletepatient" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Blocks</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">14</label>
                            <label class="col-sm-8">Blocks</label>
                            <label class="switch">
                                <input id="blocks" name="blocks" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">15</label>
                            <label class="col-sm-8">Add Block</label>
                            <label class="switch">
                                <input id="addblock" name="addblock" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">16</label>
                            <label class="col-sm-8">Edit Block</label>
                            <label class="switch">
                                <input id="editblock" name="editblock" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">17</label>
                            <label class="col-sm-8">Delete Block</label>
                            <label class="switch">
                                <input id="deleteblock" name="deleteblock" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Rooms</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">18</label>
                            <label class="col-sm-8">Rooms</label>
                            <label class="switch">
                                <input id="rooms" name="rooms" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">19</label>
                            <label class="col-sm-8">Add Room</label>
                            <label class="switch">
                                <input id="addroom" name="addroom" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">20</label>
                            <label class="col-sm-8">Edit Room</label>
                            <label class="switch">
                                <input id="editroom" name="editroom" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">21</label>
                            <label class="col-sm-8">Delete Room</label>
                            <label class="switch">
                                <input id="deleteroom" name="deleteroom" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Admission</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">22</label>
                            <label class="col-sm-8">Admission</label>
                            <label class="switch">
                                <input id="admission" name="admission" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Billing</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">23</label>
                            <label class="col-sm-8">Billing</label>
                            <label class="switch">
                                <input id="billing" name="billing" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Pharmacy</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">24</label>
                            <label class="col-sm-8">Pharmacy</label>
                            <label class="switch">
                                <input id="pharmacy" name="pharmacy" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Investigation</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">25</label>
                            <label class="col-sm-8">Investigation</label>
                            <label class="switch">
                                <input id="investigation" name="investigation" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">OT</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">26</label>
                            <label class="col-sm-8">OT</label>
                            <label class="switch">
                                <input id="ot" name="ot" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">MRD</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">27</label>
                            <label class="col-sm-8">MRD</label>
                            <label class="switch">
                                <input id="mrd" name="mrd" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>

                        <div class="row row-color">
                            <label class="col-sm-4">Appointments</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">28</label>
                            <label class="col-sm-8">Appointments</label>
                            <label class="switch">
                                <input id="appointments" name="appointments" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>
                        <div class="row row-color">
                            <label class="col-sm-4">MIS</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">29</label>
                            <label class="col-sm-8">MIS</label>
                            <label class="switch">
                                <input id="mis" name="mis" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>
                        <div class="row row-color">
                            <label class="col-sm-10">User Type Status</label>
                        </div>

                        <div class="row row-padded">
                            <label class="col-sm-2">30</label>
                            <label class="col-sm-8">Status</label>
                            <label class="switch">
                                <input id="status" name="status" type="checkbox" class="toggle-status"><span class="slider round"></span>
                            </label>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="saveRole" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>

    <script>
        $(document).ready(function() {

            let table = $('#usersTypeTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.usertypelist') }}",
                columns: [
                    { data: 'DT_RowIndex' },
                    { data: 'user_types_name' },
                    { data: 'action', orderable: false, searchable: false }
                ]
            });

            $('#saveRole').on('click', function() {
                var roleId = $('#role_id').val();
                var name = $('#name').val();
                let dashboard = $("input[name='dashboard']").is(":checked") ? 1 : 0;
                let role = $("input[name='role']").is(":checked") ? 1 : 0;

                var url = roleId ? '/usertypeupdate/' + roleId : '/usertypeinsert';
                var method = 'POST';

                $.ajax({
                    url: url,
                    type: method,
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        dashboard: dashboard,
                        role: role
                    },
                    success: function(response) {
                        alert(response.message);
                        $('#role_id').val(''); // Reset hidden input for new entries
                        $('#name').val(''); // Clear input field
                    },
                    error: function(xhr) {
                        alert('Error: ' + xhr.responseText);
                    }
                });
            });

            $(document).on('click', '.editUserType', function () {
                let id = $(this).data('id');
                $.get("{{ route('users.usertypelist') }}", function (data) {
                    let user = data.data.find(user => user.id == id);
                    $('#role_id').val(user.id);
                    $('#dashboard').prop('checked', user.dashboard == 1);
                    $('#role').prop('checked', user.roles == 1);

                    $('.modal-title').text('Edit User Type');
                    $('#addEditUser').modal('show');
                    $('#SaveUser').prop('disabled', false).text('Update User');
                });
            });

        });
    </script>
@endsection
