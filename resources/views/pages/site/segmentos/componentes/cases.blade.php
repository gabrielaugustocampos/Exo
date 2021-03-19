<section class="content4 cid-rtdkcNvqy5" id="content4-1i">
    @if (!empty($segmento->cases[0]))
    <div class="container align-center">
        <div class="title mbr-pb-4">
            <h1 class="mbr-section-title mbr-fonts-style mbr-bold display-5 text-red">Confira os CASES de Sucesso</h1>
        </div>
    </div>
    <div class="container">
        <div class="mbr-row">
            @foreach ($segmento->cases as $case)
            <div class="image image1 mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-6">
                <amp-img src="{{asset('imagens_cases').'/'.$case->imagem}}" layout="responsive"
                    width="466.66666666666663" height="350" alt="image"
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
                    <h4 class="mbr-image-title mbr-fonts-style mbr-white align-center display-5">
                        <strong>{{$case->titulo}}</strong>
                    </h4>

                    <img decoding="async" alt="image" src="{{asset('imagens_cases').'/'.$case->imagem}}"
                        class="i-amphtml-fill-content i-amphtml-replaced-content">
                </amp-img>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <div class="container">
            <div class="alert alert-info" role="alert">
                Este segmento não possui cases!
            </div>
        </div>
    @endif
</section>