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
                <!-- <?= $list['list_id'] ?> -->
                <h6 class="title v4"><?= $list['title'] ?></h6>
            </div>
            <form action="#">
            <input type="hidden" name="id" value="<?= $list['list_id'] ?>">
            <button class="btn-2" onclick="modelToggle()">></button>
            </form>
        </div>
        <p class="text">
            <?= $list['description'] ?>
        </p>
    </div>