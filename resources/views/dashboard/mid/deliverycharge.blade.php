@extends('layouts.main')

@section('content')

<aside>
    <div class=".container-fluid" style="background-color: #16100f; color: white; font-family:'inter',sans-serif;">
        <div class="available-area-delivery-charges-body">
            <div class="title p-5 text-center" style="font-size: 2rem; font-weight: bold;">
                Delivery Charges and Available Area
            </div>

            <div class="container text-center ">
                <div class="row">
                    <div class="col">
                        <div class="Delivery-charges-Heading fw-semibold mb-4"
                            style="font-size: 20px; text-decoration: underline;">
                            <span> Delivery Charges </span>
                        </div>
                        <div class="delivery Details w-100 mt-5 mb-5">
                            <span>Upto 2 km : Rs 50</span><br>
                            <span>2 to 4 km : Rs 80</span><br>
                            <span>4 to 6 km : Rs 120 </span><br>
                            <span>6 to 8 km : Rs 180</span><br>
                            <span>8 to 10 km : Rs 240</span><br>
                            <span>Above 10 km : Rs 300</span>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="Available-Area fw-semibold  " style="font-size: 20px; text-decoration: underline; ">
                            <span> Available Area</span>
                        </div>
                        <div class="available-area-map w-100 mt-4 mb-2" style="  background-color:#452a25;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8106588905334!2d84.4136139751939!3d27.692246326157722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb159ebceec1%3A0x78ca06bb7af30008!2sBihani%20Tech%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1694949958406!5m2!1sen!2snp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="img-fluid"></iframe>
                        </div>
                        <div class="sentence mb-5">
                            <span>We are available inside bharatpur Area.</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .available-area-map iframe{
        height: 300px;
        width: 100%;
    }
</style>

@endsection
