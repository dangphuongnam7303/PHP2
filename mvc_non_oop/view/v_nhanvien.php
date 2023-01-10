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

<div class="container">
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Salary</th>
        <th scope="col"><a href="./view/v_add_nhanvien.php">Add</a></th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($nhanviens as $key => $value) { ?>

    <tr>
        <th scope="row"><?= $value['id']?></th>
        <td><?= $value['name']?></td>
        <td><?= $value['salary']?></td>
        <td><a href="./index.php?url=remove_nhanvien&id=<?=$value['id']?>">Remove</a></td>

    </tr>
    <?php } ?>

    </tbody>
</table>
</div>
</body>
</html>