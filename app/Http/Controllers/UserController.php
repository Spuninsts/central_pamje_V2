<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Association;
use App\Models\entity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\organization;
use JetBrains\PhpStorm\NoReturn;

class UserController extends Controller
{
    public function Index(){
        return view('frontend.index');
        //return view('admin.admin-login');
    } //End function

    public function UserLogin(){
        //resources-view-folder-filename
            return view('registered.default-login');
    }// End Method

    public function UserRegister(){
        //resources-view-folder-filename
            return view('registered.default-form');
    }// End Method

    public function ActiveUsers(Request $request){
        //resources-view-folder-filename
        switch($request->val) {
            case 'active':
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','!=','admin')
                    ->get();
                break;
            case 'admin':
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','admin')
                    ->get();
                break;
            case 'approval':
                $UserData = User::Where('user_status','approval')
                    ->Where('user_type','!=','admin')
                    ->get();
                break;
            case 'organization':
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','contact')
                    ->get();
                break;
            case 'reviewer':
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','reviewer')
                    ->get();
                break;
            case 'author':
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','author')
                    ->get();
                break;
            case 'inactive':
                $UserData = User::Where('user_status','inactive')
                    ->Where('user_type','!=','admin')
                    ->get();
                break;
            default: //standard user
                $UserData = User::Where('user_status','active')
                    ->Where('user_type','standard')
                    ->get();
                break;
        }

            return view('admin.active-users',compact('UserData'));
    }// End Method

    public function NewUser(){
        //resources-view-folder-filename
        $organizationData = organization::all();
        $UserID = $this->UserIDGen() + 1;
        $NewUserID = 'USER'.$UserID;
        return view('admin.new-user',compact('NewUserID','organizationData'));
    }// End Method

    public function UserIDGen(){
        $UserID = User::latest('id')->first('id');
        return($UserID['id']);
    }

    public function AdminUserStore(Request $request){


        $user_stat = "active";
        if($request->user_status == "approval"){$user_stat = "approval";}
        if(is_null($request->user_status)){$user_stat = "draft";}

        $user_password = Str::random(30);
        $user_password = Hash::make($user_password);

        User::insert([
            'user_id' => $request->user_id,
            'org_id' => $request->user_organization,
            'title' => $request->user_title,
            'fname' => $request->user_first_name,
            'lname' => $request->user_last_name,
            'mname' => $request->user_middle_name,
            'username' => $request->user_first_name.'.'.$request->user_last_name,
            'email' => $request->user_email,
            'password' => $user_password,
            'user_address' => "None",
            'user_type' => $request->user_type,
            'user_status' => $user_stat,
        ]);

        return redirect()->route('admin.active-users');

    }//ENd Method

    public function AdminUserUpdate(Request $request){

        //dd($request);
        $this_user = User::where('user_id',$request->user_id)
                    ->first();
        //dd($this_user);
        $this_user->user_status = $request->user_status;
        $this_user->title = $request->user_title;
        $this_user->fname = $request->user_first_name;
        $this_user->email = $request->user_email;
        $this_user->mname = $request->user_middle_name;
        $this_user->lname = $request->user_last_name;
        $this_user->user_type = $request->user_type;
        $this_user->org_id = $request->user_organization;
        $this_user->updated_at = now();
        $this_user->save();

        return redirect('admin/active/users?val=active');

    }//ENd Method


    public function EditUserMembership(Request $request){

        //dd(request()->val);
        //dd($request);

        $AssociateData = Association::where('association_journal',request()->val)
            ->get();

        //Just getting the IDS on association table
        $temp_array = $role_array = array();
        $associate_userid_array=[];
        foreach($AssociateData as $assoc_id){
            array_push($temp_array,$assoc_id->association_id);
            if($assoc_id->association_source == 'user')
                array_push($role_array,$assoc_id->association_role);
        }
        $role_array = array_values(array_unique($role_array)); //unique roles for users.

        //dd($role_array);
        //dd($temp_array); // this has all the ID's needed for the other information.

        // * need to get indexes, publisher and users.  * //

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array) // associated users
            ->get();
        //dd($UserData);
        $AllUserData = User::where('user_status','active') // all contacts that can be added
            ->where('user_type','contact')
            ->get();


        //dd($role_array);
        return view('admin.edit-members', compact('AssociateData','UserData','role_array','AllUserData'));


    }// end edit function

}
