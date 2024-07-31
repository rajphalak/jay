<?php

include "header.php";
?>





    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area bg-overlay-black-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <h3 class="breadcrumb-title text-white">Donation</h3>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">donation</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->









    <div class="site-wrapper-reveal pt-5 pb-5">

        <!-- <a href="upi://pay?pa=phalaksarang@ybl&pn=sarang%20phalak&mc=0000&mode=02&purpose=00" target="_blank">
            Pay ₹100 via UPI
          </a> -->

        <section>
            <div class="text-center pb-3">
                <h2>Jay Matrubhumi Mandal</h2>
                <h4 class="text-color-primary">Khandeshcha Raja</h4>

            </div>
            <div class="container donation">
                <h2>UPI Payment</h2>
                <div>
                    <img src="./assets/images/payment/payments.png" class="w-50" alt="donation">
                </div>
                <div id="payment-form">
                    <label for="amount" class="fw-bold">Enter Amount (INR):</label>
                    <div class="row">
                        <div class="col-12 pt-2 pb-2">
                            <input type="number" id="amount" placeholder="Enter amount" >
                        </div>
                        <div class="col-12 ">
                            <div class="header-btn w-100">
                                <button id="generate-qrcode" class="btn-circle btn-default btn fw-bold">Pay Now</button>
                            </div>
                        </div>
                    </div>
                    
                    
                    <p><span class="fw-bold">Note:</span> Once your payment is completed, kindly send the screenshot to
                        <span><a href="mailto:jaymatrubhumimandaldonation@gmail.com"
                                class="fw-bold text-color-primary">jaymatrubhumimandaldonation@gmail.com</a></span> to
                        receive your donation receipt promptly. Thank you for your support!</p>

                </div>
                <div class="qr-code" id="qr-code-section">
                    <p>Scan the QR code using any UPI app to make the payment.</p>
                    <img id="qr-code-img" src="" alt="QR Code">
                    <img src="./assets/images/payment/payments.png" class="w-75" alt="donation">
                </div>
                <div id="payment-status" style="display: none;">
                    <p id="payment-status-msg"></p>
                </div>
            </div>
        </section>





    </div>



    <?php
include 'footer.php';
?>