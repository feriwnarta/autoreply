 <?php

    use NextG\Autoreply\App\Configuration;


    ?>


 <!-- Sidebar  -->
 <nav id="sidebar">
     <div class="sidebar-header">
         <h3 class="text-dark">
             <img src="<?= Configuration::$ROOT; ?>public/img/cahaya-senja.png" alt="" srcset="">
         </h3>
     </div>

     <div class="link-menu">
         <ul class="navbar-nav">
             <li class="nav-item active">
                 <a class="nav-link" aria-current="page" href="<?= Configuration::$ROOT; ?>keeping">Keeping</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="<?= Configuration::$ROOT; ?>input-keeping">Input Keeping</a>
             </li>

         </ul>
     </div>
 </nav>