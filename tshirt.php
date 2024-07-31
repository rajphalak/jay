<?php

include "header.php";
?>





<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-overlay-black-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <h3 class="breadcrumb-title text-white">T-shirt Booking</h3>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">T-shirt Booking</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<div class="site-wrapper-reveal pt-5 pb-5">
    <div class="container">
        <div class="activities-content text-center">
            <h4 class="activities-title">Khandeshcha Raja T-Shirt Booking Form</h4>
        </div>
        <form class="row g-3 d-flex justify-content-center" method="post" action="admin/proces_tshirt.php" enctype="multipart/form-data">
                <div class="col-md-7">
                    <label for="inputname" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="inputname" name="fullname" required>
                </div>
                <div class="col-md-7">
                    <label for="inputphone" class="form-label fw-bold">Phone No.</label>
                    <input type="number" class="form-control" id="inputphone" name="phone" required>
                </div>
                <div class="col-md-7">
                    <label for="inputaddress" class="form-label fw-bold">Address</label>
                    <input type="text" class="form-control" id="inputaddress" name="address" required>
                </div>
                <div class="col-md-7">
                    <label for="inputState" class="form-label fw-bold">T-Shirt Size</label>
                    <select id="inputState" class="form-select" name="tshirt_size" required>
                        <option selected disabled>Size</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                        <option>XXL</option>
                    </select>
                </div>
                <div class="col-md-7">
                    <label for="inputImage" class="form-label fw-bold">Payment Screenshot</label>
                    <input type="file" class="form-control" id="inputImage" name="image" required>
                </div>
                <div class="header-btn text-center">
                    <button class="btn-circle btn-default btn fw-bold" type="submit">Submit</button>
                </div>
            </form>
    </div>

</div>



<?php
include 'footer.php';
?>