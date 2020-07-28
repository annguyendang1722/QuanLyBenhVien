<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientsController extends Controller
{
    //
    public function getList()
    {
      $patients = Patient::all();

      return view('patients.list',['patients'=>$patients]);
    }

    public function getDetail(Request $request,$id)
    {
      $patient = Patient::find($id);
      return view('patients.detail',['patient'=>$patient]);
    } 

    public function getAdd()
    {
      return view('patients.add');
    }

    public function postAdd(Request $request)
    {
   
          $this->validate($request, [
              'patient_name'=>'required|min:3',
              'email'=>'required|email|unique:users,email',             
          ],
          [
              'patient_name.required'=>'Ban chua nhap dung ten nguoi dung',
              'patient_name.min'=>'Tên người dùng phải ít nhất 3 kí tự',
              'email.required'=> 'Bạn chưa nhập email',
              'email.email'=> 'Bạn chưa nhập đúng định danh email',
              'email.unique'=> 'Email đã tồn tại',
          ]);

          $patient = new Patient;
          $patient->patient_name = $request->patient_name;
          $patient->email = $request->email;
          $patient->address = $request->address;
          $patient->description = $request->description;
          $patient->phone = $request->phone;
          $patient->wards = $request->wards;
          $patient->description = $request->description;
          $patient->phone = $request->phone;
          $patient->professional = $request->professional;
          $patient->date_start = $request->date_start;
          $patient->date_end = $request->date_end;
          $patient->ethnic = $request->ethnic;
          $patient->company = $request->company;

          $patient->wards = $request->wards;
          $patient->district = $request->district;
          $patient->provincial = $request->provincial;
          $patient->village = $request->village;

          $patient->pathological_process = $request->pathological_process;
          $patient->test_result = $request->test_result;
          $patient->treatments = $request->treatments;
          $patient->status = $request->status;
          $patient->note = $request->note;





          $patient->diagnosed_go_in_hospital = $request->diagnosed_go_in_hospital;
          $patient->diagnosed_go_out_hospital = $request->diagnosed_go_out_hospital;

        $patient_image = $request->patient_image;
        $patient->patient_image = '/upload/patients/' . time() . '-' . $patient_image->getClientOriginalName();

        $patient_image->move('upload/patients', $patient->patient_image);


          $patient->save();
          
          return redirect('patient/list')->with('notification','Thêm thành công');
    }
  
    public function getEdit(Request $request,$id)
    {
        $patient = Patient::find($id);

       

        return view('patients.edit',['patient'=>$patient]);
    }
// Ban hieu code không? ham nay khong lien quan gi luon di.

//http://localhost/laravel/lavarelbenhvien/public/patient/edit/24
// id =24. get id lay data đổ về view. nó có post đâu vô hàm này. 
//thấy kĩ chưa
// cái này là lỗi đặt sai kiểu dữ liệu. đặt date laf đúng. 
//đi đặt datetime nó có time 
    public function postEdit(Request $request,$id)
    {

      $patient = Patient::find($id);
       $this->validate($request, [
        'patient_name'=>'required|min:3',
        'email'=>'required|email|unique:users,email',             
      ],
      [
        'patient_name.required'=>'Ban chua nhap dung ten nguoi dung',
        'patient_name.min'=>'Tên người dùng phải ít nhất 3 kí tự',
        'email.required'=> 'Bạn chưa nhập email',
        'email.email'=> 'Bạn chưa nhập đúng định danh email',
        'email.unique'=> 'Email đã tồn tại',
      ]);

 

    
          $patient->patient_name = $request->patient_name;
          $patient->email = $request->email;
          $patient->address = $request->address;
          $patient->description = $request->description;
          $patient->phone = $request->phone;

          $patient->professional = $request->professional;
          $patient->date_start = $request->date_start;
          $patient->date_end = $request->date_end;
          $patient->ethnic = $request->ethnic;




           $patient->company = $request->company;

           $patient->wards = $request->wards;
           $patient->district = $request->district;
           $patient->provincial = $request->provincial;
           $patient->village = $request->village;

           $patient->pathological_process = $request->pathological_process;
           $patient->test_result = $request->test_result;
           $patient->treatments = $request->treatments;
           $patient->status = $request->status;
           $patient->note = $request->note;





      $patient->diagnosed_go_in_hospital = $request->diagnosed_go_in_hospital;
      $patient->diagnosed_go_out_hospital = $request->diagnosed_go_out_hospital;

      $patient->save();
       return redirect('patient/edit/'.$patient->id)->with('notification','Sửa thành công');

    }

}
