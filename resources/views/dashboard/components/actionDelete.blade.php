<div class="hidden-sm hidden-xs btn-group"  style="display:flex;">
    {{-- <button class="btn btn-xs btn-success">
            <i class="ace-icon fa fa-check bigger-120"></i>
        </button> --}}

    <button class="btn btn-xs btn-success "  title="Restore" >
        <a href="{{ route($module_name .'.restore',$item->id) }}" style="color: inherit!important;">
            <i class="ace-icon fa fa-refresh bigger-120"></i></a>
        </button>
      
            <button class="btn btn-xs btn-danger" title="Final Delete">
                <a href="{{ route($module_name .'.finaldelete',$item->id) }}" style="color: inherit!important;">
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                </a>
            </button>
     
   


</div>