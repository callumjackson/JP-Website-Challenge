<?php
include 'HeadItems.php' ;
 ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	  <title><?php echo $PageTitle ?></title>
      <meta name="keywords" content="<?php echo $Keywords ?>">


      	<meta name="description" content="<?php echo $PageDisc ?>"/>
      	<!-- Schema.org markup for Google+ -->
      	<meta itemprop="name" content="<?php echo $PageTitle ?>"/>
      	<meta itemprop="description" content="<?php echo $PageDisc ?>"/>
      	<meta itemprop="image" content="<?php echo $FrontImgAddress ?>"/>
      	<!-- Twitter Card data -->
      	<meta name="twitter:card" content="summary_large_image"/>
      	<meta name="twitter:title" content="<?php echo $PageTitle ?>"/>
      	<meta name="twitter:description" content="<?php echo $PageDisc ?>"/>
      	<!-- Twitter summary card with large image must be at least 280x150px -->
      	<meta name="twitter:image:src" content="<?php echo $FrontImgAddress ?>"/>
      	<!-- Open Graph data -->
      	<meta property="og:title" content="<?php echo $PageTitle ?>"/>
      	<meta property="og:type" content="website"/>
      	<meta property="og:url" content="<?php echo $PageAddress ?>"/>
      	<meta property="og:image" content="<?php echo $FrontImgAddress ?>"/>
      	<meta property="og:description" content="<?php echo $PageDisc ?>"/>
      	<meta property="og:site_name" content="<?php echo $PageTitle ?>"/>
      	<meta property="article:published_time" content="<?php echo $CreateTime ?>"/>
      	<meta property="article:modified_time" content="<?php echo $EditTime ?>"/>
      	<meta property="article:section" content="Article Section"/>
      	<meta property="article:tag" content="Article Tag"/>
      	<!-- DEVICE ICONS -->
      	<meta name="viewport" content="width=device-width, initial-scale=1"/>
      	<link rel="icon" href="<?php echo $LogoImg ?>">
      	<link rel="shortcut icon" href="<?php echo $LogoImg ?>" />
      	<link rel="apple-touch-icon" href="<?php echo $LogoImg ?>"/>
      	<link rel="apple-touch-icon-precomposed" href="<?php echo $LogoImg ?>"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen"/>
      <link type="text/css" rel="stylesheet" href="css/own-css.css" media="screen">
      <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">

    </head>
    <body>
      <section>
        <div  class="scrollspy" id="main">
          <!-- top of the page -->
        </div>

<div class="fixed-action-btn">
  <a href="#main" class="btn-floating btn-large red">
    <i class="large material-icons">arrow_upward</i>
  </a>
</div>
      </section>
      <header>




        <!-- area containing the nav bar -->
        <div class="navbar-fixed">

        <nav>

  <div class="nav-wrapper">
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">apps</i></a>

    <div class="logo-wrapper">
      <a href="" class="brand-logo"><img class="JP-logo" src="assets/JP-logo/logo-small-white.svg" alt="JP logo"></a>
      <a href=""class="title-text hide-on-med-and-down">Company Name</a>
    </div>
    <ul class="right hide-on-med-and-down nav-links">
      <li><a href="#main">Home</a></li>
      <li><a href="#section1">Section 1</a></li>
      <li><a href="#section2">Section 2</a></li>
    </ul>
  </div>


<ul class="sidenav" id="mobile-demo">
  <li><a href="index.html">Home</a></li>
  <li><a href="#sec2-mob">Section 1</a></li>
  <li><a href="#section2">Section 2</a></li>
</ul>

</nav>
  </div>
      </header>
      <main>
        <section class="section">
          <div class="home-content">
            <div class="container">
              <h1 class="title-page">Company Name</h1>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra, turpis at facilisis
                 aliquet, augue ligula cursus nisl, a commodo sapien diam pretium ex. Nullam viverra sem sed
                 magna posuere, et laoreet quam ultricies.</h5>
              <p class="main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra, turpis at facilisis
                aliquet, augue ligula cursus nisl, a commodo sapien diam pretium ex. Nullam viverra sem sed
                magna posuere, et laoreet quam ultricies. Phasellus varius varius blandit. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Integer tempor suscipit felis, in suscipit tortor
                dapibus id. Donec suscipit tristique dui vitae ullamcorper. Praesent laoreet eleifend augue,
                viverra condimentum turpis posuere mollis. Proin pharetra, turpis at facilisis
                   aliquet, augue ligula cursus nisl, a commodo sapien diam pretium ex. Nullam viverra sem sed
                   magna posuere, et laoreet quam ultricies. Integer tempor suscipit felis, in suscipit tortor
                   dapibus id.</p>
              <a class="home-bottom-link" href="#section1">Read more <i class="tiny material-icons">arrow_drop_down_circle</i></a>
            </div>
          </div>
      </section>
      <div class="parallax-container">
        <div class="parallax"><img src="assets/homepage/para1.jpg" alt="orange mountain"></div>
      </div>
      <section class="">
        <div class="section1">
          <div class="container center">
            <div class="row">
              <div class="col s12 m4">
                <div class="header-attributes">
                  <br>
                  <div class="header-content">
                    <h2 class="scrollspy" id="section1">Heading 1</h2>
                    <br>
                    <ul>
                      <li><p><i class="tiny material-icons">details</i> Bullet1</p></li><br>
                      <li><p><i class="tiny material-icons">details</i> Bullet2</p></li><br>
                      <li><p><i class="tiny material-icons">details</i> Bullet3</p></li>
                    </ul>
                  </div>
                  <br>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="header-attributes">
                  <br>
                  <div class="header-content">
                    <h2>Heading 2</h2>
                    <br>
                    <p class="justify ">Etiam eget viverra tellus, vel dapibus ipsum. Donec condimentum mattis
                      tortor, in porttitor erat tempus at. Vestibulum luctus porttitor mi vitae finibus.
                      Maecenas ullamcorper ligula sed purus aliquam, quis cursus orci maximus. Aliquam nec odio
                       et massa ornare semper vel volutpat elit. Pellentesque id lorem id metus laoreet
                       tristique in in dui. In vel lorem sed neque hendrerit ultrices. Phasellus consectetur
                       faucibus neque non convallis. In non felis sed ex tempor posuere sed ac arcu.</p>
                       <p>Praesent quis vehicula tellus, vitae eleifend erat. Aliquam in libero sapien.
                         Praesent blandit dui dolor, ac laoreet neque interdum in. Mauris vitae neque orci.</p>
                  </div>
                  <br>
                </div>
              </div>
              <div class="col s12 m4">
                <div class="header-attributes">
                  <br>
                  <div class="header-content">
                    <h2>Heading 3</h2>
                    <br>
                    <ul>
                      <li><p><i class="tiny material-icons">details</i> Praesent quis vehicula tellus, vitae eleifend erat. Aliquam in libero sapien. Praesent blandit dui dolor, ac laoreet neque interdum in. Mauris vitae neque orci.</p></li><br>
                      <li><p><i class="tiny material-icons">details</i> Praesent quis vehicula tellus, vitae eleifend erat. Aliquam in libero sapien. Praesent blandit dui dolor, ac laoreet neque interdum in. Mauris vitae neque orci.</p ></li><br>
                      <li><p><i class="tiny material-icons">details</i> Praesent quis vehicula tellus, vitae eleifend erat. Aliquam in libero sapien. Praesent blandit dui dolor, ac laoreet neque interdum in. Mauris vitae neque orci.</p></li><br>
                    </ul>
                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <div class="parallax-container">
      <div class="parallax"><img src="assets/homepage/para2.jpg" alt="purple mountian"></div>
    </div>
<section>
  <div class="section2">
    <div class="section2-content">
      <div class="row">
        <div class="col s12 m5">
          <div class="section3-content" >
            <div class="section3-text" id="sec2-mob">
              <h2 class="scrollspy" id="section2">Heading<br>Level<br>One</h2>
              <p>Etiam eget viverra tellus, vel dapibus ipsum. Donec condimentum mattis
                tortor, in porttitor erat tempus at. Vestibulum luctus porttitor mi vitae finibus.
                Maecenas ullamcorper ligula sed purus aliquam, quis cursus orci maximus. Aliquam nec odio
                 et massa ornare semper vel volutpat elit. Pellentesque id lorem id metus laoreet
                 tristique in in dui. In vel lorem sed neque hendrerit ultrices. Phasellus consectetur
                 faucibus neque non convallis. In non felis sed ex tempor posuere sed ac arcu.</p>
                 <p>Etiam eget viverra tellus, vel dapibus ipsum. Donec condimentum mattis
                   tortor, in porttitor erat tempus at. Vestibulum luctus porttitor mi vitae finibus.
                   Maecenas ullamcorper ligula sed purus aliquam, quis cursus orci maximus. Aliquam nec odio
                    et massa ornare semper vel volutpat elit. Pellentesque id lorem id metus laoreet
                    tristique in in dui. In vel lorem sed neque hendrerit ultrices. Phasellus consectetur
                    faucibus neque non convallis. In non felis sed ex tempor posuere sed ac arcu.</p>
                    <hr class="sec3-hr">
                    <br>
                    <a class="home-bottom-link">Our Asset Prortfolio <i class="tiny material-icons">play_circle_filled</i></a>

                    <div class="nav-arrows">
                      <div class="left-arrow">
                        <img src="assets/arrow-links/left.jpg" alt="left arrow">
                      </div>
                      <div class="right-arrow">
                        <img src="assets/arrow-links/right.jpg" alt="right arrow">
                      </div>
                    </div>
              </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</section>

      </main>
      <footer class="page-footer">
                <div class="container">
                  <div class="row">
                    <div class="col l6 s12">
                      <img class="footer-logo" src="assets\JP-logo\logo-small-black.svg" alt="full JP logo">
                      </div>
                    <div class="col l4 offset-l2 s12">
                      <ul class="footer-list">
                        <li><a class="grey-text text-lighten-3" href="#!">accessibility</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Sitemap</a></li>
                      </ul>
                      <img class="footer-img" src="assets\JP-logo\logo-full-black.svg" alt="full JP logo">
                    </div>
                  </div>
                </div>
                <div class="footer-copyright">
                  <div class="container">
                  © 2019 Company Name - by Callum Jackson
                  </div>
                </div>
              </footer>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/own-js.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    </body>
  </html>
