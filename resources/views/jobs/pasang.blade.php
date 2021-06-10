@extends('layouts.pasang')

@section('home')
<section class="relative" id="home">
    <div class="banner-area">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    Form Order
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                Tambah Lowongan Dari Perusahaan Anda Dengan Mudah
                </h6>
                <form action="#" class="serach-form-area flex-wrap" style="width: 100%" >
                    <div class="col form-wrap-main" style=" padding: 30px 20px 20px 20px; margin-bottom: 10%;" id="form-luar">
                        <div class="form-group">
                            <h4>Nama Pekerjaan
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div> </div> </br>

                        <div class="form-group">
                            <h4>Deskripsi Perusahaan</h4>
                            <div >
                            <textarea required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div> </div> </br>

                        <div class="form-group">
                            <h4>Alamat Perusahaan</h4>
                            <div >
                            <textarea required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div> </div> </br>

                        <div class="form-group">
                            <h4> Logo Perusahaan </h4> </br>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label " for="validatedCustomFile">Choose file...</label>
                            </div>
                         </div> </br>

                        <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                            <div class="col-lg-3 form-cols">
                                <a type="submit" class="btn btn-area" href="{{route('pasang2')}}">
                                <span ></span> Selanjutnya
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')

@endsection
