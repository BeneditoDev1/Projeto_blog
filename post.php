<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId){
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
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cumque nihil nisi aliquam blanditiis hic veniam iusto repudiandae non, officia a totam reprehenderit animi, fugiat enim sed asperiores delectus veritatis?
            Debitis suscipit quibusdam similique pariatur illo eos sit rerum ea magni at, iusto deserunt modi sint autem, architecto inventore nihil beatae. Fugit tenetur nemo provident possimus quidem ratione? Repellendus, reiciendis?
            Magni, porro corporis! Quaerat velit iure officiis doloremque alias inventore laboriosam exercitationem id, nam eos laudantium voluptas, ipsum nemo maiores. Magnam, debitis. Natus officia consequuntur exercitationem ab, doloribus voluptate necessitatibus!
            Tempora, repellendus rem fugit, voluptatibus doloribus voluptates aspernatur inventore sed deserunt porro nobis alias sint illo exercitationem qui incidunt sunt culpa? Cumque necessitatibus placeat dolore ex numquam neque repellendus sint!
            Explicabo ratione eaque libero laboriosam voluptate repudiandae, eius sed eveniet doloremque sit autem dolore delectus fugit earum ipsa quam nulla enim omnis! Enim facere mollitia magni harum nobis perferendis nulla.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis cumque nihil nisi aliquam blanditiis hic veniam iusto repudiandae non, officia a totam reprehenderit animi, fugiat enim sed asperiores delectus veritatis?
            Debitis suscipit quibusdam similique pariatur illo eos sit rerum ea magni at, iusto deserunt modi sint autem, architecto inventore nihil beatae. Fugit tenetur nemo provident possimus quidem ratione? Repellendus, reiciendis?
            Magni, porro corporis! Quaerat velit iure officiis doloremque alias inventore laboriosam exercitationem id, nam eos laudantium voluptas, ipsum nemo maiores. Magnam, debitis. Natus officia consequuntur exercitationem ab, doloribus voluptate necessitatibus!
            Tempora, repellendus rem fugit, voluptatibus doloribus voluptates aspernatur inventore sed deserunt porro nobis alias sint illo exercitationem qui incidunt sunt culpa? Cumque necessitatibus placeat dolore ex numquam neque repellendus sint!
            Explicabo ratione eaque libero laboriosam voluptate repudiandae, eius sed eveniet doloremque sit autem dolore delectus fugit earum ipsa quam nulla enim omnis! Enim facere mollitia magni harum nobis perferendis nulla.</p>
        </div>
        <aside id="nav-container">
        <h3 id="tag-title">Tags</h3>
            <ul class="tag-list">
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $categorie): ?>
                        <li><a href="#"><?= $categorie ?></a></li>
                    <?php endforeach; ?>
            </ul>
    </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>