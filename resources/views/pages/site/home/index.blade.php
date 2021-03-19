@extends('base.site.index', ["rodape" => $rodape, "metas" => $metas, "contato" => $contato])
@section('content')

    @component('base.site.componentes.navbar', ["logo" => $logo, "contato" => $contato])
    @endcomponent

    @component('pages.site.home.componentes.banner', ["banners_desk" => $banners_desk])
    @endcomponent

    @component('pages.site.home.componentes.servicos', ["servicos" => $servicos])
    @endcomponent

    @component('pages.site.home.componentes.sobre', ["sobre" => $sobre])
    @endcomponent

    @component('pages.site.home.componentes.video', ["home" => $home])
    @endcomponent

    @component('pages.site.home.componentes.galeria', ["home" => $home])
    @endcomponent

    @component('pages.site.home.componentes.destaque', ["home" => $home])
    @endcomponent

    @component('pages.site.home.componentes.equipe', ["equipe" => $equipe])
    @endcomponent

    @component('pages.site.home.componentes.parceiros', ["parceiros" => $parceiros])
    @endcomponent

    @component('pages.site.home.componentes.blog', ["blog" => $blog])
    @endcomponent

@endsection