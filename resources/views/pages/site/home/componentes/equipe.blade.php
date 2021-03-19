<section class="commonSection team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

            @foreach ($equipe as $item)

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
    </div>
    <div class="team_slider">

    @foreach ($equipe as $item)

        @if ($item->categorias[0]->id == 2)

        <div class="singleTM">
            <div class="tm_img">
                <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}">
                <div class="tm_overlay">
                    <div class="team_social">

                    @for ($i = 0; $i < count($item->icones); $i++)

                    <a href="#" target="_blank"><span>{{$item->icones[$i]->titulo}}</span></a>

                    @endfor

                    </div>
                    <a href="equipe/{{$item->id_texto}}/{{preg_replace('/[^a-z]/', '',strtolower($item->titulo))}}" class="common_btn"><span>Saiba Mais</span></a>
                </div>
            </div>
            <div class="detail_TM">
                <h5>{{$item->titulo}}</h5>
                <h6>{{$item->descricao}}</h6>
            </div>
        </div>

        @endif
    
    @endforeach

    </div>
</section>