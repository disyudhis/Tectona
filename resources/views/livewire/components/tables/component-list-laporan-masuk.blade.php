<div>
    <div class="content flex-column-fluid">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-layers text-primary"></i></span>
                    <h3 class="card-label">Laporan Bahan Baku Masuk</h3>
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
                                <th>Tanggal Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = ($inbounds->currentPage() - 1) * $inbounds->perPage() + 1;
                            @endphp
                            @if ($inbounds)
                                @forelse ($inbounds as $inbound)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $inbound->inventory->product->material->name }}</td>
                                        <td>{{ $inbound->inventory->product->jenis->name }}</td>
                                        <td>{{ $inbound->inventory->code }}</td>
                                        <td>{{ $inbound->quantity }}</td>
                                        <td>{{ $inbound->created_at }}</td>
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
                {{ $inbounds->links() }}
            </div>
        </div>
    </div>
</div>
