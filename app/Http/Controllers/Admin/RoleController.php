<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn.'<a href="' . route('admin.edit_role', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn.'<a href="' . route('admin.delete_role', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn.'</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Role List');
        return view('admin.pages.roles.index', $data);
    }

    public function createRole()
    {
        $data['permission'] = Permission::get();
        $data['title'] = __('Create Role');
        return view('admin.pages.roles.create', $data);
    }

    public function storeRole(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('admin.role_list')
            ->with('success','Role created successfully');
    }

    public function editRole($id)
    {
        $data['role'] = Role::find($id);
        $data['permission'] = Permission::get();
        $data['rolePermissions'] = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        $data['title'] = __('Edit Role');
        return view('admin.pages.roles.edit',$data);
    }

    public function updateRole(Request $request, $id)
    {
        if($id == 1) {
            return redirect()->back()->with('error', __('You can not update superadmin.'));
        }
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));

        return redirect()->back()
            ->with('success','Role Updated Successfully');
    }

    public function deleteRole($id)
    {
        if($id == 1) {
            return redirect()->back()->with('error', __('You can not delete superadmin.'));
        }
        DB::table("roles")->where('id',$id)->delete();
        return redirect()->back()
            ->with('success','Role deleted successfully');
    }
}
