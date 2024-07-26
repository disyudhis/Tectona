<div>
    @section('page_title', $page_title)
    @section('page_name', $page_name)
    @section('breadcrumb')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('kg.bahanbaku.index') }}" class="text-muted">Daftar Bahan Baku</a>
        </li>
    </ul>
    @endsection
    @livewire('components.tables.component-list-bahan-baku')
</div>
