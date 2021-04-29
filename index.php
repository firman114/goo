<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>Febehshop</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="Frontend/home.php"><i class="fa fa-sign-out"></i> <span>Home</span></a></li>
                
                <li><a href="#"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Customers</span></a></li>
                <li><a href="#"><i class="fa fa-file"></i> <span>Proses</span></a></li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Orders</span></a></li>
                <li><a href="#"><i class="fa fa-money"></i> <span>Income</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Account</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
               
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa fa-bars"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/user.jpg" class="img-responsive" />
                <h3>Febehshop</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">0</h2>
                <p>Customers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">0</h2>
                <p>Proses</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">0</h2>
                <p>Order</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">10k</h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Pengiriman</h2>
                        
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Customers Name</th>
                        <th>Address</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Rizky</td>
                        <td>Banyuwangi</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Dwi</td>
                        <td>Maroko</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                    <tr>
                        <td>Rahni</td>
                        <td>Jember</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>Daliya</td>
                        <td>Bondowoso</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Nadifah</td>
                        <td>Situbondo</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                    <tr>
                        <td>Alvin</td>
                        <td>Banyuwangi</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>Firman</td>
                        <td>Jakarta</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Ana</td>
                        <td>Probolinggo</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                    <tr>
                        <td>Ricky</td>
                        <td>Surabaya</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>Maula</td>
                        <td>Malang</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Naila</td>
                        <td>Bali</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                    <tr>
                        <td>Akifah</td>
                        <td>Jakarta</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>Hilmi</td>
                        <td>Bondowoso</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Mubarok</td>
                        <td>Madura</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                    <tr>
                        <td>kurrota</td>
                        <td>Malang</td>
                        <td><span class="pending-span"></span> Pending</td>
                    </tr>
                    <tr>
                        <td>Indah</td>
                        <td>Lamongan</td>
                        <td><span class="rev-span"></span>Packaging</td>
                    </tr>
                    <tr>
                        <td>Laila</td>
                        <td>Lumajang</td>
                        <td><span class="progress-span"></span>Delivery</td>
                    </tr>
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>All Customers</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Contact</th>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user1.jpg"/></td>
                        <td>Rizky</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user2.jpeg"/></td>
                        <td>Dwi</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user3.jpeg"/></td>
                        <td>Rahni</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user4.jpeg"/></td>
                        <td>Daliya</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user5.jpeg"/></td>
                        <td>Nadifah</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user6.jpg"/></td>
                        <td>Alvin</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user7.jpg"/></td>
                        <td>Firman</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user8.jpeg"/></td>
                        <td>Ana</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user9.jpg"/></td>
                        <td>Ricky</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user10.jpg"/></td>
                        <td>Maula</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    <tr>
                        <td><img class="table-img" src="images/user11.jpg"/></td>
                        <td>Naila</td>
                        <td class="cnt-info-td"><a href="tel:9800121212"><i class="fa fa-phone"></i></a><a href="tel:9800121212"><i class="fa fa-envelope"></i></a><a href="tel:9800121212"><i class="fa fa-map-marker"></i></a></td>
                    </tr>
                    
                </table>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>
  
   
    




    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>
