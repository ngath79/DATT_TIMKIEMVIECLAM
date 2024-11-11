@extends('user.layout')

@section('pageTitle', 'Quên mật khẩu?')

@section('content')

    <section class="signin-form cb-section">
        <div class="container">
            <div class="cb-title cb-title-center">
                <h2>Quên mật khẩu?</h2>
            </div>
            <div class="box-shadown">
                <div class="row">
                    <div class="col-md-6">
                        <div class="information">
                            <div class="list-info" id="list-info">
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-blue"><img class="lazy-bg"
                                                                        data-src="./img/job-alert/i1.png" alt=""></div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Thông báo việc làm</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Được cập nhật các cơ hội việc làm mới nhất từ nhiều công ty hàng
                                                    đầu</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-green"><img class="lazy-bg"
                                                                         data-src="./img/job-alert/i2.png" alt=""></div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Kiếm việc dễ dàng</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Tìm được công việc bạn yêu thích phù hợp với kỹ năng và tiêu chí bạn
                                                    quan tâm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="job-item">
                                    <div class="figure">
                                        <div class="image is-yellow"><img class="lazy-bg"
                                                                          data-src="./img/job-alert/i3.png" alt="">
                                        </div>
                                        <div class="figcaption">
                                            <div class="title">
                                                <h3>Ứng tuyển nhanh chóng</h3>
                                            </div>
                                            <div class="caption">
                                                <p>Dễ dàng ứng tuyển nhiều vị trí mà không cần mất nhiều thời gian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if(session('no'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                                {{session('no')}}
                            </div>
                        @endif
                        @if(session('yes'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                                {{session('yes')}}
                            </div>
                        @endif
                        <div class="main-form">
                            <ul class="list-tabs">
                                <li class="active"><a href="{{ route('user.pages.login_page') }}" title="Đăng nhập">Đăng
                                        nhập</a></li>
                                <li><a href="{{ route('user.pages.register_page') }}" title="Đăng ký">Đăng ký</a></li>
                            </ul>
                            <div class="notification" style="margin-bottom: 40px">
                                <p>Quên mật khẩu?</p>
                                <p>Vui lòng nhập email của bạn và click Gửi.</p>
                            </div>
                            <div class="form-reset-password">
                                <form id="frmForgotpw" method="post" action="{{ route('user.sendforgotpassword') }}">
                                    @csrf
                                    <div class="form-group form-text">
                                        <input type="text" onkeyup="this.setAttribute('value', this.value);"
                                               name="email" id="member_email" value="">
                                        <label for="">Vui lòng nhập email của bạn</label>
                                        <span class="error_member_email">
                                            @if(session('error'))
                                                {{session('error')}}
                                            @endif
                                        </span>
                                        @if(session('succes'))
                                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                                                {{session('succes')}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group form-submit">
                                        <button type="submit" class="btn-gradient">Gửi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>