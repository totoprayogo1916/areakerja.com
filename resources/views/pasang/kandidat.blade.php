@extends('layouts.pasang')
@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner-area2 ">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <div class="overlay overlay-bg container">
                        <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                            Daftar Sebagai Kandidat
                        </h1>
                        <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                            {{-- Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda --}}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="col-12 col-sm-10 col-md-7 mx-auto">
        <form id="regForm" enctype="multipart/form-data" action="#" method="#">
            @csrf
            <div class="tab">
                <h4>Nama Lengkap</h4>
                <p><input id="nama" name="nama" placeholder="" oninput="this.className = ''"
                        style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;">
                </p>
                <h4>Alamat Tempat Tinggal</h4>
                <div>
                    <textarea id="alamat" name="alamat"  style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;width: 100%;"
                        oninput="this.className = ''" type="text" class="form-control2 " value="" data-type="text"
                        aria-required="true" ></textarea>
                </div>
                <h4>Biografi</h4>
                    <textarea id="deskripsiperusahaan" name="deskripsiperusahaan"  style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;width: 100%;"
                        oninput="this.className = ''" type="text" class="form-control2 " value="" data-type="text"
                        aria-required="true"></textarea>
                <h4>Skill Utama</h4>
                <p><input id="alamat" name="alamat" placeholder="" oninput="this.className = ''"
                    type="text" class="form-control2 " value="" data-type="text"
                    aria-required="true" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;">
                </p>
                <h4>Upload CV</h4>
                <div>
                    <input type="file" id="gambar" name="gambar"
                        style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;">
                </div>
                {{-- <p><input placeholder="" oninput="this.className = ''" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;  "></p> --}}

                <div class="mt-4 mb-0">
                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-3">
                            <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                                <span>Selanjutnya</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab">
                <div class="form-group">
                    <h3>Skill
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dynamic_field2">
                            <tr>
                                <td><input id="namaskill" name="namaskill" type="text" class="form-control2 " value=""
                                    data-type="text" aria-required="true" placeholder="Nama Skill" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;"></td>
                                <td><div class="box input-group mb-2 mr-sm-2">
                                    <div class="value" id="current-value1">50 </div><span style="color:#f77f10;">%</span>
                                    <div class="slider">
                                    <input type="range" min="0" max="100" value="50" id="costum-slider1">
                                    </div>
                                </div></td>
                                <td><button type="button" name="add2" id="add2" class="btn btn-area">Add More</button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-inline">
                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                        <input id="title" name="title" required="" type="text" class="form-control2 " value=""
                        data-type="text" aria-required="true" placeholder="Nama Skill" style="width: 50%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;">

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                        <div class="box input-group mb-2 mr-sm-2">
                            <div class="value" id="current-value">50 </div><span style="color:#f77f10;">%</span>
                            <div class="slider">
                            <input type="range" min="0" max="100" value="50" id="costum-slider">
                            </div>
                        </div>
                        <div class="input-group mb-2 mr-sm-2">
                            <button type="submit" class="lingkaran">
                                <i class="
                                fas fa-plus"></i>
                            </button>
                        </div>
                      </div>
                </div>
                <div class="mt-2 mb-1">
                    <div class="row justify-content-center">
                        <div class="col-6 col-sm-3 ">
                            <button type="submit" class="btn btn-area" onclick="nextPrev(-1)">
                                <span>Sebelumnya</span>
                            </button>
                        </div>
                        <div class="col-6 col-sm-3">
                            <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                                <span>Selanjutnya</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>




        </form>
    </div>

@endsection
