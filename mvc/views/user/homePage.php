
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="/upload.php">
    <label>userName</label>
    <input type="text" name="userName" placeholder="User Name">
    <br>
    <label>Upload Image</label>
    <input type="file" name="profileImage" placeholder="upload Image">
    <button> <input type="hidden" name="create">submit</button>
</form>
</body>
</html>