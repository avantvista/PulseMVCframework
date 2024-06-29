
<?php
// Extract the dynamic values from the PHP array
$campaignTitle = htmlspecialchars($params['sliders'][0]['campainTitle']);
$campaignSubtitle = htmlspecialchars($params['sliders'][0]['campaignSubtitle']);
$campaignMedia =  htmlspecialchars($params['sliders'][0]['campaignMedia']);
?>

<div id="banner">
  <img class="banner-img" src="<?=ASSETS?>/img/uploads/<?php echo $campaignMedia; ?>" alt="<?php echo $campaignTitle; ?>">
  <p><?php echo $campaignTitle; ?> <span><?php echo $campaignSubtitle; ?></span></p>

  <div class="arrow">
    <i class="uil uil-angle-left-b arrow_left "></i>
    <i class="uil uil-angle-right-b arrow_right "></i>
  </div>

  <div class="dots"></div>
</div>


<script>
  /*=============== TABLEAU D'IMAGES ===============*/
  const slides = [
    <?php foreach ($params['sliders'] as $slider): ?>
      {
        imageUrl: "<?= ASSETS ?>/img/uploads/<?= htmlspecialchars($slider['campaignMedia']) ?>",
        tagLine: "<?= htmlspecialchars($slider['campainTitle']) ?> <span><?= htmlspecialchars($slider['campaignSubtitle']) ?></span>"
      },
    <?php endforeach; ?>
  ];


  /*=============== VARIABLES ===============*/
  //#region

  /* Sélectionne l'élément du DOM avec la classe "dots" et le stocke dans la variable dotsContainer */
  const dotsContainer = document.querySelector(".dots");

  /* Sélectionne les éléments du DOM avec les classes "arrow_right" et "arrow_left" 
  et les stocke dans les variables arrowRight et arrowLeft */
  const arrowRight = document.querySelector(".arrow_right");
  const arrowLeft = document.querySelector(".arrow_left");

  /* Sélectionne les éléments du DOM ayant les classes 
  "banner-img" et "#banner p" et les stocke dans les variables img et tagLine */
  const img = document.querySelector(".banner-img");
  const tagLine = document.querySelector("#banner p");

  /* Initialise l'index à 0, représentant la position actuelle dans le carrousel. */
  let index = 0;

  //#endregion

  /*=============== BULLET POINTS ===============*/
  /* Fonction pour créer un bullet point dans le carrousel */
  function createDot(i) {

    /* Crée un élément div dans le DOM et lui ajoute la classe "dot" */
    const dot = document.createElement("div");
    dot.classList.add("dot");

    /* Ajoute le bullet point au conteneur de points (dotsContainer) */
    dotsContainer.appendChild(dot);

    /* Ajoute un Event Listener au clic sur le bullet point, 
    appelant la fonction updateCarousel avec l'index du bullet point en argument */
    dot.addEventListener("click", () => {
      updateCarousel(i);
    });

    /* CONDITION : si le bullet point créé correspond à l'index actuel du carrousel, 
    ajoute la classe "dot_selected" afin qui soit en surbrillance. */
    if (i === index) {
      dot.classList.add("dot_selected");
    }
  }

  /* Fonction permettant d'afficher les bullet points du carrousel */
  function displayDots() {

    /* Parcours tous les slides et crée un bullet point pour chaque image */
    for (let i = 0; i < slides.length; i++) {
      createDot(i);
    }
  }

  /*=============== CARROUSEL ===============*/
  /* Fonction permettant de mettre à jour le carrousel avec l'image 
  et le texte correspondant à un index donné */
  function updateCarousel(i) {

    /* Sélectionne tous les bullet points du carrousel */
    const selectDots = document.querySelectorAll(".dots .dot");

    /* Retire la classe "dot_selected" du point actuel */
    selectDots[index].classList.remove("dot_selected");

    /* Mise à jour de l'index actuel */
    index = i;

    /* Met à jour l'image et le texte du carrousel en fonction du nouvel index */
    img.src = slides[index].imageUrl;
    tagLine.innerHTML = slides[index].tagLine;

    /* Ajoute la classe "dot_selected" au nouveau bullet point */
    selectDots[index].classList.add("dot_selected");
  }

  /* Fonction permettant d'effectuer le défilement du carrousel vers la droite 
  ou la gauche dans la direction choisi */
  function slide(direction) {

    /* Sélectionne tous les points du carrousel */
    const selectDots = document.querySelectorAll(".dots .dot");

    /* Retire la classe "dot_selected" du bullet point actuel */
    selectDots[index].classList.remove("dot_selected");

    /*  Met à jour l'index en fonction de la direction */
    if (direction === "right") {
      index = (index + 1) % slides.length;
    } else {
      index = (index - 1 + slides.length) % slides.length;
    }

    /* Met à jour l'image et le texte du carrousel en fonction du nouvel index. */
    img.src = slides[index].imageUrl;
    tagLine.innerHTML = slides[index].tagLine;

    /* Ajoute la classe "dot_selected" au nouveau bullet point */
    selectDots[index].classList.add("dot_selected");
  }

  /*=============== INTERACTION AVEC LES FLÈCHES & AUTOMATISATION ===============*/
  function slideRight() {
    slide("right");
  }

  function slideLeft() {
    slide("left");
  }

  /* Fonction permettant le défilement automatique du carrousel */
  function autoSlide() {
    autoSlideInterval = setInterval(() => {
      /* setInterval permet d'appeler la fonction slideRight toutes les X millisecondes */
      slideRight();
    }, 3000); /* 3000 millisecondes = 3 secondes */
  }

  /* Ajout des Event Listeners aux flèches pour un défilement manuel */
  arrowRight.addEventListener("click", slideRight);
  arrowLeft.addEventListener("click", slideLeft);

  /* Ajoute un Event Listener pour arrêter le défilement automatique 
  lorsqu'une interaction utilisateur est détectée */
  dotsContainer.addEventListener("click", () => {
    clearInterval(autoSlideInterval);
    autoSlide();
  });

  /* Fonction utilisée pour précharger les images du carrousel. */
  function preloadImages() {
    for (let i = 0; i < slides.length; i++) {
      const imageObj = new Image();
      imageObj.src = slides[i].imageUrl;
    }
  }

  /*=============== APPEL DE FONCTIONS ===============*/
  /* Démarrage du préchargement d'images */
  preloadImages();

  /* Démarrage du défilement automatique */
  autoSlide();

  /* Affichage des bullet points du carrousel */
  displayDots();
</script>


<div style="margin-top:50px;"></div>

<div class="heading sub-heading">
  <h1>ONE-STOP PROJECTS SOLUTION
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
</div>




<section class="section-container">
  <div class="inner-container">
    <div class="video-container">
      <video controls>
        <!-- Replace 'your-video.mp4' with your video file -->
        <source src="https://www.empolobath.com/wp-content/uploads/2022/02/恩牌英文宣传片.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="info-container">
      <div class="long-text">

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non arcu eu ligula fermentum bibendum.
        Vivamus sit amet bibendum ipsum. Integer sit amet neque at odio ultrices luctus vel eu est. Proin
        vulputate risus at arcu feugiat, nec venenatis risus facilisis. Sed non ex vitae purus finibus
        accumsan nec quis justo. Nullam hendrerit risus ut justo interdum, non posuere nisi cursus.
        In hac habitasse platea dictumst. Sed interdum varius neque, vitae interdum turpis eleifend vel.
        Duis eu efficitur ligula, ut commodo turpis.

        <!-- Add more text as needed -->
      </div>
    </div>
  </div>
</section>



<div style="background:cornsilk;">
  <div style="padding-top:50px;"></div>

  <div class="heading sub-heading">
    <h1>WHY YOU CHOOSE US ?
      <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
    </h1>
  </div>



  <section class="charts_orb">


    <article class="orb">
      <div class="orb_graphic">
        <svg>
          <circle class="fill"></circle>
          <circle class="progress"></circle>
        </svg>
        <div class="orb_value count">10</div>
      </div>
      <div class="orb_label">
        Years of <br> Experience
      </div>
    </article>

    <article class="orb">
      <div class="orb_graphic">
        <svg>
          <circle class="fill"></circle>
          <circle class="progress"></circle>
        </svg>
        <div class="orb_value count">05</div>
      </div>
      <div class="orb_label">
        Export <br> Countries
      </div>
    </article>

    <article class="orb">
      <div class="orb_graphic">
        <svg>
          <circle class="fill"></circle>
          <circle class="progress"></circle>
        </svg>
        <div class="orb_value count">52</div>
      </div>
      <div class="orb_label">
        Project <br> Finished
      </div>
    </article>


  </section>
</div>


<script>
  $('.count').each(function() {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 1500,
      easing: 'linear',
      step: function(now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
</script>






<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>PRODUCT CATEGORIES
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
</div>
<div class="image-category">
  <!-- Repeat the following block for each image -->
  <div class="image-item">
    <a href="">
      <img src="<?=ASSETS?>/img/category/faucets.jpg" alt="Category Image 1">
    </a>
  </div>
  <div class="image-item">
    <a href="">
      <img src="<?=ASSETS?>/img/category/shower.jpg" alt="Category Image 1">
    </a>
  </div>
  <div class="image-item">
    <a href="">
      <img src="<?=ASSETS?>/img/category/bathtubs.jpg" alt="Category Image 1">
    </a>
  </div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/toilets.jpg" alt="Category Image 1">
    </a></div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/bathroom-cabinets.jpg" alt="Category Image 1">
    </a></div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/mirrors.jpg" alt="Category Image 1">
    </a></div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/basins.jpg" alt="Category Image 1">
    </a></div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/shower-rooms.jpg" alt="Category Image 1">
    </a></div>
  <div class="image-item"> <a href="">
      <img src="<?=ASSETS?>/img/category/bathroom-accessories.png" alt="Category Image 1">
    </a>
  </div>
  <!-- Repeat the above block for each image a total of ten times -->
</div>



<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>ONE-STOP PROJECT SOLUTION
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
  <img style="width:100%;" src="http://www.qitaicn.com/Uploads/Focus/2017-03-21/58d0c1a2cdeff.jpg" alt="">
</div>


<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>ONE-STOP PROJECT SOLUTION
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
  <img style="width:100%;" src="<?= ASSETS ?>/img/certificate.jpg" alt="">
</div>



<style>
  .certificate-card-container {
    width: 80%;
    margin: 0px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .certificate-card {
    width: calc(33.33% - 20px);
    background-color: #fff;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    padding: 15px;
    box-sizing: border-box;
  }

  .certificate-card img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
  }

  .certificate-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
    text-transform: uppercase;
    text-align: center;
  }

  .certificate-card p {
    font-size: 14px;
    color: #666;
    text-transform: uppercase;
    text-align: center;
  }

  /* Responsive layout adjustments */
  @media (max-width: 768px) {
    .certificate-card {
      width: calc(50% - 20px);
    }
  }

  @media (max-width: 480px) {
    .certificate-card {
      width: 100%;
    }
  }
</style>
<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>ONE-STOP PROJECT SOLUTION
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>

  <div class="certificate-card-container">
    <!-- Certificate Card 1 -->
    <div class="certificate-card">
      <img src="<?= ASSETS ?>/img/i1.jpg" alt="Certificate Card Image 1">
      <h3>Certificate 1</h3>
      <p>Certificate description 1 goes here.</p>
    </div>

    <!-- Certificate Card 2 -->
    <div class="certificate-card">
      <img src="<?= ASSETS ?>/img/i2.jpg" alt="Certificate Card Image 2">
      <h3>Certificate 2</h3>
      <p>Certificate description 2 goes here.</p>
    </div>

    <!-- Certificate Card 3 -->
    <div class="certificate-card">
      <img src="<?= ASSETS ?>/img/i3.jpg" alt="Certificate Card Image 3">
      <h3>Certificate 3</h3>
      <p>Certificate description 3 goes here.</p>
    </div>

    <!-- Repeat the above structure for more certificate cards -->
  </div>

</div>





<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>LATEST ARTICLES
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
</div>




<div class="blog-container">
  <?php if (count($params['blog']) > 0) : ?>
    <?php foreach ($params['blog'] as $key => $blog) : ?>
      <div class="blog-post">
        <img src="<?= ASSETS ?>/img/uploads/<?= $blog['blogImage'] ?>" alt="Post Image">
        <div class="blog-body">
          <h2><?= $blog['blogTitle'] ?></h2>
          <p><?= $blog['blogContent'] ?></p>
          <a href="<?= ROOT ?>/blog/<?= $blog['blogIdentify'] ?>/" class="read-more">Read more</a>
          <span class="post-date">January 23, 2024</span>
        </div>
      </div>



    <?php endforeach; ?>

  <?php else : ?>
    <p>No Blog Post to Display.</p>
  <?php endif; ?>
</div>


<div style="padding-top:50px;"></div>
<div class="heading sub-heading">
  <h1>HOT PRODUCTS
    <span>YOUR PARTNER FOR BATH ROOM SOLUTION</span>
  </h1>
</div>









<!-- <div class="navigation-buttons">
            <button class="nav-button" onclick="scrollCarousel('left')">&#10094;</button>
            <button class="nav-button" onclick="scrollCarousel('right')">&#10095;</button>
        </div> -->
<div class="carousel-container" id="customCarousel">

  <?php

  ?>
  <div class="product-carousel">
    <?php foreach ($params['products'] as $key => $product) : ?>
      <div class="product-card" style="min-width:280px;width:25%;flex:none;margin-bottom: 1rem;">
        <div class="hover-animation">
          <img src="https://www.empolobath.com/wp-content/uploads/2023/12/eb734w.jpg" class="image-back">
          <img src="<?= ASSETS ?>/img/uploads/<?= $product["productImage"] ?>" class="image-front">
        </div>
        <div class="product-info">
          <div class="product-name"><?= $product['productName'] ?> </div>
          <div class="product-description"><?= $product['productDesc'] ?></div>
          <div class="price-cart">
            <div class="product-price">$<?= $product['productPrice'] ?></div>
            <div class="cart-container" onclick="window.location.href = '<?= ROOT ?>/product/<?= $product['productIdentify'] ?>'">
              <span class="cart-text">READ MORE</span> <i class="uil uil-shopping-cart"></i>

            </div>
          </div>
        </div>
      </div>

    <?php endforeach; ?>


  </div>


</div>
<div class="view-all-link">
  <a href="<?= ROOT ?>/products">View All Products</a>
</div>
<script>
  const container = document.getElementById('customCarousel');
  let isDragging = false;
  let startX;
  let scrollLeft;

  container.addEventListener('mousedown', (e) => {
    isDragging = true;
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
    container.classList.add('grabbing');
  });

  container.addEventListener('mouseup', () => {
    isDragging = false;
    container.classList.remove('grabbing');
  });

  container.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 2;
    container.scrollLeft = scrollLeft - walk;
  });

  function scrollCarousel(direction) {
    const scrollAmount = 300;
    if (direction === 'left') {
      container.scrollLeft -= scrollAmount;
    } else {
      container.scrollLeft += scrollAmount;
    }
  }
</script>