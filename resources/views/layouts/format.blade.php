<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47313b196d.js" crossorigin="anonymous"></script>
    <title>@yield('title','IoT Challenge')</title>
    <meta name="author" content="M Haris Humaidi">
</head>
<body class=".bdy">
    <nav class="navbar mb-1 a" >
            <div class="container-fluid ms-2">
                <a class="nav-img " href="#">
                <img src="images/iconIoT.png" alt="semariot" >
                </a>
                    <ul class="nav d-flex justify-content-around mx-3 scroll ">
                    <div class="display">
                        <div class="dropdown d-flex align-items-center">
                            <button onclick="myFunction()" class="dropbtn a py-2 px-3 me-2 " >About</button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="#about">About The Event</a>
                                <a href="#">About UNS</a>
                            </div>
                        </div>
                        <li class="nav-item me-2 d-flex align-items-center">
                            <a class="nav-link a" href="#guideline">Guideline</a>
                        </li>
                        <li class="nav-item me-2 d-flex align-items-center">
                            <a class="nav-link a" href="#judges">Judges</a>
                        </li>
                        <li class="nav-item me-2 d-flex align-items-center">
                            <a class="nav-link a" href="#faq">FAQ</a>
                        </li>
                        <li class="nav-item me-2 d-flex align-items-center" >
                            <a class="nav-link a" href="#">Past Event</a>
                        </li>
                        <li class="nav-item me-2 d-flex align-items-center">
                            <button class="btn btn-warning" style="border-radius: 25px;">
                                <a class="nav-link" style="color:white;" href="#">Register</a>
                            </button>    
                        </li>
                    </div>
                    <div class="dropdown " >
                        <div class="toggle">
                            <ion-icon onclick="myFunction1()" name="menu-outline"></ion-icon>
                        </div>
                        <div id="myDropdown2" class="dropdown-content">
                            <a href="#about">About The Event</a>
                            <a href="#">About UNS</a>
                            <a href="#guideline">Guideline</a>
                            <a href="#timeline">Timeline</a>
                            <a href="#judges">Judges</a>
                            <a href="#faq">FAQ</a>
                            <a href="#contact">Register</a>
                        </div>
                    </div>
                    </ul>
            </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer "  id="footer">
            <div class="pt-4 pb-2" >
                <h4 class="px-4">Contact Us</h4>
                <ul>
                    <li>Instagram : <a href="https://www.instagram.com/hmteuns/ ">@hmteuns</a></li>
                    <li>WhatsApp :</li>
                    <li>- <a href="https://wa.me/6285888313945">+62 858 8831 3945</a> (Foreigner)</li>
                    <li>- <a href="https://wa.me/6289693553019">+62 896 9355 3019</a> (Indonesian)</li>
                    <li>Email : <a href="mailto:iotlab@ft.uns.ac.id">iotlab@ft.uns.ac.id</li>
                </ul>
            </div>
            <div class="d-flex justify-content-center pb-4 text-light">
                Copyright © 2021 All rights reserved
            </div>

        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <!-- Transparan to solid navbar -->
    <script>
        $(window).scroll(function() {
        if ($(window).scrollTop() >= 500) {
            $('.navbar').css('background-color', 'white');
            $('.a').css('color', '#2196f3');
            $('.navbar').css('box-shadow', '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)');
        } else {
            $('.navbar').css('background-color', 'transparent');
            $('.a').css('color', 'white');
            $('.navbar').css('box-shadow', 'none');
        }
        });
    </script>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
        function myFunction1() {
        document.getElementById("myDropdown2").classList.toggle("showing");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
    </script>
    <script>
    $(document).ready(function() {
    $(window).scroll( function(){
        $('.hideme').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            var Top_of_object = $(this).offset().top ;
            var Top_of_window = $(window).scrollTop();
            if(( bottom_of_window > (Top_of_object -200)) && (Top_of_window < (bottom_of_object+250))){
                $(this).addClass('showme');
            }
            
            if( Top_of_window > (bottom_of_object-249) ||(Top_of_object+199)>bottom_of_window){
                $(this).removeClass('showme');
            }
            // if( Top_of_window > Top_of_object ){
            //     $(this).removeClass('showme');
            // }
         
            
            });
        });
    });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>