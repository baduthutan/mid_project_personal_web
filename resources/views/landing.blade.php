@extends('template')
    
@section('css')
<style>
    #navbar{
        margin-top: -100px;
    }
     #loading-screen {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1500;
        }
     /* loading animation */
        .spinner {
            width: 40px;
            height: 40px;

            position: relative;
            margin: 100px auto;
        }

        .double-bounce1, .double-bounce2 {
            background-color:rgb(171, 136, 246);
            width: 100%;
            height: 100%;
            border-radius: 50%;
            opacity: 0.6;
            position: absolute;
            top: 0;
            left: 0;
            
            -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
            animation: sk-bounce 2.0s infinite ease-in-out;
        }

        .double-bounce2 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        @-webkit-keyframes sk-bounce {
            0%, 100% { -webkit-transform: scale(0.0) }
            50% { -webkit-transform: scale(1.0) }
        }

        @keyframes sk-bounce {
            0%, 100% { 
                transform: scale(0.0);
                -webkit-transform: scale(0.0);
            } 50% { 
                transform: scale(1.0);
                -webkit-transform: scale(1.0);
            }
        }
  
    .detail-wrap{
        overflow: hidden;
        height: 50px; 
        text-overflow: ellipsis;
    }
    .img-footer{
        background-image: url('footerImg.webp');
        background-position: center;
        background-size: cover;
    }
    .scroll-col{
        overflow:hidden;
        height: 82px;
    }
    .scroll-col .about-us:first-child{
        animation: scroll-down 12s infinite;
    }
    .card-image img, .jumbo-image img{
        -webkit-filter: drop-shadow(4px 4px 0 white)
            drop-shadow(-4px 4px 0 white)
            drop-shadow(4px -4px 0 white)
            drop-shadow(-4px -4px 0 white);

        filter: drop-shadow(4px 4px 0 white)
                drop-shadow(-4px 4px 0 white)
                drop-shadow(4px -4px 0 white)
                drop-shadow(-4px -4px 0 white);
    }
</style>
@endsection

@section('home', "active")

@section('content')
    <section id="loading-screen" class="vh-100 bg-body-tertiary">
        <div class="container vh-100 d-flex">
            <div class="row my-auto mx-auto">
                <div class="col-12">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main" class="d-none">
        <div class="container-fluid px-4 px-md-5 mt-4 jumbotron" >
        <div class="card rounded-5 px-5 pb-md-5">
            <div class="navbar pt-4 d-flex align-items-center">
                <a href="#" class="navbar-brand me-auto" style="font-family: 'Ubuntu';">
                    <img src="logo.png" width="32" alt="logo" class="d-inline-block align-text-center">
                    <span class="ms-1">Vinchen Amigo</span> 
                </a>
                <div class="nav-item pe-md-4 d-none d-lg-block">
                    <a class="nav-link" href="#">HOME</a>
                </div>
                <div class="nav-item px-md-4 d-none d-lg-block">
                    <a class="nav-link" href="{{url('/experience')}}">EXPERIENCES</a>
                </div>
                <div class="nav-item px-md-4 d-none d-md-block">
                    <a class="nav-link" href="{{url('/project')}}">PROJECTS</a>
                </div>
                <div class="ps-md-4 d-none d-sm-block">
                    <a href="#footer-row" type="button" class="btn btn-sm rounded-pill px-4 boton">REACH ME OUT</a>
                </div>
            </div>
            <div class="my-md-5">
                <div class="jumbotext mt-4 mb-3 mb-md-3">
                    <span>Respect</span> <span>the</span> <span>process,</span> <span>it's</span> <span>a</span> <span>journey</span> 
                </div>
            </div>
            <div class="mt-md-5"></div>
            <div class="mt-md-3"></div>
                <div class="jumbotron-info mt-4 mt-md-5">
                    <p class="m-0">UI/UX Designer</p>
                    <p class="mb-4">Front End Developer</p>
                    <a href="#main-row">
                        <h4>SCROLL DOWN FOR MORE  <i class="fa-solid fa-chevron-down"></i></h4>  
                    </a>
                </div>
            <div class="row jumbo-image">
                <div class="col-0 col-md-1">
                    
                </div>
                <div class="col-md-10 d-flex align-items-end">
                    <img src="vinchen_1.webp" alt="jumbo_img" class="img-fluid">
                </div>
                <div class="col-0 col-md-1">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-4 px-md-5 mt-4">
        <div class="row main-row" id="main-row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="card rounded-5 bg-secondary bg-gradient h-100 px-5 weare-card">
                    <div class="pb-5">
                        <div class="weare-bncc h-75 py-5">
                            <p class="ms-2">I am a</p>
                            <h2>BNCC CEO<br>Malang</h2>
                        </div>
                    </div>
                    <div class="pt-5">
                        <div class="d-grid letstalk-button w-50 py-5">
                            <a type="button" class="btn btn-lg rounded-pill px-4 text-start" href="https://bncc.net/">Stalk BNCC</a>
                        </div>
                    </div>
                    <div class="row card-image">
                        <div class="col-2">
    
                        </div>
                        <div class="col-9 d-flex align-items-end">
                            <img src="vinchen_2.webp" alt="jumbo_img" class="img-fluid">
                        </div>
                        <div class="col-1">
    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0">
                <div class="row">
                    <div class="col-12 col-sm-8 col-lg-12 pb-4 pb-sm-0 pb-lg-3 pe-3">
                        <div class="card rounded-5 bg-body-secondary amazing-card p-4 p-sm-5">
                           <div class="mb-5">
                               <a href="{{url('/experience')}}">
                                    <div class="d-flex mb-5">
                                    
                                        <div class="me-auto">
                                            <p>AMAZING EXPERIENCES IN PAST FEW YEAR</p>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-arrow-right fa-2xl"></i>
                                        </div>
                                    </div>
                                </a>
                           </div>
                           <div class="mt-5 d-none d-md-block">

                           </div>
                            <div>
                                <h3>
                                    View<br>My Experiences
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-12 ps-3 scroll-col">
                        @foreach($experiences as $experience)
                        <div class="card about-us rounded-5 p-4 p-sm-5 mb-4">
                                <h4 class="my-lg-2">{{$experience->name}}</h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-4 px-md-5 mt-4">
        <div class="row second-row">
            <div class="col-lg-4 pb-3 mb-lg-0">
                <div class="card rounded-5 bg-body-secondary p-5 project-card">
                    <div class="pb-lg-5 mb-lg-5">
                        <h3>
                             What I<br>have made
                        </h3>
                    </div>
                    <div class="mt-lg-5 pt-lg-5">
                        <a href="{{url('/project')}}">
                            VIEW MORE <i class="fa-solid fa-arrow-right"></i>
                        </a> 
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-3 my-md-0">
                <div class="row h-100">
                @foreach($projects as $project)
                    <div class="col-sm-6 pb-3">
                        <div class="card rounded-5 bg-warning-subtle h-100 img-card" style="background-image: url('{{$project->picture}}');">
                            <div class="container-fluid py-5 py-lg-4 px-4 img-modal h-100  rounded-5 text-center">
                                <p class="mb-2"><b>{{$project->name}}</b></p>
                                <div class="detail-wrap">
                                    <p style=>{{$project->detail}}</p>
                                </div>
                                <a type="button" href="{{$project->link}}" class="btn btn-outline-light rounded-pill mt-3">Check it out</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-4 px-md-5 mt-3">
        <div class="card rounded-5 bg-body-secondary p-5 working-with text-center" id="working">
            <h3 class="mb-5">I am working with</h3>
            <div class="px-lg-5">
                <div class="row px-md-5">
                    <div class="slider col-12">
                        <img src="laravel.png" alt="laravel_logo" class="img-fluid">
                        <img src="bootstrap.png" alt="bootstrap_logo" class="img-fluid">
                        <img src="figma.png" alt="figma_logo" class="img-fluid">
                        <img src="swift.png" alt="swift_logo" class="img-fluid">
                        <img src="html.png" alt="html_logo" class="img-fluid">
                        <img src="js.png" alt="js_logo" class="img-fluid">
                        <img src="php.png" alt="php_logo" class="img-fluid">
                        <img src="vscode.png" alt="vscode_logo" class="img-fluid">
                        <img src="laravel.png" alt="laravel_logo" class="img-fluid">
                        <img src="bootstrap.png" alt="bootstrap_logo" class="img-fluid">
                        <img src="figma.png" alt="figma_logo" class="img-fluid">
                        <img src="swift.png" alt="swift_logo" class="img-fluid">
                        <img src="html.png" alt="html_logo" class="img-fluid">
                        <img src="js.png" alt="js_logo" class="img-fluid">
                        <img src="php.png" alt="php_logo" class="img-fluid">
                        <img src="vscode.png" alt="vscode_logo" class="img-fluid">
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-4 px-md-5 my-4">
        <div class="row footer-row" id="footer-row">
            <div class="col-md-8">
                <div class="card rounded-5 bg-dark bg-gradient p-5">
                    <h2 class="mb-4">Say Hi!</h2>
                    <hr>
                    <div class="my-4">
                        <p>Hi there, Courious about my further projects? Or do you want to transform your digital vision into amazing application? Hit me up! I am more than glad for being reached up.</p>
                    </div>
                    <div class="mb-4">
                        <p>
                            Vinchen Amigo<br>Malang, Indonesia
                        </p>
                    </div>
                    <p>
                        <a href="https://www.linkedin.com/in/vincent-vincent-844a00222/" style="color: white; text-decoration: none;">
                            <i class="fa-brands fa-linkedin fa-xl me-3"></i>
                        </a>
                        <a href="https://www.instagram.com/vinchen_amigo/" style="color: white; text-decoration: none;">
                            <i class="fa-brands fa-instagram fa-xl me-3"></i>
                        </a>
                        <a href="https://github.com/baduthutan/" style="color: white; text-decoration: none;">
                            <i class="fa-brands fa-github fa-xl me-3"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-0 col-md-4">
                <div class="card rounded-5 bg-info h-100 img-footer">
                    
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(window).on('load', function(){
            $('#loading-screen').addClass('d-none');
            $('#main').removeClass('d-none');
            // $('#main').addClass('d-block');
        });
        
        // let count = $('.scroll-col .about-us').length;
        // let height = $('.scroll-col .about-us').height();
        // // Calculate the percentage of animation for each div
        // var divCount = count; // or 5, or any number
        // var percentageStep = 100 / (divCount - 1);
        
        // $('.scroll-col .about-us:first-child').css( {
        //     'animation' : 'scroll-down ' + 3*count + 's infinite'
        // });

        // // Create the CSS keyframes
        // var keyframes = "@keyframes scroll-down {\n";
        // for (var i = 0; i < divCount; i++) {
        //   keyframes += i * percentageStep + "% {\n";
        //   keyframes += "margin-top: -" + height * i + "px;\n";
        //   keyframes += "}\n";
        // }
        // keyframes += "}\n";
        
        // // Add the keyframes to a new style element
        // var style = $("<style>").text(keyframes);
        // $("head").append(style);
        
        $(window).scroll(function(){
            var wScroll = $(this).scrollTop();
            console.log(wScroll);

            if( wScroll > 125){
                $('#navbar').css({
                    'transform' : 'translate(0, 100px)',
                    'transition' : '0.3s'
                    
                });
            }
            if( wScroll < 125){
                $('#navbar').css({
                    'transform' : 'translate(0, -100px)',
                    'transition' : '0.3s'
                });
            }

           if($( window ).width() > 991){
            
            $('.jumbo-image').css({
                'transform' : 'translate(' + wScroll + 'px, 0)'
            });

            if( wScroll > 125){
                $('.weare-card, .amazing-card').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
                $('.card-image img').css({
                'transform' : 'translate(0, -' + wScroll/8 + 'px)'
            });
            }
            if( wScroll < 125){
                $('.weare-card, .amazing-card').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll > 450){
                $('.about-us').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 450){
                $('.about-us').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 650){
                $('.jumbotron').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
                $('.second-row').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll > 650){
                $('.jumbotron').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
                $('.second-row').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
                $('.card-image img').css({
                'transform' : 'translate(0, -80px)'
            });
            }

            if( wScroll > 1150){
                $('.working-with').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 1150){
                $('.working-with').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll > 1200){
                $('.about-us, .weare-card').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 1200 && wScroll > 500){
                $('.about-us, .weare-card').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
            }
            if( wScroll > 1500){
                $('.footer-row').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 1500){
                $('.footer-row').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll > 1600){
                $('.second-row').css({
                    'opacity' : '0',
                    'transition' : '0.3s'
                });
            }
            if( wScroll < 1600 && wScroll > 700){
                $('.second-row').css({
                    'opacity' : '1',
                    'transition' : '0.3s'
                });
            }
           }else{
            $('.jumbotron, .working-with, .footer-row, .second-row, .about-us, .weare-card, .amazing-card').css({
                    'opacity' : '1',
            });
                $('.jumbo-image').css({
                'transform' : 'translate(0, 0)' 
            });
            $('.card-image img').css({
                'transform' : 'translate(0, -80px)'
            });
           }
        }); 
        let cardHeight = $('.scroll-col .about-us').height();
        document.documentElement.style.setProperty(`--card-height`, `${cardHeight}px`);
    </script>
@endsection