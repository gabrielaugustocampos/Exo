<section class="commonSection ab_agency">
    <div class="container">
        <div class="row">

            @foreach ($sobre as $item)

                @if ($item->categorias[0]->id == 5)

                    @if ($item->categorias[1]->id == 6)

                    <div class="col-lg-6 col-sm-6 col-md-6 PR_79">

                        <h4 class="sub_title">{{$item->descricao}}</h4>
                        <h2 class="sec_title MB_45">{{$item->titulo}}</h2>
                        <p class="sec_desc">
                            {!!strip_tags($item->texto)!!}
                        </p>
                        <a class="common_btn red_bg" href="{{$item->url}}"><span>Saiba Mais</span></a>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="ab_img1">
                            <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}"/>
                        </div>

                    @endif

                    @if ($item->categorias[1]->id == 7)

                        <div class="ab_img2">
                            <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}"/>
                        </div>
                    </div>

                    @endif

                @endif
                
            @endforeach

            
        </div>
    </div>
</section>