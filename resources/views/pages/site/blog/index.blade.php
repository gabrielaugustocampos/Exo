@extends('base.site.index', ['blog_meta' => $blog, "metas" => $metas])
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge, "metas" => $metas])
        @slot('blog')
            /#blog
        @endslot
        @slot('allseg')
            /#allseg
        @endslot
    @endcomponent

    @component('pages.site.blog.componentes.blog', ["blog" => $blog, 'array_cats_relacionadas' => $array_cats_relacionadas, "metas" => $metas])
    @endcomponent

@endsection