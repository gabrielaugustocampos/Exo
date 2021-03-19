<section class="commonSection porfolio">
    <div class="container">

        @foreach ($home as $item)

            @if ($item->categorias[0]->id == 9)

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

                @for ($i = 0; $i < count($item->gallery); $i++)

                <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="singlefolio">
                        <img src="{{asset('imagens_galerias/'.$item->gallery[$i]->imagem)}}" alt="{{$item->gallery[$i]->titulo}}" />
                        <div class="folioHover">
                            <h4>{{$item->gallery[$i]->titulo}}</h4>
                        </div>
                    </div>
                </div>

                @endfor

            </div>

            @endif
            
        @endforeach
   
    </div>
</section>