<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <style>
        .register{
            display: flex;
            justify-content: center;
            align-items: center;

        }
        
    </style>
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            
                                @auth
                                <li class="scroll-to-section"><a href="{{url('/showcart',Auth::user()->id)}}">
                                Cart[{{$count}}]
                            </a></li> 
                                @endauth
                                @guest
                                <li class="scroll-to-section"><a href="#reservation">
                                 Cart[0]
                                </a></li>
                                @endguest
                            
                            

                            <li class="register1">
                            @if (Route::has('login'))
                            <nav class="-mx-2 flex flex-2 justify-center register">
                                @auth
                                    <li>

                                        <x-app-layout>
   
                                        </x-app-layout>
                                        
                                    </li>
                                @else
                                <li>

                                    <a
                                    href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                    Log in
                                </a>
                            </li>    

                                    @if (Route::has('register'))
                                    <li>

                                        <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                        Register
                                    </a>
                                </li>
                                    @endif
                                @endauth
                        </nav>
                        @endif
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div id="top">

    <table align="center" border="1px solid red" bgcolor="yellow">
        <tr>
            <th style="padding:30px;">Food Name</th>
            <th style="padding:30px;">Food Price</th>
            <th style="padding:30px;">Quanity</th>
            <th style="padding:30px;">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td align="center">{{$data->title}}</td>
            <td align="center">{{$data->price}}</td>
            <td align="center">{{$data->quantity}}</td>
        </tr>            
        @endforeach
        @foreach($data2 as $data)
        <tr>
         
           
            <td align="center"> <a class="btn btn-warning" href="{{url('/remove',$data2[$i]->id)}}">Remove</a></td>
            {{$i+=1}}
        </tr>
       
        @endforeach
    </table>
    
</div>



     <!-- jQuery -->
     <script src="assets/js/jquery-2.1.0.min.js"></script>

     <!-- Bootstrap -->
     <script src="assets/js/popper.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
 
     <!-- Plugins -->
     <script src="assets/js/owl-carousel.js"></script>
     <script src="assets/js/accordions.js"></script>
     <script src="assets/js/datepicker.js"></script>
     <script src="assets/js/scrollreveal.min.js"></script>
     <script src="assets/js/waypoints.min.js"></script>
     <script src="assets/js/jquery.counterup.min.js"></script>
     <script src="assets/js/imgfix.min.js"></script> 
     <script src="assets/js/slick.js"></script> 
     <script src="assets/js/lightbox.js"></script> 
     <script src="assets/js/isotope.js"></script> 
     
     <!-- Global Init -->
     <script src="assets/js/custom.js"></script>
     <script>
 
         $(function() {
             var selectedClass = "";
             $("p").click(function(){
             selectedClass = $(this).attr("data-rel");
             $("#portfolio").fadeTo(50, 0.1);
                 $("#portfolio div").not("."+selectedClass).fadeOut();
             setTimeout(function() {
               $("."+selectedClass).fadeIn();
               $("#portfolio").fadeTo(50, 1);
             }, 500);
                 
             });
         });
 
     </script>
   </body>
 </html>