@extends('user.main')

@section('aboutus')
<section class="relative wrapper" id="home" style="margin-bottom: -7%">

    {{-- <div class="banner-area"> --}}
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12" style="width: 10">
                <div class="serach-form-area flex-wrap">
                    <div class="col form-wrap-main" id="contentuser" style="width: 100%;">
                        <h1>Kontak Kami</h1>
                        <p style="font-size: 11pt; font-style: bold; margin: 5%; text-align: left; line-height: 120%">
                        Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                            <br>
                            <br>
                        Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
                    <form action="#" class="serach-form-area flex-wrap" style="width: 100%" >
                        <div class="form-group">
                            <h4>Nama
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div> </div> </br>
                    <form action="#" class="serach-form-area flex-wrap" style="width: 100%" >
                        <div class="form-group">
                            <h4>Email
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div> </div> </br>
                    <form action="#" class="serach-form-area flex-wrap" style="width: 100%" >
                        <div class="form-group">
                            <h4>Nomor Telepon / WA
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div> </div> </br>
                    <form action="#" class="serach-form-area flex-wrap" style="width: 100%" >
                        <div class="form-group">
                            <h4>Pertanyaan / Saran 
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <textarea required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div> </div> </br>
                    <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                        <div class="col-lg-3 form-cols">
                            <a type="submit" class="btn btn-area" href="{{route('pasang2')}}">
                            <span ></span> Kirim
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</section>
@endsection

