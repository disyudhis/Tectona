<div>
    <div class="dropdown">
        <!--begin::Toggle-->
        <div class="topbar-item mr-3" data-toggle="dropdown" data-offset="10px,0px">
            <div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown">
                <span
                    class="svg-icon svg-icon svg-icon-lg"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\General\Notifications1.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path
                                d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
                                fill="#000000" />
                            <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4"
                                rx="2" />
                        </g>
                    </svg><!--end::Svg Icon--></span>
            </div>
        </div>
        <!--end::Toggle-->
        <!--begin::Dropdown-->
        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">
            <!--begin::Header-->
            <div class="d-flex align-items-center py-5 px-8 rounded-top">
                <span class="btn btn-md btn-icon bg-white-o-15 mr-4">
                    <i class="flaticon-alert text-success"></i>
                </span>
                <h4 class="text-success m-0 flex-grow-1 mr-3">Notification <span class="badge badge-danger"></span>
                </h4>
            </div>
            <!--end::Header-->
            <!--begin::Scroll-->
            <div class="scroll scroll-push" data-scroll="true" data-height="250" data-mobile-height="200">
                <!--begin::Item-->
                {{-- @forelse ($notifications as $notification)
                    <div class="d-flex align-items-center justify-content-between p-8">
                        <div class="d-flex flex-column mr-2">
                            <a href="javascript:;" class="font-weight-bold text-dark text-hover-primary">Sisa stock
                                : {{ $notification->data['quantity'] }}</a>
                            <span class="text-muted">Product Code : {{ $notification->data['product_code'] }}</span>
                        </div>
                        <div class="symbol symbol-light-danger mr-3">
                            <span class="symbol-label"><i class="flaticon2-bell-5 icon-lg"></i></span>
                        </div>
                    </div>
                @empty
                    <div class="d-flex align-items-center justify-content-between p-8">
                        <div class="text-center">No new notifications</div>
                    </div>
                @endforelse --}}
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
            </div>
            <!--end::Scroll-->

        </div>
        <!--end::Dropdown-->
    </div>
</div>
