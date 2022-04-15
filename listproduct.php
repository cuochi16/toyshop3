<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="index.php">Homep</a></li>
                                <li><a href="categories.php">Manage <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="categories.php">Categories</a></li>
                                        <li><a href="listproduct.php">Product</a></li>
                                        <li><a href="signup.php">Sign Up</a></li>
                                        <li><a href="login.php">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="login.php"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End --> 
<main style="margin-top:70px">
							<div class="container-fluid">
								<div class="row">
									
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1"></div>
							<div class="col-xxl-1">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Add product
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
											<form action="" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product name</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Product name" name="product_name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product price</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="product_price">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Product image</label>
                                                    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Image" name="product_image">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Description</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="product_des">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Category</label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Category" name="category_id">
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary" name="addproduct">Add</button>
												</div>
                                            </form>
                                            <?php
                                                include 'connect.php';
                                                if(isset($_POST['addproduct']))
                                                {
                                                    $product_name = $_POST['product_name'];
                                                    $product_price = $_POST['product_price'];
                                                    $product_image = $_POST['product_image'];
                                                    $product_image = $_FILES['product_image']['name'];
                                                    $product_image_tmp = $_FILES['product_image']['tmp_name'];
                                                    move_uploaded_file($product_image_tmp,"img/$product_image");
                                                    $product_des = $_POST['product_des'];
                                                    $category_id = $_POST['category_id'];
                                                    $sql = "INSERT INTO `product`(`product_name`, `product_price`, `product_image`, `product_des`, `category_id`) VALUES ('$product_name','$product_price','$product_image','$product_des','$category_id')";
                                                    $add = mysqli_query($connect,$sql);
                                                    if($add){
                                                            echo " Add Successfully
                                                            <script>alert('Add successfully');
                                                            window.open('listproduct.php', '_self');</script>";
                                                    }
                                                    else{
                                                            echo "Error!";
                                                    }
                                                }
                                            ?>
									</div>
									</div>
								</div>
								</div>
							</div>
								</div>
							</div>
                           
						</main>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:white;">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                                    include('connect.php');
                                    $sql = "SELECT * FROM `product`";
                                    $result = mysqli_query($connect, $sql);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        $product_id= $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_price = $row['product_price'];
                                        $product_image = $row['product_image'];
                                        $product_des = $row['product_des'];
                                ?>
                        <tr>
                            <td><?php echo "$product_id" ?></td>
                            <td><?php echo "$product_name" ?></td>
                            <td><?php echo "$product_price" ?></td>
                            <td><img src="img/<?php echo "$product_image" ?>" alt=""></td>
                            <td><?php echo "$product_des" ?></td>
                            <td>
                               <a href="?id=<?php echo "$product_id" ?> " class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                               <a type"submit" name="delete" class="btn btn-primary delete"><span class="glyphicon glyphicon-edit"> </span> Delete</a>
			 <?php
                                    include ('connect.php');
                                    if(isset($_GET['id']))
                                    {
					$id = $_GET["id"];
                                        $sql = "DELETE FROM 'product' WHERE 'product_id' = $id";
                                        $delete = mysqli_query($connect,$sql);
                                        if($delete){
					echo "delete Successfully
					<script>alert('delete successfully');
					window.open('product.php', '_self');</script>";
                                        }
                                        else{
                                                echo "Error!";
                                        }
                                    }
                					?>
					    </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./index.html">Homepage</a></li>
                        <li><a href="./categories.html">Categories</a></li>
                        <li><a href="./blog.html">Our Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>
