@extends('admin.layout.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header media border-0 pb-0">
                            <div class="media-body">
                                <h2 class="text-black">{{ allUser() }}</h2>
                                <p class="mb-0 text-black">Total User</p>
                            </div>
                            <svg width="32" height="36" viewBox="0 0 32 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.25 19.25C12.2389 19.25 13.2056 18.9568 14.0279 18.4074C14.8501 17.8579 15.491 17.0771 15.8694 16.1634C16.2478 15.2498 16.3469 14.2445 16.1539 13.2746C15.961 12.3046 15.4848 11.4137 14.7855 10.7145C14.0863 10.0152 13.1954 9.539 12.2255 9.34608C11.2555 9.15315 10.2502 9.25217 9.33658 9.6306C8.42295 10.009 7.64206 10.6499 7.09265 11.4722C6.54325 12.2944 6.25 13.2611 6.25 14.25C6.25129 15.5757 6.77849 16.8467 7.71589 17.7841C8.65329 18.7215 9.92431 19.2487 11.25 19.25ZM11.25 11.75C11.7445 11.75 12.2278 11.8966 12.6389 12.1713C13.05 12.446 13.3705 12.8365 13.5597 13.2933C13.7489 13.7501 13.7984 14.2528 13.702 14.7377C13.6055 15.2227 13.3674 15.6681 13.0178 16.0178C12.6681 16.3674 12.2227 16.6055 11.7377 16.702C11.2528 16.7984 10.7501 16.7489 10.2933 16.5597C9.83648 16.3705 9.44603 16.0501 9.17133 15.6389C8.89662 15.2278 8.75 14.7445 8.75 14.25C8.75089 13.5872 9.01457 12.9519 9.48322 12.4832C9.95187 12.0146 10.5872 11.7509 11.25 11.75Z"
                                    fill="#EA4989" />
                                <path
                                    d="M30.78 22.4625C31.1926 21.9098 31.4683 21.2672 31.5844 20.5873C31.7005 19.9074 31.6537 19.2097 31.4477 18.5514L30.6542 15.9696C30.2817 14.7451 29.5243 13.6733 28.4946 12.9132C27.4648 12.1531 26.2174 11.7452 24.9375 11.75H19.3286C18.9971 11.75 18.6792 11.8817 18.4447 12.1161C18.2103 12.3505 18.0786 12.6685 18.0786 13C18.0786 13.3315 18.2103 13.6495 18.4447 13.8839C18.6792 14.1183 18.9971 14.25 19.3286 14.25H24.9375C25.6823 14.2474 26.4081 14.485 27.0072 14.9274C27.6064 15.3698 28.0471 15.9935 28.2639 16.706L29.0574 19.2866C29.1449 19.5713 29.1645 19.8725 29.1145 20.1661C29.0645 20.4597 28.9463 20.7374 28.7694 20.977C28.5925 21.2166 28.3619 21.4114 28.096 21.5456C27.8302 21.6799 27.5366 21.7499 27.2387 21.75H15.7776C15.7422 21.75 15.7126 21.7671 15.6776 21.7701C15.5936 21.7669 15.5125 21.75 15.4272 21.75H7.58975C6.20068 21.7449 4.84702 22.1879 3.72969 23.0132C2.61236 23.8385 1.79094 25.0021 1.38737 26.3312L0.454122 29.3625C0.236133 30.0719 0.187609 30.8225 0.312449 31.554C0.437289 32.2856 0.732013 32.9776 1.17293 33.5746C1.61385 34.1715 2.18866 34.6567 2.85116 34.9911C3.51366 35.3255 4.24538 35.4998 4.9875 35.5H18.0286C18.7708 35.4999 19.5026 35.3256 20.1651 34.9912C20.8277 34.6569 21.4026 34.1717 21.8435 33.5748C22.2845 32.9778 22.5793 32.2857 22.7041 31.5542C22.829 30.8226 22.7805 30.0719 22.5625 29.3625L21.6299 26.3315C21.3936 25.5767 21.0217 24.8713 20.5322 24.25H27.2387C27.9283 24.2532 28.6088 24.0928 29.2243 23.7821C29.8399 23.4714 30.373 23.0192 30.78 22.4625ZM19.8327 32.089C19.6254 32.3726 19.3538 32.6031 19.0402 32.7614C18.7266 32.9198 18.3799 33.0015 18.0286 33H4.9875C4.63649 32.9999 4.2904 32.9175 3.97705 32.7594C3.6637 32.6012 3.39184 32.3717 3.18334 32.0894C2.97484 31.807 2.83552 31.4796 2.77658 31.1336C2.71764 30.7876 2.74073 30.4326 2.844 30.0971L3.77662 27.0661C4.02439 26.2489 4.52922 25.5335 5.21609 25.0261C5.90296 24.5188 6.7352 24.2466 7.58912 24.25H15.4266C16.2805 24.2466 17.1128 24.5188 17.7996 25.0261C18.4865 25.5335 18.9913 26.2489 19.2391 27.0661L20.1717 30.0971C20.2769 30.4323 20.301 30.7877 20.2421 31.134C20.1831 31.4804 20.0429 31.8078 19.8327 32.0894V32.089Z"
                                    fill="#EA4989" />
                                <path
                                    d="M21.875 9.24999C22.7403 9.24999 23.5861 8.9934 24.3056 8.51267C25.0251 8.03194 25.5858 7.34866 25.917 6.54923C26.2481 5.74981 26.3347 4.87014 26.1659 4.02148C25.9971 3.17281 25.5804 2.39326 24.9686 1.78141C24.3567 1.16955 23.5772 0.752876 22.7285 0.584066C21.8798 0.415256 21.0002 0.501896 20.2008 0.833029C19.4013 1.16416 18.7181 1.72492 18.2373 2.44438C17.7566 3.16384 17.5 4.0097 17.5 4.875C17.5014 6.03489 17.9628 7.14688 18.7829 7.96705C19.6031 8.78722 20.7151 9.2486 21.875 9.24999ZM21.875 3C22.2458 3 22.6083 3.10997 22.9167 3.31599C23.225 3.52202 23.4654 3.81485 23.6073 4.15747C23.7492 4.50008 23.7863 4.87708 23.714 5.24079C23.6416 5.6045 23.463 5.9386 23.2008 6.20082C22.9386 6.46304 22.6045 6.64162 22.2408 6.71397C21.8771 6.78631 21.5001 6.74918 21.1575 6.60727C20.8149 6.46535 20.522 6.22503 20.316 5.91669C20.11 5.60835 20 5.24584 20 4.875C20.0006 4.37789 20.1983 3.9013 20.5498 3.54979C20.9013 3.19829 21.3779 3.00056 21.875 3Z"
                                    fill="#EA4989" />
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart1" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header media border-0 pb-0">
                            <div class="media-body">
                                <h2 class="text-black">${{ Total_deposit() }}</h2>
                                <p class="mb-0 text-black">Total Deposit</p>
                            </div>
                            <svg width="20" height="36" viewBox="0 0 20 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                    fill="#EA4989" />
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart2" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header media border-0 pb-0">
                            <div class="media-body">
                                <h2 class="text-black">$56</h2>
                                <p class="mb-0 text-black">Given Widthraw</p>
                            </div>
                            <svg width="20" height="36" viewBox="0 0 20 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                    fill="#EA4989" />
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart3" height="75"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="card overflow-hidden">
                        <div class="card-header media border-0 pb-0">
                            <div class="media-body">
                                <h2 class="text-black">{{ sold_tickets() }} </h2>
                                <p class="mb-0 text-black">Sold Ticket</p>
                            </div>
                            <svg width="20" height="36" viewBox="0 0 20 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.08 24.36C19.08 25.64 18.76 26.8667 18.12 28.04C17.48 29.1867 16.5333 30.1467 15.28 30.92C14.0533 31.6933 12.5733 32.1333 10.84 32.24V35.48H8.68V32.24C6.25333 32.0267 4.28 31.2533 2.76 29.92C1.24 28.56 0.466667 26.84 0.44 24.76H4.32C4.42667 25.88 4.84 26.8533 5.56 27.68C6.30667 28.5067 7.34667 29.0267 8.68 29.24V19.24C6.89333 18.7867 5.45333 18.32 4.36 17.84C3.26667 17.36 2.33333 16.6133 1.56 15.6C0.786667 14.5867 0.4 13.2267 0.4 11.52C0.4 9.36 1.14667 7.57333 2.64 6.16C4.16 4.74666 6.17333 3.96 8.68 3.8V0.479998H10.84V3.8C13.1067 3.98667 14.9333 4.72 16.32 6C17.7067 7.25333 18.5067 8.89333 18.72 10.92H14.84C14.7067 9.98667 14.2933 9.14667 13.6 8.4C12.9067 7.62667 11.9867 7.12 10.84 6.88V16.64C12.6 17.0933 14.0267 17.56 15.12 18.04C16.24 18.4933 17.1733 19.2267 17.92 20.24C18.6933 21.2533 19.08 22.6267 19.08 24.36ZM4.12 11.32C4.12 12.6267 4.50667 13.6267 5.28 14.32C6.05333 15.0133 7.18667 15.5867 8.68 16.04V6.8C7.29333 6.93333 6.18667 7.38667 5.36 8.16C4.53333 8.90667 4.12 9.96 4.12 11.32ZM10.84 29.28C12.28 29.12 13.4 28.6 14.2 27.72C15.0267 26.84 15.44 25.7867 15.44 24.56C15.44 23.2533 15.04 22.2533 14.24 21.56C13.44 20.84 12.3067 20.2667 10.84 19.84V29.28Z"
                                    fill="#EA4989" />
                            </svg>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="widgetChart4" height="75"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
