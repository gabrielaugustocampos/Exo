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

    @component('pages.site.segmentos.componentes.banner', ["banner" => $banner])
    @endcomponent
    <div class="container" style="padding-top: 1pc;">
        @if ($errors->any())
        <div class="row alert alert-danger" style="color: white;border-color: #3e3d3d;background-color: #3e3d3d;">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(session()->has('message'))
        <div class="alert alert-success" style="color: #a11519;background-color: #f7f7f7!important;">
            {{ session()->get('message') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif
    </div>

    @component('pages.site.segmentos.componentes.descricao', ["segmento" => $segmento])
    @endcomponent

    @component('pages.site.segmentos.componentes.videos', ["segmento" => $segmento])
    @endcomponent

    @component('pages.site.segmentos.componentes.cases', ["segmento" => $segmento])
    @endcomponent

    @component('pages.site.segmentos.componentes.fale_conosco', ["fale_conosco" => $fale_conosco])
    @endcomponent
    
@endsection