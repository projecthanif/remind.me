<article class="model">
    <div class="model-title">
        <?= (isset($list['title'])) ? $list['title'] : 'Title' ?>
    </div>
    <div class="model-body">
        <p class="model-description">
            <?= (isset($list['description'])) ? $list['description'] :
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
            tempora ab laborum dolorum. Vero praesentium expedita, ipsa nemo
            ullam facere temporibus aut corporis, rerum beatae molestias ex
            deserunt aperiam hic. Voluptas, consectetur? Quod earum, dolore
            eligendi vitae facilis fugit voluptas necessitatibus culpa quis
            delectus. Ut laboriosam temporibus fugit fugiat amet, dolor tenetur
            laudantium eum distinctio. Quis, nostrum quas. Soluta, quidem.
            Delectus ipsa nisi impedit quo eligendi commodi nemo quisquam
            necessitatibus. Iure fugit eveniet dolores, rerum deleniti
            voluptatem eum quasi facere quod culpa ea labore nihil dignissimos
            illum impedit assumenda recusandae."
            ?>
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
        <form action="#" method="get">
            <input type="hidden" name="del_id" value="<?=$list['id']?>">
            <button class="pill red">DELETE</button>
        </form>
        <div class="pill black r-end" id="model-close">ClOSE</div>
    </div>
</article>

<?php if (!empty($lists)) : ?>

    <?php foreach ($lists as $list) : ?>



    <?php endforeach; ?>

<?php endif; ?>