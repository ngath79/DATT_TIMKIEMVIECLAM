<section class="employer-navbar-2-1">
    <div class="container">
        <div class="category-nav">
            <p>Danh Mục</p>
            <em class="mdi mdi-chevron-down"></em></div>
        <div class="main-wrap">
            <div class="left-wrap">
                <ul class="list-menu">
                    <li class="{{ Route::is('employer.viewDashboard') ? 'active' : ''}} ">
                        <style>
                            a:hover svg {
                                stroke: #2f4ba0;
                            }
                        </style>
                        <a class="d-flex align-items-start" href="{{ route('employer.viewDashboard') }}"
                           title="Dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light v-icon--size-default nav-item-icon iconify iconify--tabler"
                                 width="22" height="22" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path d="M12 3v9h9"></path>
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0-18 0"></path>
                                </g>
                            </svg>
                            <p> &nbsp; Dashboard</p></a>
                    <li class="{{ Route::is('employer.view_hrcentral') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_hrcentral') }}"
                           title="Quản Lý Đăng Tuyển">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-device-airpods-case" width="22" height="22"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M21 10h-18"></path>
                                    <path
                                        d="M3 4m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z"></path>
                                    <path d="M7 10v1.5a1.5 1.5 0 0 0 1.5 1.5h7a1.5 1.5 0 0 0 1.5 -1.5v-1.5"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Quản Lý Đăng Tuyển</p></a>
                    </li>
                    <li class="{{ Route::is('employer.manageresume') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.manageresume') }}"
                           title="Quản Lý  Ứng Viên">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 aria-hidden="true" role="img" tag="i"
                                 class="v-icon notranslate v-theme--light v-icon--size-default nav-item-icon iconify iconify--tabler"
                                 width="22" height="22" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="1.5"
                                      d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0-8 0M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2m1-17.87a4 4 0 0 1 0 7.75M21 21v-2a4 4 0 0 0-3-3.85"></path>
                            </svg>
                            <p>&nbsp; Quản Lý Ứng Viên</p></a>
                    </li>
                    <li class="{{ Route::is('employer.view_company_info') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_company_info') }}"
                           title="Thông Tin Công Ty">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news" width="22"
                                 height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                                    <path d="M8 8l4 0"></path>
                                    <path d="M8 12l4 0"></path>
                                    <path d="M8 16l4 0"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Thông Tin Công Ty</p></a>
                    </li>
                    <li class="{{ Route::is('employer.view_account') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.view_account') }}"
                           title="Thông Tin Tài Khoản">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-cog"
                                 width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M12.003 21c-.732 .001 -1.465 -.438 -1.678 -1.317a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c.886 .215 1.325 .957 1.318 1.694"></path>
                                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                    <path d="M19.001 15.5v1.5"></path>
                                    <path d="M19.001 21v1.5"></path>
                                    <path d="M22.032 17.25l-1.299 .75"></path>
                                    <path d="M17.27 20l-1.3 .75"></path>
                                    <path d="M15.97 17.25l1.3 .75"></path>
                                    <path d="M20.733 20l1.3 .75"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Thông Tin Tài Khoản</p></a>
                    </li>
                    <li class="{{ Route::is('employer.viewEmailConfig') ? 'active' : ''}} ">
                        <a class="d-flex align-items-start" href="{{ route('employer.viewEmailConfig') }}"
                           title="Cấu Hình Email">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-pencil"
                                 width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#5c5b68"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                   stroke-width="1.5">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                    <path
                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                    <path d="M10 18l5 -5a1.414 1.414 0 0 0 -2 -2l-5 5v2h2z"></path>
                                </g>
                            </svg>
                            <p>&nbsp; Cấu Hình Email </p></a></li>
                </ul>
            </div>

        </div>
    </div>
</section>