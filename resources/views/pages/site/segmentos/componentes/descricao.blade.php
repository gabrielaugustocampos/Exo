<section class="content9 cid-rtcWGGZg8k" id="content9-u">
    <div class="container">
        <div class="title align-center">
            <h3 class="mbr-section-title mbr-fonts-style mbr-bold section-title title-line mbr-pb-4 display-2">{{$segmento->titulo}}</h3>
        </div>
        <div class="mbr-row mbr-pt-4">
            <div class="mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12">
                <p class="mbr-text mbr-pb-2 mbr-fonts-style display-7">{{$segmento->descricao}}</p>
            </div>
        </div>
    </div>
</section>

<section class="content2 cid-rtFXp8svkD" id="content2-23" style="padding-top: 1rem!important;">
    <div class="container">
        <div class="mbr-row">
            <div class="image mbr-col-sm-12 mbr-col-md-12 mbr-flex mbr-column mbr-jc-c mbr-col-lg-4">
                <amp-img src="{{asset('imagens_segmentos').'/'.$segmento->imagem}}" layout="responsive" width="316" height="237"
                    alt="image"
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

                    <img decoding="async" alt="image" src="assets/images/aeroportos-696x522.jpg"
                        class="i-amphtml-fill-content i-amphtml-replaced-content">
                </amp-img>
            </div>
            <div class="text-wrap mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-8">
                {!!$segmento->texto!!}
            </div>
        </div>
    </div>
</section>