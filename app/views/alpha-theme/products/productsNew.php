  <div class="data-table">
    <div class="data-info">
      <h3>Add a products</h3> <a href="<?= ROOT ?>/admin/products" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post" enctype="multipart/form-data">
        <div>
          <label for="productName">Product Name</label>
          <input type="text" name="productName">
        </div>
        <div>
          <label for="productDesc">Product Desc</label>
          <textarea name="productDesc"></textarea>
        </div>
        <div>
          <label for="productPrice">Product Price</label>
          <input type="text" name="productPrice">
        </div>
        <div>
          <label for="productImage">Product Image</label>
          <input type="file" name="productImage">
        </div>
        <div>
          <label for="productTags">Product Tags</label>
          <input type="text" name="productTags">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/products/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
