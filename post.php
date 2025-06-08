<?php 
include_once("templates/header.php");

if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id']==$postId){
            $currentPost = $post;
        }
    }
}

?>
    <main id='post-container'>
        <div class='content-container'>
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-descirption"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src ="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum libero adipisci assumenda in odit hic, labore obcaecati culpa commodi natus sunt dolore repellat expedita nulla saepe molestiae tenetur dolor ducimus.
            Eligendi saepe id eaque, molestias consequatur eveniet modi inventore magni minima voluptas temporibus adipisci quisquam pariatur rerum, provident et atque aliquid, obcaecati neque doloribus nemo expedita accusamus? Deserunt, totam vero.
            Necessitatibus omnis odit ex, eveniet nisi nihil officiis quia nulla labore, harum placeat. Nobis, porro. Quo temporibus rerum, asperiores in obcaecati itaque laudantium, reiciendis molestiae nostrum, sapiente recusandae sed hic?
            Eligendi velit ut exercitationem aliquam aliquid autem nisi molestiae vitae voluptates ullam! Cum perferendis rem fugit! Sed nobis, quam enim non incidunt, ab facilis, voluptatum maxime veritatis reiciendis animi saepe.
            Deleniti nobis nesciunt fugit consequuntur sapiente? Cum ipsum iusto magnam rem assumenda odio ipsa commodi nisi hic nihil nemo eligendi, corporis doloribus ipsam temporibus? Facilis harum libero nihil ipsam sint.</p>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum libero adipisci assumenda in odit hic, labore obcaecati culpa commodi natus sunt dolore repellat expedita nulla saepe molestiae tenetur dolor ducimus.
            Eligendi saepe id eaque, molestias consequatur eveniet modi inventore magni minima voluptas temporibus adipisci quisquam pariatur rerum, provident et atque aliquid, obcaecati neque doloribus nemo expedita accusamus? Deserunt, totam vero.
            Necessitatibus omnis odit ex, eveniet nisi nihil officiis quia nulla labore, harum placeat. Nobis, porro. Quo temporibus rerum, asperiores in obcaecati itaque laudantium, reiciendis molestiae nostrum, sapiente recusandae sed hic?
            Eligendi velit ut exercitationem aliquam aliquid autem nisi molestiae vitae voluptates ullam! Cum perferendis rem fugit! Sed nobis, quam enim non incidunt, ab facilis, voluptatum maxime veritatis reiciendis animi saepe.
            Deleniti nobis nesciunt fugit consequuntur sapiente? Cum ipsum iusto magnam rem assumenda odio ipsa commodi nisi hic nihil nemo eligendi, corporis doloribus ipsam temporibus? Facilis harum libero nihil ipsam sint.</p>
        </div>
         <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id='tag-list'>
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