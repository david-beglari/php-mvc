<?php require('partials/head.php')?>
<div class="content">
    <form method="POST" action="names">
        <input name="first_name">
        <button type="submit">Ok</button>
    </form>


    <ul>
        <?php foreach ($results as $item) : ?>
        <li>
            <?= $item->first_name ?>
        </li>
        <? endforeach; ?>
    </ul>
</div>
<?php require('partials/footer.php')?>