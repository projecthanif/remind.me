<article class="model-2">
    <form action="#" class="form-model" method="get">
        <label for="title" class="title form">Title</label>
        <input type="text" name="title" id="" class="form-text">
        <div class="model-body">
            <label for="description" class="title form">Description</label>
            <textarea name="body" id="" cols="70" rows="10"></textarea>
            <div class="priority-level">
                <label for="priority">
                    Priority:
                </label>
                <input type="radio" name="priority" value="low">
                <div class="pill yellow">Low</div>
                <input type="radio" name="priority" value="middle" id="">
                <div value="middle" class="pill blue">Middle</div>
                <input type="radio" name="priority" value="high" id="">
                <div value="high" class="pill red">High</div>
            </div>
        </div>
        <div class="model-foot-2">
            <div class="pill red" id="cancel" onclick="modelFormCollapse()">Cancel</div>
            <input type="submit" class="pill black r-end form"></input>
        </div>
    </form>
</article>