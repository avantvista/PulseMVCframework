  <div class="data-table">
  <div class="table-container">
  <h2> Display products </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Product Desc</th>
      <th>Product Price</th>
      <th>Product Image</th>
      <th>Product Tags</th>
      <th>Product Updated</th>
      <th>Product Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['products'] as $key => $products): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $products['productId'] ?></td>
<td><?= $products['productName'] ?></td>
<td><?= $products['productDesc'] ?></td>
<td><?= $products['productPrice'] ?></td>
<td><?= $products['productImage'] ?></td>
<td><?= $products['productTags'] ?></td>
<td><?= $products['productUpdated'] ?></td>
<td><?= $products['productIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/products" class="cancel-btn">back</a></aside> </div>
</div>
</div>
