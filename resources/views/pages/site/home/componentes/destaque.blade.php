@foreach ($home as $item)

    @if ($item->categorias[0]->id == 3)

    <section class="commonSection funfact">
        <div class="container">
            <div class="row">

                @for ($i = 0; $i < count($item->icones); $i++)

                <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                    <div class="singlefunfact text-center">
                        <h1 data-counter="{!!strip_tags($item->icones[$i]->descricao)!!}" class="timer"><span class="countSpan"></span>{!!strip_tags($item->icones[$i]->descricao)!!}</h1>
                        <h3>{{$item->icones[$i]->titulo}}</h3>
                    </div>
                </div>

                @endfor

            </div>
        </div>
    </section>
    
    <section class="commonSection trustClient">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="CL_content">
                        <img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}">
                        <div class="abc_inner">
                            <div class="row">
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                </div>
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="abci_content">
                                        <h2>{{$item->titulo}}</h2>
                                        {!!$item->texto!!}
                                        <a class="common_btn red_bg" href="/sobre"><span>Saiba Mais</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    @endif
    
@endforeach

