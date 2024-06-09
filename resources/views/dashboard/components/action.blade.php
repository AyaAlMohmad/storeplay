<div class="hidden-sm hidden-xs btn-group"  style="display:flex;">
    {{-- <button class="btn btn-xs btn-success">
            <i class="ace-icon fa fa-check bigger-120"></i>
        </button> --}}

    <button class="btn btn-xs btn-success "  title="Edit" >
        <a href="{{ route($module_name .'.edit',$item->id) }}" style="color: inherit!important;">
            <i class="ace-icon fa fa-pencil bigger-120"></i></a>
        </button>
        <form method="POST" action="{{ route($module_name.'.destroy', $item->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-xs btn-danger" title="Delete">
       
                <i class="ace-icon fa fa-trash-o bigger-120"></i>
            </button>
        </form>
   

    <button class="btn btn-xs btn-info" title="show">
        <a href="{{ route($module_name .'.show',$item->id) }}" style="color: inherit!important;">
            <i class="ace-icon fa fa-flag bigger-120"></i></a>
        </button>
</div>