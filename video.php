<?php 
include __DIR__ . "/partials/template/header.php";
?>
<main class="container" id="js">
    <video id="video" width="1500" height="800" autoplay>
        <source src="rick-roll-js.mp4" type="video/mp4">
    </video>
    <form id="form" class="d-none" action="index.php" method="get">
        <button type="submit" class="btn btn-success my-2">Get back</button>
    </form>
</main>

<?php 
include __DIR__ . "/partials/template/footer.php";
?>
