<?php
require_once("template/header.php");
?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php for ($i = 0; $i < 6; $i++) : ?>
            <div class="col">
                <div class="card">
                    <img src="img/5e8d8eb7f6f3bf26e71274c0f9eb30b8.png" class="card-img-top" alt="produtos">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php
require_once("template/footer.php");
?>