@extends('employer.layout')

@section('pageTitle', 'Đổi mật khẩu')


@section('content')
    @include("employer.elements.employer-heading-tool")
    <section class="manage-job-posting-post-jobs cb-section bg-manage">
        <div class="container">
            <div class="box-manage-job-posting">
                <div class="heading-manage">
                    <div class="left-heading">
                        <h1 class="title-manage"> Thông Tin Tài Khoản</h1>
                    </div>
                   {{-- <div class="right-heading"><a class="support" href="https://careerbuilder.vn/vi/employers/faq"
                                                  target="_blank">Hướng dẫn </a></div>--}}
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
                    <div class="tabslet-content  active" id="tab-6">
                        <form name="editPassFrm" action="{{ route('employer.post_changepassword') }}" method="post">
                            @csrf

                            <div class="main-application-information main-form-change-password">
                                <h2 class="title-application no-bg no-pad">Đổi mật khẩu</h2>
                                <div class="form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="text" value="nhavophong3@gmail.com"
                                                       onkeyup="this.setAttribute('value', this.value);"
                                                       disabled="disabled">
                                                <label>Email/Tên đăng nhập </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="password" value="" name="newpass" id="newpass"
                                                       onkeyup="this.setAttribute('value', this.value);">
                                                <label>Mật khẩu mới <font style="color: red">*</font></label>

                                                @error('newpass')
                                                <span class="form-error"
                                                      id="newpass_error"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-text form-input-label">
                                                <input type="password" value="" name="renewpass" id="renewpass"
                                                       maxlength="40" onkeyup="this.setAttribute('value', this.value);">
                                                <label>Xác nhận mật khẩu mới <font style="color: red">*</font></label>
                                                @error('renewpass')
                                                <span class="form-error"
                                                      id="newpass_error"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-submit form-continue">
                                    <button class="btn-cancel btn-reset" type="reset" onclick="resetformchangpass();">
                                        Hủy
                                    </button>
                                    <button class="btn-gradient btn-submit" type="submit"
                                            id="account_change_password_btn">Lưu
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script language="JavaScript" type="text/javascript">
                        var language_updatepass = {
                            emp_register_too_short: "Quá ngắn",
                            emp_register_weak: "Yếu",
                            emp_register_good: "Tốt",
                            emp_register_strong: "Mạnh",
                            emp_register_confirm_pass_correct_unicode: "Mật khẩu có ít nhất 2 thông tin sau: chữ hoa, chữ thường, số, ký tự đặc biệt (.-_@~`#$%^&*?+\"'!()=). Lưu ý: Không sử dụng tiếng Việt có dấu. Mật khẩu không vượt quá 40 ký tự.",
                            emp_update_old_and_new_pass_equal: "Mật khẩu cũ không đúng, vui lòng nhập lại!",
                            emp_update_pass_empty: "emp_update_pass_empty",
                            emp_update_new_pass_length: "emp_register_Password phai co do dai tu 6 - 30 ky tu",
                            emp_register_pass_strong: "Mật khẩu phải bao gồm ít nhất 2 trong 4 phần sau đây: Chữ hoa, chữ thường, số, ký tự đặc biệt ( -_@~`#$%^&*\"?+'!()=? )",
                            emp_account_Your_Password_updated_successfully: "Mật khẩu của quý khách đã cập nhật thành công",
                            emp_register_confirm_create_pass_correct: "Nhập lại mật khẩu không đúng"
                        };

                        if (typeof language === 'undefined')
                            var language = language_updatepass;
                        else
                            $.extend(language, language_updatepass);

                        function checkStrength(password) {
                            //initial strength
                            var strength = 0;
                            //if the password length is less than 6, return message.
                            if (password.length < 6) {
                                // $('#resultPass').removeClass();
                                ///$('#resultPass').removeClass('short');
                                // $('#resultPass').addClass('short');
                                return language.emp_register_too_short;
                            }
                            //length is ok, lets continue.
                            //if length is 8 characters or more, increase strength value
                            if (password.length > 7) strength += 1;
                            //if password contains both lower and uppercase characters, increase strength value
                            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1;
                            //if it has numbers and characters, increase strength value
                            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1;
                            //if it has one special character, increase strength value
                            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
                            //if it has two special characters, increase strength value
                            if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1;
                            //now we have calculated strength value, we can return messages
                            //if value is less than 2

                            if (strength < 2) {
                                return language.emp_register_weak;
                            } else if (strength <= 3) {
                                return language.emp_register_good;
                            } else {
                                return language.emp_register_strong;
                            }
                        }

                        function resetformchangpass() {
                            location.reload();
                        }

                        $(document).ready(function () {
                            $('#newpass').keyup(function () {
                                $('#resultPass').html(checkStrength($('#newpass').val()));
                            })
                        });
                        $("#editPassFrm").validate({
                            rules: {
                                oldpass: {required: true},
                                newpass: {required: true, minlength: 6, maxlength: 40, validatePassUnicodeStrong: true},
                                renewpass: {required: true, minlength: 6, maxlength: 40, equalTo: "#newpass"}
                            },
                            messages: {
                                newpass: {validatePassUnicodeStrong: language.emp_register_confirm_pass_correct_unicode},
                                renewpass: {equalTo: language.emp_register_confirm_create_pass_correct}
                            },
                            success: function (error) {
                                error.remove();
                            },
                            errorPlacement: function (error, element) {
                                var name = element.attr('name');
                                var errorSelector = '.error_' + name;
                                var $element = $(errorSelector);
                                $(errorSelector).html(error.html());
                            },
                            submitHandler: function () {
                                $("#account_change_password_btn").prop('disabled', true);
                                $.ajax({
                                    type: "POST",
                                    url: domain + 'employers/hrcentral/accounts/updatepassword',
                                    data: $("#editPassFrm").serialize(),
                                    dataType: "JSON",
                                    success: function (error) {
                                        if (error.oldnewpass == 1) {
                                            $("#oldpass_error").html(language.emp_update_old_and_new_pass_equal).show();
                                        } else if (error.oldpassempty == 1) {
                                            $("#oldpass_error").html(language.emp_update_pass_empty).show();
                                        } else if (error.newpassempty == 1) {
                                            $("#newpass_error").html(language.emp_update_pass_empty).show();
                                        } else if (error.newpasslength == 1) {
                                            $("#newpass_error").html(language.emp_update_new_pass_length).show();
                                        } else if (error.newpassunicode == 1) {
                                            $("#newpass_error").html(language.emp_register_pass_only_allow).show();
                                        } else if (error.newpassstrong == 1) {
                                            $("#newpass_error").html(language.emp_register_pass_strong).show();
                                        } else if (error.renewpassempty == 1) {
                                            $("#renewpass_error").html(language.emp_update_pass_empty).show();
                                        } else if (error.renewpasscorrect == 1) {
                                            $("#renewpass_error").html(language.emp_register_confirm_create_pass_correct).show();
                                        } else {
                                            show_noti(1, language.emp_account_Your_Password_updated_successfully);
                                        }
                                        $("#account_change_password_btn").prop('disabled', false);
                                    }
                                });
                            }
                        });
                    </script>


                </div>
            </div>
        </div>
    </section>@endsection