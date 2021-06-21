@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >

        <div class="row align-items-center justify-content-center" style="margin-right: 1%">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    Tips Kerja
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda
                </h6>
                <form method="POST" enctype="multipart/form-data" action="{{ url('formpasang') }}" id="regForm" style="width: 50%;">
                    isdhfkjlf;skdjkdfdjdk

                    <!-- Circles which indicates the steps of the form: -->
                    {{-- <div style="text-align:center;margin-top:40px;">
                      <span class="step"></span>
                      <span class="step"></span>
                    </div> --}}

                    </form>

            </div>
        </div>
    {{-- </div> --}}
</section>
@endsection

