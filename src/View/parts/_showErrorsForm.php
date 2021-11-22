<p class="errors">
    <?php
    if (!empty($errors) && count($errors) > 0) {
    ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    <?php foreach ($errors as $error) {
            echo $error . '<br/>';
        } ?>
</div>
<?php
    }
?>
</p>