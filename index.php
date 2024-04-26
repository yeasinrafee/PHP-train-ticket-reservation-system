<!DOCTYPE html>
<html lang="en" data-theme="light">
<?php
include 'constants.php';
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


    
    <title><?php echo @$title; ?></title>
    <link rel="stylesheet" href="styles.css">


    <!-- [ FONT-AWESOME ICON ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">


    <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css"> -->

    <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link rel="stylesheet" type="text/css" href="css/color/themecolor.css">


</head>

<body>

    <!-- [ LOADERs ]

================================================================================================================================-->

    <div class="preloader">

        <div class="loader theme_background_color">

            <span></span>


        </div>
    </div>
    <!-- [ /PRELOADER ]

=============================================================================================================================-->

 

 


        <!-- Navigation
    ==========================================-->

        
        <div class="navbar fixed  flex items-center bg-yellow-300">
  <div class="flex-1">
  <button type="button" class="navbar-toggle collapsed " data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="text-gray-700 font-bold text-2xl uppercase ml-28 hover:bg-yellow-200 hover:transition hover:duration-300 hover:ease-in-out px-4 py-2 rounded-xl" href="index.php">Ticket reservation system</a>

  </div>
  <div class="flex-none mr-28 text-gray-700 font-semibold">
    <ul class="menu menu-horizontal px-1">
      
    <li><a href="#home" class="page-scroll text-lg hover:bg-yellow-50">
                                <h3>Home</h3>
                            </a></li>

                        <li><a href="#two" class="page-scroll text-lg hover:bg-yellow-50">
                                <h3>About</h3>
                            </a></li>

                        <li><a href="library/sample.pdf" class="page-scroll text-lg hover:bg-yellow-50">
                                <h3>Map</h3>
                            </a></li>

                        <li><a href="pro/signin.php" class="page-scroll text-lg hover:bg-yellow-50">
                                <h3>Passenger Portal</h3>
                            </a></li>

                        <li><a href="pro/adminsignin.php" class="page-scroll text-lg hover:bg-yellow-50">
                                <h3>Admin</h3>
                            </a></li>
    </ul>
  </div>
</div>

       

 



        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->

        <section class="main-heading  h-[900px] flex justify-center items-center background-img" id="home">

    <div class="flex flex-col items-center space-y-14 mt-28   ">
        <div class="text-6xl font-bold text-center">
        <h1 class="text-white"><span class="main-element "
                                    data-elements=" Online Ticket, Online Ticket, Online Ticket"></span></h1>

                            <h1 class=""><span class="main-element text-yellow-400"
                                    data-elements=" Reservation System, Reservation System, Reservation System"></span>
                            </h1>
        </div>
        <div class="text-3xl font-semibold">
            <h1 class="text-center text-white">WELCOME TO,<br />E - TICKETING FOR RAILWAYS</h1>
       
        </div>
        <div>
        <button class="bg-yellow-400 py-6 px-10  rounded-full hover:bg-yellow-100 transition-all duration-300">
    <a href="pro/signin.php" class="text-gray-700 font-bold text-xl " style="text-decoration: none; text-align:center;">Make Reservations Now</a>
</button>


        </div>
    </div>






        </section>

        <section class=" background-img2 h-[800px]   flex justify-center items-center" id="home">
    <div class="flex flex-col justify-center items-center text-center w-2/3 mx-auto  space-y-7">
        <div>
            <h1 class="mt-6 text-4xl font-bold">Airport Railway Contact List</h1>
        </div>
        <div>
            <p class="text-center font-normal gap-20 text-xl leading-relaxed mt-5 mb-5">The Airport Railway Corporation is 60 years old and it runs a
                unilaterally designed track system of 1067mm cape gauge. Only 30km of its track
                distribution is in double track and that is within Uttara area.
                The Airport railway narrow gauge network is approximately 3,500 km long and is
                currently being extended by a narrow gauge line between ABC and the BCA - Port
                Harcourt line and a 275 km long standard gauge line between Chittogone – Rajshahi – Rangpur.
            </p>
        </div>
        <div class="flex gap-16">
            <button class="bg-yellow-400 py-3 px-5 rounded-2xl hover:bg-yellow-200 transition-all duration-300"><a href="#home">Get Started</a></button>
            <button class="bg-gray-700 py-3 text-white px-5 rounded-2xl hover:bg-gray-400 transition-all duration-300"><a href="pro/adminsignin.php">Admin</a></button>
        </div>
    </div>
</section>


            

       


        <!-- [/MAIN-HEADING]
 
============================================================================================================================-->



        <!-- [ABOUT US]
 
============================================================================================================================-->

        <section class=" py-44  background-img3" id="two">



        <div class="flex justify-center items-center  flex-row-reverse ml-20 gap-28">
            <!-- img -->
            <div class="">
    <img src="images/trainlogo.png" alt="" class="w-2/3">
            </div>
            <!-- cards -->

            <div class="flex gap-5 ml-28">
                <div>
                <div class="card w-80 h-96 bg-base-100 shadow-xl">
                    <figure class="px-10 pt-10">
                    <i class="fa fa-newspaper-o text-8xl text-yellow-400 "></i>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">Get Train Tickets from the comfort of your home</h2>
                        <p class="black">Book train tickets from anywhere using the robust ticketing platform
                                exclusively built to provide the passengers with pleasant ticketing experience. </p>
                        
                    </div>
                 </div>
                </div>
                <div>
                <div class="card w-80 h-96 bg-base-100 shadow-xl gap-">
                    <figure class="px-10 pt-10">
                    <i class="fa fa-diamond text-8xl text-yellow-400"></i>

                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">Train & Ticketing related information</h2>
                        <p class="black">Checkout available seats, route information, fare information on real time
                                basis with E-sheba Platform.</p>

                        
                    </div>
                 </div>
                </div>
                <div>
                <div class="card w-80 h-96 bg-base-100 shadow-xl">
                    <figure class="px-10 pt-10">
                    <i class="fa fa-dollar text-8xl text-yellow-400"></i>
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">Pay Securely</h2>
                        <p class="black">Online payment. (NO REFUND!)</p>

                        
                    </div>
                 </div>
                </div>
                </div>
            </div>
        </div>

            
        </section>



        
        <footer class="footer h-[200px] footer-center p-10 bg-gray-100  text-base-content rounded">
            <nav class="grid grid-flow-col gap-4 text-lg">
                <a class="link link-hover">About us</a>
                <a class="link link-hover">Contact</a>
                <a class="link link-hover">Jobs</a>
                <a class="link link-hover">Press kit</a>
            </nav> 
            <nav>
                <div class="grid grid-flow-col gap-10">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current text-yellow-400"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current text-yellow-400"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current text-yellow-400"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                </div>
            </nav> 
            <aside>
                <p>Copyright © 2024 - All right reserved by Yeasin Rafee</p>
            </aside>
</footer>

           




    <!-- [ DEFAULT SCRIPT ] -->

    <script src="library/modernizr.custom.97074.js"></script>

    <script src="library/jquery-1.11.3.min.js"></script>

    <script src="library/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

    <!-- [ PLUGIN SCRIPT ] -->

    <script src="library/vegas/vegas.min.js"></script>

    <script src="js/plugins.js"></script>

    <!-- [ TYPING SCRIPT ] -->

    <script src="js/typed.js"></script>

    <!-- [ COUNT SCRIPT ] -->

    <script src="js/fappear.js"></script>

    <script src="js/jquery.countTo.js"></script>

    <!-- [ SLIDER SCRIPT ] -->

    <script src="js/owl.carousel.js"></script>

    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/SmoothScroll.js"></script>


    <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>

</body>


</html>