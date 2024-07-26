<div>
    <div class="content flex-column-fluid">
        @if ($alertMessage)
            <div class="alert alert-custom alert-notice alert-light-warning fade show" role="alert">
                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                <div class="alert-text">{{ $alertMessage }}</div>
                <div class="alert-close">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                    </button>
                </div>
            </div>
        @endif
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-layers text-primary"></i></span>
                    <h3 class="card-label">Daftar Rak</h3>
                </div>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col">
                            <div class="input-icon">
                                <input type="search" class="form-control" wire:model='search'
                                    placeholder="Search..." />
                                <span><i class="flaticon2-search-1 icon-md"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ route('og.listrack.manage') }}" class="btn btn-primary font-weight-bolder"><i
                                    class="la la-plus"></i>Tambah Data</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Keterangan</th>
                                <th>Tanggal Dibuat</th>
                                <th>Tanggal Diubah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = ($racks->currentPage() - 1) * $racks->perPage() + 1;
                            @endphp
                            @if ($racks)
                                @forelse ($racks as $rack)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $rack->code }}</td>
                                        <td class="text-danger font-weight-boldest">Sisa : {{ $slots[$rack->id] ?? 0 }}
                                        </td>
                                        <td>{{ $rack->created_at }}</td>
                                        <td>{{ $rack->updated_at }}</td>
                                        <td><a href="{{ route('og.listrack.detail', $rack->id) }}" type="button" class="btn btn-info px-5">Aksi</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="text-center">Empty</td>
                                    </tr>
                                @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
                {{ $racks->links() }}
            </div>
        </div>
    </div>
</div>
