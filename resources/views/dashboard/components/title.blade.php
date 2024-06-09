<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="title">
        title
    </label>
    <div class="col-sm-4">
        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="title" value="{{isset($item)!=null ? $item->title : old('title') }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
</div><br><br>