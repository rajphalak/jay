<?php

    include 'db_conect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputText = htmlspecialchars($_POST['inputText']);
    
    // Handle image upload
    $target_dir = "uploads/";
    $image_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($image_file, PATHINFO_EXTENSION));

    // Validate file type
    $allowed_image_types = array("jpg", "jpeg", "png", "gif");

    if (!in_array($imageFileType, $allowed_image_types)) {
        die("Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
    }

    // Validate file size (limit to 5MB)
    if ($_FILES["image"]["size"] > 5000000) {
        die("Sorry, your file is too large.");
    }

    // Move uploaded file
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)) {
        die("Sorry, there was an error uploading your file.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO submissions_photo (input_text, image_path) VALUES (?, ?)");
    $stmt->bind_param("ss", $inputText, $image_file);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
