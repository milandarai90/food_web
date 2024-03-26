@extends('layouts.main')

@section('content')
<aside>


    <div class="container " style="border-radius: 10px;">


        <i class="icon bi bi-x-circle d-flex justify-content-end text-decoration-none;" style="color: #ffa31a; "></i>


        <div class="form">


            <div class=" foodweb-logo d-flex justify-content-center fw-bold fs-5">
                <span style="background-color: #292929;padding: 3px;height: 36px; width: 55px;">Food</span>
                <span style="background-color: #ffa31a;color: #000000; padding: 3px;"> Web </span>
            </div><br><br>

            <div class="email-section ">
                <label class="email-label " style="font-size: small;"> Email or Phone Number</label><br>
                <input type="text" name="email" id="email" class="form-control d-flex justify-content-center w-100 p-1"
                    style="font-size: x-small; align-items: center;"><br>
            </div>

            <div class="password "></div>
            <label class="password-label " style="font-size: small;">Password</label><br>
            <input type="password" name="password" id="password" class="form-control d-flex w-100 p-1"
                style="font-size: x-small;"><br><br>
        </div>

        <div class="Login-button d-flex justify-content-center ">
            <input type="submit" name="Login" value="Login" class="login-box form-control w-25 fw-semibold "
                style="font-size: small;">
        </div>
        <br>
        <div class="mt-2">
            <div class="forgot-label d-flex justify-content-center" style="font-size: small;">
                <a href=""><span class="forgot-password">Forgot Password?</span></a>
            </div>

            <div class="signup-label d-flex justify-content-center " style="font-size: small;">
                <span>Don't have an account? </span> &nbsp;
                <a href=""><span class="signup-here" style="font-size: small;"> Sign up here</span></a>
            </div>
        </div>
    </div>

    </div>

</aside>
<style>
    .container{
        background-color: #16100f;
        color: #cccccc;
        padding: 40px;
        height: 500px;
        width: 400px;


}

    .login-box:hover{
        background-color: #ffa31a;
        color: #000000;
        font-weight: bold;
        border-color: #eeeeee;


    }

    .login-box{

        border-color: #ffa31a;
        border-radius: 8px;
        border-width: 2px;
        color: #eeeeee;
        background-color: #16100f;
         border-color: #eeeeee;
    }
    .signup-here{
        text-decoration: underline;
        color: #eeeeee;
    }

    .signup-here:hover{
        color: #ffa31a;
    }

    .forgot-password{
        text-decoration: underline;
        color: #eeeeee;
    }

    .forgot-password:hover{
        color: #ffa31a;
  }

</style>
@endsection
