<aside>
    <div class="layout-top-nav-bar">
        <div class="top-nav-bar-section">
            <div class="top-nav-bar-wrapper">
                <div class="logo col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex justify-content-center">
                    <a href="/home">
                        <div class="logo-food">
                            FOOD
                        </div>
                        <div class="logo-web">
                            WEB
                        </div>
                    </a>
                </div>
                <div class="search-bar col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                    <form action="/menu-search" class="d-flex justify-content-center">
                        <input type="text" name="search_bar" id="search_bar" placeholder="Looking for something?"
                            class="form-control"><a href="" type="submit"><i class="bi bi-search text-dark"></i></a>
                    </form>
                </div>
                @if($user)
                <div class="profile-icon col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex justify-content-center">
                    <i class="bi bi-person" onclick="showDetails()"></i>
                </div>
                <div class="profile-details" id="profileDetails">
                    <div class="detail-info d-flex justify-content-center p-2">
                        <span><strong>{{ $user->name }}</strong></span>
                    </div>
                    {{-- <div class="logout d-flex justify-content-center p-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-power"></i><span>LogOut</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div> --}}
                    {{-- @if($user->role == 'Member') --}}
                    <div class="history-log d-flex justify-content-center p-2">
                        <a href="/user-history"><i class="bi bi-clock-history"></i>History</a>
                    </div>
                    {{-- @endif --}}
                    <div class="logout d-flex justify-content-center p-2">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bi bi-power"></i><span>LogOut</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div> --}}
                @else
                <div class="login-section col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex"
                    style="justify-content: center">
                    {{-- <a href="/login"><button class="login">Login</button></a> --}}
                    <button class="login" onclick="showLogin()">Login</button>
                </div>
                @endif
            </div>
        </div>
        <div class="bottom-nav-bar-section">
            <div class="bottom-nav-bar-wrapper">

                <ul class="bottom-nav-class" style="list-style: none;" id="bottomNav">
                    <li><a href="/home" id="home" class="{{ Request::is('home') ? 'visited-link' : '' }}">Home</a></li>
                    <li><a href="/menu" id="menu" class="{{ Request::is('menu') ? 'visited-link' : '' }}">Menu</a></li>
                    <li><a href="/restaurants" id="restaurant"
                            class="{{ Request::is('restaurant') ? 'visited-link' : '' }}">Restaurant</a></li>
                    <li><a href="/cart" id="cart" class="{{ Request::is('cart') ? 'visited-link' : '' }}">Cart</a></li>
                    <li><a href="/about" id="about" class="{{ Request::is('about') ? 'visited-link' : '' }}">About</a>
                    </li>
                    <li style="border:none;"><a href="/contact" id="contact"
                            class="{{ Request::is('contact') ? 'visited-link' : '' }}">Contact</a>
                    </li>
                    <li class="icon-li"><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <span>&#9776;</span>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="layout-login-form" id="layout-login-form">
            <div class="layout-login d-flex justify-content-center align-items-center" style="height: 100%;">
                <div class="login-section-form container " style="border-radius: 10px; border: 1px solid white;">
                    <a href="/back" class="cross-icon"><i
                            class="icon bi bi-x-circle d-flex justify-content-end text-decoration-none"></i></a>
                    <div class="form">
                        <div class=" foodweb-logo d-flex justify-content-center fw-bold fs-5">
                            <span style="background-color: #292929;padding: 3px;height: 36px; width: 55px;">Food</span>
                            <span style="background-color: #ffa31a;color: #000000; padding: 3px;"> Web </span>
                        </div><br><br>

                        <form action="/user-auth" class="form" method="POST">
                            @csrf
                            <div class="email-section ">
                                <label class="email-label "> Email or Phone Number</label><br>
                                <input type="text" name="email" id="email" class="form-control  w-100 p-1"><br>
                            </div>

                            <div class="password ">
                                <label class="password-label ">Password</label><br>
                                <input type="password" name="password" id="password"
                                    class="form-control d-flex w-100 p-1"><br><br>
                            </div>

                            <div class="Login-button d-flex justify-content-center ">
                                <input type="submit" value="Submit" class="login-box form-control w-25 fw-semibold ">
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="mt-2">
                        {{-- <div class="forgot-label d-flex justify-content-center" style="font-size: small;">
                            <a href=""><span class="forgot-password">Forgot Password?</span></a>
                        </div> --}}

                        <div class="signup-label d-flex justify-content-center " style="font-size: small;">
                            <span>Don't have an account? </span> &nbsp;
                            {{-- <a href="/signup"><span class="signup-here" style="font-size: small;"> Sign up
                                    here</span></a> --}}
                            <span class="signup-here" style="font-size: small; cursor:pointer;"
                                onclick="showSignup()"><strong> Sign up here</strong></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="layout-signup-form" id="layout-signup-form">
            <div class="main-container d-flex justify-content-center">
                <div class="container-signup container "
                    style="border-radius: 10px; font-family:'inter',sans-serif;background-color: #16100f; color: #eeeeee; border: 1px solid white;">
                    <a href="/back"><i class="icon bi bi-x-circle d-flex justify-content-end text-decoration-none"
                            ;></i></a>
                    <div class="form">
                        <div class=" foodweb-logo d-flex justify-content-center fw-bold fs-5">
                            <span style="background-color: #292929;padding: 3px;height: 36px; width: 55px;">Food</span>
                            <span style="background-color: #ffa31a;color: #000000; padding: 3px;"> Web </span>
                        </div><br><br>
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="form-body mb-3" style="font-size: small; font-family:'inter',sans-serif;">
                                <div class=" fullname-class mb-3">
                                    <label class="fullname-label">Full Name</label>
                                    <input type="text" class="form-control p-1" id="fullname" name="fullname">
                                </div>

                                {{-- <div class=" address mb-3">
                                    <label class="address-label">Address</label>
                                    <input type="text" class="form-control p-1" id="address" name="address">
                                </div>

                                <div class=" contactnumber-class mb-3">
                                    <label class="contact-number-label">Contact Number</label>
                                    <input type="text" class="form-control p-1" id="contactnumber" name="contactnumber">
                                </div> --}}

                                <div class="email-class mb-3">
                                    <label class="email-label">Email</label>
                                    <input type="text" class="form-control p-1" id="email" name="email">
                                </div>

                                <div class="password-class mb-3">
                                    <label class="password-label">Password</label>
                                    <input type="text" class="form-control p-1" id="password" name="password">
                                </div>

                                <div class=" confirmpassword-class mb-3">
                                    <label class="confirmpassword-label">Confirm Password</label>
                                    <input type="text" class="form-control p-1" id="confirmpassword"
                                        name="confirmpassword"><br>
                                </div>

                                <div class="submit-class mb-3 d-flex justify-content-center">
                                    <input type="submit" value="Sign up" class="signup-box btn fw-bold ">
                                </div>
                            </div>
                            {{-- <input type="text" name="name" id="">
                            <input type="submit" value="Submit"> --}}
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .layout-login-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .layout-signup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

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

        .icon:hover {
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

        .container-signup {
            padding: 3rem;
            height: 680px;
            width: 450px;
            /* padding: 40px; */
        }

        .signup-box {
            border-color: #ffa31a;
            border-radius: 8px;
            border-width: 2px;
            color: #eeeeee;
            background-color: #16100f;
        }

        .signup-box:hover {
            color: #16100f;
            background-color: #ffa31a;
            border-color: #eeeeee;

        }
    </style>
    <style>
        .top-nav-bar-section {
            background-color: #20190d;
        }

        .top-nav-bar-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0.5rem;
            background-color: #20190d;
        }

        .logo a {
            display: flex;
            align-items: center;
        }

        .logo-food {
            color: #fff;
            background-color: #292929;
            padding: 0.5rem 0.3rem;
        }

        .row {
            margin-left: unset !important;
            margin-right: unset !important;
        }

        .logo-web {
            color: #000;
            background-color: #ffa31a;
            padding: 0.5rem 0.3rem;

        }

        .login-section {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .login {
            background-color: transparent;
            padding: 0.5rem 1rem;
            font-weight: 900;
            border-radius: 8px;
            border: 2px solid #ffa31a;
            color: #ccc;
        }

        .login:hover {
            background-color: #ffa31a;
            color: #000;
        }

        .search-bar form input {
            border: none;
            border-radius: 8px;
            width: 90%;
            padding: 0.2rem 1rem;
            background-color: #ccc;
            height: 2.5rem;
        }

        .search-bar form i {
            position: relative;
            left: -1.8rem;
            top: 0.6rem;
        }

        .bottom-nav-bar-section {
            width: 100%;
            background-color: #000;
        }

        .bottom-nav-bar-wrapper {
            /* justify-content: center; */
            padding: 0.2rem 0.2rem;
            position: sticky;
            top: 0;
        }

        .bottom-nav-class {
            display: flex;
            justify-content: space-between;
            /* max-width: 1400px; */
            margin: auto;
        }

        ul {
            margin-bottom: unset !important;
            padding-left: unset !important;
        }

        .bottom-nav-class li {
            color: #ccc;
            margin: auto;
            width: 16.67%;
            text-align: center;
            padding: 5px 0%;
            border-right: 2px solid rgb(255, 255, 255, 0.4);
        }

        .profile-details {
            display: none;
            position: absolute;
            top: 4rem;
            right: 2rem;
            background-color: #1e1817;
            width: 12rem;
            height: auto;
            z-index: 10;
        }

        .profile-icon {
            font-size: 2rem;
            align-items: center;
            /* padding: 0 2rem; */
        }

        .bottom-nav-class li:last-child {
            border-right: unset !important
        }

        .bottom-nav-class a:hover {
            color: #ffa31a;
        }

        .bottom-nav-class a.icon span {
            padding: 0 5px;
        }

        .bottom-nav-class a.icon span:hover {
            background-color: #ffa31a;
            color: #000;
            font-weight: bold;
        }

        .bottom-nav-class .icon-li {
            display: none;
        }



        @media screen and (max-width:650px) {
            .search-bar input::placeholder {
                font-size: 0.9rem;
            }

            .bottom-nav-class:not(.responsive) li {
                display: none;
            }

            /* .bottom-nav-class:not(.responsive) li:not(:first-child) {
                    display: none;
                } */

            .bottom-nav-class li {
                border: none;
            }

            .bottom-nav-class .icon-li {
                float: right;
                display: block !important;
                text-align: right;
                position: absolute;
                top: -3.3rem;
                right: 0.2rem;
            }


            .bottom-nav-class li {
                float: none;
                display: block;
                text-align: left;
                margin-left: 2rem;
            }

            .bottom-nav-bar-section {
                background-color: transparent;
            }

        }

        @media screen and (max-width:650px) {
            .bottom-nav-class.responsive {
                position: relative;
            }

            .bottom-nav-class {
                display: inline !important;
            }

            .bottom-nav-class.responsive .icon-li {
                position: absolute;
                right: 0;
                top: -3.5rem;
                text-align: right;
            }

            .bottom-nav-class.responsive li {
                float: none;
                display: block;
                text-align: left;
                margin-left: 2rem;
            }
        }

        @media screen and (max-width:500px) {

            .search-bar input::placeholder,
            .search-bar a {
                font-size: 0.8rem;
            }

            .bottom-nav-class.responsive .icon-li {
                position: absolute;
                right: 0;
                top: -3.2rem;
            }

            .bottom-nav-class:not(.responsive) .icon-li {

                position: absolute;
                top: -3rem;
                right: 0.2rem;
            }

            .bottom-nav-class a.icon span {
                padding: 0 2px;
            }

            .search-bar {
                padding: none !important;
                height:
            }

            .logo a {
                font-size: 0.8rem;
            }

            .logo-food {
                padding: 0.3rem 0.2rem;
                /* padding: 0.5rem 0.3rem; */

            }

            .logo-web {
                padding: 0.3rem 0.2rem;
                /* padding: 0.5rem 0.3rem; */

            }

            .login {
                font-size: 0.8rem;
                padding: 0.3rem 0.5rem;
            }

            .search-bar form input {
                height: 2rem;
                width: 90%;
            }

            .search-bar i {
                display: none;
            }

            .bottom-nav-class .icon-li {
                float: right;
                display: block !important;
                text-align: right;
                position: absolute;
                top: 10.3%;
                right: 0.8%;
            }
        }

        @media screen and (max-width:420px) {

            .search-bar input::placeholder,
            .search-bar a {
                font-size: 0.7rem;
            }
        }
    </style>
    <script>
        function myFunction() {
                var x = document.getElementById("bottomNav");
                if (x.className === "bottom-nav-class") {
                    x.className += " responsive";
                } else {
                    x.className = "bottom-nav-class";
                }
            }

        function showDetails()
        {
            var profileDetails = document.getElementById("profileDetails");

            if (profileDetails.style.display === "block" || profileDetails.style.display === "") {
                profileDetails.style.display = "none";
            } else {
                profileDetails.style.display = "block";
            }
        }
        function showLogin(){
            var showLogin = document.getElementById('layout-login-form');
            if(showLogin.style.display === "block" || showLogin.style.display === "flex" || showLogin.style.display === "") {
                showLogin.style.display = "none";
            }else{
                showLogin.style.display = "block";
            }
        }
        function showSignup(){
            var showSignup = document.getElementById('layout-signup-form');
            if(showSignup.style.display === "block" || showSignup.style.display === "flex" || showSignup.style.display === "") {
                showSignup.style.display = "none";
            }else{
                showSignup.style.display = "block";
            }
        }
    </script>

</aside>
