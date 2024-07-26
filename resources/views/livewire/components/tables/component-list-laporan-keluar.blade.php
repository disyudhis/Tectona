<div>
    <div class="content flex-column-fluid">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-layers text-primary"></i></span>
                    <h3 class="card-label">Laporan Bahan Baku Keluar</h3>
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
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th>Jenis Bahan</th>
                                <th>Kode</th>
                                <th>Kuantitas</th>
                                <th>Tanggal Keluar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = ($outbonds->currentPage() - 1) * $outbonds->perPage() + 1;
                            @endphp
                            @if ($outbonds)
                                @forelse ($outbonds as $outbond)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $stok->product->material->name }}</td>
                                        <td>{{ $stok->product->jenis->name }}</td>
                                        <td>{{ $outbond->inventory_code }}</td>
                                        <td>{{ $outbond->quantity }}</td>
                                        <td>{{ $outbond->created_at }}</td>
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
                {{ $outbonds->links() }}
            </div>
        </div>
    </div>
</div>
