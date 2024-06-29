  <div class="data-table">
  <div class="table-container">
  <h2> Edit  products </h2>
<?php foreach ($params["products"] as $key => $products) : ?>
  <form method="post" action="<?= ROOT ?>/admin/products/<?= $products['productIdentify'] ?>/modify" enctype="multipart/form-data">
  <div>
    <label for="productName">Product Name</label>
    <input type="text" name="productName" value="<?= $products["productName"] ?>">
  </div>
  <div>
    <label for="productDesc">Product Desc</label>
    <textarea  name="productDesc"> <?= $products["productDesc"] ?></textarea>
  </div>
  <div>
    <label for="productPrice">Product Price</label>
    <input type="text" name="productPrice" value="<?= $products["productPrice"] ?>">
  </div>
  <div>
    <label for="productImage">Product Image</label>
    <input type="file" name="productImage"> <?= $products["productImage"] ?>
  </div>
  <div>
    <label for="productTags">Product Tags</label>
    <input type="text" name="productTags" value="<?= $products["productTags"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/products" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
