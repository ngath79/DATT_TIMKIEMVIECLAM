@extends('user.layout')

@section('pageTitle', 'Đăng nhập')

@section('content')

    <section class="signin-form cb-section">
        <div class="container">
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
                            @if(session('resetPassWordFail'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                                {{session('resetPassWordFail')}}
                            </div>
                        @endif
                        @if(session('yes'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                                {{session('yes')}}
                            </div>
                        @endif
                            @if(session('resetPassWord'))
                            <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-success">
                                {{session('resetPassWord')}}
                            </div>
                        @endif
                        <div class="main-form">
                            <ul class="list-tabs">
                                <li class="active"><a href="{{ route('user.pages.login_page') }}" title="Đăng nhập">Đăng
                                        nhập</a></li>
                                <li><a href="{{ route('user.pages.register_page') }}" title="Đăng ký">Đăng ký</a></li>
                            </ul>
                            <div class="choose-follow">
                                <p>Đăng nhập bằng</p>
                                <ul class="list-follow">
                                    <li><a class="fb" href="{{ route('login-by-facebook') }}"
                                           onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em
                                                class="bi bi-facebook"></em>Facebook</a></li>
                                    <li><a class="gg" href="{{ route('login-by-google') }}"><em
                                                class="bi bi-google"></em>Google</a></li>
                                </ul>
                            </div>
                            <div class="or-line"><span>hoặc </span></div>
                            <div class="form-login">
                                <form name="frmLogin" method="POST" action="{{ route('user.post_login') }}">
                                    @csrf
                                    {{--                                    <div class="">--}}

                                    {{--                                        <?php--}}
                                    {{--                                        $message = session()->get('error');--}}
                                    {{--                                        if ($message) {--}}
                                    {{--                                            echo '<span class="text-danger">' . $message . '</span>';--}}
                                    {{--                                            Session::put('error', null);--}}
                                    {{--                                        }--}}
                                    {{--                                        ?>--}}
                                    {{--                                    </div>--}}
                                    @if(session('error'))
                                        <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                                            {{session('error')}}
                                        </div>
                                    @endif
                                    <div class="form-group form-text">
                                        <input type="text" id="email" name="email" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Vui lòng nhập email</label>
                                    </div>
                                    <div class="form-group form-text toggle-password">
                                        <input type="password" name="password" id="password" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Vui lòng nhập mật khẩu</label>
                                        <div class="showhide-password eyess" onclick="showhide()"></div>
                                        <script>
                                            function showhide() {
                                                var input = document.getElementById("password");
                                                if (input.type === "password") {
                                                    input.type = "text";
                                                    document.getElementsByClassName("eyess")[0].classList.add("show");
                                                } else {
                                                    input.type = "password";
                                                    document.getElementsByClassName("eyess")[0].classList.remove("show");
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="form-group form-checkbox">
                                        <input type="checkbox" name="chkSave" value="1" id="chkSave">
                                        <label for="chkSave">Tự động đăng nhập</label>
                                    </div>
                                    <div class="form-group form-submit">
                                        <button type="submit" id="submit_login" class="btn-gradient">Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                            <div class="forgot-password"><a
                                    href="{{ route('user.forgotpassword') }}">Quên mật khẩu?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>