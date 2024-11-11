@extends('user.layout')

@section('pageTitle', 'Đăng ký')

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
                        <div>
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
                        </div>
                        <div class="main-form">
                            <ul class="list-tabs">
                                <li><a href="{{ route('user.pages.login_page') }}" title="Đăng nhập">Đăng nhập</a></li>
                                <li class="active"><a href="{{ route('user.pages.register_page') }}" title="Đăng ký">Đăng
                                        ký</a></li>
                            </ul>
                            <div class="choose-follow">
                                <p>Đăng nhập bằng</p>
                                <ul class="list-follow">
                                    <li><a class="fb" href="javascript:void(0);"
                                           onclick="popupapi('facebook','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5mYWNlYm9vaw==');"><em
                                                class="bi bi-facebook"></em>Facebook</a></li>
                                    <li><a class="gg" href="javascript:void(0);"
                                           onclick="popupapi('google','aHR0cHM6Ly9jYXJlZXJidWlsZGVyLnZuL3ZpL2pvYnNlZWtlcnMvbG9naW5nb29nbGU=');"><em
                                                class="bi bi-google"></em>Google</a></li>
                                </ul>
                            </div>
                            <div class="or-line"><span>hoặc </span></div>
                            <div class="form-login">
                                <form name="frmLogin" method="POST" action="{{ route('user.post_register') }}">
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
                                    <div class="form-group form-text">

                                        <input type="text" id="name" name="ten" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Họ và tên</label>
                                        @error('ten')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-text">

                                        <input type="text" id="email" name="email" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Email</label>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group form-text toggle-password">
                                        <input type="password" name="password" id="password" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Mật khẩu</label>
                                        <div  class="showhide-password eyess pass"
                                             onclick="showhide_pass()"></div>
                                        <script>
                                            function showhide_pass() {
                                                var input = document.getElementById("password");
                                                if (input.type === "password") {
                                                    input.type = "text";
                                                    document.getElementsByClassName("pass")[0].classList.add("show");
                                                } else {
                                                    input.type = "password";
                                                    document.getElementsByClassName("pass")[0].classList.remove("show");
                                                }
                                            }

                                            function showhide_cfpass() {

                                                var input1 = document.getElementById("cf_password");
                                                if (input1.type === "password") {
                                                    input1.type = "text";
                                                    document.getElementsByClassName("cf_pass")[0].classList.add("show");
                                                } else {
                                                    input1.type = "password";
                                                    document.getElementsByClassName("cf_pass")[0].classList.remove("show");
                                                }
                                            }
                                        </script>
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-text toggle-password">
                                        <input type="password" name="confirm_password" id="cf_password" value=""
                                               onkeyup="this.setAttribute('value', this.value);">
                                        <label for="">Xác nhận mật khẩu</label>
                                        <div class="showhide-password eyess cf_pass" onclick="showhide_cfpass()"></div>
                                        @error('confirm_password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group form-submit">
                                        <input type="hidden" name="csrf_token"
                                               value="fba45ec3fbcaa004f559051298d4ad697007bf205b3877151297b50de7733db4"/>
                                        <button type="submit" id="submit_login" class="btn btn-outline-primary">Đăng
                                            kí
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>