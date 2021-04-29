<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <title>Your Cart</title>
</head>

<body>
  <nav class="nav">
    <div class="navigation container">
      <div class="logo">
        <h1>Febehshop</h1>
      </div>

      <div class="menu">
        <div class="top-nav">
          <div class="logo">
            <h1>Febehshop</h1>
          </div>
          <div class="close">
            <i class="bx bx-x"></i>
          </div>
        </div>

        <ul class="nav-list">
          <li class="nav-item">
            <a href="home.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="product.php" class="nav-link">Products</a>
          </li>
          <li class="nav-item">
            <a href="#About" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#About" class="nav-link">Contact</a>
          </li>
          <li class="nav-item">
            <a href="cart.php" class="nav-link icon"><i class="bx bx-shopping-bag"></i></a>
          </li>
        </ul>
      </div>

      <a href="cart.php" class="cart-icon">
        <i class="bx bx-shopping-bag"></i>
      </a>

      <div class="hamburger">
        <i class="bx bx-menu"></i>
      </div>
    </div>
  </nav>

  <div class="container-md cart">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td> 
          <div class="cart-info">
            <img src="./images/g11.jpg" alt="">
            <div>
              <p>Kids’s T-Shirt</p>
              <span>Price: 50k</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>50k</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/g8.jpg" alt="">
            <div>
              <p>Long dress</p>
              <span>Price:  90k</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td> 90k</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/g3.jpg" alt="">
            <div>
              <p>Blue Dress</p>
              <span>Price: 75k</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>75k</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic4.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: 50k</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>50k</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic5.jpg" alt="">
            <div>
              <p>Shoes’s T-Shirt</p>
              <span>Price: 100k</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>100k</td>
      </tr>
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>350k</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>50k</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>300k</td>
        </tr>
      </table>
      <a href="#" class="checkout btn">Proceed To Checkout</a>

    </div>

  </div>



   <div id="About">
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>ABOUT</h3>
          <a href="#">Setting</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream , Dreammy street, 7131 Dreamville,AUSTRALIA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            Febehshop@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
          <div>
            <span>
              <i class="far fa-paper-plane"></i>
            </span>
            Dream City
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

  <script src="./js/index.js"></script>
</body>

</html>