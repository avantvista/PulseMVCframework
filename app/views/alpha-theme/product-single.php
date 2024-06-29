<style>
 
.single-product-card {
flex: 0 0 300px;
margin-right: 47px;
position: relative;
overflow: hidden;
border-radius: 6px;
transition: box-shadow 0.3s;

 
}

.single-product-card:last-child {
  margin-right: 0;
}


.single-product-image {
  width: 100%;
  height: 600px;
  object-fit: cover;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.single-product-info {
  padding: 20px;
}

.single-product-name {
font-size: 1.1em;
margin-bottom: 10px;
color: #333;
text-transform: uppercase;
}

.single-product-description {
  font-size: 1em;
  color: #666;
  margin-bottom: 10px;
  text-overflow: ellipsis; /* Add ellipsis for overflow text */
}


.single-product-price {
  font-size: 1.2em;
  color: #e44d26;
  font-weight: bold;
}

.single-product-hover-animation {
position:relative;
width: 100%;
  height:400px;
  object-fit: cover;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.single-product-hover-animation img {
position: absolute;
transition: opacity 1s ease-in-out;
width: 100%;
height: 100%;
position: absolute;
transition: opacity 1s ease-in-out;
}

.single-product-hover-animation img.image-front:hover {
opacity: 0;
cursor: pointer;
}
.price-cart{
display: flex;
flex-wrap: nowrap;
justify-content: space-between;
align-items: center;
}

.cart-container {
top: -170px;
display: flex;
position: relative;

display: flex;
width: 50px;
height: 50px;
background-color: #3498db;
border-radius: 50%;
text-align: center;
line-height: 50px;
color: #fff;
transition: all 0.3s cubic-bezier(0.64, 0, 0.58, 1);
align-items: center;
justify-content: center;
}

.cart-container:hover {
  width: 150px; /* Adjust the size according to your preference */
  border-radius: 10px; /* To create a square shape */
}

.cart-text {
  display: none;
}

.cart-container:hover .cart-text {
  display: block;
  transition: all 0.9s ;
}

</style> <br>
<div class="container">
   
        <div class="title">
            <h1>Product</h1>
        </div>
        <div class="navigation">
            <a href="<?=ROOT?>/products">Back</a> 
        </div>
 </div>

<div class="heading sub-heading">
  <h1>
    <span>To Buy This Product , Contact With This Form</span>
  </h1>
</div>
<section class="container">

    <!-- product panel -->
    <div class="panel">

            <div class="left-panel">
                <?php foreach ($params['products'] as $key => $product) : ?>
                    <div class="single-product-card">
                        <div class="single-product-hover-animation">
                            <img src="https://www.empolobath.com/wp-content/uploads/2023/12/eb734w.jpg" class="image-back">
                            <img src="<?= ASSETS ?>/img/uploads/<?= $product["productImage"] ?>" class="image-front">
                        </div>
                        <div class="single-product-info">
                            <a href="<?= ROOT ?>/product/<?= $product['productIdentify'] ?>">
                                <div class="single-product-name"><?= $product['productName'] ?> </div>
                            </a>
                            <div class="single-product-price">$<?= $product['productPrice'] ?></div>
                            <div class="single-product-description"><?= $product['productDesc'] ?></div>

                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
      <div class="right-panel">
                    
    <div class="contact-form-container">
        <h2 class="contact-form-title">ASK US. WE'LL HELP YOU.</h2>
        <div style="color:green;">
            <?php if (isset($_SESSION['success_message'])) : ?>
                <p><?= $_SESSION['success_message'] ?></p>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>
        </div>
        <form class="contact-form-ask" id="askForm" action="<?= ROOT ?>/contact" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="clientName" name="clientName" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="clientEmail" name="clientEmail" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="whatsapp">WhatsApp</label>
                <input type="text" id="whatsapp" name="whatsapp" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="clientMessage" name="clientMessage" rows="4" class="form-input" required></textarea>
            </div>

            <input type="submit" class="form-button" value="Submit">
        </form>
    </div>


      </div>
    </div>
    <!-- product panel -->

</section>