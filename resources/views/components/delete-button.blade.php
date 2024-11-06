<form action="{{$href }}" method="post" style="display: inline"
    id="confirmTO-{{ $id }}">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $id }})">
        <i class="fe fe-20 fe-trash-2"></i>
    </button>
</form>
