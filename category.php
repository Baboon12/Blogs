<?php
session_start();
include('admin/config/dbconfig.php');
include('./includes/header.php');
include('./includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <?php
                if (isset($_GET['category'])) {
                    $slug = mysqli_real_escape_string($con, $_GET['category']);
                    $query = "SELECT id, slug FROM categories WHERE slug='$slug' LIMIT 1";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        $cat_item = mysqli_fetch_array($query_run);
                        $cat_id = $cat_item['id'];
                        $post_query = "SELECT category_id, name, slug, created_at FROM posts WHERE category_id='$cat_id'";
                        $post_query_run = mysqli_query($con, $post_query);
                        if (mysqli_num_rows($post_query_run) > 0) {
                            foreach ($post_query_run as $post_item) {
                ?>
                                <a href="post.php?title=<?= $post_item['slug'] ?>" class="text-decoration-none">
                                    <div class="card card-body shadow-sm mb-2">
                                        <h3><?= $post_item['name'] ?></h3>
                                        <div>
                                            <label for="" class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime($post_item['created_at'])) ?></label>
                                        </div>
                                    </div>
                                </a>
                            <?php

                            }
                        } else {
                            ?>
                            <h4>No Post Available</h4>
                        <?php
                        }
                    } else {
                        ?>
                        <h4>No Such Category Found</h4>
                    <?php
                    }
                } else {
                    ?>
                    <h4>No Such URL Found</h4>
                <?php
                }
                ?>



            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Area</h4>
                    </div>
                    <div class="card-body">
                        Body
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./includes/footer.php');
?>