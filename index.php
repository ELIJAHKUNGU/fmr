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
    <!------------top navbar ends-------------->
    <!--------background -image  & search  section start-->
    <section>
        <div class="home-search">
            <div class="container">
                <div class="row">
                    <div class="home-search-details">
                        <div class="home-search-title">
                            <h6>Find and manage rentals easily</h6>
                        </div>
                        <div class="home-search-card">
                            <div class="home-search-input">
                                <form action="">
                                    <div class="form-group1">
                                        <input type="text" placeholder="Add a Location" />
                                        <button>Search</button>
                                    </div>
                                    <div class="form-group2 d-flex">
                                        <div class="select-group-1">
                                            <select>
													<option selected>
														Category
													</option>
													<option value="3">
														None
													</option>
													<option value="1">
														Apartments
													</option>
													<option value="2">
														Hostels
													</option>
													<option value="3">
														Bedsitters
													</option>
												</select>
                                        </div>
                                        <div class="select-group-2">
                                            <input type="text" placeholder="Min price" />
                                        </div>
                                        <div class="select-group-2">
                                            <input type="text" placeholder="Max-price" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------background -image  & search  section ends-->
    <!---------discovered rentals starts----------------->
    <section>
        <div class="discovered-rentals">
            <div class="containers">
                <div class="row">
                    <div class="row-intro">
                        <h6>Discover Rentals at your location</h6>
                        <p>The most popular featured rentals on FMR</p>
                    </div>
                </div>
                <div class="row">
                <?php
                        require 'db.php';
                         $qry = "SELECT * FROM `fmr_houses`";
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
                    <!-- </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-10.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">Hostels</div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">
                                    Roysambu , Nairobi
                                </div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-8.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">
                                        2 Bedroom
                                    </div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">Kahawa west</div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-9.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">
                                        1 bed Room
                                    </div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">Ruiru</div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!---------discovered rentals ends------------------->
    <section>
        <div class="discovered-rentals">
            <div class="containers">
                <div class="row">
                    <div class="row-intro">
                        <h6>Discover Rentals at your location</h6>
                        <p>The most popular featured rentals on FMR</p>
                    </div>
                </div>
                <div class="row">
                <?php
                        require 'db.php';
                         $qry = "SELECT * FROM `fmr`";
                         $products =$conn->query($qry);
                         while ($row= $products->fetch_assoc())
                         {
                           
                         ?>
                    <div class="col-sm-12 mt-3 col-lg-3 col-xl-3 col-md-12">
                    <a  href="./productpage1.php?id=<?php echo $row['fmr_id']; ?>" class="text-dark" style="text-decoration:none">
                        <div class="featured-card">
                        <!-- (`fmr_id`, `fmr_type`, `fmr_location`, `fmr_size`, `fmr_beds`, `fmr_baths`, `fmr_img`, `fmr_rating`, `price`) -->
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

                    <!-- <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-10.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">Hostels</div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">
                                    Roysambu , Nairobi
                                </div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-8.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">
                                        2 Bedroom
                                    </div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">Kahawa west</div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 col-xl-3 col-md-12">
                        <div class="featured-card">
                            <div class="featured-img">
                                <img src="images/renta-9.jpeg" alt="" />
                                <div class="featured-price">
                                    <button>KES 5,500</button>
                                </div>
                            </div>
                            <div class="featured-details">
                                <div class="
											rental-type
											d-flex
											justify-content-between
										">
                                    <div class="type-details">
                                        1 bed Room
                                    </div>
                                    <div class="rating">
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <div class="location">Ruiru</div>
                                <div class="
											more-details
											d-flex
											justify-content-between
										">
                                    <div class="sqr-fits">
                                        <i class="fas fa-ruler-combined"></i>
                                        <span>3000 sqft</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bed"></i>
                                        <span>2 Beds</span>
                                    </div>
                                    <div class="sqr-fits">
                                        <i class="fas fa-bath"></i>
                                        <span>2 Baths</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!---------discovered rentals ends------------------->
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
    <script src="js/bootstrap.min.js"></script>
</body>

</html>