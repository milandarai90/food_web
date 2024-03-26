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
                    <form action="" class="d-flex justify-content-center">
                        <input type="text" name="search-bar-input" id="search-bar-input"
                            placeholder="Looking for something?" class="form-control"><a href=""><i
                                class="bi bi-search text-dark"></i></a>
                    </form>
                </div>
                <div class="login-section col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 d-flex"
                    style="justify-content: center">
                    <a href="login-form"><button class="login">Login</button></a>
                </div>
            </div>
        </div>
        <div class="bottom-nav-bar-section">
            <div class="bottom-nav-bar-wrapper">

                <ul class="bottom-nav-class" style="list-style: none;" id="bottomNav">
                    <li><a href="/home" id="home" class="{{ Request::is('home') ? 'visited-link' : '' }}">Home</a></li>
                    <li><a href="/menu" id="menu" class="{{ Request::is('menu') ? 'visited-link' : '' }}">Menu</a></li>
                    <li><a href="/restaurant" id="restaurant" class="{{ Request::is('restaurant') ? 'visited-link' : '' }}">Restaurant</a></li>
                    <li><a href="/cart" id="cart" class="{{ Request::is('cart') ? 'visited-link' : '' }}">Cart</a></li>
                    <li><a href="/about" id="about" class="{{ Request::is('about') ? 'visited-link' : '' }}">About</a></li>
                    <li style="border:none;"><a href="/contact" id="contact" class="{{ Request::is('contact') ? 'visited-link' : '' }}">Contact</a>
                    </li>
                    <li class="icon-li"><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                            <span>&#9776;</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
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

        .search-bar {}

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
    </script>

</aside>
