<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalBills;

class MedicalBillsController extends Controller
{
    //
    public function getList()
    {
      $medicalbills = MedicalBills::all();
      return view('medicalbills.list',['MedicalBills'=>$medicalbills]);
    }

    public function getDetail()
    {
      return view('medicalbills.detail');
    }

    public function getAdd()
    {
      return view('medicalbills.add');
    }

    public function postAdd(Request $request)
    {
      //echo $request->Ten;
          $this->validate($request,
          [
            'Ten' => 'required|min:3|max:100'
          ],
          [
            'Ten.require' => 'Bạn chưa nhập tên thể loại',
            'Ten.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
            'Ten.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
          ]);

          $medicalbills = new MedicalBills;
          $medicalbills->Ten = $request->Ten;
          $medicalbills->TenKhongDau = changTitle($request->Ten);
          $medicalbills->save();

          return redirect('doctor/list')->with('notification','Thêm thành công');
    }
  
    public function getEdit($id)
    {
        $medicalbills = MedicalBills::find($id);
        return view('medicalbills.edit',['MedicalBills'=>$medicalbills]);
    }

    public function postEdit(Request $request,$id)
    {
      $medicalbills = MedicalBills::find($id);

      $this->validate($request,
      [
        'Ten' => 'required|min:3|max:100'
      ],
      [
        'Ten.require' => 'Bạn chưa nhập tên thể loại',
        'Ten.unique' => 'Tên thể loại đã tồn tại',
        'Ten.min' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
        'Ten.max' => 'Tên thể loại phải có độ dài từ 3 cho đến 100 ký tự',
      ]);

      $medicalbills->Ten = $request->Ten;
      $medicalbills->TenKhongDau = changTitle($request->Ten);
      $medicalbills->save();

      return redirect('doctor/'.id/'/edit')->with('notification','Sửa thành công');

    }

}
