<section class="commonSection blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

            @foreach ($blog as $item)

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

        @for ($i = count($blog); $i > (count($blog) - 4); $i--)
            

            @if ($blog[$i-1]->categorias[0]->id == 2)

            <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="latestBlogItem">
                    <div class="lbi_thumb">
                        <img src="{{asset('imagens_paginas/'.$blog[$i-1]->imagem)}}" alt="{{$blog[$i-1]->titulo}}" title="{{$blog[$i-1]->titulo}}">
                    </div>
                    <div class="lbi_details">
                        <a href="#" class="lbid_date">{{ \Carbon\Carbon::parse($item->created_at)->formatLocalized('%m/%Y')}}</a>
                        <h2><a href="blog_single.html">{{$blog[$i-1]->titulo}}</a></h2>
                        <a class="learnM" href="blog_detalhado/{{$item->id_texto}}/{{preg_replace('/[^a-z]/', '',strtolower($item->titulo))}}">Saiba Mais</a>
                    </div>
                </div>
            </div>
            <div class="clearfix hidden-lg hidden-md hidden-xs"></div>

            @endif
    
        @endfor
        </div>
    </div>
</section>