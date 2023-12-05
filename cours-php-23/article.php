<?php 
require_once 'data/Data.php';
include 'partials/header.php';

if(isset($_GET)) {  //Si le serveur reçois la requête GET avec un paramèttre
    $title = $posts[$_GET['id']]['title'];
    $author = $users[$posts[$_GET['id']]['user_id']]['username'];
    $content = $posts[$_GET['id']]['content'];
    $date = $posts[$_GET['id']]['created_at'];
    $comments = $posts[$_GET['id']]['comments'];
}
?>

<article>
    <header>
        <h2><?= $title; ?></h2>
        <p><?= $date; ?></p>
        <p>Publié par <strong><?= $author; ?></strong></p>
    </header>
    <p>
        <?= $content; ?>
    </p>
    <footer>
        <nav>
            <h6>Commentaires</h6>
            <ul>
                <li>Commentaires</li>
            </ul>
        </nav>
    </footer>
</article>

<?php 
include 'partials/footer.php';