<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getDanhSach()
    {
      //  return view('admin.user.danhsach');
      $user = User::all();
      return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getThem()
    {
        return view('admin.user.them');
    }

    public function postThem(Request $request)
    {
      //echo $request->Ten;
          $this->validate($request,
          [
            'name' => 'required|min:3|',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordAgain' => 'required|same:password',
          ],
          [
            'name.require' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên thể loại phải có độ dài từ 3 ký tự',
            'email.require' => 'Bạn chưa nhập tên người dùng',
            'email.email' => 'Tên người dùng ít nhất 3 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.require' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
            'passwordAgain.require' => 'Bạn chưa nhập lại mật khẩu',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',

          ]);

          $user = new User;
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = bcrypt($request->password);
          $user->quyen = $request->quyen;
          $user->save();

          return redirect('admin/user/them')->with('thongbao','Thêm thành công');
    }
  

    public function getSua($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa người dùng thành công');
    }

    

    public function postSua(Request $request,$id)
    {
      // $user = User::find($id);

      $this->validate($request,
      [
        'name' => 'required|min:3|',
        'email' => 'required|email|unique:users,email',       
      ],
      [
        'name.require' => 'Bạn chưa nhập tên người dùng',
        'name.min' => 'Tên thể loại phải có độ dài từ 3 ký tự',
      ]);

      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
   
      $user->quyen = $request->quyen;


      if($request->changePassword)
      {
        $this->validate($request,
        [
          'password' => 'required|min:3|max:32',
          'passwordAgain' => 'required|same:password',
        ],
        [
          'password.require' => 'Bạn chưa nhập mật khẩu',
          'password.min' => 'Mật khẩu có ít nhất 3 ký tự',
          'password.max' => 'Mật khẩu chỉ được tối đa 32 ký tự',
          'passwordAgain.require' => 'Bạn chưa nhập lại mật khẩu',
          'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp',
        ]);
        $user->password = bcrypt($request->password);
      }

      $user->save();
      return redirect('admin/user/sua/'.id)->with('thongbao','Sửa thành công');

    }

    public function getXoa($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa người dùng thành công');
    }

}
