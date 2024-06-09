<div class="form-group">
    @if( isset($item)!=null) 
    <span style="color: rebeccapurple;">Old Image</span>
    <img src="{{ asset('images/'.$file .'/' . $item->image) }}" width="100" height="100">
    @endif
    <label for="file" class="col-sm-3 col-xs-10 control-label no-padding-right">image</label>


            <label for="id-input-file-3" class="btn btn-app btn-purple btn-sm file-upload-label">
                <i class="fa fa-cloud-upload bigger-200"></i>
            </label>
            <input name="image" type="file" id="id-input-file-3" class="custom-file-input" style="display:none;">
            <img id="preview-image" src="#" alt="Selected Image Preview" style="max-width:100px; height:100px;">


        @error('image')
            <div>{{ $message }}</div>
        @enderror
    </div>
</div>

<script>
    document.getElementById('id-input-file-3').addEventListener('change', function(e) {
        var reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('preview-image').src = event.target.result;
        }
        if (e.target.files && e.target.files[0]) {
            reader.readAsDataURL(e.target.files[0]);
        } else {
            // Clear preview image if no file was selected
            document.getElementById('preview-image').src = "";
        }
    });
</script>