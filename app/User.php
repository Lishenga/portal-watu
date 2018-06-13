<?php

namespace App;

use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use App\Role;
use App\Permission_Role;
use App\Role_User;

class User extends Authenticatable
{
    use EntrustUserTrait; // add this trait to your user model

    protected $fillable = ['name', 'email', 'password', 'status'];

    public function hasPermission($perms){
        
       $userrole = json_decode($this->role);
       
       foreach($userrole as $userroles){

        $role = Role::where('id', $userroles)->first();

        $roleperms = json_decode($role->permission);
         
        foreach($roleperms as $roler){
 
            $permer = Permission::where('id', $roler)->first();
             
            if($permer->name === $perms){
 
                return true;
 
            }continue;
 
        }

       }

       return false;

    }

    public function hasRole(){

       $userrole = json_decode($this->role);

       foreach($userrole as $userroles){

        $role = Role::where('id', $userroles)->first();
            
            if($role->name === $perms){

                return true;

            }

        }

       return false;

    }
}
