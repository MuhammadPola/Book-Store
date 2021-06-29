<!doctype html>
<html lang="en">

<head>
    <title>Aswad book store</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online book store">
    <meta name="author" content="Muhammad P Jwammer">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
        integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
    </script>
    <style>
    .product {
        width: 400px;
        height: 200px;
        background-color: black;
        text-align: center;
        color: white;
    }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <?php require 'header.php'; ?>
    <!-- navbar end -->

    <!-- cover section -->
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-6 my-auto text-center">
                <h2> ASWAD <small class="text-warning">Book Store <i class="fa fa-book" aria-hidden="true"></i></small>
                </h2>
                <p class="lead">Find your favarote book in our store</p>
                <hr class="my-2 w-50">
                <p class="lead">
                    <a class="btn btn-info" href="about.php" role="button"> More info <i class="fa fa-info-circle"
                            aria-hidden="true"></i></a>
                </p>
            </div>
            <!-- cover image -->
            <div class="col-md-6 ">
                <img src="image/cover.svg" alt="shop store image" class="w-75 ml-5">
            </div>
        </div>
    </div>
    <!-- end of cover section -->

    <!-- row of sevises -->
    <div class="row w-100 m-0">
        <!-- Devices -->
        <div class="col-md-4 my-2 mx-auto">
            <div class="card w-75 mx-auto border-0">
                <i class="fa fa-mobile  w-25 h-50 card-img-top mx-auto text-secondary" aria-hidden="true"></i>
                <div class="card-body">
                    <h4 class="card-title text-center">Work in all devices</h4>
                    <p class="card-text text-center">Mobil phone, tablet and Larg desktop</p>
                </div>
            </div>
        </div>
        <!-- low price -->
        <div class="col-md-4 my-2 mx-auto">
            <div class="card w-75  border-0 mx-auto">
                <i class="fas fa-money-bill w-25 h-50 card-img-top mx-auto text-success    "></i>
                <div class="card-body">
                    <h4 class="card-title text-center">Low Price</h4>
                    <p class="card-text text-center">Buy more books and spent less money</p>
                </div>
            </div>
        </div>
        <!-- pdf file -->
        <div class="col-md-4 my-2 mx-auto">
            <div class="card w-75  border-0 mx-auto">
                <i class="fas fa-file-pdf  w-25 h-50 card-img-top mx-auto text-danger"></i>
                <div class="card-body">
                    <h4 class="card-title text-center">PDF FILE</h4>
                    <p class="card-text text-center">PDF file can be download and print</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of sevises row -->

    <!--  stores row-->
    <!-- row of stores-->
    <div class="row w-100 m-0 bg-dark">
        <div class="col-12 my-5 text-center">
            <h2 class="text-light ">Our store in Play store and Amazone</h2>
            <div class="d.flex mt-5">
                <a href="#"><img src="image/play-store.svg" alt="Google-play-icon"></a>
                <a href="#"><img src="image/amazone.svg" alt="amazone-icon"></a>
            </div>
        </div>
    </div>
    <!-- end of stores row-->

    <!-- all products -->
    <div>
        <!-- row of technology book products -->
        <!-- seperator line -->
        <div class="containter-fluid mt-5 text-center text-light " id="technology">
            <table class="w-100">
                <tr>
                    <th style="width: 2%;">
                        <hr class="border border-info">
                    </th>
                    <th class="bg-info rounded"> Technology </th>
                    <th style="width: 85%;">
                        <hr class="border border-info">
                    </th>
                </tr>
            </table>
        </div>
        <!-- row of products -->
        <div class="row w-100 my-3 mx-auto">
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- View more -->
        <!-- 
         <div class="container-fluid text-center my-5 ">
            <button type="button" class="btn btn-dark ">View More</button>
         </div> 
        -->




        <!-- row of roman book products -->
        <!-- seperator line -->
        <div class="containter-fluid mt-5 text-center text-light " id="roman">
            <table class="w-100">
                <tr>
                    <th style="width: 2%;">
                        <hr class="border border-warning">
                    </th>
                    <th class="bg-warning rounded"> Roman </th>
                    <th style="width: 85%;">
                        <hr class="border border-warning">
                    </th>
                </tr>
            </table>
        </div>
        <!-- row of products -->
        <div class="row w-100 my-3 mx-auto">
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- View more -->
        <!-- 
         <div class="container-fluid text-center my-5 ">
            <button type="button" class="btn btn-dark ">View More</button>
         </div> 
        -->



        <!-- row of Physics book products -->
        <!-- seperator line -->
        <div class="containter-fluid mt-5 text-center text-light " id="physics">
            <table class="w-100">
                <tr>
                    <th style="width: 2%;">
                        <hr class="border border-danger">
                    </th>
                    <th class="bg-danger rounded"> Physics </th>
                    <th style="width: 85%;">
                        <hr class="border border-danger">
                    </th>
                </tr>
            </table>
        </div>
        <!-- row of products -->
        <div class="row w-100 my-3 mx-auto">
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- View more -->
        <!-- 
         <div class="container-fluid text-center my-5 ">
            <button type="button" class="btn btn-dark ">View More</button>
         </div> 
        -->



        <!-- row of chemistry  book products -->
        <!-- seperator line -->
        <div class="containter-fluid mt-5 text-center text-light " id="chemistry">
            <table class="w-100">
                <tr>
                    <th style="width: 2%;">
                        <hr class="border border-success">
                    </th>
                    <th class="bg-success rounded"> chemistry </th>
                    <th style="width: 85%;">
                        <hr class="border border-success">
                    </th>
                </tr>
            </table>
        </div>
        <!-- row of products -->
        <div class="row w-100 my-3 mx-auto">
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 my-2">
                <div class="card shadow">
                    <div class="product card-img-top w-100"> 300px * 200px</div>
                    <div class="card-body">
                        <h2 class="card-title">Product Name</h2>
                        <p class="card-text"><strong> Product Detail </strong> <small>Product author</small></p>
                        <a href="#" class="btn btn-info card-link mr-5">More Info</a>
                        <span><strong>Price: 15$</strong> </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- View more -->
        <!-- 
         <div class="container-fluid text-center my-5 ">
            <button type="button" class="btn btn-dark ">View More</button>
         </div> 
        -->
    </div>
    <!--end of all products -->

    <!-- footer -->
    <?php require 'footer.php' ?>
    <!-- footer end -->


</body>

</html>