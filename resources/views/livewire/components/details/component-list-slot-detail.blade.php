<div>
    <div class="content flex-column-fluid" id="kt_content">
        <div class="card card-custom gutter-b card-stretch">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Section-->
                <div class="d-flex align-items-center">
                    <!--begin::Info-->
                    <div class="d-flex flex-column mr-auto">
                        <!--begin: Title-->
                        <a href="#" class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1">Kode Slot - {{ $slot_code }}</a>
                        <span class="text-muted font-weight-bold">Kode Rak : {{ $rack_code }}</span>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Section-->
                <!--begin::Content-->
                <div class="d-flex flex-wrap mt-14">
                    <div class="mr-12 d-flex flex-column mb-7">
                        <span class="d-block font-weight-bold mb-4">Start Date</span>
                        <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">{{ $transaksi_masuk->created_at }}</span>
                    </div>
                    <div class="mr-12 d-flex flex-column mb-7">
                        <span class="d-block font-weight-bold mb-4">Sisa Stok</span>
                        <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text">{{ $inventories->quantity }}</span>
                    </div>
                    <!--begin::Progress-->
                    <div class="flex-row-fluid mb-7">
                        <span class="d-block font-weight-bold mb-4">Kode Bahan Baku</span>
                        <div class="d-flex align-items-center pt-2">
                            <span class="ml-3 font-weight-bolder h5">{{ $inventories->code }}</span>
                        </div>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Content-->
                <!--begin::Text-->
                <p class="mb-7 mt-3"><strong>Jenis Bahan Baku : </strong>{{ $kode_bahan['jenis'] }}</p>
                <p class="mb-7 mt-3"><strong>Nama Bahan Baku : </strong>{{ $kode_bahan['material'] }}</p>
                <p class="mb-7 mt-3"><strong>Warna Bahan Baku : </strong>{{ $kode_bahan['color'] }}</p>
                <!--end::Text-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
