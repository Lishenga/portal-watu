<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionController extends Controller
{
    public function index(){

        $permission = Permission::get();

        return view ('settings.permissions.index')->with([
            'permission'=> $permission
        ]);
    }

    public function create(Request $request)
    {
        $permission = new Permission;
        foreach ($request->all() as $key => $value) {
            //creating objects excluding the _token
            if ($key=='_token')continue;
            $permission->$key = $value;
        }

        if ($permission->save()){
            # code...
            return redirect()->back()->withErrors([
                'success'=> 'Permission Created',
            ]);
        } else {
            # code...
            return redirect()->back()->withErrors([
                'Error'=> 'Permission not Created',
            ]);
        }
    }

    public function delete(Request $request)
    {
        # code...
        $permission = Permission::where('id',$request->id);
        if ($permission->delete()){
            # code...
            return redirect()->back()->withErrors([
                'success'=> 'Permission Deleted',
            ]);

        } else {
            # code...
            return redirect()->back()->withErrors([
                'Error'=> 'Permission Deleted',
            ]);
        }
    }

    public function update(Request $request)
    {
        # code...
        $data=[];
        $permission = Permission::where('id',$request->id);
        foreach ($request->all() as $key => $value) {
            //creating array excluding the _token the array will be used for update
            if ($key=='_token'|| $key=='id')continue;
            $data[$key]=$value;
        }

        if ($permission->update($data)){
            # code...
            return redirect()->back()->withErrors([
                'success'=> 'Permission Updated',
            ]);
        } else {
            # code...;
            return redirect()->back()->withErrors([
                'Error'=> 'Permission not Updated',
            ]);
        }
    }
}
