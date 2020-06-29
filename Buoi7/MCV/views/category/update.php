<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 align="center">UpDate</h3>
        <h3 align="center">Cập nhật danh mục</h3>
        <hr>
        <form action="?mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$cate['id']?>">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?=$cate['title']?>">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control" id="" placeholder="" name="description"
                    value="<?=$cate['description']?>">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>