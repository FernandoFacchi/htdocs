<?php
    include_once ("templates/header.php");

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

<main id= "post-container">
    <div class="content-container">
        <h1 class="main-title"><?=$currentPost['title']?></h1>
        <p id="post-description"><?$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-container">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam sint, sunt iste, ea culpa possimus, neque nihil laboriosam animi repellat officia quia consequuntur ex minima ad dolores ullam iure! Voluptas.
            Maxime repellendus nemo possimus quos voluptatem delectus ut minus! Illo, neque error? Repudiandae, hic! Debitis, sunt, vel harum beatae consequuntur ab excepturi, laboriosam ut tempora nihil fugiat sed explicabo reiciendis.
            Dolores distinctio odio cupiditate similique nam. Sapiente consequuntur hic debitis itaque, veritatis doloremque voluptatum eveniet quaerat fuga doloribus magni suscipit tenetur rem culpa qui odit quibusdam adipisci et quam quidem!
            Asperiores quia accusantium perferendis, nemo laborum consequatur perspiciatis, quaerat reiciendis a ad illo modi atque possimus. Rem eos magni dolor modi! Modi odit, facilis pariatur earum nam excepturi iusto minima!
            Fugit obcaecati rerum tenetur recusandae suscipit, beatae nobis optio laborum quae mollitia maiores minus dolorem vel molestias exercitationem itaque libero delectus modi. Fuga iusto quam tempore perspiciatis, repudiandae expedita unde!
            Ducimus sequi quaerat aliquid. Quaerat debitis nemo labore voluptas minus repudiandae at quidem officia ducimus, nihil, cum atque inventore iure ab ullam corrupti ipsam natus? Quidem fuga ipsum sunt officia.
            Quae, consequatur quas pariatur ad quibusdam illo? Unde consectetur officia ipsa cum facilis provident labore voluptatum id reprehenderit odit maxime, eligendi, iste blanditiis, illum enim similique tempora nemo nulla neque.
            Eos quod facilis saepe accusamus dolore maiores exercitationem sint architecto sit eveniet error totam ad quaerat ea, velit minima sunt rerum id, dolorum nulla ex nostrum doloribus quos? Nihil, maxime. <br>

            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, velit officia! Commodi, animi? Officia mollitia explicabo dolor, officiis fuga animi ullam perferendis eligendi! Odio ullam omnis doloremque numquam dolores labore?
            Ipsum, praesentium amet blanditiis nisi officiis repellendus delectus esse expedita veritatis fuga dicta tempora aliquam qui alias soluta debitis consequuntur officia veniam velit a harum ut reprehenderit. Quia, repellendus ex.
            Beatae sequi laborum ratione harum, reprehenderit cum doloribus eum consequatur similique qui pariatur aliquid repellat inventore, cupiditate perspiciatis, necessitatibus fugiat. Non excepturi, corrupti repudiandae minus sunt laborum repellendus iusto et!
            Accusantium sequi numquam ipsam voluptatem minus consequuntur inventore. Dolores, ipsum molestiae! Corporis neque itaque dolorum ipsam assumenda! Blanditiis minus unde, similique error porro dolor facilis quam excepturi suscipit assumenda illo.
            Fuga aut quidem distinctio quis cum! Asperiores quibusdam veritatis iusto maiores! Provident, ut ab modi quos assumenda cupiditate saepe accusamus nesciunt ratione natus animi voluptatem voluptas magnam eaque tenetur illo!
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
    include_once("templates/footer.php")
?>