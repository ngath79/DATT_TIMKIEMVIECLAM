@extends('employer.layout')

@section('pageTitle', 'Quản lý tuyển dụng')
@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="employer-dasboard cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="main-dasboard-top">
                <div class="row">
                    <div class="col-sm-12 col-xl-6">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Thông tin công ty</h2>
                            </div>
                            <div class="body d-flex justify-content-center">
                                <div class="box-dasboard-bottom topresume-list d-flex">
                                    <div class="topresume-item">
                                        <div class="topresume-left">
                                            <div class="topresume-image"><img
                                                    src="@if($employer -> avt == null)
                                                    {{ asset('public/imgs/noimage.png') }}
                                                    @else  {{ asset('public/avatar/'. $employer -> avt) }}@endif"
                                                    alt="avatar ung vien">
                                            </div>
                                        </div>
                                        <div class="topresume-info">
                                            <p>
                                                <a href="{{ route('pages.nha-tuyen-dung.detail', $employer -> tenkhongdau) }}"
                                                   class="tuv" target="_blank"> {{ $employer -> ten }} </a></p>
                                            <p><span>Email: {{ $employer -> email }}</span>
                                            <p><span>Phone: {{ $employer -> phone }}</span>
                                            <p><span>Website: <a target="_blank"
                                                                 href="https://www.{{ $employer -> website }}"> {{ $employer -> website }}</a></span>
                                            <p><span>Mã số thuế: {{ $employer -> masothue }}</span>
                                            <p><span>Loại hình hoạt động: @if($employer -> loaihinhhoatdong == 2) Cổ
                                                    phần @endif
                                                    @if($employer -> loaihinhhoatdong == 1) Nhà nước @endif
                                                    @if($employer -> loaihinhhoatdong == 3) Trách nhiệm hữu hạn @endif
                                                    @if($employer -> loaihinhhoatdong == 4) Cá nhân @endif
                                                    @if($employer -> loaihinhhoatdong == 5) Liên doanh @endif
                                                    @if($employer -> loaihinhhoatdong == 6) 100% vốn nước ngoài @endif
                                                    @if($employer -> loaihinhhoatdong == 7) Công ty đa quốc gia @endif
                                                </span>
                                            </p>
                                            <p><span><bi
                                                        class="bi bi-calendar-check-fill"></bi> Đăng kí:</span> {{date('d-m-Y', strtotime($employer -> created_at))}}
                                            </p>
                                            <p><span>Trạng thái: <strong>
                                                        @if($employer -> trangthai == 0 || $employer -> trangthai == 1)
                                                            <span class="text-danger">Chưa được phép đăng tuyển</span>
                                                        @elseif( $employer -> trangthai == 4)
                                                            <span class="text-danger">Từ chối cấp quyền đăng tuyển</span>
                                                        @else
                                                            <span class="text-success">Được phép đăng tuyển</span>
                                                        @endif
                                                    </strong></span></p>
                                            @if($employer -> trangthai == 0 || $employer -> trangthai == 4)
                                                <a class="text-primary py-1"
                                                   href="{{ route('employer.sendRequestRole') }}">Yêu cầu cấp quyền
                                                </a>
                                            @elseif($employer -> trangthai == 1)
                                                <p class="text-success py-1"
                                                   href="">Đã gửi yêu cầu
                                                </p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Quản Lý Đăng Tuyển</h2>
                            </div>
                            <div class="body">
                                <ul class="list-post-management">
                                    <li>
                                        <a href="">
                                            <span class="number green">{{ $countJobPost }}</span>
                                            <span class="title">Việc làm đang đăng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number blue">{{ $countJobWait }}</span>
                                            <span class="title">Việc làm chờ đăng</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number ">{{ $countJobWaitAccept }}</span>
                                            <span class="title">Việc làm chờ duyệt</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="number ">{{ $countJobExp }}</span>
                                            <span class="title">Việc làm hết hạn</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="box-dasboard-top">
                            <div class="head">
                                <h2 class="title-dashboard">Lịch Sử Hoạt Động</h2>
                            </div>
                            <div class="body">
{{--                                <ul class="list-operation-management">--}}
{{--                                    <li>--}}
{{--                                        <p class="time">--}}
{{--                                            <time>23/11/2023</time>--}}
{{--                                        </p>--}}
{{--                                        <p class="title">ID#: 1648394 - Code: 22 - Title: TTS PHP (Step 1)</p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <p class="time">--}}
{{--                                            <time>23/11/2023</time>--}}
{{--                                        </p>--}}
{{--                                        <p class="title">ID#: 1648394 - Code: 22 - Title: TTS PHP<br>Post from: CB.VN--}}
{{--                                        </p>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}
{{--                                <div class="view-more"><a class="btn-view-more"--}}
{{--                                                          href="https://careerbuilder.vn/vi/employers/hrcentral/accounts/report_task_log">Xem--}}
{{--                                        thêm</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-candidates-resume-applied">
                            <div class="heading-manage d-flex justify-content-between" style="padding-bottom: 10px">
                                <div class="left-heading">
                                    <h1 class="title-manage">Việc làm đang tuyển</h1>
                                </div>
                                <div class="right-heading"><a class="support"
                                                              href="{{ route('employer.view_hrcentral') }}">Xem tất
                                        cả </a></div>
                            </div>
                            <div class="main-tabslet" data-toggle="tabslet">
                                <div class="main-resume-applied">
                                    <div class="boding-resume-applied">
                                        <div class="table table-resume-applied">
                                            <table>
                                                <thead style="background: #e6e6e6;">
                                                <tr>
                                                    <th class="text-left">Chức danh</th>
                                                    <th style="text-align: center">Ngày đăng</th>
                                                    <th>Hết hạn</th>
                                                    <th>Trạng thái</th>
                                                    <th>Số lượng tuyển</th>
                                                    <th>Lượt Nộp</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($listJobPosting) == 0)
                                                    <td colspan="6" class="text-center">
                                                        Không có dữ liệu!
                                                    </td>
                                                @else
                                                    @foreach($listJobPosting as $list)
                                                        <tr>
                                                            <td>{{ $list-> tencongviec }}</td>
                                                            <td style="text-align: center">{{ date('d-m-Y', strtotime($list-> ngaydang)) }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($list-> hannhanhoso)) }}</td>
                                                            <td>@if($list-> trangthai == 3)
                                                                    <span class="badge bg-secondary">Chờ duyệt</span>
                                                                @elseif($list-> trangthai == 1)
                                                                    <span class="badge bg-success">Đang đăng</span>
                                                                @endif</td>
                                                            <td>{{ $list-> soLuong }}</td>
                                                            <td>{{ $list-> danop }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-dasboard-bottom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-candidates-resume-applied">
                            <div class="heading-manage d-flex justify-content-between" style="padding-bottom: 10px">
                                <div class="left-heading">
                                    <h1 class="title-manage">Đơn ứng tuyển gần đây</h1>
                                </div>
                                <div class="right-heading">
                                    <a class="support" href="{{ route('employer.manageresume') }}">Xem tất cả </a></div>
                            </div>
                            <div class="main-tabslet" data-toggle="tabslet">
                                <div class="main-resume-applied">
                                    <div class="boding-resume-applied">
                                        <div class="table table-resume-applied">
                                            <table>
                                                <thead style="background: #e6e6e6;">
                                                <tr>
                                                    <th>Ứng viên</th>
                                                    <th>Email</th>
                                                    <th>Ngày nộp</th>
                                                    <th>FileCV</th>
                                                    <th>Công việc</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if(count($listUV) == 0)
                                                    <td colspan="6" class="text-center">
                                                        Không có dữ liệu!
                                                    </td>
                                                @else
                                                    @foreach($listUV as $list)
                                                        <tr>
                                                            <td>{{ $list-> ten }}</td>
                                                            <td>{{ $list-> email }}</td>
                                                            <td>{{ date('d-m-Y', strtotime($list-> created_at)) }}</td>
                                                            <td class="text-left">
                                                                @if($list -> fileCV != null)
                                                                    <a target="_blank"
                                                                       href="{{ route('employer.viewCV', $list -> idApply)}}">{{$list -> fileCV}}</a>
                                                                    {{--                                                        <a target="_blank"--}}
                                                                    {{--                                                           href="{{ asset('public/CV/'. $list -> fileCV)}}">{{$list -> fileCV}}</a>--}}
                                                                @else
                                                                    <a target="_blank"
                                                                       href="{{ route('employer.viewCV' ,$list -> idApply)}}">{{$list -> nameCV}}</a>
                                                                @endif
                                                            </td>
                                                            <td style="text-align: left">{{ $list -> tencongviec }}</td>
                                                            <td class="text-right">@if($list -> status == 0) <span
                                                                    class="badge bg-secondary">Chưa xem</span>  @endif
                                                                @if($list -> status == 1) <span
                                                                    class="badge bg-success">Đã xem</span>  @endif
                                                                @if($list -> status == 2) <span
                                                                    class="badge bg-primary">Đã gửi mail</span>  @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>