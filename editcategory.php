<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form role ="form" action="" method="post">
                    @csrf
                    <fieldset class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="category_name" placeholder="Nhập tên category" value="{{$data->category_name}}">
                        <label>Description</label>
                        <input class="form-control" name="description" placeholder="Nhập tên category" value="{{$data->description}}">
                    </fieldset>
                    <button type="submit" class="btn btn-success">Submit Button</button>
                    <button type="reset" class="btn btn-primary">Reset Button</button>
                </form>

</body>
</html>