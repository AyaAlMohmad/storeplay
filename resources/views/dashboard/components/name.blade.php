<div class="form-group">
    <label class="col-sm-2 control-label no-padding-right" for="name">
        name
    </label>
    <div class="col-sm-4">
        <input class="col-xs-10 col-sm-5" type="text" placeholder="" name="name" value="{{isset($item)!=null ? $item->name : old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
</div><br><br>