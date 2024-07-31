<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <title>Upload Form</title>
</head>
<body>
    <div class="container">
    <form method="post" action="Uploade_photoSection.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="inputText" class="form-label">Text Input</label>
            <input type="text" class="form-control" id="inputText" name="inputText" required>
        </div>
        <div class="mb-3">
            <label for="inputImage" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="inputImage" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>
