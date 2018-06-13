<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\Permission_Role;

class RoleController extends Controller
{
    public function index(){

        $role = Role::get();

        $permission = Permission::get();


        return view ('settings.roles.index')->with([

            'role'=> $role,

            'permission'=> $permission

        ]);

    }

    public function create(Request $request)
    {
        $role = new Role;

        $role->permission = json_encode($request->permission);

        foreach ($request->all() as $key => $value) {

            //creating objects excluding the _token

            if ($key=='_token'|| $key=='permission')continue;

            $role->$key = $value;

        }

        if ($role->save()){

            # code...

            $role = Role::get();

            return redirect()->back()->withErrors([

                'success'=> 'Role Created',

                'role'=>$role,

            ]);

        } else {

            # code...

            $role = Role::get();

            return redirect()->back()->withErrors([

                'Error'=> 'Role not Created',

                'role'=>$role,
            ]);

        }

    }

    public function particular (Request $request){

        # code...
        $role = Role::where('id','=',$request->id)->first();

        $permission = Permission::get();

        return view('settings.roles.layouts.particular')->with([

            'role'=> $role,

            'permission' => $permission,

            'roleperm'=> json_decode($role->permission)

        ]);
    }

    public function enabling(Request $request)
    {
        # code...

        $id = $request->input('id');

        $status = $request->input('status');

        if(Role::where('id',$id)){

            $default = Role::where('id', '=', $id)->first();


            if ($status != '') {

                $default->update(array(

                    'status' => $status,

                ));

            }
            return redirect()->back()->withErrors([

                'success'=> 'Status Updated',

            ]);

        } else {

            return redirect()->back()->withErrors([

                'Error'=> 'Status not Updated',

            ]);

        }

    }

    public function update(Request $request)
    {
        # code...

        $data=[];

        $role = Role::where('id',$request->id);

        $roles = Role::where('id',$request->id)->first();

            $per_assign = Permission_Role::where('role_id', $request->id)->first();

            if($per_assign === null){

                $permission_roles = new Permission_Role;

                $permission_roles->permission_id = json_encode($request->permission_id);

                $permission_roles->role_id = $request->id;

                $permission_roles->save();

            }else if($per_assign !== null){

                $per_assign->update(array(

                    'permission_id' => json_encode($request->permission_id),

                ));

            }

        foreach ($request->all() as $key => $value) {

            //creating array excluding the _token the array will be used for update

            if ($key=='_token'|| $key=='id'|| $key=='permission_id')continue;

            $data[$key]=$value;

        }

        $role->update(array(

            'permission' => json_encode($request->permission_id),

        ));
            
        if ($role->update($data)){

            # code...

            return redirect()->back()->withErrors([

                'success'=> 'Role Updated',

            ]);

        } else {

            # code...;

            return redirect()->back()->withErrors([

                'Error'=> 'Role not Updated',

            ]);

        }

    }

}
