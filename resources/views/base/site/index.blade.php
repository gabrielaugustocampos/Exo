<!DOCTYPE html>
<html lang="en">

<head>
    
    @component('base.site.componentes.meta', ['metas' => $metas])
    @endcomponent
    

    @component('base.site.componentes.header')
    @endcomponent

</head>

<body>

    <div class="preloader text-center">
        <div class="la-ball-circus la-2x">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    @yield('content')

    @component('base.site.componentes.footer', ["rodape" => $rodape, "contato" => $contato])
    @endcomponent

    {{-- @component('base.site.componentes.modal', ["modal" => $modal])
    @endcomponent --}}

    <a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>

    @component('base.site.componentes.scripts')
    @endcomponent

</body>

</html>