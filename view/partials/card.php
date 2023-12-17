    <div class="card-2">
        <div class="card-head">
            <div class="head-2">
                <?php if ($list['priority'] === 'low') : ?>
                    <div class="color yellow"></div>
                <?php elseif ($list['priority'] === 'middle') : ?>
                    <div class="color blue"></div>
                <?php elseif ($list['priority'] === 'high') : ?>
                    <div class="color red"></div>
                <?php endif; ?>
                <h6 class="title v4"><?= $list['title'] ?></h6>
            </div>
            <button class="btn-2" onclick="modelToggle()">></button>
            <?php require(dirname(__FILE__) . "/card-model.php") ?>
        </div>
        <p class="text">
            <?= $list['description'] ?>
        </p>
    </div>
