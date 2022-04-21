<div class="mb-3 row">
    <label for="name" class="col-sm-4 col-form-label">@lang('admin.catparent')</label>
    <div class="col-sm-7">
    <select id="parent_category" class="form-select" name="parent">
        <option value="0">@lang('messages.form.select_category')</option>
        @foreach($parenttags as $p_tag)
            <option value="{{ $p_tag->id }}" 
            @if (isset($tag))
            {{  $tag->parent == $p_tag->id ? 'selected="selected"' : '' }}
            @endif
            >{{ $p_tag->name }}</option>
        @endforeach
    </select>
    <small id="name" class="form-text text-muted">@lang('admin.catparentdesc')</small>
    </div>
</div>