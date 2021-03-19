@foreach ($home as $item)

    @if ($item->categorias[0]->id == 10)

    <section class="commonSection what_wedo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title">{{$item->descricao}}</h4>
                    <h2 class="sec_title">{{$item->titulo}}</h2>
                    <p class="sec_desc">
                        {!!str_replace(["<p>","</p>"], "", $item->texto)!!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="videoWrap">
                        <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}">
                        <div class="play_video">
                            <a class="video_popup" href="{!!strip_tags($item->url)!!}"><i class="fa fa-play"></i></a>
                            <h2>Assista o vídeo</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif
            
@endforeach