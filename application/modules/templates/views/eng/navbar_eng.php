 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-custom-2 fixed-top" id="mainNav">
     <div class="container">
         <a href="<?= base_url('blog') ?>"><img src="<?= base_url('assets/') ?>img/logo_small.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
             aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white " href="<?= base_url('blog') ?>">Home</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         About Us
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">About
                             Auriga</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">Law
                             Environment</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Auriga') ?>">Elearning</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/Kursus') ?>">Courses</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/Kalender') ?>">Calendar</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Forum
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Japri') ?>">Contact Calm Expert</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('blog/Blog/Diskusi') ?>">Forum Discussion</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('blog/Blog/TenagaAhli') ?>">Experts</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('blog/Blog/Kontak') ?>">Contact
                         Us</a>
                 </li>
                 <?php if (!$this->session->userdata('email')) {
                    ?>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white"
                         href="<?= base_url('auth/Auth/Registrasi') ?>">Registration</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('auth/Auth') ?>">Login</a>
                 </li>
                 <?php } ?>
                 <?php if ($user_session['level'] == 'admin') {
                    ?>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Data
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('user/Admin') ?>">User
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('user/Admin/AllNilai') ?>">Transcript
                         </a>
                     </div>
                 </li>
                 <?php } else if ($user_session['level'] == 'user') { ?>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('user/User') ?>">Transcript
                     </a>
                 </li>
                 <?php } else {
                    } ?>
                 <?php if ($this->session->userdata('email')) {
                    ?>
                 <li class="nav-item">
                     <a class="nav-link js-scroll-trigger text-white" href="<?= base_url('auth/Auth/Logout') ?>">Log
                         Out</a>
                 </li>
                 <?php } ?>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Language
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item btn3" href="<?= base_url('bahasa/Lang/change/id') ?>">Indonesia</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item btn3" href="<?= base_url('bahasa/Lang/change/eng') ?>">English</a>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </nav>