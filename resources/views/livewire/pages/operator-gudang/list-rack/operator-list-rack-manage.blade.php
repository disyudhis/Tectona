<div>
    @section('page_title', $page_title)
    @section('page_name', $page_name)
    @section('breadcrumb')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.listrack.index') }}" class="text-muted">Daftar Rack</a>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.listrack.manage') }}" class="text-muted">Tambah Rak</a>
        </li>
    </ul>
    @endsection
    @livewire('components.forms.component-manage-list-rack')
</div>
