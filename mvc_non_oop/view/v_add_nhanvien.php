<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    add link bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--    add icon bootstrap-->
    <script src="https://kit.fontawesome.com/7d7b9d0b8f.js" crossorigin="anonymous"></script>


</head>
<body>
<!--form add nhanvien-->
<div class="container">

<form class="form-control" action="../index.php?url=add-nhanvien" method="post">
    <input class="form-control" id="name" type="text" name="name" placeholder="name">
    <input class="form-control" id="salary" type="text" name="salary" placeholder="salary">
    <button class="btn btn-primary">Add</button>
</form>
</div>
</body>
</html>
