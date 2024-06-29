<!DOCTYPE html>
<html lang="en" color-scheme="light">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="<?= ROOT ?>" />
  <meta name="theme-color" content="#127fb1" />
  <link rel="icon" type="image/png" href="<?= ASSETS ?>/img/favicon.png">
  <?php if (isset($params['meta'])) { ?>

    <meta name="description" content="<?= $params['meta']['description'] ?>">
    <meta name="keywords" content="<?= $params['meta']['keywords'] ?>">
    <meta name="author" content="<?= $params['meta']['author'] ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $params['meta']['title']; ?>">
    <meta property="og:description" content="<?php echo $params['meta']['description']; ?>">
    <meta property="og:image" content="<?php echo $params['meta']['image']; ?>">
    <meta property="og:url" content="<?php echo $params['meta']['url']; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $params['meta']['title']; ?>">
    <meta name="twitter:description" content="<?php echo $params['meta']['description']; ?>">
    <meta name="twitter:image" content="<?php echo $params['meta']['image']; ?>">
<meta name="google-adsense-account" content="ca-pub-1299431623082662">
    <title><?= $params['meta']['title'] ?></title>

  <?php } ?>
  <link rel="stylesheet" href="<?= ASSETS ?>/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


  

  <header>
        <div class="header-area">
            <div class="header-first-one"> <span class="small"> Questions? Call us:</span>
                <p>+880-1818-131816</p>
            </div>
          
                <div class="hamburger-menu" id="hamburger-menu">
                  <div class="line"></div>
                  <div class="line"></div>
                  <div class="line"></div>
                </div>
            

            <a href="<?=ROOT?>"><img class="logo" src="<?=ASSETS?>/img/ucomfort.svg" alt=""></a>
                <div style="display: flex;">
                    <div class="social-icons">
                        <a target="_blank" href="https://www.facebook.com/UComfortbd"><i class="uil uil-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/ucomfortbd"><i class="uil uil-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@UComfortbd"><i class="uil uil-youtube"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@UComfortbd"><i class="uil uil-instagram"></i></a>
        
                        
                    </div>
                    <div class="search">
                        <a href="" style="padding: 1rem;"><i class="uil uil-search"></i></a>
                    </div>
                </div>
        </div>

        <nav class="nav-main">
            <ul class="nav-main-ul">

                <li>
                    <a href="<?=ROOT?>/home" class="<?php echo isLinkActive('/home'); ?>"> HOME</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/factory" class="<?php echo isLinkActive('/factory'); ?>">FACTORY</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/products" class="<?php echo isLinkActive('/products'); ?>">PRODUCTS</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/about-us" class="<?php echo isLinkActive('/about-us'); ?>">ABOUT US</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/iconic-projects" class="<?php echo isLinkActive('/iconic-projects'); ?>">ICONIC PROJECTS</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/sales-network" class="<?php echo isLinkActive('/sales-network'); ?>">SALES NETWORK</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/blog" class="<?php echo isLinkActive('/blog'); ?>">BLOG</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/faq" class="<?php echo isLinkActive('/faq'); ?>">FAQ</a>
                </li>
                <li>
                    <a href="<?=ROOT?>/contact" class="<?php echo isLinkActive('/contact'); ?>">CONTACT</a>
                </li>
            </ul>
            <button class="close-button">&times;</button>
        </nav>

    </header>
    <main>
    {{content}}
 

</main>
<footer>
    <div class="first-footer">
        <div style="display: flex;justify-content: center;">
            <div style="padding: 1rem;"><img style="width:120px;height:30px;" src="<?=ASSETS?>/img/ucomfort.svg" alt=""></div>
        </div>
        <div>
            <h2 style="font-weight: 400;text-align: center;">SITE NAVIGATION</h2>
            <hr style="border:1px solid black;">

            <div class="footer-menu">
                <ul>
                    <li>
                    
                        <a href="" > HOME</a>
                    </li>
                    <li>
                        <a href="">FACTORY</a>
                    </li>
                    <li>
                        <a href="">HOT PRODUCTS</a>
                    </li>
                    <li>
                        <a href="">PRODUCTS</a>
                    </li>
                    <li>
                        <a href="">ABOUT US</a>
                    </li>
                    <li>
                        <a href="">ICONIC PROJECTS</a>
                    </li>
                    <li>
                        <a href="">SALES NETWORK</a>
                    </li>
                    <li>
                        <a href="">BLOG</a>
                    </li>
                    <li>
                        <a href="">FAQ</a>
                    </li>
                    <li>
                        <a href="">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <div class="sharing">
                
                <a class="sharing-item sharing-facebook" href="https://www.facebook.com/UComfortbd">
                    <svg class="i i-facebook" viewBox="0 0 24 24">
                        <path d="M17 14h-3v8h-4v-8H7v-4h3V7a5 5 0 0 1 5-5h3v4h-3q-1 0-1 1v3h4Z"></path>
                    </svg></a>
                    
                    <a class="sharing-item sharing-twitter" href="https://twitter.com/ucomfortbd">
                    <svg class="i i-twitter" viewBox="0 0 24 24">
                        <path d="m3 21 7.5-7.5m3-3L21 3M8 3H3l13 18h5Z"></path>
                    </svg></a>
                    
                    <a class="sharing-item sharing-pinterest" href="#">
                    <svg class="i i-pinterest" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="11"></circle>
                        <path d="m8 22 3-11a1 1 0 0 0 5 5.5A6 6 0 1 0 6 12"></path>
                    </svg></a>
                    

                    
 
                    
                    <a class="sharing-item sharing-linkedin" href="https://www.linkedin.com/company/ucomfortbd/">
                    <svg class="i i-linkedin" viewBox="0 0 24 24">
                        <circle cx="4" cy="4" r="2"></circle>
                        <path d="M2 9h4v12H2Zm20 12h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 12 0Z"></path>
                    </svg></a>

                    
                
                    <a class="sharing-item sharing-whatsapp" href="https://wa.me/+8801818131816?text=Welcome%20to%20WhatsApp!">
                        <svg class="i i-whatsapp" viewBox="0 0 24 24">
                            <circle cx="9" cy="9" r="1"></circle>
                            <circle cx="15" cy="15" r="1"></circle>
                            <path d="M8 9a7 7 0 0 0 7 7m-9 5.2A11 11 0 1 0 2.8 18L2 22Z"></path>
                        </svg></a>
                    
                    
            </div>
        </div>
    </div>

    <div class="second-footer">
        <div>
            <span class="small">© Copyright 2024 uComfortBD. All rights reserved. </span>
        </div>
        <div>
            <span class="small">Technical support: support@ucomfortbd.com </span>
        </div>
        <div>
            <span class="small">Customer support: +880-152-1257123</span>
        </div>
    </div>

</footer>

</body>
<script>
$(document).ready(function() {
    $(".hamburger-menu").click(function() {
        $(".nav-main").animate({
            left: '0'
        }, {
            duration: 500,
            easing: 'swing',
            queue: false
        }).fadeToggle(300);
    });

    $(".close-button").click(function() {
        $(".nav-main").animate({
            left: '-100%'
        }, {
            duration: 300,
            easing: 'swing',
            queue: false
        }).fadeToggle(300);
    });
});
</script>
</html>