@extends('base.site.index', ['produto_meta' => $produto_busca])
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge])
        @slot('blog')
            /#blog
        @endslot
        @slot('allseg')
            /#allseg
        @endslot
    @endcomponent

    @component('pages.site.produtos.componentes.descricao', ["produto_busca" => $produto_busca])
    @endcomponent

    @component('pages.site.produtos.componentes.galeria', ["galeria" => $galeria])
    @endcomponent
    
@endsection