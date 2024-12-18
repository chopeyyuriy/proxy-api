<div class="popup" data-popup="new-task">
    <div class="popup-backdrop"></div>
    <div class="popup-content">
        <div class="popup-close"></div>

        <div class="popup-title">
            <h3>Create new post</h3>
        </div>

        <div class="popup-group show">
            <div class="popup-section">
                <h4 class="popup-section__title">Title</h4>
                <label class="label label-select">
                    <input class="js-select" type="text" name="title" placeholder="Title">
                </label>
            </div>

            <div class="popup-section">
                <h4 class="popup-section__title">Body</h4>
                <label class="label label-select">
                    <input class="js-select" type="text" name="body" placeholder="Body">
                </label>
            </div>
        </div>

        <div class="popup-bottom">
            <button class="btn btn-save">Create Post</button>
        </div>

    </div>
</div>



<div class="popup" data-popup="task-info-1">
    <div class="popup-backdrop"></div>
    <div class="popup-content">
        <div class="popup-close"></div>

        <div class="popup-title">
            <h3>Task Info</h3>
        </div>

        <div class="popup-group show">
            <div class="popup-basic__inputs-group">
                <label class="label fluid">
                    <span>Instance</span>
                    <p class="input"><span>121372c8-33f6-4f10-88da-2e1fd35a3159</span></p>
                </label>
                <label class="label fluid">
                    <span>Query</span>
                    <p class="input"><span>usermail is loleeta_4@hotmail.com</span></p>
                </label>
                <label class="label fluid">
                    <span>Where to search</span>
                    <p class="input"><span>everywhere</span></p>
                </label>
                <label class="label fluid">
                    <span>Created at</span>
                    <p class="input"><span>2024-06-05 10:01:27 +0400</span></p>
                </label>
                <label class="label fluid">
                    <span>Report link</span>
                    <a href="#" class="input input-link"><span>https://1search.one/api//report/121372c8-33f6-4f10-88da-2e1fd35a3159.xlsx</span></a>
                </label>
            </div>
            <div class="popup-tasks__bottom">
                <a href="#" class="btn btn-outline">Download report<i class="icon download"></i></a>
                <a href="#" class="btn btn-outline">Preview<i class="icon link"></i></a>
                <a href="#" class="btn btn-red" data-popup-open="delete"><i class="icon delete"></i>Destroy</a>
            </div>
        </div>

    </div>
</div>
<div class="popup popup-delete" data-popup="delete">
    <div class="popup-backdrop"></div>
    <div class="popup-content">
        <div class="popup-close"></div>
        <h3>Delete user</h3>
        <p>This action cannot be undone, you will need to add it again</p>
        <div class="btn-row">
            <button class="btn-sm btn-delete-no">No</button>
            <button class="btn-sm btn-delete-yes">Yes</button>
        </div>
    </div>
</div>
