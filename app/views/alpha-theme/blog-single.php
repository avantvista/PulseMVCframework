<style>
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
      
        border-radius: 5px;
    }

    .post {
        margin-bottom: 30px;
    }

    .post img {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .post h2 {
        color: #333;
    }

    .post p {
        color: #666;
        line-height: 1.6;
    }

    .post .meta {
        font-size: 14px;
        color: #888;
    }

    @media only screen and (max-width: 600px) {
        .container {
            padding: 10px;
        }
    }
</style>
<br>
<div class="heading sub-heading">
    <h1>BLOG POST
    </h1>
</div>
<div class="container">

    <?php foreach ($params['blog'] as $key => $blog) : ?>
        <div class="post">

        <div class="meta">
            Posted on <?php echo date('F j, Y', strtotime($blog['blogUpdated'])); ?> by <?php echo htmlspecialchars($blog['blogAuthor']); ?>
        </div>
            <img src="<?= ASSETS ?>/img/uploads/<?= $blog['blogImage'] ?>" alt="<?= $blog['blogTitle'] ?>">
            <h2><?= $blog['blogTitle'] ?></h2>
            <p><?= $blog['blogContent'] ?></p>
        </div>

    <?php endforeach; ?>


</div>