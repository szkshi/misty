<h1>New Post</h1>
<form action="/blog/posts/newpost" method="POST">
    <input name="X-HTTP-Method-Override" type="hidden" value="POST"/>

    <div class="control-group {if $errors.title}error{/if}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            <input type="text" id="title" name="title" value="{$submit.title}">

            <p class="help-inline">{$errors.title}</p>
        </div>
    </div>
    <div class="control-group {if $errors.body}error{/if}">
        <label>Body</label>
        <label>
            <textarea name="body" rows="10" cols="40">{$submit.body}</textarea>
        </label>

        <p class="help-inline">{$errors.body}</p>
    </div>
    <input type="submit" value="Submit">
</form>