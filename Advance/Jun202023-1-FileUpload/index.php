<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>Image Upload</h1>
    <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload" class="form-label">Select image to upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-sm">
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary btn-sm mt-3">
        </form>
    </div>
</body>

</html>