<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookOnline</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BookHut</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="best sellers.php">Best Sellers</a>
              <a class="nav-link" href="Textbooks.php">TextBooks</a>
              <form class="d-flex">
                <input class="form-control form-control-sm" type="search" placeholder="Search by author,title,publisher,ISBN" aria-label="Search">
                <button class="btn btn-sm btn-primary" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images\index_img.jpg" class="d-block w-100" alt="..."height ="200" width="200">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images\index_img1.jpg" class="d-block w-100" alt="..." height ="200" width="200">
                  <div class="carousel-caption d-none d-md-block">
                   
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
            </div>
          </div>

        </div>
        <div class="row">
          <h5>New Arrivals</h5>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
           
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv1.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Sita Warrior of Mithila</h5>
                <p class="card-text">Ram Chandra Series Books- Amish</p>
                <p class="card-text">Rs 240 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv2.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Legend of Suheldev: The King who saved India</h5>
                <p class="card-text">An immortal Writers Centre Book-Amish</p>
                <p class="card-text">Rs 225 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv3.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Raavan-Enemy of Aryavarta</h5>
                <p class="card-text">Ram Chandra Series Books- Amish</p>
                <p class="card-text">Rs 240 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv4.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Immortals of Meluha</h5>
                <p class="card-text">Amish Tripathi </p>
                <p class="card-text">Rs 250 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv5.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Aarachar</h5>
                <p class="card-text">K B Meera </p>
                <p class="card-text">Rs 495 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
          <div class="col col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="card" style="width: 15rem;">
              <img src="images\index_arriv6.jpg" class="card-img-top" alt="..." height="100" width="30">
              <div class="card-body">
                <h5 class="card-title">Aadu Jeevitham</h5>
                <p class="card-text">Benyamin</p>
                <p class="card-text">Rs 205 </p>
                <a href="payment.php" class="btn btn-danger">Buy Now</a>
                <a href="payment.php" class="btn btn-primary">Add to Wish List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
</body>
</html>