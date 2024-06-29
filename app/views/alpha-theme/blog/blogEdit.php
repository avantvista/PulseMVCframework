  <div class="data-table">
  <div class="table-container">
  <h2> Edit  blog </h2>
<?php foreach ($params["blog"] as $key => $blog) : ?>
  <form method="post" action="<?= ROOT ?>/admin/blog/<?= $blog['blogIdentify'] ?>/modify" enctype="multipart/form-data">
  <div>
    <label for="blogTitle">Blog Title</label>
    <input type="text" name="blogTitle" value="<?= $blog["blogTitle"] ?>">
  </div>
  <div>
    <label for="blogContent">Blog Content</label>
    <input type="text" name="blogContent" value="<?= $blog["blogContent"] ?>">
  </div>
  <div>
    <label for="blogAuthor">Blog Author</label>
    <input type="text" name="blogAuthor" value="<?= $blog["blogAuthor"] ?>">
  </div>
  <div>
    <label for="blogImage">Blog Image</label>
    <input type="file" name="blogImage"> <?= $blog["blogImage"] ?>
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/blog" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
