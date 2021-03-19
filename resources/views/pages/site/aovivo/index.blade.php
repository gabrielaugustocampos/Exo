@extends('base.site.index')
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge])
        @slot('blog')
            #blog
        @endslot
        @slot('allseg')
            #allseg
        @endslot
    @endcomponent

    <section class="events3 cid-rAghLg91pJ" id="events3-2g">
        <div class="container">
            <div class="row align-items-center mbr-white">
                <span class="fa fa-video fa-2x d-flex align-items-center mr-2"></span><p class="custom-section-text-title mbr-bold mbr-fonts-style mbr-ib display-2">Ao Vivo</p>
            </div>
        </div>
    </section>


    <section style="margin-top: 4rem;margin-bottom: 4rem;">
        
        <div class="container">
            <div class="row mb-4 align-items-center justify-content-center">
                <h3 class="mbr-fonts-style text-black display-5 mr-3 text-center">{{$aovivo->titulo}}</h3>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="col-12 d-flex align-items-center justify-content-center mb-3">
                        <img src="{{asset('imagens_paginas'.'/'.$aovivo->imagem)}}" class="img-fluid w-75">
                    </div>
                </div>
                {!!$aovivo->texto!!}
                <div class="col-md-12">
                    <div class="row d-flex justify-content-center mt-4">
                        <a class="btn btn-sm-m btn-primary display-7" target="blank()" href="{{$aovivo->url}}">Confira</a>
                    </div>
                </div>
        </div>

    </section>
    

@endsection


