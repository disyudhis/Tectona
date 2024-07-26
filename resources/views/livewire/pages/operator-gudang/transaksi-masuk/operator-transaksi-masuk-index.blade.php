<div>
    @section('page_title', $page_title)
    @section('page_name', $page_name)
    @section('breadcrumb')
    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('og.transaksi.masuk.index') }}" class="text-muted">Buat Transaksi Masuk</a>
        </li>
    </ul>
    @endsection
    @livewire('components.tables.component-list-transaksi-masuk')
</div>
