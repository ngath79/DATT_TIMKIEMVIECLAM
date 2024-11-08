@extends('employer.layout')

@section('pageTitle', 'Đăng kí tài khoản nhà tuyển dụng')
@section('content')
    <section class="employer-signup-new step-1 cb-section">
        <div class="container">
            <div class="row row-sp">
                <div class="col-xl-5">
                    <div class="box-img"><img src="{{ asset('public/logo/logo.png') }}" alt=""></div>
                </div>
                <div class="col-xl-7">
                    <div class="box-info-signup">
                        <div class="title">
                            <h2>Đăng Ký Tài Khoản Nhà Tuyển Dụng</h2>
                        </div>
                        <form action="{{ route('employer.post_register') }}" name="frmRegister" id="frmRegister"
                              method="post" autocomplete="off">
                            @csrf
                            <div class="step-1" id="step-1">
                                <div class="step-title d-flex">
                                    <div class="main-step-title">
                                        <h3>Thông Tin Đăng Nhập</h3>
                                    </div>
                                </div>
                                <div class="main-form">
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Họ và tên</span></div>
                                        <div class="form-input">
                                            <input type="text" name="name" id="name" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('name')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Số điện thoại</span></div>
                                        <div class="form-input">
                                            <input type="text" name="phone" id="phone" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('phone')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Email đăng nhập</span></div>
                                        <div class="form-input">
                                            <input type="text" name="email" id="email" value="" autocomplete="off"
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('email')
                                            <span class="form-error error_email" id="error_email">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Mật khẩu</span></div>
                                        <div class="form-input">
                                            <input type="password" class="form-control" name="password" id="password"
                                                   value="" placeholder="6-12 kí tự">
                                            @error('password')
                                            <span class="form-error error__password">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Xác nhận mật khẩu</span></div>
                                        <div class="form-input">
                                            <input name="re_password" id="re_password" type="password" value=""
                                                   class="form-control" placeholder="6-12 kí tự">
                                            @error('re_password')
                                            <span class="form-error error_re_password">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step-2" id="step-2">
                                <div class="step-title d-flex">
                                    <div class="main-step-title">
                                        <h3>Thông Tin Công Ty</h3>
                                    </div>
                                </div>
                                <div class="main-form">
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Tên công ty</span></div>
                                        <div class="form-input">
                                            <input type="text" name="company_name" id="company_name" value=""
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('company_name')
                                            <span class="form-error error_company_name">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Loại hình hoạt động</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" id="company_type" name="company_type">
                                                <option value="">Vui lòng chọn</option>
                                                <option value="6">100% vốn nước ngoài</option>
                                                <option value="4">Cá nhân</option>
                                                <option value="7">Công ty đa quốc gia</option>
                                                <option value="2">Cổ phần</option>
                                                <option value="5">Liên doanh</option>
                                                <option value="1">Nhà nước</option>
                                                <option value="3">Trách nhiệm hữu hạn</option>
                                            </select>
                                            @error('phone')
                                            <span class="form-error error_company_type">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Chọn số nhân viên</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" name="company_size">
                                                <option value="">Chọn số nhân viên</option>
                                                <option value="Ít hơn 10">Ít hơn 10</option>
                                                <option value="10-20">10-20</option>
                                                <option value="25-99">25-99</option>
                                                <option value="100-499">100-499</option>
                                                <option value="500-999">500-999</option>
                                                <option value="1.000-4.999">1.000-4.999</option>
                                                <option value="5.000-9.999">5.000-9.999</option>
                                                <option value="10.000-19.999">10.000-19.999</option>
                                                <option value="20.000-49.999">20.000-49.999</option>
                                                <option value="Hơn 50.000">Hơn 50.000</option>
                                            </select>
                                            @error('company_size')
                                            <span class="form-error error_company_size">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span id="lable_location">Tỉnh / TP</span></div>
                                        <div class="form-input short form-input-select">
                                            <select class="form-control" name="location_id" id="location_id">
                                                <?php
                                                use App\Models\City;
                                                $listCitys = City::all()->where('trangthai', 1)
                                                ?>
                                                @foreach($listCitys as $list)
                                                    <option
                                                        value="{{$list->id}}">{{$list->tendaydu}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('location_id')
                                            <span class="form-error error_location_id">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Địa chỉ công ty</span></div>
                                        <div class="form-input">
                                            <input type="text" name="company_address" id="company_address" value=""
                                                   class="form-control" placeholder="Vui lòng nhập thông tin">
                                            @error('company_address')
                                            <span class="form-error error_company_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="form-info"><span>Mã số thuế</span></div>
                                        <div class="form-input">
                                            <input type="text" name="taxid" id="taxid" value="" class="form-control"
                                                   placeholder="Vui lòng nhập mã số thuế">
                                            @error('taxid')
                                            <span class="form-error error_taxid">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="btn-area list-btn">
                                        <button class="btn-action" type="submit">Đăng ký</button>
                                    </div>
                                    <div class="right-note">
                                        <p>Bằng việc nhấp vào "Đăng Ký Ngay!", bạn đã đồng ý với các điều khoản ghi
                                            trong <a href="#">Thỏa thuận
                                                dịch
                                                vụ của EveryWork.</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-intro">
                <div class="col-12">
                    <div class="right-note">
                        <p>Nếu bạn đã có tài khoản. Vui lòng <a href="{{ route('employer.login') }}">Đăng
                                nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>