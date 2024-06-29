
<style>

</style>
<section class="section">
    <div class="container">
        <div class="title">
            <h1>Blog</h1>
        </div>
        <div class="navigation">
            <a href="">Home</a> / <a href="">Blog</a>
        </div>
    </div>
</section>

<div class="blog-container">
<?php if (count($params['blog']) > 0) : ?>
    <?php foreach ($params['blog'] as $key => $blog) : ?>
      <div class="blog-post">
        <img src="<?=ASSETS?>/img/uploads/<?=$blog['blogImage']?>" alt="Post Image">
        <div class="blog-body">
        <h2><?=$blog['blogTitle']?></h2>
        <p><?=$blog['blogContent']?></p>
        <a href="<?=ROOT?>/blog/<?=$blog['blogIdentify']?>/" class="read-more">Read more</a>
        <span class="post-date">        <div class="meta">
            Posted on <?php echo date('F j, Y', strtotime($blog['blogUpdated'])); ?> by <?php echo htmlspecialchars($blog['blogAuthor']); ?>
        </div></span>
        </div>
    </div>



    <?php endforeach; ?>

    <!-- Post 1 -->

    <br><br>
    <div class="pagination-container">
  <?= $params["pagination"] ?>
</div>

<?php else : ?>
  <p>No Record to Display.</p>
  <a href="<?= ROOT ?>/admin/faqs/build">Add a Record.</a>
<?php endif; ?>


</div>

