<?php

include "dbconnect.php";
$base_url = "https://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$base_asset = "https://".$_SERVER['HTTP_HOST']."/asset_promo_2/";
$slider_asset = "https://".$_SERVER['HTTP_HOST']."/adminpromobintaro/uploads/product/promo/";

$uriSegments = explode("/", $_SERVER['PHP_SELF']);
$lastUriSegment = $uriSegments[1];
$lastUri = str_replace(array('search','kompas','detik','gdn','fb','ig','cinema','youtube','outdoor','ruby','ayla'), '',$lastUriSegment);
$query_2 = "SELECT * FROM global_data where pvar2='promo' and pvar4='$lastUri' ORDER by id LIMIT 1";

$result_2 = mysqli_query($connect,$query_2);
$row_2 = $result_2->fetch_array(MYSQLI_ASSOC);

$path_folder = $row_2["pvar4"];
$base_folder = "https://".$_SERVER['HTTP_HOST']."/".$path_folder."/";
$color_site = "#083863";
$ref_id = $row_2["id"];

$uri_path = parse_url($base_url, PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$uri_title = $uri_segments[1];

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122819032-2"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-122819032-2');
</script>


  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- ==============================================
Title and Meta Tags
=============================================== -->
  <meta charset="utf-8">
  <title>PROMO BINTARO ::<?php echo $row_2["pvar3"]; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ==============================================
Favicons
=============================================== -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $base_asset; ?>apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_asset; ?>apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_asset; ?>apple-touch-icon-114x114.png">
  <!-- ==============================================
CSS
=============================================== -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <link rel="stylesheet" href="<?php echo $base_asset; ?>css/font-awesome.min.css">
  <link href="<?php echo $base_asset; ?>css/animate.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo $base_asset; ?>css/style-v2.css">
  <link rel="stylesheet" href="<?php echo $base_asset; ?>css/queries-v2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="<?php echo $base_asset; ?>/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo $base_asset; ?>/css/owl.theme.css">
  <!-- ==============================================
JS
=============================================== -->

  <script src="<?php echo $base_asset; ?>js/modernizr.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo $base_asset; ?>js/move-top.js"></script>
  <script type="text/javascript" src="<?php echo $base_asset; ?>js/easing.js"></script>
  <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
  <style>
     .img_list{
       padding: 0;
      }
    .img_list li{
      display: inline-block;
    }
    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
      display: block;
    }

    h1,h3,h4,h5,h6,#number-call,#click-to-call {
      color:  <?php echo $color_site; ?>;
    }

    #special { background:   <?php echo $color_site; ?> }

    .btn-primary {

      background-color:  <?php echo $color_site; ?>;
      border-color:  <?php echo $color_site; ?>;

    }

    .carousel-indicators {

      justify-content: right;
      padding-left: 0;
      margin-right: 0;
      margin-left: 0;
      bottom: -80px;
      background: <?php echo $color_site; ?>;
      width: 250px;
      padding: 20px;
      right: 0;
      left: inherit;


    }


    .starrating > input {display: none;}  /* Remove radio buttons */

    .starrating > label:before {
      content: "\f005"; /* Star */
      margin: 2px;
      font-size: 3em;
      font-family: FontAwesome;
      display: inline-block;
    }

    .starrating > label
    {
      color: #222222; /* Start color when not clicked */
    }

    .starrating > input:checked ~ label
    { color: #ffca08 ; } /* Set yellow color when star checked */

    .starrating > input:hover ~ label
    { color: #ffca08 ;  } /* Set yellow color when star hover */


    #third-section img {
        width: 134px;
        height: 239px;
        object-fit: contain;
    }
  </style>


   <!-- Optimized Indonesia Tag Handler -->
   <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MNNT88"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                                                        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
          '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                              })(window,document,'script','dataLayer','GTM-MNNT88');</script>
  <!-- End Optimized Indonesia Tag Handler -->
</head>

<body>

  <header class="container-fluid">
    <div class="row">
        <div class="col-6 col-lg-4">
          <a href="https://www.bintarojaya.id"><img class="img-fluid logo-header" src="https://bintarojaya.id/assets/bintaro/img/logo-small.png"/></a>
        </div>
        <div class="col-6 col-lg-8">
          <nav class="nav-dp">
            <ul id="menu">
              <li><a class="" href="#home">Home</a></li>
              <li><a class="" href="#detail-promosi">Detail Promosi</a></li>
              <li><a class="" href="#resedential-produk">Residential Produk</a></li>
              <li><a class="" href="#kontak-kami">Kontak Kami</a></li>
            </ul>
          </nav>
          <nav class="nav-mobile">
            <div class="button-menu-mobile">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </nav>
        </div>
    </div>
    <div class="menu-mobile">
      <ul id="menu">
        <li><a class="" href="#home">Home</a></li>
        <li><a class="" href="#detail-promosi">Detail Promosi</a></li>
        <li><a class="" href="#resedential-produk">Residential Produk</a></li>
        <li><a class="" href="#kontak-kami">Kontak Kami</a></li>
      </ul>
    </div>
  </header>

  <div class="container-fluid main">
    <div class="row justify-content-md-center">
      <div id="wrapper">
        <section id="home" class="mb-5">
          <img data-toggle="modal" data-target="#popwa" class="img-fluid float-carousel" src="https://bintarojaya.id/asset_promo_2/images/wa-amorel-lp.png" class="img-responsive" style="object-fit:contain;" />
          <div class="container-fluid">
            <div class="row ">
              <!-- Slider -->
              <div class="col-md-12 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                  <div class="carousel-inner" role="listbox">
                    <!-- <?php
                      $query = "SELECT * FROM gallery where ref_id=$ref_id ORDER by img_order ASC";
                      $result = mysqli_query($connect,$query);
                      $i=0;
                      $s=0;
                      foreach ($result as $row) { ?>
                    <div class='carousel-item <?php if($i <=0){ echo " active ";} ?>'><img src="<?php echo $slider_asset; ?>/<?php echo $row['img_name']; ?>" class='d-block img-fluid'></div>
                      <?php $i++; } ?> -->
                    <div class='carousel-item active'>
                      <img src="https://www.bintarojaya.id/asset_promo_2/images/bebasppn2/BINTARO--PAYLESS.jpg" width="100%" class='d-block img-fluid'>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--  End Slider -->
          </div>
        </section>
        <section id="form-section" class="mb-5">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-12 col-md-12 wow fadeInRight" data-wow-delay="0.4s" id="details-form1">
                <div class="description">
                  <div id="kontak-kami"></div>
                  <div class="help-block with-errors" id="mailfailed"></div>
                  <h4 class="text-center mb-5 font-weight-bold">Dapatkan detail produk serta e-brosur dan e-pricelist<br/>dengan mengisi data pada from di bawah ini</h4>
                  <form method="post" class="form-control-borderless" id="form-save">
                    <div class="row">
                      <div class="col-lg-7">
                        <div class="form-row">
                          <div class="form-group control-group col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Nama..." name="name"  required>
                          </div>
                          <div class="form-group control-group col-sm-6">
                            <input type="email" class="form-control" id="email" placeholder="Email..."  name="email" required>
                          </div>
                          <div class="form-group control-group col-sm-6">
                            <input type="text" class="form-control" id="phone" placeholder="No Telp..." name="phone"  required>
                          </div>
                          <div class="form-group control-group col-sm-6">
                            <select class="form-control" id="city" name="city" required>
                              <option value="0">Please Select</option>
                              <option value="Jakarta barat">Jakarta Barat</option>
                              <option value="Jakarta timur">Jakarta Timur</option>
                              <option value="Jakarta selatan">Jakarta Selatan</option>
                              <option value="Jakarta pusat">Jakarta Pusat</option>
                              <option value="Jakarta Utara">Jakarta Utara</option>
                              <option value="Tangerang">Tangerang</option>
                              <option value="Tangerang Selatan">Tangerang Selatan</option>
                              <option value="Bogor">Bogor</option>
                              <option value="Depok">Depok</option>
                              <option value="Bekasi">Bekasi</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group control-group col-lg-5">
                        <h4 class="text-center rate-us">Beri Penilaian Terhadap  Iklan Kami</h4>
                        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                          <input type="radio" id="star5" name="rating" value="5"/><label for="star5" title="5 star"></label>
                          <input type="radio" id="star4" name="rating" value="4"/><label for="star4" title="4 star"></label>
                          <input type="radio" id="star3" name="rating" value="3"/><label for="star3" title="3 star"></label>
                          <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                          <input type="radio" id="star1" name="rating" value="1" required /><label for="star1" title="1 star"></label>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block" id="btnsubmit">Kirim Sekarang</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="second-section" class="mb-2">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="text-center">
                  <h4 class="font-weight-bold s1">Bintaro Jaya mempersembahkan Lebaran Big Sale.<br> Segera miliki rumah di Bintaro Jaya dan nikmati program barunya,<br> yang memberikan lebih banyak keuntungan dan lebih banyak<br> kemudahan apabila makin cepat belinya.</h4>
                </div>
                <div class="line"></div>
                <div id="detail-promosi" class="text-center">
                  <h4 class="font-weight-bold s2" style="text-transform: uppercase;font-size:36px;">LEBARAN BIG SALE<br/>BUY NOW PAY LESS<br/><span style="font-size:20px;">Jangan Ada PPN di Antara Kita</span></h4>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="third-section" class="mb-5">
          <div class="container">
            <div class="row d-none d-lg-flex justify-content-center">
              <ul class="img_list">
                <li>
                  <img class="img-fluid " src="<?php echo $base_asset; ?>images/lebaranbigsale/GimmickAprilUpTo.png"/>
                </li>
                <li>
                  <img class="img-fluid " src="<?php echo $base_asset; ?>images/lebaranbigsale/GimmickAprilAirport.png"/>
                </li>
              </ul>
            </div>
            <div class="row d-flex d-lg-none" style="position:relative;">
              <div class="third-section-slider owl-theme owl-carousel">
                <img class="img-fluid d-flex align-items-center justify-content-center item" src="<?php echo $base_asset; ?>images/lebaranbigsale/GimmickAprilUpTo.png"/>
                <img class="img-fluid d-flex align-items-center justify-content-center item" src="<?php echo $base_asset; ?>images/lebaranbigsale/GimmickAprilAirport.png"/>
              </div>
            </div>
          </div>
        </section>
        <section id="location-section">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-12 mb-4 d-flex align-items-center justify-content-center">
                <h4 class="text-center">Lokasi Strategis</h4>
              </div>
              <div class="col-12 col-lg-12 mb-4 d-flex align-items-center justify-content-center">
                <img class="img-fluid lokasi_strategis" src="<?php echo $base_asset; ?>images/lokasi_strategis.svg" width="150px"/>
              </div>
              <div class="col-12 col-lg-12 d-flex align-items-center justify-content-center">
                <h4 id="resedential-produk" class="text-center font-weight-bold">Bintaro Jaya berlokasi strategis hanya 5 menit dari <br/>Jakarta Selatan dan Jakarta Barat</h4>
              </div>
              <div  class="line" style="background-color:#a5a5a5;"></div>
              <!-- <div class="col-12">
                <h4 class="text-center font-weight-bold mt-3 mb-5">DISCOVERY AMORE</h4>
              </div>
              <div class="col-12">
                <div class="desc-wrapper">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Village" role="tabpanel" aria-labelledby="pills-satu-tab">
                      <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                          <div class="slider-img slider-villages owl-carousel owl-theme">
                            <img class="img-fluid item" src="https://www.bintarojaya.id/asset_promo_2/images/lunar/LUNAR-NEW-DEALS-01.jpg" class="img-responsive" alt="Ruko uville">
                            <img class="img-fluid item" src="https://www.bintarojaya.id/asset_promo_2/images/lunar/LUNAR-NEW-DEALS-02.jpg" class="img-responsive" alt="Ruko uville">
                            <img class="img-fluid item" src="https://www.bintarojaya.id/asset_promo_2/images/lunar/LUNAR-NEW-DEALS-03.jpg" class="img-responsive" alt="Ruko uville">
                            <img class="img-fluid item" src="https://www.bintarojaya.id/asset_promo_2/images/lunar/LUNAR-NEW-DEALS-04.jpg" class="img-responsive" alt="Ruko uville">
                            <img class="img-fluid item" src="https://www.bintarojaya.id/asset_promo_2/images/lunar/LUNAR-NEW-DEALS-05.jpg" class="img-responsive" alt="Ruko uville">

                          </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="slider-desc">
                              <h3>Discovery Amore</h3>
                              <p>Discovery Amore menyinari daerah sekitarnya dengan gaya mewah dan arsitektur bermartabat. Menawarkan hanya seratus empat puluh rumah eksklusif dengan set fitur smarthome, taman yang indah dan fasilitas luar biasa yang mempersembahkan gaya hidup dan hiburan terbaik untuk memenuhi kebutuhan rumah masa depan Anda.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="slider-desc">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9811909453847!2d106.69304361476934!3d-6.266203695464485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb180b60449d%3A0x5c1a02596403f490!2sDiscovery%20Amore!5e0!3m2!1sid!2sid!4v1611746831776!5m2!1sid!2sid" width="100%" height="180" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="">
                            <div  class="line" style="background-color:#a5a5a5;"></div>
                            <h4 class="text-center font-weight-bold mt-3 mb-5">RUKO ARCADE 5</h4>
                            <div class="d-flex justify-content-center mt-4 mb-4 bin-kav-container">
                              <img src="http://bintarojaya.id/asset_promo_2/images/lunar/BINTAROLUNARNEWDEAL.jpg" width="100%" height="200px" class="img-fluid bin-kav" alt="bintaro-kav" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>
        <!-- <section id="third-section" class="mb-5 mt-5">
            <div id="detail-promosi" class="text-center">
              <h4 class="font-weight-bold s2" style="text-transform: uppercase;font-size:50px;">CASHBACK 10JT*</h4>
            </div>
          <div class="container">
            <div class="row d-none d-lg-flex justify-content-center">
              <ul class="img_list">
                <li>
                  <img class="img-fluid " src="<?php echo $base_asset; ?>images/lunar/Gimmick1Jan.png"/>
                </li>
                <li>
                  <img class="img-fluid " src="<?php echo $base_asset; ?>images/lunar/Gimmick2Jan.png"/>
                </li>
                <li>
                  <img class="img-fluid " src="<?php echo $base_asset; ?>images/lunar/hadiah_langsung.png"/>
                </li>
              </ul>
            </div>
            <div class="row d-flex d-lg-none" style="position:relative;">
              <div class="third-section-slider owl-theme owl-carousel">
                <img class="img-fluid d-flex align-items-center justify-content-center item" src="<?php echo $base_asset; ?>images/lunar/Gimmick1Jan.png"/>
                <img class="img-fluid d-flex align-items-center justify-content-center item" src="<?php echo $base_asset; ?>images/lunar/Gimmick2Jan.png"/>
                <img class="img-fluid d-flex align-items-center justify-content-center item" src="<?php echo $base_asset; ?>images/lunar/hadiah_langsung.png"/>
              </div>
            </div>
          </div>
        </section> -->
        <section id="video-section">
          <div class="container">
            <div class="row">
              <div class="col-12 mt-5 mb-5">
                <div class="desc-wrapper2">
                <iframe class="vid-yt" width="100%" height="420px" src="https://www.youtube.com/embed/8_0FH06WQcI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="contact">
          <div class="container">

            <div class="row">
              <div class="col-xs-12 col-lg-5 col-md-12 wow  fadeInRight" data-wow-delay="0.4s">
                <div class="addres-office">
                  <p>MARKETING GALLERY</p>
                  <p>
                    Boulevard Bintaro Jaya, Blok B7/c2 No.1<br>
                    Bintaro Jaya Sektor 7, Tangerang 15224<br>
                  </p>
                  <div class="phone-fax">
                    <p>
                      PHONE&nbsp;: (021) 7454545<br/>
                      FAX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: (021) 7450544
                    </p>
                    <p>www.bintarojaya.id</p>
                    <p class="mb-0 mb-lg-2 mt-4">FOLLOW US ON</p>
                    <ul class="logo-sosmed">
                      <li><a href="https://www.instagram.com/bintarojaya.official/"><img class="img-fluid" src="<?php echo $base_asset; ?>images/ig.png"/></a></li>
                      <li><a href="https://web.facebook.com/bintarojaya.official/?modal=admin_todo_tour"><img class="img-fluid" src="<?php echo $base_asset; ?>images/fb.svg"/></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col col-lg-7 col-md-12 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3965.857297318127!2d106.7250888!3d-6.2824832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x604c9208328e5e33!2sMarketing+Gallery+Bintaro+Jaya!5e0!3m2!1sid!2sid!4v1541133744410" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- Footer  -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-7 mt-4 mb-4">
                <p>© 2020- PT Jaya Real Property,Tbk</p>
              </div>
              <div class="col-5 mt-4 mb-4 d-flex justify-content-end">
                <img style="object-fit:contain;" src="<?php echo $base_asset; ?>images/logo-jaya.jpg" class="img-responsive">
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <!-- popUp no wa -->
  <div class="modal fade" id="popwa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h4 class="text-center mb-4">Masukan No Whatsapp Anda Untuk Memulai Chat Dengan Sales Representative Kami</h4>
          <form method="post" id="form-save-wa" data-toggle="validator">
            <div class="form-group">
              <label for="nomorwa">Nomor Whatsapp*</label>
              <input type="number" class="form-control" id="phonewa" name="phonewa" required>
              <small id="emailHelp" class="form-text text-muted">Aturan Privasi: Kerahasiaan data Anda terjamin keamanannya</small>
            </div>
            <button type="submit" class="btn btn-primary btn-block" id="btnsubmit-wa">CHAT SEKARANG</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="<?php echo $base_asset; ?>/js/owl.carousel.min.js"></script>
  <script>
    function initialize() {
      var myLatlng = new google.maps.LatLng(-6.232723, 106.679923);
      var mapOptions = {
        center: myLatlng,
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.TERRAIN,
        scrollwheel: true,
        draggable: true,
        panControl: true,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: true,
        overviewMapControl: true,
        rotateControl: true,
      };
      var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      var marker = new google.maps.Marker({
        position: myLatlng,
      });
      marker.setMap(map);
      map.setOptions({ styles: stylesArray });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- <script src="js/wow.min.js"></script> -->
  <!-- <script> new WOW().init();</script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
  <script>


    function onScroll() {
        var scrollPos = $(document).scrollTop() + 80;
        $('#menu li a').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr('href'));

            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('#menu a').removeClass('active');
                currLink.addClass('active');
            }
        });
    }

    $(document).ready(function () {

      $(document).scroll(onScroll);

      $('#menu a[href^="#"]').click(function(e) {
      e.preventDefault();
      $(document).off('scroll');

      $('a').each(function() {
          $(this).removeClass('active');
      });

      $(this).addClass('active');

      var target = this.hash,
          $target = $(target);

      $('html, body').stop().animate({
          scrollTop: $target.offset().top - 110
      }, 100, 'swing', function() {
          $(document).scroll(onScroll);
      });
  });


      jQuery.validator.addMethod("noSpace", function(value, element) {
        return value.indexOf(" ") < 0 && value != "";
      }, "No space please and don't leave it empty");

      jQuery.validator.addMethod("selectOption", function(value, element) {
        return value != "0"
      }, "Kota wajib diisi");


      $( "#form-save" ).validate({
        rules: {
          name: {
            required: true,
            minlength: 3,
            noSpace:true
          },
          email: {
            required: true,
            email: true

          },
          phone: {
            required: true,
            minlength: 7,
            number: true
          },
          city:{
            selectOption: true
          },
          category:{
            selectOption: true
          },
          rating: {
            required: true
          }
        },
        submitHandler: function(form) {
          var openpopup = window.open('<?php echo $base_folder; ?>thankyou.php', '_blank');
          var formData = new FormData($("#form-save")[0]);
          url="<?php echo $base_folder; ?>contact.php?uri_title=<?php echo $uri_title; ?>"
          console.log(url);
          ajax = new XMLHttpRequest();
          ajax.open("POST", url, true);
          // ajax.setRequestHeader("Content-type", "application/json");
          ajax.send(formData);
          return false;
        }
      });
      $( "#form-save-wa" ).validate({
        rules: {
          phonewa: {
            required: true,
            noSpace:true,
            number: true
          }
        },
        submitHandler: function(form) {
          var formData2 = new FormData($("#form-save-wa")[0]);
          url="<?php echo $base_folder; ?>contact_wa.php?uri_title=<?php echo $uri_title; ?>"
          ajax = new XMLHttpRequest();
          ajax.open("POST", url, true);
          ajax.send(formData2);
          $('#popwa').modal('hide');

          gtag('event', 'click', {
            'event_category': 'button',
            'event_label': 'wa_lunar2021'
          });
            window.open("https://wa.me/62817745455");
          return false;
        }
      });

      $('.button-menu-mobile').click(function (params) {
        $('.menu-mobile').toggleClass("open")
      })

      $('.nav-pills li a').click(function () {
       $('.nav-pills li a').removeClass('active');
      });

      $('.slider-villages').owlCarousel({
        items:1,
        center:true,
        dots:true,
      })

      $('.third-section-slider').owlCarousel({
        items:1,
        navText: [$('.am-next'),$('.am-prev')],
        nav:true,
        dots: true
      })

      $('.btnNext').click(function() {
        $('.nav-pills .active').parent().next('li').find('a').trigger('click');
      });

      $('.btnNext2').click(function() {
        $('.nav-pill-2 .active').parent().next('li').find('a').trigger('click');
      });

      $('.btnPrevious').click(function() {
        $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
      });

    });
  var scrollPos = $(document).scrollTop() + 80;

  </script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
</body>
</html>

