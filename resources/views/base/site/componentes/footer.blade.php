<footer class="footer_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6 col-md-5">
                <aside class="widget aboutwidget">

                @foreach ($rodape as $item)

                    @if ($item->categorias[0]->id == 1)

                    <a href="/home"><img src="{{asset('imagens_paginas/'.$item->imagem)}}" alt="{{$item->titulo}}" title="{{$item->titulo}}" style="max-width: 330px;"></a>
                    {!!$item->texto!!}

                    @endif
    
                @endforeach

                </aside>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4">
                <aside class="widget contact_widgets">
                    <h3 class="widget_title">contato</h3>

                    @foreach ($contato as $item)

                        @if ($item->categorias[0]->id == 2)

                        <p><i class="{{str_replace(['far','fas','far','fab'], 'fa',$item->icones[0]->codigo_icone)}}" aria-hidden="true"></i> <a href="{{$item->url}}">{{$item->descricao}}</a></p>

                        @endif
    
                    @endforeach
                    
                </aside>
            </div>
            <div class="col-lg-3 col-sm-2 col-md-3">
                <aside class="widget social_widget">
                    <h3 class="widget_title">Redes Sociais</h3>
                    <ul>

                    @foreach ($contato as $item)

                        @if ($item->categorias[0]->id == 11)

                            @for ($i = 0; $i < count($item->icones); $i++)

                            <li><a href="#"><i class="{{str_replace(['far','fas','far','fab'], 'fa',$item->icones[$i]->codigo_icone)}}" aria-hidden="true"></i>{{$item->icones[$i]->titulo}}</a></li>

                            <a href="{!!strip_tags($item->icones[$i]->titulo)!!}" target="_blank"><span>{{$item->icones[$i]->titulo}}</span></a>

                            @endfor

                        @endif
    
                    @endforeach

                    </ul>
                </aside>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="copyright">

                @foreach ($rodape as $item)

                    @if ($item->categorias[0]->id == 2)

                    {{$item->descricao}}

                    @endif
    
                @endforeach

                </div>
            </div>
        </div>
    </div>
</footer>