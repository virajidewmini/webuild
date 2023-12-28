<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Multiple File Upload</h2>
    <form  method="post" enctype="multipart/form-data">
        <label for="file" multiple>Choose files to upload:</label>
        <input type="file" name="files[]" id="file" multiple required>
        <br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
