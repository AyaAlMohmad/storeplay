<div class="form-group">
    <div class="row">
        <label class="col-sm-2 control-label no-padding-right" for="description">
            description
        </label>
        <div class="col-xs-9">
            <h4 class="header green"></h4>
            <div class="widget-box widget-color-blue">
                <div class="widget-header widget-header-small"> </div>
                <div class="widget-body">
                    <div class="widget-main no-padding">
                        <textarea data-provide="markdown" data-iconlibrary="fa" rows="10" placeholder="description" name="description"
                            id="description">{{isset($item)!=null ? $item->description : old('description') }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
    </div>
</div>