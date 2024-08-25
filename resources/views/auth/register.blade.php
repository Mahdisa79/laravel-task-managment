@extends('auth.master')

@section('head-tag')
<title>ثبت نام</title>
@endsection

@section('content')

				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="/">
							<img src="{{ asset("admin-assets/assets/images/brand/logo.png")}}" class="header-brand-img" alt="">
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" method="post" action="{{ route('auth.store') }}" >
                                    @csrf
                                    @method('POST')
									<span class="login100-form-title">
										ثبت نام
									</span>



									<div class="wrap-input100 validate-input" >
										<input class="input100" type="text" name="name" placeholder="نام و نام خانوادگی">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-user" aria-hidden="true"></i>
										</span>
									</div>

									<div class="wrap-input100 validate-input" >
										<input class="input100" type="text" name="username" placeholder="نام کاربری">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-user-circle-o" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input">
										<input class="input100" type="text" name="email" placeholder="ایمیل">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</span>
									</div>

									<div class="wrap-input100 validate-input" >
										<input class="input100" type="password" name="password" placeholder="رمز عبور">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>

                                    <div class="wrap-input100 validate-input" >
										<input class="input100" type="password" name="password_confirmation" placeholder="تاببد رمز عبور">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
                                           
                                    <div class="col-12 p-0">     
                                        <div class="icheck-primary d-flex">
                           
                                            <label for="agreeTerms">
                                                من با <a href="#">قوانین</a> موافقت دارم
                                            </label>    
                                            <input type="checkbox" style="height: 20px ; margin-right: 5px" id="agreeTerms" name="agree_terms">
                       
                                        </div>
                                   </div>


									<div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary ">
                                                ثبت نام
                                            </button>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">قبلا ثبت نام کرده اید؟<a href="{{route('auth.login-form')}}" class="text-primary ms-1">ورود</a></p>
									</div>
								</form>
							</div>
                            @if ($errors->any())
                            <div class="card-footer">
                                <div class="alert alert-danger" dir="rtl">
                                    <h6>لطفا خطاهای زیر را بررسی کنید</h6>
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

						</div>
					</div>
					<!-- CONTAINER CLOSED -->


@endsection

