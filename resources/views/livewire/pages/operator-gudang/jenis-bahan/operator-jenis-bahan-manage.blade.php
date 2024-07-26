<div>
    @section('page_title', $page_title)
    @section('page_name', $page_name)
    @section('breadcrumb')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.jenisbahan.index') }}" class="text-muted">Daftar Jenis Bahan</a>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.jenisbahan.manage') }}" class="text-muted">Tambah Jenis Bahan</a>
        </li>
    </ul>
    @endsection
    @livewire('components.forms.component-manage-jenis-bahan')
</div>
