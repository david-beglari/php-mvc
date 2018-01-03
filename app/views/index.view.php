<?php require('partials/head.php') ?>
    <div class="content">
        <ul>
            <?php foreach ($users as $user): ?>
                <li><?= $user->first_name ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php require('partials/footer.php') ?>