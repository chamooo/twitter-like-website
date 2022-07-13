<?php 
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/admin/partials/header.php');
?>

<div class="container">

<?php
    if(isAuth()) {
        echo '<h2> Hello, ' . $user['username'] . '</h2>';
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/twit.php');

    } else {
        echo "Hello";
    }
?>
</div>

<script src="assets/js/main.js"></script>

<!-- BODY END -->
<?php require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php') ?>