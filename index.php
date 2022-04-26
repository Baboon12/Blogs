<?php

$page_title = "Home";
$meta_description = "Blogging Website";
$meta_keyword = "WPL mini project";

session_start();
// include('admin/config/dbconfig.php');
include('./includes/header.php');
include('./includes/navbar.php');

?>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">

            <h3 class="text-white mb-4">Welcome to Bloggy</h3>
            <?php
            $home_cat = "SELECT * FROM categories WHERE navbar_status='0' AND status='0' LIMIT 9";
            $home_cat_run = mysqli_query($con, $home_cat);
            if (mysqli_num_rows($home_cat_run) > 0) {
                foreach ($home_cat_run as $item) {
            ?>
                    <div class="col-md-3 mb-4">
                        <a class="text-decoration-none" href="category.php?category=<?= $item['slug'] ?>">
                            <div class="card card-body">
                                <?= $item['name'] ?>
                            </div>
                        </a>
                    </div>

                <?php
                }
            } else {
                ?>
                <h4>No Categories</h4>
            <?php
            }
            ?>

        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="text-dark mb-4">Know Us</h3>
                <section id="sec" onmousedown="mouseDown()" onmouseup="mouseUp()">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus natus ea animi atque odit! Quas debitis nihil laudantium ut esse consequatur? Molestiae asperiores quod repellendus quas, numquam pariatur, nihil nemo labore vitae consequuntur voluptates nobis saepe nulla totam, sequi libero accusantium iure! Blanditiis pariatur dolore molestias doloribus laboriosam corrupti. Quibusdam, nihil nesciunt doloremque quidem eius expedita earum maxime dolores rerum non unde voluptates ea nostrum, recusandae quia iusto amet laudantium eum nemo tenetur architecto eveniet optio vitae nulla? Maxime, sequi in. Praesentium iusto eveniet commodi ducimus cum provident, facere ullam quo perspiciatis quisquam reprehenderit quos, tempora iste veritatis. Maiores, aut.
                </section>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <h3 class="mb-4">New Posts</h3>
                <?php
                $home_posts = "SELECT * FROM posts WHERE status='0' ORDER BY id DESC LIMIT 4 ";
                $home_posts_run = mysqli_query($con, $home_posts);
                if (mysqli_num_rows($home_posts_run) > 0) {
                    foreach ($home_posts_run as $item) {
                ?>
                        <div class="mb-4">
                            <a class="text-decoration-none" href="post.php?title=<?= $item['slug'] ?>">
                                <div class="card card-body bg-light">
                                    <?= $item['name'] ?>
                                </div>
                            </a>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <h4>No Categories</h4>
                <?php
                }
                ?>
            </div>

            <!-- <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Reach Us</h4>
                    </div>
                    <div class="card-body">
                        bhavya.sura@somaiya.edu
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</div>


<script>
    function mouseDown() {
        document.getElementById("sec").style.color = "orange";
    }

    function mouseUp() {
        document.getElementById("sec").style.color = "black";
    }
</script>

<?php
include('./includes/footer.php');
?>