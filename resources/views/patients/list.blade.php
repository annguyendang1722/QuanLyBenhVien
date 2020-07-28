@extends('layouts.horizontal')


@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Trung tâm hô hấp</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách Bệnh nhân</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Danh sách Bệnh nhân</h4>
    </div>
</div>
@endsection

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="sub-header text-right">
                        <a href="/patient/add" class="btn btn-success"><i class="uil uil-plus"></i> Thêm bệnh nhân</a>
                    </p>

                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Số điện thoại</th>
                                <th>Tuổi</th>
                                <th>Lịch khám gần nhất</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                    
                 
                        <tbody>
                            @foreach ($patients as $pats)
                                <tr>
                                    
                                    <td><a href="/patient/{{$pats->id}}">{{$pats->patient_name}}</a></td>
                                    <td>{{$pats->phone}}</td>
                                    <td>{{$pats->year_old}}</td>
                                    <td>Đang cập nhật  ssdsd</td>
                                    <td>Đang cập nhật</td>
                                    <td><a href="/patient/edit/{{$pats->id}}">Chỉnh sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


              
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection