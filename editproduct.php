<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product name" value="{{$data->product_name}}" name="product_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product price</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" value="{{$data->product_price}}" name="product_price">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Image" value="{{$data->product_image}}" name="product_image">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" value="{{$data->product_des}}" name="product_des">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Category</label>
                                                    <select name="category_id" id="category_id">
                                                        <option  value="{{$data->category_id}}"></option>
                                                        @foreach($category as $key)
                                                        <option value="{{$key->category_id}}">{{$key->category_name}}</option>
                                                        @endforeach
                                                    </select>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="addproduct">Add</button>
												</div>
                                            </form>

</body>
</html>