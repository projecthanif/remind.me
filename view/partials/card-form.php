<article class="model-2">
    <form action="/store" class="form-model" method="post">
        <div class="seperate">
            <div class="form-title">
                <label for="title" class="title form">Title</label>
                <input type="text" name="title" id="" class="form-text">
            </div>
            <div class="time">
                <label for="due date" class="title form">Due Date</label>
                <input type="date" name="date" id="" class="form-text">
            </div>
        </div>
        <div class="model-body">
            <label for="description" class="title form">Description</label>
            <textarea name="description" id="" cols="70" rows="10"></textarea>
            <div class="priority-level two">
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
            <input type="submit" name="submit" class="pill black r-end form"></input>
        </div>
    </form>
</article>