<div>
    @section('page_title', $page_title)
    @section('page_name', $page_name)
    @section('breadcrumb')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.listrack.index') }}" class="text-muted">Daftar Rak</a>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.listrack.detail', ['id' => $rack_id]) }}" class="text-muted">Detail Rak</a>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="javascript:;" class="text-muted">Detail Slot</a>
        </li>
    </ul>
    @endsection
    @livewire('components.details.component-list-slot-detail', ['id' => $rack_id, 'id_slot' => $slot_id])
</div>
