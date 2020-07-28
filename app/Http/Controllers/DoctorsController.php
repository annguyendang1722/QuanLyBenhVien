<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctors;

class DoctorsController extends Controller
{
    //
    public function getList()
    {
      $doctors = Doctors::all();
      return view('doctors.list',['doctors'=>$doctors]);
    }

    public function getDetail(Request $request,$id)
    {
      $doctor = Doctors::find($id);
      return view('doctors.detail',['doctor'=>$doctor]);
    }

    public function getAdd()
    {
      return view('doctors.add');
    }












    public function postAdd(Request $request)
    {
   
          $this->validate($request, [
              'doctor_name'=>'required|min:3',
              'email'=>'required|email|unique:users,email',             
          ],
          [
              'doctor_name.required'=>'Ban chua nhap dung ten nguoi dung',
              'doctor_name.min'=>'Tên người dùng phải ít nhất 3 kí tự',
              'email.required'=> 'Bạn chưa nhập email',
              'email.email'=> 'Bạn chưa nhập đúng định danh email',
              'email.unique'=> 'Email đã tồn tại',
          ]);

          $doctor = new Doctors;
          $doctor->doctor_name = $request->doctor_name;
          $doctor->email = $request->email;
          $doctor->address = $request->address;
          $doctor->description = $request->description;
          $doctor->phone = $request->phone;
          $doctor->save();
          
          return redirect('doctor/add')->with('thongbao','Thêm thành công');
    }












  
    public function getEdit(Request $request,$id)
    {
        $doctor = Doctors::find($id);

       

        return view('doctors.edit',['doctor'=>$doctor]);
    }

    public function postEdit(Request $request,$id)
    {

      $doctor = Doctors::find($id);
       $this->validate($request, [
        'doctor_name'=>'required|min:3',
        'email'=>'required|email|unique:users,email',             
      ],
      [
        'doctor_name.required'=>'Ban chua nhap dung ten nguoi dung',
        'doctor_name.min'=>'Tên người dùng phải ít nhất 3 kí tự',
        'email.required'=> 'Bạn chưa nhập email',
        'email.email'=> 'Bạn chưa nhập đúng định danh email',
        'email.unique'=> 'Email đã tồn tại',
      ]);

 

    
      $doctor->doctor_name = $request->doctor_name;

      $doctor->email = $request->email;
      $doctor->address = $request->address;
      $doctor->description = $request->description;
      $doctor->phone = $request->phone;
      $doctor->save();
       return redirect('doctor/edit/'.$doctor->id)->with('thongbao','Sửa thành công');

    }

}
