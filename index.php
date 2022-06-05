<?php 
/**
 *  Template Name: Static Homepage
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CPCA Clipping Path CA</title>
    <!-- Google Font Link Here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Poppins&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap Link Here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS Link Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
</head>

<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar fixed-top cpca-navbar navbar-expand-lg ">
                <div class="container cpca-navbar-logo ">
                    <a class="navbar-brand" href="#">
                        <img class="cpca-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="cpca-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link cpca-active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="https://clippingpathca.com/services/ " id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/clipping-path-service/ ">Clipping Path Service</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/photo-retouching-services/ ">Photo Retouching Services</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/photoshop-shadow-service/">Photoshop Shadow Service</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/image-masking-service/">Image Masking Service</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/color-correction-services/">Color Correction Services</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/ghost-mannequin-service/">Ghost Mannequin Service</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/e-commerce-photo-editing/ ">E-Commerce Photo Editing</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/photo-restoration-services/ ">Photo Restoration Service</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/real-estate-photo-editing/">Real Estate Photo Editing</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/image-manipulation/">Image Manipulation</a></li>
                                    <li><a class="dropdown-item" href="https://clippingpathca.com/raster-to-vector-conversion/">Raster to Vector Conversion</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://clippingpathca.com/portfolio/ ">Protfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://clippingpathca.com/pricing/ ">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://clippingpathca.com/contact-with-us/ ">Contact us</a>
                            </li>
                        </ul>
                        <form class="d-flex cpca-buttons " role="search">
                            <a class="btn cpca-get-btn btn-outline-primary cpca-btn " href="https://clippingpathca.com/get-a-quote/ "><span>Get a Quote</span></a>
                            <a class="btn btn-primary cpca-btn " href="https://clippingpathca.com/get-a-quote/ "><span>Upload File</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload.png" alt=""></a>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="cpca-hero cpca-fancy-wrapper">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-orange.png" class="cpca-eclipse-orange" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-purple-r.png" class="cpca-eclipse-purple-r" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-12 cpca-hero-left ">
                    <div class="cpca-hero-left-item">
                        <h1>Bulk Professional Photo
                            Editing & <span>Clipping Path</span>
                            Service Provider
                        </h1>
                        <p>We provide 100% handmade, clean, smooth, and realistic photo editing services by pro designers. 24/7 Online Services, Fastest
                            turnaround time, and at an affordable cost.
                        </p>
                        <a class="btn btn-primary cpca-get-start-btn cpca-btn " href="https://clippingpathca.com/get-a-quote/ "><span>Get Started</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow8.png" alt=""></a>
                    </div>
                    <div class="cpca-left-group">
                        <div class="cpca-trust-thousend">
                           <div class="cpca-thousend-head" >
                               <h5>Trusted by <span>thousands</span></h5>
                               <div class="cpca-thousend-arrow">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/swirly.png" alt="">
                               </div>
                           </div>
                            <div class="cpca-thousend-item">
                                <img class="cpca-thousend-pepl" src="<?php echo get_template_directory_uri(); ?>/assets/images/thousend.png" alt="">
                                <p>9 in 10 users
                                    recommend us</p>
                            </div>
                        </div>
                        <div class="cpca-trust-pilot">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pilot.png" alt="">
                            <p>4.7/5  3195 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div class="cpca-hero-right-wrapper">
                        <div class="cpca-hero-img-aftr-before" >
                            <div class="cpca-hero-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-hero-img-before" > 
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-hero-right">
                            <img class="cpca-hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/before.png" alt="">
                            <img class="cpca-hero-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/after.png" alt="">
                        </div>
                    </div>
                    <div class="cpca-hero-right-options">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet1.png" alt="">Clipping Path</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet1.png" alt="">Background Removal</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet1.png" alt="">IMAGE MASKING</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet2.png" alt="">Add Shadow</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet2.png" alt="">Photo Retouching</li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bullet2.png" alt="">GHOST Mannequin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section -->
    <section class="cpca-counter-wrapper">
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="cpca-bottom-items">
                    <div class="cpca-bottom-item">
                        <h2><span class="cpca-count" >30</span>%</h2>
                        <p>Bulk Order Discount</p>
                    </div>
                    <div class="cpca-bottom-item">
                        <h2><span class="cpca-count" >24</span>/<span class="cpca-count" >7</span></h2>
                        <p>Available Service</p>
                    </div>
                    <div class="cpca-bottom-item">
                        <h2><span class="cpca-count" >100</span>%</h2>
                        <p>Satisfaction Gurantee.</p>
                    </div>
                    <div class="cpca-bottom-item">
                        <h2><span class="cpca-count" >16,000</span>+</h2>
                        <p>Satisfied Clients</p>
                    </div>
                    <div class="cpca-bottom-item">
                        <h2><span class="cpca-count" >10</span>+</h2>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <div class="cpca-brand">
                    <h5>Some Of Our Clients</h5>
                    <div class="cpca-brand-items">
                        <div class="cpca-brand-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand1.png" alt="">
                        </div>
                        <div class="cpca-brand-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/newborn.png" alt="">
                        </div>
                        <div class="cpca-brand-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/les24.png" alt="">
                        </div>
                        <div class="cpca-brand-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/andjam.png" alt="">
                        </div>
                        <div class="cpca-brand-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopify.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section -->
    <section class="cpca-service-wrapper cpca-fancy-wrapper cpca-section-pad">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-purple.png" class="cpca-eclipse-purple" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-blue.png" class="cpca-eclipse-blue" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dotted-bg.png" class="cpca-dotted-bg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve-bg.png" class="cpca-curve-bg" alt="">
        </div>

        <div class="container"> 
            <div class="col-lg-12 col-md-12">
                <div class="cpca-title-contant">
                    <h2>Our Popular <span>Services</span></h2>
                    <p>We're specialized to edit photos for Digital Photographers, Online stores, e-Commerce Retailers, and Personal Studios. Look out for our skills of:</p>
                </div>
                <div class="cpca-grid cpca-grid-items  cpca-service-grid">
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content1.png" alt="">
                        <h5>Clipping Path</h5>
                        <p>Clipping Path, Photo Cut Out,
                            Background Removal Service, Wrinkle
                            Removal, Deep Etching</p>
                        <a class="btn btn-primary cpca-btn service-btn " href="https://clippingpathca.com/clipping-path-service/ "><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content2.png" alt="">
                        <h5>Photo Retouching</h5>
                        <p>High End, Headshot, Model, Beauty, Portrait & Skin Retouching, Photo Touch Up, Airbrushing</p>
                        <a class="btn btn-primary cpca-btn service-btn" href="https://clippingpathca.com/photo-retouching-services/"><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content3.png" alt="">
                        <h5>Image Masking</h5>
                        <p>Photoshop Image Masking, Layer Masking, Alpha-Channel Masking, Refine Edge Masking, Translucent Masking</p>
                        <a class="btn btn-primary cpca-btn service-btn " href="https://clippingpathca.com/image-masking-service/"><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content4.png" alt="">
                        <h5>Ghost Mannequin</h5>
                        <p>Mannequin photography, Clothes mannequin photoshop, Neck joint, Invisible mannequin</p>
                        <a class="btn btn-primary cpca-btn service-btn " href="https://clippingpathca.com/ghost-mannequin-service/"><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content5.png" alt="">
                        <h5>eCommerce Image Editing</h5>
                        <p>Amazon photo editing,Product photo editing, eCommerce Retouching, Online photo editing</p>
                        <a class="btn btn-primary cpca-btn service-btn " href="https://clippingpathca.com/e-commerce-photo-editing/"><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                    <div class="cpca-grid-item cpca-service-grid-item">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/content6.png" alt="">
                        <h5>Photoshop Shadow Service</h5>
                        <p>Drop shadow effect service,Reflection shadow, Natural shadow,Product shadow creation</p>
                        <a class="btn btn-primary cpca-btn service-btn " href="https://clippingpathca.com/photoshop-shadow-service/"><span>Get Start</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                    </div>
                </div>
                <div class="cpca-btn-item d-flex justify-content-center mt-5">
                    <a class="btn btn-primary cpca-btn service-btn" href=" https://clippingpathca.com/services/">
                        <span>View All Services</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow8.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Section -->
    <section class="cpca-start-wrapper cpca-section-pad background-img">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="cpca-title-contant">
                    <h2><span>How do you</span> Start with us?</h2>
                    <p>There are four easy steps to start with us fastly. Follow the visual representation below for a better understanding and save your time.</p>
                </div>
                <div class="cpca-after-img" >
                    <img class="cpca-after-img-One" src="<?php echo get_template_directory_uri(); ?>/assets/images/start1.png" alt="">
                    <img class="cpca-after-img-two" src="<?php echo get_template_directory_uri(); ?>/assets/images/start2.png" alt="">
                    <img class="cpca-after-img-three" src="<?php echo get_template_directory_uri(); ?>/assets/images/start3.png" alt="">
                </div>
                <div class="cpca-grid cpca-start-grid cpca-grid-items ">
                    <div class="cpca-grid-item cpca-start-grid-item">
                        <a href="https://clippingpathca.com/free-trial/ "><img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/start-one.png" alt=""></a>
                        <h5>Use Our Free Trial</h5>
                        <p>You can take a test to judge our service quality. Click the free trial button, and send us 2/3 images with instructions.</p>
                    </div>
                    <div class="cpca-grid-item cpca-start-grid-item">
                        <a href="https://clippingpathca.com/get-a-quote/"><img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/start-two.png" alt=""></a>
                        <h5>Get Your Quote</h5>
                        <p>Send us your editing query. Our dedicated support team will email you in 30 minutes with the best custom quote!</p>
                    </div>
                    <div class="cpca-grid-item cpca-start-grid-item">
                        <a href="#"><img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/start-three.png" alt=""></a>
                        <h5>Give Us Order Of Your Project</h5>
                        <p>If you're satisfied according to quote requirements, you can give us the full project with instructions and Upload your images.</p>
                    </div>
                    <div class="cpca-grid-item cpca-start-grid-item">
                        <a href="#"><img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/start-four.png" alt=""></a>
                        <h5>Get Your Images</h5>
                        <p>We'll email you with a download link once the image processing is fully done. You'll just download the image file by clicking on the link.</p>
                    </div>
                </div>
                <div class="cpca-btn-item d-flex justify-content-center ">
                    <a class="btn btn-primary cpca-start-btn cpca-btn service-btn" href="https://clippingpathca.com/get-a-quote/ ">
                        <span>Upload Your File</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Section -->
    <section class="cpca-slider-wrapper cpca-section-pad cpca-fancy-wrapper">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-purple.png" class="cpca-eclipse-purple" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-blue.png" class="cpca-eclipse-blue" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve-bg.png" class="cpca-curve-bg" alt="">
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12 cpca-slider-sec ">
                <div class="cpca-title-contant">
                    <h2>Our Business <span>Solutions</span></h2>
                    <p>The Clipping Path CA world-leading outsourcing image editing and pro photo editing company based in Canada. We help you to grow your business and ROI and we expertly handle your photo editing solutions with time & minimum cost.</p>
                </div>
                <div class="cpca-grid cpca-slider-grid cpca-grid-items">
                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-1">
                            <a href="https://clippingpathca.com/e-commerce-photo-editing/"><h5>Product Photo Editing</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.png" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>E-commerce sites are dependent on product photos mainly. Customers firstly see the photos and then decide to buy them...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/e-commerce-photo-editing/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-2">
                            <a href="https://clippingpathca.com/image-masking-service/ "><h5>Image Masking Service</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-musk-2.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-musk-1.png" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Image Masking Service a process of help to erase the unwanted items from an image,
                            It helps to look more attractive...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/image-masking-service/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-3">
                           <a href="https://clippingpathca.com/color-correction-services/ "><h5>Color Correction Service</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color-corrction-2.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color-correction.png" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Color Correction Service is a service of changing or replacing the color of an image or some parts of an image...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/color-correction-services/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>


                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-1">
                            <a href="https://clippingpathca.com/clipping-path-service"><h5>Clipping Path Service</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Clipping-path-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Clipping-path-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Start at Clipping Path Service a process of helping to erase unwanted items from an image, It helps to look more attractive...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/clipping-path-service"><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-2">
                            <a href=" https://clippingpathca.com/photo-restoration-services/ "><h5>Photo Restoration Service</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-restaration-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-restaration-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Old photos are very important to humans. To restore your damaged photo is a great opportunity to recapture the memories..</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href=" https://clippingpathca.com/photo-restoration-services/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-3">
                           <a href="https://clippingpathca.com/ghost-mannequin-service/"><h5>Ghost Mannequin Service</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gost-man-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gost-man-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>The ghost mannequins attract most of the customers & widely used by gаrmеntѕ, apparel, clothing, ѕtоrеоwnеrѕ, retailers...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/ghost-mannequin-service/"><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>


                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-1">
                            <a href=" https://clippingpathca.com/photo-retouching-services/"><h5>Photo Retouching Services</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-retouch-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo-retouch-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>The service is used to fix the spot, wrinkles, imperfections, and color correction images to look the more attractive and...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href=" https://clippingpathca.com/photo-retouching-services/"><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-2">
                            <a href="https://clippingpathca.com/real-estate-photo-editing/ "><h5>Real Estate Photo Editing</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/real-state-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/real-state-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Real estate photos attract customers to buy the property. Gloomy and dull photos make you lose buyers. If you present ...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href="https://clippingpathca.com/real-estate-photo-editing/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-slider-grid-item">
                        <div class="cpca-slider-head cpca-slider-head-3">
                           <a href=" https://clippingpathca.com/raster-to-vector-conversion/ "><h5>Raster to Vector Conversion</h5></a>
                        </div>
                        <div class="cpca-slider-img-aftr-before" >
                            <div class="cpca-slider-img-after" >
                                <p>After</p>
                            </div>
                            <div class="cpca-slider-img-before" >
                                <p>Before</p>
                            </div>
                        </div>
                        <div class="cpca-slider-cmpr-imgs">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rester-to-1.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rester-to-2.jpg" alt="">
                        </div>
                        <div class="cpca-slider-items">
                            <p>Raster and Vector are two different types of image formats. Raster images have low resolutions, and vector images are of ...</p>
                            <a class="btn btn-primary cpca-slider-btn cpca-btn service-btn" href=" https://clippingpathca.com/raster-to-vector-conversion/ "><span>See More</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.png" alt=""></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Work Section -->
    <section class="cpca-work-wrapper cpca-section-pad background-img">
        <!-- <div class="background-body-" >
            <img  class="background-img" style="width:30px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.png" alt="">
        </div> -->
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="cpca-title-contant">
                    <h2>Why <span>Clipping Path CA?</span></h2>
                    <p>Just Relax! You don't have to worry about your work. We've vast skills and have 160+ expert production team members with dedicated  customer support.</p>
                </div>
                <div class="cpca-grid cpca-work-grid cpca-grid-items ">
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Trophy.png" alt="">
                        <h5>High and Best Quality</h5>
                        <p>We are providing you with high and 100% quality ensured images.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Headphone.png" alt="">
                        <h5>Available Day and Night Online Support</h5>
                        <p>We are constantly available with online support.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Secure.png" alt="">
                        <h5>100% Secured File Transfer</h5>
                        <p>We are assuring you about file transfer security. </p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/securedata.png" alt="">
                        <h5>100% Satisfaction Guaranteed</h5>
                        <p>We are providing you with high and 100% quality ensured images.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/art.png" alt="">
                        <h5>100% Hand Drawn Photo Editing</h5>
                        <p>We provide you with 100% manual Photo Editing.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/filingtime.png" alt="">
                        <h5>12 hours Quick Turnaround Time</h5>
                        <p>We are offering you Fast turnaround.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Product.png" alt="">
                        <h5>Bulk Order Procedure</h5>
                        <p>You can give us Bulk image editing order.</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/FastestDelivery.png" alt="">
                        <h5>Urgent Delivery Available</h5>
                        <p>If you need, we are giving urgent delivery .</p>
                    </div>
                    <div class="cpca-grid-item cpca-work-grid-item ">
                        <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Wallet.png" alt="">
                        <h5>Several Payment Methods and Easy Payment System</h5>
                        <p>We are providing varied payment methods and you can choose your payment system</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Pricing Section -->
    <section class="cpca-pricing-wrapper cpca-section-pad cpca-fancy-wrapper">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-purple.png" class="cpca-eclipse-purple" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-blue.png" class="cpca-eclipse-blue" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve-bg.png" class="cpca-curve-bg" alt="">
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="cpca-title-contant">
                    <h2>Our Pricing</h2>
                    <div class="cpca-pricing-title">
                        <div class="cpca-switcher cpca-switcher-left" data-position="1">
                            <span class="cpca-switcher-circle"></span>
                        </div>
                        <img class="pricing-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/pricing-arrow.png" alt="">
                        <p>10% offer after 500+ images</p>
                    </div>
                </div>
                <div class="cpca-grid cpca-pricing-grid cpca-grid-items ">
                    <div class="cpca-grid-item cpca-pricing-grid-item">
                        <div class="cpca-pricing-head cpca-pricing-head-1">
                            <h5>Simple</h5>
                        </div>
                        <div class="cpca-pricing-items">
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Clipping Path Service: $0.39</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Background Removal: $0.39</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Shadow Services: $0.49</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Image Masking: $0.49</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Photo Retouching: $0.49</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Ghost mannequin: $0.59</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Color Correction: $0.39</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>eCommerce Image Editing: $0.75</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Wedding Photo Editing: $2.25</p>
                            </div>
                            <a class="btn btn-primary cpca-pricing-btn border-none cpca-btn" href="https://clippingpathca.com/get-a-quote/ "><span>Create Order</span></a>
                        </div>
                    </div>
                    <div class="cpca-grid-item cpca-pricing-grid-item">
                        <div class="cpca-pricing-head cpca-pricing-head-2">
                            <h5>Medium</h5>
                        </div>
                        <div class="cpca-pricing-items">
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Clipping Path Service: $2</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Background Removal: $2</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Shadow Services: $2</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Image Masking: $2.39</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Photo Retouching: $2.21</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Ghost mannequin: $2.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Color Correction: $2.25</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>eCommerce Image Editing: $2.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Wedding Photo Editing: $8</p>
                            </div>
                            <a class="btn btn-primary cpca-pricing-btn cpca-pricing-btn-2 cpca-btn" href="https://clippingpathca.com/get-a-quote/"><span>Create Order</span></a>
                        </div>
                    </div>
                    <div class="cpca-grid-item cpca-pricing-grid-item">
                        <div class="cpca-pricing-head cpca-pricing-head-3">
                            <h5>Complex</h5>
                        </div>
                        <div class="cpca-pricing-items">
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Clipping Path Service: $8.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Background Removal: $8.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Shadow Services: $3</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Image Masking: $3</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Photo Retouching: $8.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Ghost mannequin: $11.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Color Correction: $9.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>eCommerce Image Editing: $9.99</p>
                            </div>
                            <div class="cpca-pricing-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right.png" alt="">
                                <p>Wedding Photo Editing: $15</p>
                            </div>
                            <a class="btn btn-primary cpca-pricing-btn cpca-btn" href="https://clippingpathca.com/get-a-quote/"><span>Create Order</span></a>
                        </div>
                    </div>
                </div>
                <div class="cpca-btn-item cpca-pricing-btn-fixd d-flex justify-content-center mt-5">
                    <a class="btn btn-primary cpca-btn service-btn" style="background: #5366DA;" href="https://clippingpathca.com/pricing/ ">
                        <span>View All Pricing</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow8.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
    <section class="cpca-testimonial-wrapper cpca-section-pad background-img">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="cpca-title-contant cpca-testimonial-title-content ">
                    <h2><span>Client Speaks</span> for us</h2>
                    <p>Our partners include 10,000+ professional organizations in 175+ country. We would love to give them thanks and love to say! You're the center of our universe.</p>
                </div>
                <div class="cpca-grid cpca-testimonial-grid cpca-grid-items">

                    <div class="cpca-grid-item cpca-testimonial-grid-item">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-one.png" alt="">
                            <p>I've managed to stay with <span>CLIPPING PATH CA</span> 3 times a week, for over 6 months now, and I love it all to the work make me feels very professional & thanks again for their editing process.</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author1.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Studio Owner</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-testimonial-grid-item ">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-two.png" alt="">
                            <p>I was introduced to CLIPPING PATH CA many years ago. I see a huge benefit till now with their <span>'Bulk Order'</span> and their combination of the workout so smooth, service turn around time nice as well.</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author2.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Online Store Owner</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-testimonial-grid-item ">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-three.png" alt="">
                            <p>I've relied on CLIPPING PATH CA because of many times for <span>high-quality Clipping Path Service</span> delivered me within overnight. So I'm really happy about their fast service.</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author3.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Digital Photographer</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-testimonial-grid-item">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-one.png" alt="">
                            <p>Absolutely I can recommend them because of their high and top-notch work. I asked for the <span>background removal</span> of several items in the photo. All were done within time. Top marks!</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author4.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Portrait Photographer</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-testimonial-grid-item ">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-two.png" alt="">
                            <p>Quick response and easy communication. Great work in restoring and <span>colorizing old photos</span>. Very pleased with the results</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author5.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Art Producer/Studio Manager</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="cpca-grid-item cpca-testimonial-grid-item ">
                        <div class="cpca-review">
                            <img class="item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/quotetion-three.png" alt="">
                            <p>The edit I requested was completed within the turnaround time frame I required. It was done well and I was very happy with the results</p>
                        </div>
                        <div class="cpca-review-author-details">
                            <div class="cpca-review-author-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/author6.png" alt="">
                            </div>
                            <div class="cpca-review-author-prfl">
                                <h5>Digital Operator/Photo Assistant</h5>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rateing.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!-- Accordion Section -->
    <section class="cpca-accordion-wrapper cpca-section-pad cpca-fancy-wrapper">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-purple.png" class="cpca-eclipse-purple" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-blue.png" class="cpca-eclipse-blue" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dotted-bg.png" class="cpca-dotted-bg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/curve-bg.png" class="cpca-curve-bg" alt="">
        </div>

        <div class="container">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="cpca-title-contant">
                    <h2>FAQ</h2>
                </div>
                <div class="cpca-grid cpca-accordion-grid cpca-grid-items ">
                    <div class="accordion cpca-accordion " id="accordionExample">
                        <div class="accordion-item cpca-accordion-item ">
                            <h2 class="accordion-header cpca-accordion-header " id="headingOne">
                                <button class="accordion-button cpca-accodion-btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus.png" alt=""> Do you have free trials?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse cpca-accodion-cllps collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Yes! We have. You can try our <a href="https://clippingpathca.com/free-trial/ ">free trials</a> to judge our work before giving us any project to handle. You can upload 2/3 photos with sets of instructions. We will edit them shortly, and you can judge us based on our work.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item cpca-accordion-item ">
                            <h2 class="accordion-header cpca-accordion-header " id="headingTwo">
                                <button class="accordion-button cpca-accodion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus.png" alt=""> How do I send you my files?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse cpca-accodion-cllps  collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>You can send us any file size using FTP, WeTransfer, Dropbox, Google Drive, or Any others. You can copy and paste the shareable link to the <a href="https://clippingpathca.com/free-trial/ ">free trial page</a> or <a href="https://clippingpathca.com/get-a-quote/ ">get a quote</a> page to fill up the form & then press submit button. Or you can directly mail us with your image shareable link. If you face any difficulties just <a href="https://clippingpathca.com/contact-with-us/">contact us</a>.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item cpca-accordion-item ">
                            <h2 class="accordion-header cpca-accordion-header " id="headingThree">
                                <button class="accordion-button cpca-accodion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus.png" alt=""> How long does it take to deliver?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse cpca-accodion-cllps collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We always try our best to deliver your photos within your timeframe.  But sometimes it becomes impossible to deliver photos in between this time because of server damages or any technical issues that may happen in the photo.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item cpca-accordion-item ">
                            <h2 class="accordion-header cpca-accordion-header " id="headingFour">
                                <button class="accordion-button cpca-accodion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus.png" alt=""> Can I get my order faster?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse cpca-accodion-cllps collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Absolutely, you can get your order faster. In order to deliver your images quickly, our expert design team and support work hard on a regular basis.</strong>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item cpca-accordion-item ">
                            <h2 class="accordion-header cpca-accordion-header " id="headingSix">
                                <button class="accordion-button cpca-accodion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/minus.png" alt=""> What if I'm not satisfied with the work?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse cpca-accodion-cllps collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>We allow unlimited revisions. If you are unsatisfied with the editing, request a free correction and give us further instructions to correct our mistakes. Customer Satisfaction is our first priority.</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer Section -->
    <footer class="cpca-footer-wrapper cpca-section-pad cpca-fancy-wrapper">
        <div class="cpca-fancy-items">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-green.png" class="cpca-eclipse-green" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eclipse-durk-blue.png" class="eclipse-durk-blue" alt="">
        </div>
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <div class="cpca-grid cpca-footer-grid cpca-grid-items ">
                    <div class="cpca-get-start-us">
                        <div class="cpca-brand-item">
                            <h5>Get Started with Us Today!</h5>
                        </div>
                        <img  class="cpca-brand-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Up-right.png" alt="">
                        <div class="cpca-get-start-us-btn">
                            <a class="btn cpca-pricing-btn cpca-btn" href="https://clippingpathca.com/free-trial/ "><span>Free Trial</span></a>
                        </div>
                    </div>
                    <div class="cpca-grid-item cpca-footer-grid-item ">
                        <div class="cpca-footer-logo">
                            <img class="cpca-footer-logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                        </div>
                        <div class="cpca-footer-contact">
                            <div class="cpca-footer-contact-items">
                                <div class="cpca-footer-contact-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/call.png" alt="">
                                    <p>+1 (917) 936-4784</p>
                                </div>
                                <div class="cpca-footer-contact-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sms.png" alt="">
                                    <p>admin@clippingpathca.com</p>
                                </div>
                            </div>
                            <div class="cpca-social-icon">
                                <a target="_blank" href="https://www.facebook.com/ClippingPathCaDotCom/ "><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt=""></a>
                                <a target="_blank" href="https://twitter.com/ClippingPathCA "><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twiter.png" alt=""></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCAFb8HkCaaT0Yq5al6i9tRA"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt=""></a>
                                <a target="_blank" href="https://www.linkedin.com/company/clipping-path-ca"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lin.png" alt=""></a>
                                <a target="_blank" href="https://www.pinterest.com/clippingpathca/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.png" alt=""></a>
                                <a target="_blank" href="https://www.instagram.com/clippingpathca_dotcom/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta.png" alt=""></a>
                            </div>
                            <div class="cpca-form-submit">
                                <h5>Get Update From Our Newsletter</h5>
                                <input class="cpca-submit-form" placeholder="Enter your email" type="text" name="">
                                <a href="#" class="cpca-submit-btn">Send</a>
                            </div>
                        </div>
                    </div>
                    <div class="cpca-grid-item cpca-footer-grid-item ">
                        <div class="cpca-footer-service">
                            <div class="cpca-footer-service-header">
                                <h5>Service</h5>
                            </div>
                            <div class="cpca-footer-service-content">
                                <ul>
                                    <li><a target="_blank" href="https://clippingpathca.com/clipping-path-service/">Clipping Path Service</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/photo-retouching-services/">Photo Retouching Service</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/photoshop-shadow-service/">Photoshop Shadow Service</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/image-masking-service/">Image Musking Services</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/color-correction-services/">Color Correction Services</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/ghost-mannequin-service/">Ghost Mannequin Service</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/e-commerce-photo-editing/">eCommerce Photo Editing</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/photo-restoration-services/">Photo Restoration Services</a></li>
                                    <li><a target="_blank" href="https://clippingpathca.com/real-estate-photo-editing">Real Estate Photo Editing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cpca-grid-item cpca-footer-grid-item cpca-footer-payment">
                        <div class="cpca-payment-item">
                            <div class="cpca-footer-service">
                                <div class="cpca-footer-service-header"> 
                                    <h5>Useful Links</h5>
                                </div>
                                <div class="cpca-footer-service-content">
                                    <ul>
                                        <li><a target="_blank" href="http://clippingpathca.com/">Home</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/portfolio/">Portfolio</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/pricing/">Pricing</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/free-trial/">Free Trial</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/get-a-quote/">Get a Quote</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cpca-footer-service">
                                <div class="cpca-footer-service-header">
                                    <h5>Resource</h5>
                                </div>
                                <div class="cpca-footer-service-content">
                                    <ul>
                                        <li><a target="_blank" href="https://clippingpathca.com/privacy-policy/">Privacy Policy</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/help-center/">Help Center</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/contact-with-us/">Contact Us</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/free-trial/">Blog</a></li>
                                        <li><a target="_blank" href="https://clippingpathca.com/write-for-us/">Write For Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cpca-payment-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cpca-copy-right-section text-center">
            <p><a>ClippingPathCA©2022. All Rights Reserved</a></p>
        </div>
    </footer>

    <!-- Bootstrap Link Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- JS and JQuery Link Here -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <!-- After & Before Link Here -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/beforeafter.jquery-1.0.0.min.js"></script>
    <!-- Counter Plugin Link Here -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
    <!-- Slick Slider Link Here -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <!-- Custome file Link Here -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/my.js"></script>
</body>

</html>
