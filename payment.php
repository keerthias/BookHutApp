<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Check Out Your Cart</span>
          </div>
        </nav>
      </div>
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
      </div>
    </div>
  </div>
     <div class="container">
       <div class="row">
       
         <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
         <table class="table">
           <h5>Existing Customers</h5>
           <p>If you already have an account,please sign in for faster check out</p>
           <tr>
             <td>Your Email Address</td>
             <td><input type="text" class="form-control"></td>
           </tr>
           <tr>
             <td>Password</td>
             <td><input type="text" class="form-control"></td>
           </tr>
           <tr>
             <td></td>
             <td><button class="btn btn-danger">Login</button></td>
           </tr>
         </table>
       </div>
       <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <table class="table">
          <h5>New Customers</h5>
          <p>Create a new account to make future purchase even faster</p>
          <tr>
            <td>Your Email Address</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td></td>
            <td><button class="btn btn-danger">Create Account</button></td>
          </tr>
        </table>
      </div>
      <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Order Summary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Item</th>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Sub Total</th>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Shipping (India)</th>
                <td>:</td>
                <td>Rs. 39</td>
              </tr>
              <tr>
                <th scope="row">Amount Payable</th>
                <td>:</td>
                <td></td>
              </tr>
              <tr>
                <th scope="row">Ship within --- days</th>
                <td>:</td>
                <td></td>
               
              </tr>
            </tbody>
        </table>
      </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
   
</body>
</html>