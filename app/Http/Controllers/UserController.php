<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index(){
        return view('users.index');
    }

    public function userlist(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <button type="button" title="Edit User Details" class="btn btn-light editUser btn-sm" data-id="' . $row->id . '"><i class="bx bx-edit me-0"></i></button>
                        <button type="button" title="Edit User Permission" class="btn btn-light editUser btn-sm" data-id="' . $row->id . '"><i class="bx bx bx-cog me-0"></i></button>
                        <button type="button" title="Delete User Data" class="btn btn-light deleteUser btn-sm" data-id="' . $row->id . '"><i class="bx bx-trash me-0"></i></button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'                         => 'required',
            'employee_id'                  => 'required',
            'email'                        => 'required|email',
            'joining_date'                 => 'required|date',
            'department'                   => 'required',
            'designation'                   => 'required',
            'phone'                        => 'required|numeric',
            'address'                      => 'required',
            'payroll_salary_details'       => 'required',
            'associated_hospitals_clinics' => 'required',
            'qualification_specialization' => 'required',
            'experience'                   => 'required',
            'shift_timings'                => 'required',
            'license_registration_number'  => 'required',
            'consultation_fees'            => 'required',
            'emergency_contact_information' => 'required',


        ]);

        User::insert([
            'name'        => $request->name,
            'employee_id'                => $request->employee_id,
            'email'                      => $request->email,
            'joining_date'               => $request->joining_date,
            'department'                  => $request->department,
            'designation'                 => $request->designation,
            'phone'                       => $request->phone,
            'address'                     => $request->address,
            'payroll_salary_details'      => $request->payroll_salary_details,
            'associated_hospitals_clinics' => $request->associated_hospitals_clinics,
            'qualification_specialization' => $request->qualification_specialization,
            'experience'                   => $request->experience,
            'shift_timings'                => $request->shift_timings,
            'license_registration_number'  => $request->license_registration_number,
            'consultation_fees'             => $request->consultation_fees,
            'emergency_contact_information' => $request->emergency_contact_information,






        ]);

        return response()->json(['status' => 'success', 'message' => 'User added successfully!']);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name'                      => 'required',
            'employee_id'               => 'required',
            'email'                     => 'required|email|unique:users,email,' . $request->id,
            'joining_date'              => 'required|date',
            'department'                => 'required',
            'designation'                => 'required',
            'phone'                      => 'required|numeric',
            'address'                    => 'required',
            'payroll_salary_details'      => 'required',
            'associated_hospitals_clinics' => 'required',
            'qualification_specialization' => 'required',
            'experience'                   => 'required',
            'shift_timings'                => 'required',
            'license_registration_number'  => 'required',
            'consultation_fees'             => 'required',
            'emergency_contact_information' => 'required',





        ]);

        User::where('id', $request->id)->update([
            'name'                         => $request->name,
            'employee_id'                  => $request->employee_id,
            'email'                        => $request->email,
            'joining_date'                 => $request->joining_date,
            'department'                   => $request->department,
            'designation'                  => $request->designation,
            'phone'                        => $request->phone,
            'address'                      => $request->address,
            'payroll_salary_details'       => $request->payroll_salary_details,
            'associated_hospitals_clinics' => $request->associated_hospitals_clinics,
            'qualification_specialization' => $request->qualification_specialization,
            'experience'                   => $request->experience,
            'shift_timings'                => $request->shift_timings,
            'license_registration_number'  => $request->license_registration_number,
            'consultation_fees'            => $request->consultation_fees,
            'emergency_contact_information' => $request->emergency_contact_information,




        ]);

        return response()->json(['status' => 'success', 'message' => 'User Updated successfully!']);
    }

    public function destroy(Request $request)
    {
        $request->validate(['id' => 'required|exists:users,id']);
        User::find($request->id)->delete();
        return response()->json(['status' => 'success', 'message' => 'User Deleted successfully!']);
    }

    public function status(Request $request){
        $user = User::where('id', $request->id)->update([
            'status' => $request->status,
        ]);
        return response()->json(['status' => 'success', 'message' => 'User Status updated successfully!']);
    }


    public function usertypes(){
        return view('users.user_types');
    }


    public function usertypeinsert(Request $request){

        UserType::insert([
            'user_types_name' => $request->name,
            'dashboard' => $request->dashboard,
            'roles' => $request->role
        ]);

        return response()->json(['success' => true, 'message' => 'Permissions Inserted successfully']);
    }

    public function usertypeupdate(Request $request, $id){

        $role = DB::table('user_types')->where('id',$id)->update([
            'user_types_name' => $request->name,
            'dashboard' => $request->dashboard,
            'roles' => $request->role
        ]);

        return response()->json(['message' => 'Permissions updated successfully!']);

    }

    public function usertypelist(Request $request)
    {
        if ($request->ajax()) {
            $data = UserType::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <button type="button" title="Edit User Type" class="btn btn-light editUserType btn-sm" data-id="' . $row->id . '"><i class="bx bx-edit me-0"></i></button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


}
