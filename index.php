<?php

include __DIR__ . '/partials/template/header.php';

if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}

?>



<main class="container">
    <div class="alert alert-success">
        <h2>
            <?php echo $_SESSION['password'] ?>
        </h2>
    </div>
    <form action="video.php" method="get">
        <button type="submit" class="btn btn-success my-2">Gestione avanzata dei parametri per la password</button>
    </form>
    
</main>

<?php
include __DIR__ . '/partials/template/footer.php';
?> 