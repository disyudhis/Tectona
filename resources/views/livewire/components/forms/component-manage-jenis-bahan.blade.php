<div>
    {{-- @push('style')
    @endpush --}}
    <div class="content flex-column-fluid">
        <div class="card card-custom">
            <div class="card-body p-0">
                <div class="wizard wizard-1">
                    <div class="wizard-nav border-bottom">
                        <div class="wizard-steps p-8 p-lg-10">
                            <!--begin::Wizard Step 1 Nav-->
                            <div class="wizard-step" data-wizard-type='step' data-wizard-state="current">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-tool"></i>
                                    <h3 class="wizard-title">1. Tambah Bahan</h3>
                                </div>
                                <span class="svg-icon svg-icon-xl wizard-arrow">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)"
                                                x="11" y="5" width="2" height="14" rx="1" />
                                            <path
                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="wizard-step" data-wizard-type='step' data-wizard-state="current">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-more-v4"></i>
                                    <h3 class="wizard-title">2. Tambah Kode</h3>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                        </div>
                    </div>
                    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12 col xxl-7">
                            <form class="form">
                                <div class="pb-5">
                                    <h4 class="mb-10 font-weight-bold text-dark">1. Tambah Bahan</h4>
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>Tambah Bahan Baku</label>
                                        <input type="text" wire:model='nama_bahan' class="form-control form-control-solid">
                                        @error('nama_bahan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pb-5">
                                    <h4 class="mb-10 font-weight-bold text-dark">2. Tambah Kode</h4>
                                    <div class="form-group fv-plugins-icon-container has-success">
                                        <label>Masukkan Kode Bahan</label>
                                        <input type="text" wire:model='kode_bahan' class="form-control form-control-solid">
                                        @error('kode_bahan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                            <!--begin::Wizard Actions-->
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                </div>
                                <div>
                                    <button wire:click='openModalSubmit'
                                        class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4">Submit</button>
                                </div>
                            </div>
                            <!--end::Wizard Actions-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Submit And Review
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div class="mx-auto text-center">
                        <h5 class="mt-3">Review</h5>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label text-left">Nama Bahan :</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{ $nama_bahan }}"
                                    class="form-control form-control-solid">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-4 col-form-label text-left">Kode Bahan :</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{ $kode_bahan }}"
                                    class="form-control form-control-solid">
                            </div>
                        </div>
                        
                        <div class="mt-5">
                            <button type="button" class="btn btn-outline-danger font-weight-bold"
                                data-dismiss="modal">Close</button>
                            <button class="btn btn-outline-success" wire:click='createBahan'>Tambahkan
                                Produk</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('script')
        <script>
            window.addEventListener('openModalSubmit', event => {
                $("#submitModal").modal('show');
            })

            window.addEventListener('closeModalSubmit', event => {
                $("#submitModal").modal('hide');
            })
        </script>
    @endpush
</div>