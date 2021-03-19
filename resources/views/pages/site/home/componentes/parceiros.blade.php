<section class="commonSection client">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

            @foreach ($parceiros as $item)

                @if ($item->categorias[0]->id == 1)

                <h4 class="sub_title">{{$item->descricao}}</h4>
                <h2 class="sec_title">{{$item->titulo}}</h2>
                <p class="sec_desc">
                    {!!strip_tags($item->texto)!!}
                </p>

                @endif
    
            @endforeach

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client_slider">

                @foreach ($parceiros as $item)

                    @if ($item->categorias[0]->id == 2)

                    <div class="singleClient">
                        <a href="#">
                            <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}"/>
                        </a>
                    </div>

                    @endif
    
                @endforeach

                </div>
            </div>
        </div>
    </div>
</section>