<section class="content9 cid-rtcWGGZg8k" id="content9-u">

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin: 15px;">
                <h2>{{$produto_busca->titulo}}</h2>
            </div>
            <div class="col-md-12 text-center" style="margin: 15px;">
                <p>{{$produto_busca->descricao}}</p>
            </div>
            <div class="col-md-12 text-center" style="margin: 15px;">
                <a href="{{$produto_busca->url}}" target="_blank">LINK</a>
            </div>
            <div class="col-md-12">
                {!! $produto_busca->texto !!}
            </div>
        </div>
        
    </div>

</section>