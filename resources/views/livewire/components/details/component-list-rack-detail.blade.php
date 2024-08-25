<div>
    <div class="content flex-column-fluid" id="kt_content">
        <div class="card card-custom gutter-b">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="mr-3">
                                <div class="d-flex align-items-center mr-3">
                                    <a
                                        class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">
                                        Kode Rak : {{ $rack->code }}</a>
                                    <span
                                        class="label label-light-{{ $rack->status_color }} label-inline font-weight-bolder mr-1">{{ $rack->status }}</span>
                                </div>
                                <div class="d-flex flex-wrap my-2">
                                    <a
                                        class="text-danger text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        </span>Sisa : {{ $available_slot }}</a>
                                    <a class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                        </span>Maksimal Slot : {{ $total_slot }}</a>
                                </div>
                                <div class="row align-items-center mr-3">
                                    @foreach ($slots as $slot)
                                        <div class="justify-content-between">
                                            <a href="{{ $quantities[$slot->id] ? route('og.listslot.detail', ['id' => $rack_id, 'id_slot' => $slot->id]) : 'javascript:;' }}" type="button" class="btn font-weight-bold btn-light-{{ $slot->status_color }} mr-2">Slot no. {{ $slot->code }} <span class="label label-{{ $slot->status_color }} label-lg ml-2">{{ $quantities[$slot->id] ?? '0' }}</span></a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
