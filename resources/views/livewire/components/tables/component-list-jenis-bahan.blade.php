<div>
    <div class="content flex-column-fluid">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon"><i class="flaticon2-layers text-primary"></i></span>
                    <h3 class="card-label">Daftar Jenis Bahan</h3>
                </div>
                <div class="card-toolbar">
                    <div class="row">
                        <div class="col">
                            <div class="input-icon">
                                <input type="search" class="form-control" wire:model='search' placeholder="Search..."/>
                                <span><i class="flaticon2-search-1 icon-md"></i></span>
                            </div>
                        </div>
                        <div class="col">
                            <a href="{{ route('og.jenisbahan.manage') }}" class="btn btn-primary font-weight-bolder"><i
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
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Dibuah pada</th>
                                <th>Diubah pada</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = ($jenises->currentPage() - 1) * $jenises->perPage() + 1;
                            @endphp
                            @if ($jenises)
                                @forelse ($jenises as $jenis)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $jenis->name }}</td>
                                        <td>{{ $jenis->code }}</td>
                                        <td>{{ $jenis->created_at }}</td>
                                        <td>{{ $jenis->updated_at }}</td>
                                        <td><button wire:click="openDeleteModal('{{ $jenis->id }}')" class="btn btn-danger btn-sm px-5">Hapus <span><i class="flaticon2-rubbish-bin"></i></span></button></td>
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
                {{ $jenises->links() }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm wire:" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div class="mx-auto text-center">
                        <i class="text-danger flaticon-delete-1 icon-3x"></i>
                        <h3 class="mt-5"><strong> Delete Bahan</h3></strong>
                        <h8 class="mt-3"><small class="text-muted"> Are you sure
                                want
                                to
                                delete this material?</small></h8><br>
                        <div class="mt-2">
                            <div class="row mb-2">
                                <div class="col">
                                    <label>Nama Bahan : </label>
                                </div>
                                <div class="col">
                                    <input type="text" value="{{ $name }}"
                                        class="form-control form-control-solid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Kode Bahan :</label>
                                </div>
                                <div class="col">
                                    <input type="text" value="{{ $code }}"
                                        class="form-control form-control-solid">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="mt-5">
                            <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal"
                                style="width: 120px">Close</button>
                            <button type="button" wire:click="delete" class="btn btn-outline-danger font-weight-bold"
                                style="width: 120px">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            window.addEventListener('showDeleteModal', event => {
                $("#deleteModal").modal('show');
            })
            window.addEventListener('closeDeleteModal', event => {
                $("#deleteModal").modal('hide');
            })
        </script>
    @endpush
</div>
