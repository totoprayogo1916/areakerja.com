@extends('user.main')

@section('aboutus')
<section class="relative wrapper" id="home">

    {{-- <div class="banner-area"> --}}
        <div class="row align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <div class="serach-form-area flex-wrap" style="width: 150%; margin-left: -25%; margin-right: auto" id="formkontak">
                    <div class="col form-wrap-main" id="contentuser">
                        <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">Kontak Kami</h1>
                        <p style="font-size: 11pt; font-style: bold; margin: 5%; text-align: left; line-height: 120%">
                            Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                        </p>
                        <p style="font-size: 11pt; font-style: bold; margin: 5%; text-align: left; line-height: 120%">
                            Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
                        </p>

                        <form method="POST" enctype="multipart/form-data" action="{{ url('kontakform') }}" class="serach-form-area flex-wrap">
                            @csrf
                            <div class="form-group col-5" style="margin-left: 4%; margin-right: 4%" id="kontaknama">
                                <h4 style="margin-bottom: 2%">Nama
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div>
                                    <input id="nama" name="nama" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-5" style="margin-left: 5%" id="kontakemail">
                                <h4 style="margin-bottom: 2%">Email
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <input id="email" name="email" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-5" style="margin-left: 4%; margin-top: 5%" id="kontaknomor">
                                <h4 style="margin-bottom: 2%">Nomor Telepon / WA
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <input id="nomor" name="nomor" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-11" style="margin-left: 4%; margin-top: 5%">
                                <h4 style="margin-bottom: 2%">Pertanyaan / Saran
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <textarea id="saran" name="saran"required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="row form-wrap justify-content-around" style="margin-top: 2%; margin-left: auto">
                                <div class="col-lg-3 form-cols">
                                    <button type="submit" class="btn btn-area">
                                        <span ></span> Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</section>
@endsection

