<header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href=<?php echo site_url('ternvagler/index')?> class="text-black h2 mb-0">Ternvagler</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href=<?php echo site_url('ternvagler/index')?>>Home</a>
                </li>
                <li class="has-children">
                  <a href="#">Destinations</a>
                  <ul class="dropdown">
                    <li><a href="#">Japan</a></li>
                    <li><a href="#">Europe</a></li>
                    <li><a href="#">China</a></li>
                    <li><a href="#">France</a></li>
                  </ul>
                </li>
                
                <li class="<?php echo activate_menu('ternvagler/discount'); ?>"><a href=<?php echo site_url('ternvagler/discount')?>>Discount</a></li>
                <li><a href=<?php echo site_url('ternvagler/about')?>>About</a></li>
                <li><a href=<?php echo site_url('ternvagler/blog')?>>Blog</a></li>
                
                <li><a href=<?php echo site_url('ternvagler/contact')?>>Contact</a></li>
                <li><a href=<?php echo site_url('ternvagler/login')?>>Login</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <!-- <li>
                  <a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
                </li> -->
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-linkedin"></span></a> 
                </li>
                
                
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>