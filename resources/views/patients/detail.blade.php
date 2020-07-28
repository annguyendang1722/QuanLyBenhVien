@extends('layouts.horizontal')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Trung tâm hô hấp</a></li>
                <li class="breadcrumb-item"><a href="/doctor/list">Hồ sơ bác sĩ</a></li>
                <li class="breadcrumb-item active" aria-current="page">BS. ABC</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Hồ sơ bác sĩ</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-3">
                    <img src="{{$patient->patient_image}}" alt="" class="avatar-lg rounded-circle" />
                    <h5 class="mt-2 mb-0">{{$patient->patient_name}}</h5>
                    {{-- <h6 class="text-muted font-weight-normal mt-2 mb-0">User Experience Specialist
                    </h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-4">San Francisco, CA</h6> --}}

                    <div class="progress mb-4" style="height: 14px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100">
                            <span class="font-size-12 font-weight-bold">Your Profile is <span
                                    class="font-size-11">60%</span> completed</span>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-sm mr-1">Follow</button>
                    <button type="button" class="btn btn-white btn-sm">Message</button>
                </div>

                <!-- profile  -->
                <div class="mt-5 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Mô tả</h4>
                    <p class="text-muted mb-4">{{$patient->description}}.</p>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{$patient->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Số điện thoại</th>
                                    <td>{{$patient->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Địa chỉ</th>
                                    <td>{{$patient->address}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Skills</h4>
                    <label class="badge badge-soft-primary">UI design</label>
                    <label class="badge badge-soft-primary">UX</label>
                    <label class="badge badge-soft-primary">Sketch</label>
                    <label class="badge badge-soft-primary">Photoshop</label>
                    <label class="badge badge-soft-primary">Frontend</label>
                </div>
            </div>
        </div>
        <!-- end card -->

    </div>

    <div class="col-lg-9">
        <div class="card">
            <h5 class="mt-3">This Week</h5>
            <div class="left-timeline mt-3 mb-3 pl-4">
                <ul class="list-unstyled events mb-0">
                    <li class="event-list">
                        <div class="pb-4">
                            <div class="media">
                                <div class="event-date text-center mr-4">
                                    <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                        02 hours ago</div>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-size-15 mt-0 mb-1">Designing
                                        Shreyu Admin</h6>
                                    <p class="text-muted font-size-14">Shreyu Admin - A
                                        responsive admin and dashboard template</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="pb-4">
                            <div class="media">
                                <div class="event-date text-center mr-4">
                                    <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                        21 hours ago</div>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                        Ubold Admin</h6>
                                    <p class="text-muted font-size-14">Ubold Admin - A
                                        responsive admin and dashboard template</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="pb-4">
                            <div class="media">
                                <div class="event-date text-center mr-4">
                                    <div class="bg-soft-primary p-1 rounded text-primary font-size-14">
                                        22 hours ago</div>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-size-15 mt-0 mb-1">UX and UI for
                                        Hyper Admin</h6>
                                    <p class="text-muted font-size-14">Hyper Admin - A
                                        responsive admin and dashboard template</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection