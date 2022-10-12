<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;


class AdminProfile extends Controller
{
    public function AdminProfilePage(){
        $id=Auth::guard('admin')->user()->id;
        $adminData = Admin::find($id);
        return view('admins.admin_profile_settings',compact('adminData'));
    }

    public function AdminProfileEdit(){

        $id=Auth::guard('admin')->user()->id;
        $adminedit = Admin::find($id);
        return view('admins.admin_profile_edit',compact('adminedit'));

    }

    public function AdminUpdateCreat(Request $request){
        $id=Auth::guard('admin')->user()->id;
        $data = Admin::find($id);

        $data->name=$request->name;
        $data->email=$request->email;

        if($request->file('imagepath')){
            $file=$request->file('imagepath');
            @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();

        $notification =array(
            'message' => 'Profile Updated Successfuly',
            'alert-type' =>'success'

        );

        return redirect()->route('admin.profile.page')->with($notification);

    }
}
