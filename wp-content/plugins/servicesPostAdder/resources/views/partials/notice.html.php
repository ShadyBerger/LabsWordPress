<?php if (isset($_SESSION['notice'])) : ?>
    <?php
    $status = $_SESSION['notice']['status'];
    $message = $_SESSION['notice']['message'];
    ?>
    <div class="notice notice-<?= $status; ?> is-dismissible">
        <p><?= $message; ?></p>
    </div>
    <?php
    unset($_SESSION['notice']);
    ?>
<?php endif; ?>