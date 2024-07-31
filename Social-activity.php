<?php

include "header.php";
include 'db_conect.php';

$sql = "SELECT * FROM submissions_blog";
$result = mysqli_query($conn, $sql);

?>

<!-- breadcrumb-area start -->
<div class="breadcrumb-area--bg-two bg-overlay-black-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 position-relative">
                <h3 class="breadcrumb-title text-white">Social Activity</h3>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Social Activity</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<div class="site-wrapper-reveal">
    <!-- ======== blog Area Start ========== -->

    <div class="events-area section-space--pb_120 section-space--pt_90">
        <div class="container">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Sanitize the media path
                        $mediaPath = htmlspecialchars($row['video_path']);
                        $fullMediaPath = "admin/" . $mediaPath;

                        // Determine if the file is an image or a video based on its extension
                        $mediaExtension = pathinfo($fullMediaPath, PATHINFO_EXTENSION);
                        $isImage = in_array(strtolower($mediaExtension), ['jpg', 'jpeg', 'png', 'gif','webp']);
                        $isVideo = in_array(strtolower($mediaExtension), ['mp4', 'webm', 'ogg']);
                ?>
                        <div class="col-lg-6 col-md-6">
                            <!-- Single Events Wrap Start -->
                            <div class="single-event-wrap mt-40">
                                <a href="#" class="event-media">
                                    <?php
                                    if (file_exists($fullMediaPath)) {
                                        if ($isImage) {
                                            echo "<img src='" . htmlspecialchars($fullMediaPath) . "' class='img-fluid w-50' alt='Event Image'>";
                                        } elseif ($isVideo) {
                                            echo "<video width='320' height='240' controls><source src='" . htmlspecialchars($fullMediaPath) . "' type='video/mp4'>Your browser does not support the video tag.</video>";
                                        } else {
                                            echo "Unsupported media format: " . htmlspecialchars($mediaPath); // Debugging message
                                        }
                                    } else {
                                        echo "Media not found: " . htmlspecialchars($fullMediaPath); // Debugging message
                                    }
                                    ?>
                                </a>
                                <div class="event-content">
                                    <div class="content-title">
                                        <h4 class="mb-15"><a href="#"><?php echo $row['headline']; ?></a></h4>
                                        <div class="event-date"><span><?php echo $row['submission_date']; ?></span></div>
                                        <p class="text-justify"><?php echo $row['paragraph']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!--// Single Events Wrap End -->
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- ======== Events Area End ========== -->
</div>

<?php
include 'footer.php';
?>