<div class="form-group">
    <label for="short_description" class="col-sm-2 control-label no-padding-right">
        short_description
    </label>
    <div class="col-sm-4">
        <input class="form-control" type="text" name="short_description" id="short_description" value="{{isset($item)!=null ? $item->short_description : old('short_description') }}">
        @error('short_description')
            <div>{{ $message }}</div>
        @enderror
    </div>
</div>