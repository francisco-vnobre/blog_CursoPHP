<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-contant">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio culpa aliquid neque perferendis enim ipsum ea necessitatibus? Modi, commodi ut at id illum repellat distinctio, est harum suscipit, enim repellendus?
            Delectus deleniti doloribus quae! Laudantium ad dolorum magnam nihil distinctio, totam mollitia, fugit exercitationem beatae tenetur quisquam atque repellat consequuntur a deleniti impedit veritatis? Ipsa laudantium dolorem consectetur ipsam exercitationem?
            Nisi ullam quia corrupti sed quos fugit? Nam temporibus, quis vitae nostrum molestias possimus dolore consectetur? Sequi, aliquam nesciunt, iusto, quos temporibus consequatur incidunt animi odio at quaerat explicabo fugit.
            Facilis, id obcaecati, iusto expedita odio autem harum culpa nihil dicta alias commodi! Dignissimos exercitationem maxime quisquam assumenda, facilis iusto, sunt mollitia ut cupiditate consequatur molestiae odit modi optio aperiam?
            Maxime nostrum culpa vitae. Reprehenderit, quae aperiam harum facilis veniam doloremque quidem, optio, cum nisi eum tempora libero commodi facere in quibusdam quos consectetur ut magni nostrum quam sed. Deserunt.</p>
        </div>
        <aside id="nav_container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>