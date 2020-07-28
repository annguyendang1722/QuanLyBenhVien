@extends('layouts.horizontal')

@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Basic Forms</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Input Types</h4>
                <p class="sub-header">
                    Most common form control, text-based input fields. Includes support for all HTML5 types:
                    <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>,
                    <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>,
                    <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                </p>
                @if(count($errors) > 0 )
                    <div class="alrert alrert-danger">
                        @foreach($errors->all() as $err)
                            {{err}}<br>
                        @endforeach
                    </div>      
                @endif 

                @if(session('thongbao'))   
                    <div class="alrert alrert-success" style="margin-bottom: 10px;background: #66FF99;padding: 10px 0px;padding-left: 20px;font-size: 20px;">
                        {{session('thongbao')}}
                    </div>                 
                @endif     
                <form class="form-horizontal" action="/patient/edit/{{$patient->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="simpleinput">Họ tên</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="simpleinput" name="patient_name" value="{{$patient->patient_name}}" placeholder="Họ và tên...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-email">Email</label>
                                <div class="col-lg-10">
                                    <input type="email" id="example-email" name="email" value="{{$patient->email}}" class="form-control" placeholder="Email">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Giới tính</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Giới tính" class="form-control" value="{{$patient->sex}}"  name="sex" id="example-password">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Dân tộc</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Dân tộc" class="form-control" value="{{$patient->ethnic}}"  name="ethnic" id="example-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Nghề nghiệp</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Nghề nghiệp" class="form-control" value="{{$patient->professional}}"  name="professional" id="example-password">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Cơ quan, đơn vị làm việc</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Cơ quan, đơn vị làm việc" value="{{$patient->company}}" class="form-control" name="company" id="example-password">
                                </div>
                            </div>   


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">Địa chỉ</label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Địa chỉ" class="form-control" value="{{$patient->address}}"  name="address" id="example-password">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">
                                    Thôn, tổ
                                </label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Thôn, tổ" value="{{$patient->village}}" class="form-control" name="village" id="example-password">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">
                                    Xã,phường thị trấn
                                </label>
                                <div class="col-lg-10">
                                    <input type="text" value="{{$patient->ward}}" placeholder="Xã,phường thị trấn" class="form-control" name="ward" id="example-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">
                                    Quận, huyện
                                </label>
                                <div class="col-lg-10">
                                    <input type="text" value="{{$patient->district}}" placeholder="Quận, huyện" class="form-control" name="district" id="example-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-password">
                                    Tỉnh, thành phố
                                </label>
                                <div class="col-lg-10">
                                    <input type="text" placeholder="Tỉnh, thành phố" class="form-control" value="{{$patient->provincial}}" name="provincial" id="example-password">
                                </div>
                            </div>




                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-placeholder">Số điện thoại</label>
                                <div class="col-lg-10">
                                    <input type="number" name="phone" value="{{$patient->phone}}"  class="form-control" placeholder="Số điện thoại" id="example-placeholder">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Tóm tắt bệnh án</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="description" id="example-textarea">{{$patient->description}}</textarea>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Chẩn đoán đầu vào</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="diagnosed_go_in_hospital" id="example-textarea">{{$patient->diagnosed_go_in_hospital}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Chẩn đoán đầu ra</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="diagnosed_go_out_hospital" id="example-textarea">{{$patient->diagnosed_go_out_hospital}}</textarea>
                                </div>
                            </div>



                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                       


                           
                        </div>
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-fileinput">Ảnh Đại Diện</label>
                                <div class="col-lg-10">
                                    <input type="file" name="patient_image" value="{{$patient->patient_image}}" class="form-control" id="example-fileinput">
                                </div>
                            </div>

                           

                             <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-date">Ngày vào viện</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="date_start" value="{{$patient->date_start}}" id="example-date" type="date">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-date">Ngày ra viện</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="date_end" value="{{\Carbon\Carbon::parse($patient->date_end)->format('Y-m-d')}}"  id="example-date" type="date">
                                    <input class="form-control" type="date" value="2013-01-08" id="example-date" >
                                </div>
                            </div>



                            
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Quá trình bệnh lý và diễn biến lâm sàng</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="pathological_process" id="example-textarea">{{$patient->pathological_process}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Tóm tắt kết quả xét nghiệm lâm sàng</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="test_result" id="example-textarea">
                                        {{$patient->test_result}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Phương pháp điều trị</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="treatments" id="example-textarea">
                                        {{$patient->treatments}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">
                                    Tình trạng người ra viện
                                </label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="status" id="example-textarea">
                                        {{$patient->status}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="example-textarea">Ghi chú</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="5" name="note" id="example-textarea">
                                        {{$patient->note}}
                                    </textarea>
                                </div>
                            </div>




                           

                          
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->

<div class="row">
    {{-- <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Select menu</h4>
                <p class="sub-header">
                    Custom <code>&lt;select&gt;</code> menus need only a custom class,
                    <code>.custom-select</code> to trigger the custom styles.
                </p>

                <select class="custom-select mb-2">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="custom-select custom-select-lg mb-2">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="custom-select custom-select-sm">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>


                <div class="mt-4">
                    <h4 class="header-title">Switches</h4>
                    <p class="sub-header">
                        A switch has the markup of a custom checkbox but uses the
                        <code>.custom-switch</code> class to render a toggle switch. Switches
                        also support the <code>disabled</code> attribute.
                    </p>

                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Toggle this
                            switch element</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">Disabled switch
                            element</label>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">Checkboxes</h4>
                <div class="mt-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Check this
                            custom checkbox</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Check this
                            custom checkbox</label>
                    </div>
                </div>

                <h4 class="font-size-15 mt-3">Radios</h4>
                <div class="">
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Toggle this
                            custom radio</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio2">Or toggle
                            this other custom radio</label>
                    </div>
                </div>

                <h4 class="font-size-15 mt-3">Disabled</h4>
                <div class="">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" disabled>
                        <label class="custom-control-label" for="customCheckDisabled1">Check
                            this custom checkbox</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input"
                            disabled>
                        <label class="custom-control-label" for="customRadioDisabled2">Toggle
                            this custom radio</label>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- end row -->

<div class="row">
    {{-- <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Basic Example</h4>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Địa chỉ</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkmeout0">
                            <label class="custom-control-label" for="checkmeout0">Check me out !</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title mt-0">Horizontal Form</h4>

                <form class="form-horizontal">
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-3 col-form-label">Email</label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-3 col-form-label">Password</label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword5" class="col-3 col-form-label">Re Password</label>
                        <div class="col-9">
                            <input type="password" class="form-control" id="inputPassword5"
                                placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="form-group row mb-3 justify-content-end">
                        <div class="col-9">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkmeout">
                                <label class="custom-control-label" for="checkmeout">Check me out !</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 justify-content-end row">
                        <div class="col-9">
                            <button type="submit" class="btn btn-info">Sign in</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col --> --}}

</div>
<!-- end row -->

<!-- Inline Form -->
<div class="row">
    {{-- <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-1 header-title mt-0">Inline Form</h4>

                <p class="sub-header">
                    Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on
                    a single horizontal row. Form controls within inline forms vary slightly from their default states.
                    Controls only appear inline in viewports that are at least 576px wide to account for narrow
                    viewports on mobile devices.
                </p>

                <form class="form-inline">
                    <div class="form-group mr-3">
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2"
                            value="email@example.com">
                    </div>
                    <div class="form-group mr-3">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm identity</button>
                </form>

                <h6 class="font-13 mt-3 font-weight-semibold">Auto-sizing</h6>

                <form>
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Username">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col --> --}}
</div>
<!-- end row -->
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection