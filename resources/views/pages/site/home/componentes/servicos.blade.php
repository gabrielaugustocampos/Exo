<section class="service_section commonSection">
    <div class="container">

        @foreach ($servicos as $item)

            @if ($item->categorias[0]->id == 5)

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="sub_title red_color">{{$item->descricao}}</h4>
                    <h2 class="sec_title white">{{$item->titulo}}</h2>
                    <p class="sec_desc color_aaa">
                        {!!str_replace(["<p>","</p>"], "", $item->texto)!!}
                    </p>
                </div>
            </div>

            <div class="row custom_column">

                @for ($i = 0; $i < count($item->icones); $i++)

                <div class="col-lg-3 col-sm-4 col-md-3">
                    <a href="{{strip_tags($item->icones[$i]->descricao)}}" class="icon_box_1 text-center">
                        <div class="flipper">
                            <div class="front">
                                <i class="{{str_replace(['far','fas','far','fab'], 'fa',$item->icones[$i]->codigo_icone)}}"></i>
                                <h3>{{$item->icones[$i]->titulo}}</h3>
                            </div>
                            <div class="back">
                                <i class="{{str_replace(['far','fas','far','fab'], 'fa',$item->icones[$i]->codigo_icone)}}"></i>
                                <h3>{{$item->icones[$i]->titulo}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
                
                @endfor

            @endif
            
        @endforeach

        
        </div>
    </div>
</section>