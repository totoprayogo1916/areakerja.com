@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >

        <div class="row align-items-center justify-content-center" >
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    Form Order
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                Tambah Lowongan Dari Perusahaan Anda Dengan Mudah
                </h6>
<<<<<<< HEAD
                <form method="POST" enctype="multipart/form-data" action="{{ url('formpasang') }}" id="regForm" style="width: 50%; ">
                    @csrf
=======
                <form id="regForm" action="" style="width: 50%; ">
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4
                    <div class="tab" >
                        <div class="form-group">
                            <h4>Nama Perusahaan
                            <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                            <input id="namaperusahaan" name="namaperusahaan" type="text"  class="form-control2 " oninput="this.className = ''" >
                            </div> </div>

                        <div class="form-group">
                            <h4>Deskripsi Perusahaan</h4>
                            <div >
                            <textarea id="deskripsiperusahaan" name="deskripsiperusahaan" style="width: 100%" oninput="this.className = ''" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div> </div>

                        <div class="form-group">
                            <h4>Alamat Perusahaan</h4>
                            <div >
                            <textarea id="alamatperusahaan" name="alamatperusahaan" style="width: 100%" oninput="this.className = ''"  type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div> </div>

                        <div class="form-group">
                            <h4> Logo Perusahaan </h4>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="logoperusahaan" name="logoperusahaan">
                            <label class="custom-file-label " for="logoperusahaan">Choose file...</label>
                            </div>
                            </div>

                        <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                                <span ></span> Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="form-group">
                            <h4>Nama Pekerjaan
                                <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
                                <input id="namapekerjaan" name="namapekerjaan"  required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Status Pekerjaan <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span> </h4>
                            <div >
                                <select id="statusperusahaan" name="statusperusahaan"  class="form-control2" required>
                                    <option value="1">Full Time</option>
                                    <option value="2">Part Time</option>
                                    <option value="3">Freelance</option>
                                </select>
                                <div class="invalid-feedback">Example invalid custom select feedback</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Kisaran Gaji</h4>
                            <div class="form-row">
                                <div class="col">
                                    <input id="mingaji" name="mingaji"  type="text" class="form-control2" placeholder="Minimal Gaji">
                                </div>
                                <div class="col">
                                    <input  id="maxgaji" name="maxgaji"  type="text" class="form-control2" placeholder="Maksimal Gaji">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Deskripsi Pekerjaan</h4>
                            <div >
                                <textarea  id="deskripsipekerjaan" name="deskripsipekerjaan" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Syarat Pekerjaan</h4>
                            <div >
                                <textarea id="syaratpekerjaan" name="syaratpekerjaan"  required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Batas Lamaran</h4>
                            <div>
                                <input id="bataslamaran" name="bataslamaran"  required="" type="date"  class="form-control2  " data-date-format="dd-mm-yyyy" value="" data-type="date" aria-required="true">
                            </div>
                        </div>

                        <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area" onclick="nextPrev(-1)" >
                                <span ></span> Sebelumnya
                                </button>
                            </div>
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                                <span ></span> Selanjutnya
                                </button>
                            </div>
                        </div>
                    </div>

<<<<<<< HEAD
<<<<<<< HEAD
                    <div class="tab">
                        <div class="form-group">
                            <h2> Bagaimana Cara Mengirimkan Melamar? <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h2>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label for="defaultCheck1" >
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    Email</label>
                                <label for="hp" >

                                    <input class="form-check-input" type="checkbox" value="" id="hp" onclick="myFunction()">
                                    No. Telp/Whatsapp</label>
                                <label for="defaultCheck3" >

                                    <input class="form-check-input" type="checkbox" value="" id="web" onclick="myFunction()">
                                    Formulir Web</label>
=======
                    <div class="tab">
                        <div class="form-group row">
                            <h2> Bagaimana Cara Mengirimkan Melamar? <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h2>
                        </div>
                        <div class="form-group row">
                            <div class="form-check form-check-inline "> 
                            <input class="form-check-input " type="checkbox" value="" id="email">
                            <label class="form-check-label" for="email">Email</label>
                            </div>

                            <div class="form-check form-check-inline "> 
                            <input class="form-check-input " type="checkbox" value="" id="hp" onclick="myFunction()">
                            <label class="form-check-label" for="hp" >No. Telp/Whatsapp</label>
                            </div>
                            
                            <div class="form-check form-check-inline "> 
                            <input class="form-check-inpu " type="checkbox" value="" id="web" onclick="myFunction()">
                            <label class="form-check-label" for="web" >Formulir Web</label>
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>Email
                                <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                            </h4>
                            <div >
<<<<<<< HEAD
                                <input id="emailreq" name="emailreq"  required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                <label> Email wajib diisi untuk konfirmasi pembayaran, hanya ditampilkan publik jika merupakan cara untuk mengirimkan lamaran
                                </label>
                            </div>
                        </div>



                        <div class="form-group" id="hpform" style="display:none">
                            <h4>Deskripsi Pekerjaan</h4>
                            <div >
                                <textarea  id="deskripsipkrjaan" name="deskripsipkrjaan" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                            </div>
=======
                                <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                <label> Email wajib diisi untuk konfirmasi pembayaran, hanya ditampilkan publik jika merupakan cara untuk mengirimkan lamaran 
                                </label>
                            </div> 
                        </div> 

                       

                        <div class="form-group" id="hpform" style="display:none">
                            <h4>No. Telp/Whatsapp</h4>
                            <div >
                            <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                            </div> 
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4
                        </div>

                        <div class="form-group" id="webform" style="display:none">
                            <h4>Formulir Web</h4>
                            <div>
<<<<<<< HEAD
                                <input id="formwebb" name="formwebb"  required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"
                                placeholder="Contoh: https://docs.google.com/forms/d/xxx">
                            </div>
                        </div>
=======
                                <input required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"
                                placeholder="Contoh: https://docs.google.com/forms/d/xxx">
                            </div> 
                        </div> 
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4


                        <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area" onclick="nextPrev(-1)" >
                                <span ></span> Sebelumnya
                                </button>
                            </div>
                            <div class="col-lg-3 form-cols">
                                <button type="submit" class="btn btn-area"  >
<<<<<<< HEAD
                                    <span ></span> Selanjutnya
=======
                                <span ></span> Selanjutnya
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4
                                </button>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
=======

>>>>>>> 4408a41179f7d3b22cffae52b339f455e101ff52


=======


                    
>>>>>>> d24874d95af16076c18493c4c413f5b82f735bb4

                    {{-- <div style="overflow:auto;">
                      <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      </div>
                    </div> --}}

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

