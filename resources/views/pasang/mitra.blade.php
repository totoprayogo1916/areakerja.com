@extends('layouts.pasang')
@section('home')
<section class="relative" id="home" style="margin-bottom: 50px">
    <div class="banner-area2 "  >
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container" >
                    <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                        Daftar Mitra
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
    <form id="regForm" enctype="multipart/form-data" action="{{ url('formMitra') }}" method="POST">
        @csrf
        <div class="tab">
            <h4 >Nama Perusahan</h4>
            <p><input id="nama" name="nama" placeholder="" oninput="this.className = ''" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;"></p>
            <h4 >Deskripsi Perusahan</h4>
            <p><input id="deskripsi" name="deskripsi" placeholder="" oninput="this.className = ''" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;"></p>
            <h4 >Alamat Perusahan</h4>
            <p><input id="alamat" name="alamat" placeholder="" oninput="this.className = ''" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;"></p>
            <h4 >Logo Perusahan</h4>
            <div >
                <input type="file"  id="gambar" name="gambar" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;">
            </div>
            {{-- <p><input placeholder="" oninput="this.className = ''" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;  "></p> --}}

            <div class="mt-4 mb-0">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-3" >
                        <button type="submit" class="btn btn-area"  onclick="nextPrev(1)" >
                            <span>Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab">
            <h4 >Info Kontak Perusahaan</h4>
            <div class="form-group text-center m-0">
                <div class="form-check form-check-inline">
                    <label for="defaultCheck1" >
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked='true' disabled="disabled">
                        Email</label>
                    <label for="hp" >
                        <input class="form-check-input" type="checkbox" value="" id="hp" onclick="myFunction()">
                        No. Telp</label>
                </div>
            </div>

            <div class="form-group">
                <h4>Email
                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                </h4>
                <div>
                    <input class = "mb-2" id="email" name="email" required="" type="text" value="" data-type="text" aria-required="true" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;">
                    <label> Email wajib diisi untuk konfirmasi pembayaran, hanya ditampilkan publik jika merupakan cara untuk mengirimkan lamaran
                    </label>
                </div>
            </div>

            <div class="form-group" id="hpform" style="display:none">
                <h4>No. Telp/Whatsapp
                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                </h4>
                <div >
                    <input id="notelp" name="notelp" type="text" required="" value="" data-type="text" aria-required="true" style="border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;" >
                </div>
            </div>
            <div class="mt-2 mb-1">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-3 " >
                        <button type="submit" class="btn btn-area" onclick="nextPrev(-1)" >
                            <span>Sebelumnya</span>
                        </button>
                    </div>
                    <div class="col-6 col-sm-3" >
                        <button type="submit" class="btn btn-area"  onclick="nextPrev(1)" >
                            <span>Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
