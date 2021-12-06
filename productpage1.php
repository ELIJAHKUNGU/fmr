<?php
 if (isset($_GET["id"])){
   $id = $_GET["id"];
   require 'db.php';
   $sql ="SELECT * FROM fmr where fmr_id= $id";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);
   extract($row);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FMR - Find Rentals Easily</title>
    <link rel="stylesheet" href="fontawesome-free-5.0.1/css/fontawesome-all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Allerta&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="slick/slick.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!------------top navbar starts-------------->
    <section>
        <div class="top-navbar">
            <div class="container main-nav d-flex justify-content-between">
                <div class="logo pt-3 pb-3">
                    <a href="index.html">
                        <img src="" class="img-logo" alt="FMR" />
                    </a>
                </div>
                <div class="mid-nav d-flex pt-3 pb-3">
                    <ul>
                        <li><a href="/">Rent</a></li>
                        <li><a href="/">Manage Rentals</a></li>
                        <li><a href="/">Agencies</a></li>
                        <li><a href="/">Tenants</a></li>
                        <li><a href="/">Listings</a></li>
                    </ul>
                </div>
                <div class="right-nav pt-3 pb-3">
                    <ul>
                        <li class="login-btn">
                            <a href="login.html">Login</a>
                        </li>
                        <li class="register-btn">
                            <a href="register.html">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!------------top navbar ends---------------------------->
    <!------------------top slider begins----------------->
    <section>
        <div class="top-slider">
            <div class="container">
                <div class="show-all-img">
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                    <div class="img-1">
                        <img src="images/renta-9.jpeg" alt="" />
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!------------------top slider ends----------------->
    <!----------product details---------->
    <section>
        <div class="show-more-rental-details">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg--6 col-xl-6">
                        <div class="rop-details-min">
                            <div class="house-type">
                                <p><?php echo $row['fmr_type']?></p>
                            </div>
                            <div class="locations">
                                <p class="ml-2"><?php echo $row['fmr_location']?></p>
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="inside-house">
                                <div class="inside-house-1">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ruler-combined" class="fit-icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
											<path
												fill="currentColor"
												d="M160 288h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56v-64h-56c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h56V96h-56c-4.42 0-8-3.58-8-8V72c0-4.42 3.58-8 8-8h56V32c0-17.67-14.33-32-32-32H32C14.33 0 0 14.33 0 32v448c0 2.77.91 5.24 1.57 7.8L160 329.38V288zm320 64h-32v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-64v56c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-56h-41.37L24.2 510.43c2.56.66 5.04 1.57 7.8 1.57h448c17.67 0 32-14.33 32-32v-96c0-17.67-14.33-32-32-32z"
											></path>
										</svg>
                                    <span class="ml-2"><?php echo $row['fmr_size']?>sqft</span>
                                </div>
                                <div class="inside-house-1">
                                    <i class="fas fa-bed"></i>
                                    <span class="ml-2"><?php echo $row['fmr_beds']?> Beds</span>
                                </div>
                                <div class="inside-house-1">
                                    <i  class="fas fa-bath"></i>
                                    <span class="ml-2"><?php echo $row['fmr_baths']?> Baths</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg--6 col-xl-6">
                        <div class="book-rental">
                            <button class="btn-success" id="c-available">
									 Available
								</button>
                            <button id="c-book">Book</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                        <div class="moredetails-house">
                            <div class="moredetails-house-view">
                                <span>Details</span>
                                <span>Features</span>
                                <span>Location</span>
                                <span>Media</span>
                                <span>Tour</span>
                                <span>Hospital</span>
                                <span>Supermarkets</span>
                            </div>
                            <div class="moredetails-content">
                                <div class="moredetails-content-title">
                                    <h6>Overview</h6>
                                </div>
                                <div class="moredetails-content-body">
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea commodi enim voluptates recusandae veritatis voluptatum quod, modi voluptatibus dicta aperiam totam. Minima et voluptatum itaque impedit modi, vero deleniti cupiditate. Lorem ipsum dolor sit,
                                        amet consectetur adipisicing elit. Ea commodi enim voluptates recusandae veritatis voluptatum quod, modi voluptatibus dicta aperiam totam. Minima et voluptatum itaque impedit modi, vero deleniti cupiditate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="moredetails-send-message">
                            <div class="form-send-mess">
                                <p>Send Message</p>
                                <form action="">
                                <div class="form-group-send-message">
                                        <p>Phone Number</p>
                                        
                                        <input type="text" placeholder="eg:07220000000" />
                                    </div>
                                    <div class="form-group-send-message ">
                                        <label for="">Email Address</label>
                                      
                                        <input class="mt-1" type="text" placeholder="eg:johndoe@gmail.com" />
                                    </div>
                                    
                                    <div class="text-area-send">
                                        <textarea name="" id="" placeholder="Enquire more details from the owner"></textarea>
                                    </div>
                                    <div class="send-messag-btn">
                                        <button>Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------product details ends---------->

    <div class="slider">
        <div class="">
            <div class="row">
                <div class="row-intro">
                    <h6>Discover Nearby Properties</h6>
                </div>
            </div>
            <div class="row multiple-items">
                <?php
                        require 'db.php';
                         $qry = "SELECT * FROM `fmr`";
                         $products =$conn->query($qry);
                         while ($row= $products->fetch_assoc())
                         {
                           
                         ?>
                    <div class="col-sm-12 col-lg-3 mt-3 col-xl-3 col-md-12">
                       <a  href="./productpage.php?id=<?php echo $row['fmrh_id']; ?>" class="text-dark" style="text-decoration:none">
                       <div class="featured-card">
                            <div class="featured-img">
                                <img src="<?php echo $row['fmr_img']?>" alt="" />
                                <div class="featured-price">
                                    <button>KES <?php echo $row['price']?></button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="rental-type d-flex justify-content-between">
                                    <div class="type-details">
                                    <?php echo $row['fmr_type']?>
                                    </div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location"><?php echo $row['fmr_location']?></div>
                                <div class="more-details d-flex justify-content-between ">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span> <?php echo $row['fmr_size']?> sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span> <?php echo $row['fmr_beds']?>Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span> <?php echo $row['fmr_baths']?>Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!----------------------footer section starts------------->
    <section>
        <div class="home-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-12 col-lg-3 col-xl-3">
                        <div class="footer-item">
                            <div class="footer-item-links">
                                <div class="footer-title">
                                    <li>About</li>
                                </div>
                                <li><a href="/">Home</a></li>
                                <li><a href="/">About</a></li>
                                <li>
                                    <a href="/">Terms & Condition</a>
                                </li>
                                <li><a href="/">Blog</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12 col-lg-3 col-xl-3">
                        <div class="footer-item">
                            <div class="footer-item-links">
                                <div class="footer-title">
                                    <li class="">For Tenants</li>
                                </div>
                                <li>
                                    <a href="/">Search for rentals properties</a
										>
									</li>
									<li>
										<a href="/">Create searchAgent</a>
                                </li>
                                <li><a href="/">Profile</a></li>
                                <li><a href="/">Help</a></li>
                                <li><a href="/">Contact</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12 col-lg-3 col-xl-3">
                        <div class="footer-item">
                            <div class="footer-item-links">
                                <div class="footer-title">
                                    <li class="">Landlords & Agents</li>
                                </div>
                                <li>
                                    <a href="/">Search for rentals properties</a
										>
									</li>
									<li>
										<a href="/">Create searchAgent</a>
                                </li>
                                <li><a href="/">Profile</a></li>
                                <li><a href="/">Help</a></li>
                                <li><a href="/">Contact</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-12 col-lg-3 col-xl-3">
                        <div class="footer-item">
                            <div class="footer-item-links">
                                <div class="footer-title">
                                    <li>FMR</li>
                                </div>
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------footer section ends------------->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./slick/slick.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>