@extends('base.site.index')
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge])
        @slot('blog')
            /#blog
        @endslot
        @slot('allseg')
            /#allseg
        @endslot
    @endcomponent

    @component('pages.site.catalogos.componentes.catalogos', ["catalogos" => $catalogos, "banner_catalogo" => $banner_catalogo])
    @endcomponent
    
@endsection