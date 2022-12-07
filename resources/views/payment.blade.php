<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="payment.css">

    <title>payments</title>
  </head>
  <body>
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">Travelza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="fixed" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="places.php">Places</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Acounts
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gallery.php">Gallery</a></li>
            <li><a class="dropdown-item" href="log.php">Loging</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact.php">Contact us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav> 

<header>
  <div class="container">
    <div class="left">
      <h3>BILLING ADDRESS</h3>
      <form>
        Full name
        <input type="text" name="" placeholder="Enter name">
        Email
        <input type="text" name="" placeholder="Enter email">

        Address
        <input type="text" name="" placeholder="Enter address">
        
        City
        <input type="text" name="" placeholder="Enter City">
        <div id="zip">
          <label>
            State
            <select>
              <option>Choose State..</option>
              <option>Rajasthan</option>
              <option>Hariyana</option>
              <option>Uttar Pradesh</option>
              <option>Madhya Pradesh</option>
            </select>
          </label>
            <label>
            Zip code
            <input type="number" name="" placeholder="Zip code">
          </label>
        </div>
      </form>
    </div>
    <div class="right">
      <h3>PAYMENT</h3>
      <form>
        Accepted Card <br>
        <img src="image/card1.png" width="100">
        <img src="image/card2.png" width="50">
        <br><br>

        Credit card number
      <input type="text" name="" placeholder="Enter card number">
        
        Exp month
        <input type="text" name="" placeholder="Enter Month">
        <div id="zip">
          <label>
            Exp year
            <select>
              <option>Choose Year..</option>
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
            </select>
          </label>
            <label>
            CVV
            <input type="number" name="" placeholder="CVV" id="cvv">
          </label>
        </div>
      </form>
      <input type="submit" name="" value="Proceed to Checkout">
    </div>
  </div>
</header>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>