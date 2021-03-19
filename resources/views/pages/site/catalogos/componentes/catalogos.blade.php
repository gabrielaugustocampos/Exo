<section class="header1 cid-rtFPvYQSbn"
    style="background-image: url('{{asset('imagens_banner').'/'.$banner_catalogo->imagem}}');" id="header1-1z">

    <div class="mbr-overlay"></div>
    <div class="container">

    </div>
</section>

<section class="news1 cid-rtd0mzoxC2" id="news1-19">



    <div class="container">
        <div class="title mbr-pb-4 align-center">
            <h3 class="mbr-section-title section-title mbr-fonts-style display-2">{{$banner_catalogo->titulo}}</h3>
            <h4 class="section-subtitle mbr-fonts-style mbr-text-i display-5 text-black"><span
                    style="font-style: normal;"><strong>{{$banner_catalogo->descricao}}</strong></span></h4>
        </div>
        <div class="mbr-row">
            @foreach ($catalogos as $catalogo)
            <div class="card mbr-col-sm-12 mbr-col-lg-4">
                <div class="card-wrapper mbr-column">
                    <div class="card-img mbr-flex">
                        <amp-img src="{{asset('imagens_arquivos').'/'.$catalogo->imagem}}" layout="responsive"
                            width="348" height="261" alt="image"
                            class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout"
                            i-amphtml-layout="responsive">
                            <i-amphtml-sizer style="padding-top: 75%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="{{asset('arquivos').'/'.$catalogo->arquivo}}" target="_blank"></a>
                            <img decoding="async" alt="image" src="{{asset('imagens_arquivos').'/'.$catalogo->imagem}}"
                                class="i-amphtml-fill-content i-amphtml-replaced-content">
                        </amp-img>
                    </div>
                    <div class="card-box mbr-m-auto mbr-pt-2">

                        <h3 class="card-title custom-card-title2 mbr-fonts-style mbr-text-cap mbr-bold display-5"><a
                                href="{{asset('arquivos').'/'.$catalogo->arquivo}}" target="_blank"
                                class="text-red cat-hover">{{$catalogo->titulo}}</a></h3>
                        <p class="card-text mbr-fonts-style mbr-pt-3 mbr-pb-4 display-7 text-justify">
                            {{$catalogo->descricao}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>