{{-- @extends('admins.layouts.main')

@section('admins-content') --}}
@include('admins.layouts.utilities')
<aside>
    <div class="layout-login d-flex justify-content-center align-items-center" style="height: 100%;">
        <div class="login-section-form container " style="border-radius: 10px; border: 1px solid white;">
            <a href="/back" class="cross-icon"><i class="icon bi bi-x-circle float-right"></i>
            </a>
            <div class="form">


                <div class=" foodweb-logo d-flex justify-content-center fw-bold fs-5">
                    <span style="background-color: #292929;padding: 3px;height: 36px; width: 55px;">Food</span>
                    <span style="background-color: #ffa31a;color: #000000; padding: 3px;"> Web </span>
                </div><br><br>

                <form action="/admin-auth" class="form" method="POST">
                    @csrf
                    <div class="email-section ">
                        <label class="email-label "> Email or Phone Number</label><br>
                        <input type="text" name="email" id="email" class="form-control  w-100 p-1"><br>
                    </div>

                    <div class="password "></div>
                    <label class="password-label ">Password</label><br>
                    <input type="password" name="password" id="password" class="form-control d-flex w-100 p-1"><br><br>
            </div>

            <div class="Login-button d-flex justify-content-center ">
                <input type="submit" value="Submit" class="login-box form-control w-25 fw-semibold "
                    style="font-size: small;">
            </div>
            </form>
            <br>
            <div class="mt-2">
                <div class="forgot-label d-flex justify-content-center" style="font-size: small;">
                    <a href=""><span class="forgot-password">Forgot Password?</span></a>
                </div>

                <div class="signup-label d-flex justify-content-center " style="font-size: small;">
                    <span>Don't have an account? </span> &nbsp;
                    <a href="/signup"><span class="signup-here" style="font-size: small;"> Sign up here</span></a>
                </div>
            </div>
        </div>

    </div>
    </div>

</aside>
<style>
    .login-section-form {
        background-color: #16100f;
        color: #eeeeee;
        padding: 40px;
        height: 500px;
        width: 400px;

    }

    .login-box:hover {
        background-color: #ffa31a;
        color: #000000;
        font-weight: bold;
        border-color: #eeeeee;
    }

    .icon:hover{
        color: #ffa31a;
    }

    .login-box {

        border-color: #ffa31a;
        border-radius: 8px;
        border-width: 2px;
        color: #eeeeee;
        background-color: #16100f;
        border-color: #eeeeee;
    }

    .signup-here {
        text-decoration: underline;
        color: #eeeeee;
    }

    .signup-here:hover {
        color: #ffa31a;
    }

    .forgot-password {
        text-decoration: underline;
        color: #eeeeee;
    }

    .forgot-password:hover {
        color: #ffa31a;
    }

</style>
{{-- @endsection --}}
