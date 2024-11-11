@extends('employer.layout')

@section('pageTitle', 'Thông Tin Tài Khoản')


@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-post-jobs cb-section bg-manage" style="margin-top: -20px">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage"> Thông Tin Tài Khoản</h1>
                    </div>
                </div>
                <div class="main-tabslet" data-toggle="tabslet">

                    <ul class="tabslet-tab">
                        <li class="{{ Route::is('employer.view_account') ? 'active' : ''}}"><a
                                href="{{ route('employer.view_account') }}" alt="Thông tin liên hệ"><span>Thông tin liên hệ</span></a>
                        </li>
                        <li class="{{ Route::is('employer.changepassword') ? 'active' : ''}}"><a
                                href="{{ route('employer.changepassword') }}"
                                alt="Đổi mật khẩu"><span>Đổi mật khẩu</span></a></li>
                    </ul>
                    @if(session('succes'))
                        <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                            {{session('succes')}}
                        </div>
                    @endif
                    <div class="tabslet-content  active " id="tab-3">

                        <form name="editFrm" action="{{ route('employer.post_account') }}" method="post">
                            @csrf
                            <div class="main-applicatio n-information">
                                <h2 class="title-application no-bg no-pad">
                                    CHỈNH SỬA THÔNG TIN LIÊN HỆ</h2>
                                <h2 class="title-application">Thông tin liên hệ</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="text" name="ten" value="{{ $employer -> ten }}"
                                                       maxlength="70" onkeyup="this.setAttribute('value', this.value);">
                                                <label>Họ và tên <font style="color: red">*</font></label>
                                                <span class="error error_EMP_CONTACT">
                                                                                                        </span>
                                                <div class="note">
                                                    <p>Tối thiểu 3 ký tự</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input readonly type="text" name="EMP_EMAIL" id="EMP_EMAIL"
                                                       value="{{ $employer -> email }}" maxlength="150"
                                                       onkeyup="this.setAttribute('value', this.value);">
                                                <label>Email liên hệ </label>
                                                <span class="error error_EMP_EMAIL"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="title-application">Địa chỉ liên hệ</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="text" name="diachi" value="{{ $employer -> diachi }}"
                                                       maxlength="700"
                                                       onkeyup="this.setAttribute('value', this.value);">
                                                <label>Địa chỉ <font style="color: red">*</font></label>
                                                <span class="error error_EMP_ADDRESS">
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Tỉnh/TP <font style="color: red">*</font></label>
                                                <div id="listlocation">

                                                    <select name="city" class="width_160">
                                                        <?php
                                                        use App\Models\City;
                                                        $listCitys = City::all()->where('trangthai', 1)
                                                        ?>
                                                        @foreach($listCitys as $list)
                                                            <option
                                                                @if($list->id == $employer -> city)
                                                                selected
                                                                @endif
                                                                value="{{$list->id}}">{{$list->tendaydu}}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="text" name="phone" value="{{ $employer -> phone }}"
                                                       maxlength="50" onkeyup="this.setAttribute('value', this.value);">
                                                <label>Điện thoại <font style="color: red">*</font></label>
                                                <span class="error error_EMP_TEL"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-submit form-continue">
                                    <button class="btn-gradient btn-submit btn-change-password" type="submit">Cập nhật
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection