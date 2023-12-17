<article class="model">
    <div class="model-title">
        <!-- <?= var_dump($list) ?> -->
        <?= $list['id']?>
        <?= (isset($list['title'])) ? $list['title'] : 'Title' ?>
    </div>
    <div class="model-body">
        <p class="model-description">
            <?= @($list['description']) ?>
        </p>
        <div class="priority-level">
            <h3 class="title fs-3">Priority:</h3>
            <?php if ($list['priority'] === 'low') : ?>
                <div class="pill yellow">LOW</div>
            <?php elseif ($list['priority'] === 'middle') : ?>
                <div class="pill blue">MIDDLE</div>
            <?php elseif ($list['priority'] === 'high') : ?>
                <div class="pill red">HIGH</div>
            <?php endif; ?>
        </div>
    </div>
    <div class="model-foot">
        <div class="pill white">EDIT</div>
        <form action="/delete" method="delete">
            <input type="hidden" name="del_id" value="<?= $list['id'] ?>">
            <button class="pill red">DELETE</button>
        </form>
        <div class="pill black r-end" id="model-close">ClOSE</div>
    </div>
</article>