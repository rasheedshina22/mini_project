<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <?php $basename=basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>

    <link rel="shortcut icon"
        href="images/<?php if($basename == "index" || $basename == "culture" || $basename == "design" || $basename == "renovation" || $basename == "connect"){ echo 'logogreen.png'; }?>"
        type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Gudea&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/nav.css">



    <title><?php if($basename == "index"){ echo 'Home'; } else{ echo $basename; } ?> </title>
</head>

<body>

        <?php $basename=basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
        
    <span class="phoneNumber"><img src="images/foneicon.png" alt=""><a href="#"
    style="color:#061e26;; text-decoration: none; font-size:18px;">+234820000000</a></span>

    <!-- header area start -->
    <header class="header-area">
    
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                
                    
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        
                        <a class="nav-brand" href="index.html"><a href="index.php" class="nav-brand-img"><img src="images/png for arbita.jpg" class="arbitat-logo"/></a></a>

                        
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                    
                        <div class="classy-menu">
                        
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            
                            <div class="classynav">
                                <ul id="nav">
                                    <li> <a href="culture.php">Culture</a></li>
                                    <li><a href="design.php">Design</a></li>
                                    <li><a href="renovation.php">Renovation</a> </li>                                                                         
                                    <li><a href="connect.php">Connect</a> </li>  
                                </ul>                                 
                            </div>
                            
                        
                        </div> 
                        <div class="headerSocial no-display"> 
                  <a href="" target="_blank"><img src="images/face.png" alt=""></a> 
                  <a href="" target="_blank"><img src="images/twit.png" alt=""></a> 
                  <a href="" target="_blank"><img src="images/ista.png" alt=""></a>
                  <a href="" target="_blank"><img src="images/in.png" alt=""></a> 

                </div>                       
                    </nav>
                </div>
                
        </div>
    </header>


    <!-- Header Area End -->
    
      
        <!-- jQuery -->
     
        <!-- Popper -->
      
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/razo.bundle.js"></script>
        <script src="js/core.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>