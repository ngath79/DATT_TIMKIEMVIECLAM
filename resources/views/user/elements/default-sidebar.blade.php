<div class="default-sidebar sticky">
    <nav class="side-navbar">
        <div class="head-nav">
            <div class="my-cb-center">
                <h2>Quản lí tài khoản</h2>
            </div>
            <ul class="list-unstyled">
                <li> <a class="{{ Route::is('profile') ? 'active' : "" }}" href="{{ route('profile') }}" title="Quản lý hồ sơ"> <em class="material-icons">color_lens</em><span>Quản lý hồ sơ</span></a></li>
                <li> <a class="{{ Route::is('CV') ? 'active' : "" }}" href="{{ route('CV') }}"> <em class="material-icons">portrait</em><span>Quản lí CV</span></a></li>
                <li><a class="collapse {{ Route::is('viec-lam-da-luu') ? 'active' : "" }}{{ Route::is('viec-lam-da-nop') ? 'active' : "" }}" href="javascript:;"><em class="material-icons">edit</em><span>Việc làm của tôi</span></a>
                    <ul class="list-unstyled collapse {{ Route::is('viec-lam-da-luu') ? 'd-block' : "" }}{{ Route::is('viec-lam-da-nop') ? 'd-block' : "" }}">
                        <li><a class="{{ Route::is('viec-lam-da-luu') ? 'active' : "" }}" href="{{ route('viec-lam-da-luu') }}">Việc làm đã lưu</a></li>
                        <li><a class="{{ Route::is('viec-lam-da-nop') ? 'active' : "" }}" href="{{ route('viec-lam-da-nop') }}">Việc làm đã nộp</a></li>
                    </ul>
                </li>
{{--                <li> <a href="https://careerbuilder.vn/vi/jobseekers/jobalert"><em class="material-icons">notifications</em><span>Thông Báo Việc Làm</span></a></li>--}}
{{--                <li> <a class="collapse " href="javascript:;"><em class="material-icons">remove_red_eye</em><span>Nhà tuyển dụng của tôi</span></a>--}}
{{--                    <ul class="list-unstyled collapse">--}}
{{--                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/myresume/viewbyemp">Nhà tuyển dụng xem hồ sơ của tôi</a></li>--}}
{{--                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/following">Following</a></li>--}}
{{--                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/blacklist">Nhà tuyển dụng được cài đặt hạn chế xem hồ sơ của tôi</a></li>--}}
{{--                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/feedback">Phản hồi từ nhà tuyển dụng</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li> <a href="https://careerbuilder.vn/vi/jobseekers/mykiemviec/notify" title="Xem tất cả thông báo"> <em class="material-icons">textsms</em><span>Xem tất cả thông báo</span></a></li>--}}
                <li> <a class="collapse {{ Route::is('information') ? 'active' : "" }} " href="javascript:;"><em class="material-icons">settings</em><span>Cài đặt</span></a>
                    <ul class="list-unstyled collapse {{ Route::is('information') ? 'd-block' : "" }}">
                        <li> <a href="{{ route('information') }}" class="{{ Route::is('information') ? 'active' : "" }}" title="Tài Khoản">Tài Khoản</a></li>
{{--                        <li> <a href="https://careerbuilder.vn/vi/jobseekers/member/emailmanagement" title="Cài Đặt Thông Báo">Cài Đặt Thông Báo</a></li>--}}
                    </ul>
                </li>
                <li> <a href="{{route('logout')}}" title="Thoát"> <em class="material-icons">power_settings_new</em><span>Thoát</span></a></li>
            </ul>
        </div>
        <div class="toggle-nav"><em class="material-icons">menu_open</em></div>
    </nav>
</div>
<script>/*global.js*/
    function dropdownMenu() {
        $(".dropdown-mobile").each((function () {
            $(this).on("click", (function () {
                $(this).hasClass("show-menu") ? $(".dropdown-mobile").removeClass("show-menu") : ($(".dropdown-mobile").removeClass("show-menu"), $(this).addClass("show-menu")), $(this).hasClass("dropdown-2-menu") && $(this).addClass("show-menu")
            }))
        })), $(".dropdown-mobile-2").each((function () {
            $(this).on("click", (function () {
                $(".dropdown-2-menu").addClass("show-menu"), $(this).hasClass("show-menu-2") ? $(".dropdown-mobile-2").removeClass("show-menu-2") : ($(".dropdown-mobile-2").removeClass("show-menu-2"), $(this).addClass("show-menu-2"))
            }))
        }))
    }

    function menuMobile() {
        $(".button-hambuger").on("click", (function () {
            $(".mobile-menu").toggleClass("show"), $("html").toggleClass("menu-mobile-active"), $(".back-drop").addClass("active"), $("html").hasClass("menu-mobile-active") ? $(".back-drop").addClass("active") : $(".back-drop").removeClass("active")
        })), $(".back-drop").on("click", (function () {
            $(".mobile-menu").removeClass("show"), $("html").removeClass("menu-mobile-active"), $(".back-drop").removeClass("active"), $("header .main-login .dropdown-menu").slideUp(), $(".edit-db-career-goals").removeClass("active"), $(".edit-db-outstanding-achievements").removeClass("active")
        })), $(".dropdown-search-jobs").on("click", (function () {
            $(".dropdown-search-jobs .dropdown-menu").slideToggle()
        })), $("header .main-login .title-login").on("click", (function () {
            $("header .main-login .dropdown-menu").slideToggle(), $(".back-drop").toggleClass("active")
        }))
    }

    function clickMyCareerBuilder() {
        $("header .mobile-menu .header-bottom-bottom .authentication-links .My-CareerBuilder").on("click", (function () {
            $("header .mobile-menu .profile .back-menu-normal").addClass("active"), $("header .mobile-menu .menu").addClass("active"), $("header .mobile-menu .menu .menu-normal").addClass("active"), $("header .mobile-menu .menu .menu-logged").addClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").addClass("active")
        })), $("header .mobile-menu .profile .back-menu-normal").on("click", (function () {
            $("header .mobile-menu .profile .back-menu-normal").removeClass("active"), $("header .mobile-menu .menu").removeClass("active"), $("header .mobile-menu .menu .menu-normal").removeClass("active"), $("header .mobile-menu .menu .menu-logged").removeClass("active"), $("header .mobile-menu .header-bottom-bottom .authentication-links").removeClass("active")
        }))
    }