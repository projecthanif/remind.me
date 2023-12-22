<?php
if (!empty($modelView)):
foreach ($modelView as $view) :
?>
    <article class="model">
        <div class="model-title">
            <?= (isset($view['title'])) ? $view['title'] : 'Title' ?>
        </div>
        <div class="model-body">
            <p class="model-description">
                <?= @($view['description']) ?>
            </p>
            <div class="priority-level">
                <h3 class="title fs-3">Priority:</h3>
                <?php if ($view['priority'] === 'low') : ?>
                    <div class="pill yellow">LOW</div>
                <?php elseif ($view['priority'] === 'middle') : ?>
                    <div class="pill blue">MIDDLE</div>
                <?php elseif ($view['priority'] === 'high') : ?>
                    <div class="pill red">HIGH</div>
                <?php endif; ?>
            </div>
        </div>
        <div class="model-foot">
            <div class="pill white">EDIT</div>
            <form action="/delete" method="delete">
                <input type="hidden" name="del_id" value="<?= $view['id'] ?>">
                <button class="pill red">DELETE</button>
            </form>
            <div class="pill black r-end" id="model-close">ClOSE</div>
        </div>
    </article>

<?php
endforeach;
endif;
?>