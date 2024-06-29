  <div class="data-table">
    <div class="data-info">
      <h3>Add a blog</h3> <a href="<?= ROOT ?>/admin/blog" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="blogTitle">Blog Title</label>
          <input type="text" name="blogTitle">
        </div>
        <div>
            <label for="blogContent">Blog Content</label>
            <textarea name="blogContent"></textarea>
        </div>

        <div>
          <label for="blogAuthor">Blog Author</label>
          <input type="text" name="blogAuthor">
        </div>
        <div>
          <label for="blogImage">Blog Image</label>
          <input type="file" name="blogImage">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/blog/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
