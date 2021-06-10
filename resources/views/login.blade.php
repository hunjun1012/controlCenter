<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.shared.title-meta', ['title' => "Log In"])

        @include('layouts.shared.head-css')
    </head>

    <body class="authentication-bg authentication-bg-pattern" style="background-color:#282828;">

        <div class="account-pages mt-5 mb-5"><br><br><br><br><br><br><br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                            <p style="font-size:25px; color:#282828;"><b>비상벨 관제 시스템</b></p>
                                    </div>
                                </div><br><br><br><br><br>

                                <form action="{{route('login')}}" method="POST" novalidate>
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">아이디</label>
                                        <input class="form-control  @if($errors->has('id')) is-invalid @endif" name="id" type="text" 
                                        id="id" required=""
                                            value="{{ old('id')}}"
                                            placeholder="Enter your id" />

                                            @if($errors->has('id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('id') }}</strong>
                                            </span>
                                            @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">비밀번호</label>
                                        <div class="input-group input-group-merge @if($errors->has('password')) is-invalid @endif">
                                            <input class="form-control @if($errors->has('password')) is-invalid @endif" name="password" type="password" required=""
                                                id="password" placeholder="Enter your password" />
                                                <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <!-- <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">기억하기</label>
                                        </div>
                                    </div><br><br> -->
                                    @if(session('flash_message'))
                                    {{session('flash_message')}}
                                    @endif
                                    <br><br> 
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit" style="background-color:gray; border-color:gray;"> 로그인 </button>
                                    </div><br><br>

                                </form>

                                <!-- <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="{{route('second', ['auth', 'recoverpw-2'])}}" class="text-white-50 ml-1">비밀번호를 잊어버리셨습니까?</a></p>
                                <p class="text-white-50">계정이 없으십니까?<a href="{{route('register')}}" class="text-white ml-1"><b>회원가입</b></a></p>
                            </div> 
                        </div> -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- <footer class="footer footer-alt">
            <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer> -->

        @include('layouts.shared.footer-script')
        
    </body>
</html>