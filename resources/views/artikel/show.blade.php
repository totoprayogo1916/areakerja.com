@extends('layouts.pasang')

@section('home')

<section class="relative" id="home" >

        <div class="row align-items-center justify-content-center" style="margin-right: 1%">
            <div class="banner-content col-lg-12">
                <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">
                    SHOW ARTICLE
                </h1>
                <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                    (*engko diganti)
                </h6>

            </div>
        </div>
</section>
@endsection

@section('content')
<form id="regForm" style="width: 50%;margin-bottom: 100px;">
    @csrf
<div class="post-list justify-content-center" >
    <div class="mt-10">
    <div class="single-post2 d-flex " style="margin-bottom: 10px">
        <div class="details justify-content-center" style="width: 100%" >
            <div class="row no-gutters" style="width: 100%">
                <div class="justify-content-center">
                    <h1 class="ttl" style="margin-top: 8px;margin-left: 275px;"> *Judul Article</h1>
                </div>
            </div>
            <hr class="d-flex  justify-content-center" style="width: 75%; margin-left: 75px;margin-top: 16px"/>

            <div class="hot-post-left" >
                <br>
                    <div class="" style="width: 90%; margin-left: 30px;">


                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius animi esse, commodi beatae dolorem libero quasi. Adipisci sit, cumque et porro id quo magni aperiam repellendus quod, saepe labore illo?
                    {{-- {!! $isi_post->content !!} --}}

                    </div>

                </div>

            <div class="" style="margin-top: 15px;margin-left:325px;width: 100%;">

            <hr class="" style="width: 100%; margin-left:-325px;margin-top: 16px"/>

                <div >
                    <div class="btn popup form-pasang3" onclick="myFunction()" id="btn3">
                        <h4  class="gg" style="font-weight: normal" ><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>
                        <div class="row justify-content-center popuptext" id="myPopup" style="padding-right: 0px;margin-right: 0px">
                            <ul class="col row justify-content-center">

                                <li>
                                    <a href="#"><i class="fa fa-facebook-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="#"><i class="fa fa-twitter-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="#"><i class="fas fa-envelope-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="#"><i class="fab fa-whatsapp-square" style="font-size:36px; color: black""></i></a>
                                </li>

                            </ul>
                        </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>
</form>
@endsection

