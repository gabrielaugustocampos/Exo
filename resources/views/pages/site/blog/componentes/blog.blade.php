<section class="events3 cid-rAghLg91pJ" id="events3-2g">

    <!-- Block parameters controls (Blue "Gear" panel) -->
    <div class="container">
        <div class="mbr-row">
            <div class="mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12">
                <div class="">
                    <p class="custom-section-text-title mbr-bold6 mbr-white mbr-fonts-style mbr-ib display-5">
                        {{$blog->titulo}}</p><br>
                    <div class="iconfont-wrapper">
                        <span class="amp-iconfont fa fa-calendar"></span>
                    </div>
                    <p class="mbr-text custom-section-text mbr-white mbr-fonts-style mbr-text-i display-4">
                        <strong>{{ $blog->created_at->format('d/m/Y') }}</strong></p>


                </div>
            </div>

        </div>
    </div>
</section>
<section class="events3" style="padding-top: 2pc;padding-bottom: 4pc;">
    <div class="container">
        <div class="card-img mb-4 d-flex align-items-center justify-content-center">
            <img src="{{!empty($blog->imagem) ? asset('imagens_paginas').'/'.$blog->imagem : asset('img/no_img_blog.png')}}" class="img-fluid">
           <!--  <amp-img
                src="{{!empty($blog->imagem) ? asset('imagens_paginas').'/'.$blog->imagem : asset('img/no_img_blog.png')}}"
                layout="responsive" width="538.2775119617226" height="270" alt="image"
                class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout"
                i-amphtml-layout="responsive">
                <i-amphtml-sizer style="padding-top: 50.16%;"></i-amphtml-sizer>
                <div placeholder="" class="placeholder amp-hidden">
                    <div class="mobirise-spinner">
                        <em></em>
                        <em></em>
                        <em></em>
                    </div>
                </div>
                <a href="page5.html"></a>
                <img decoding="async" alt="image"
                    src="{{!empty($blog->imagem) ? asset('imagens_paginas').'/'.$blog->imagem : asset('img/no_img_blog.png')}}"
                    class="i-amphtml-fill-content i-amphtml-replaced-content">
            </amp-img> -->
        </div>
        {!!$blog->texto!!}
    </div>


    </section>

    {{-- <section class="social social-follow1 cid-rRIWmlOX9Q" id="social-follow1-2k">
        
        <div class="container-fluid">
            <div class="title mbr-pb-4 align-center">
                <h3 class="mbr-section-title mbr-bold mbr-fonts-style section-title display-5 text-white">Compartilhe nas redes sociais</h3>
                
            </div>
            <div class="icons-list mbr-flex flex-wrap mbr-jc-c">
                <a class="iconfont-wrapper" href="https://www.facebook.com/sharer/sharer.php?u={{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}" target="_blank">
                    <span class="amp-iconfont animation-normal fab fa-facebook-square"></span>
                </a>
                 <a class="iconfont-wrapper" href="https://twitter.com/intent/tweet?text={{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}" target="_blank">
                    <span class="amp-iconfont animation-normal fab fa-twitter-square"></span>
                </a>
                 <a class="iconfont-wrapper" href="https://pinterest.com/pin/create/button/?url=&media={{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}" target="_blank">
                    <span class="amp-iconfont animation-normal fab fa-pinterest-square"></span>
                </a>
                 <a class="iconfont-wrapper" href="https://www.linkedin.com/shareArticle?mini=true&url={{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}" target="_blank">
                    <span class="amp-iconfont animation-normal fab fa-linkedin-square"></span>
                </a>
            </div>
        </div>
    </section> --}}

<section class="amp-facebook-comments mbr-section cid-rAgiw4fZqV" id="amp-facebook-comments-2j">


    <div class="container align-center">
        <h3 class="mbr-fonts-style mbr-bold mbr-section-title display-5">
            Comentários Facebook
        </h3>
        <div class="facebook-wrapper mbr-col-lg-8">
            <amp-facebook-comments height="50" layout="fixed-height"
                class="container comments-container mobirise-loader i-amphtml-element i-amphtml-layout-fixed-height i-amphtml-layout-size-defined i-amphtml-layout"
                data-numposts="3" data-href="https://www.facebook.com/allseg/" i-amphtml-layout="fixed-height"
                style="height: 671px;">
                <div placeholder="" class="placeholder amp-hidden">
                    <div class="mobirise-spinner">
                        <em></em>
                        <em></em>
                        <em></em>
                    </div>
                </div>
                <iframe src="https://d-3416031374175559431.ampproject.net/1908231648370/frame.html"
                    name="{&quot;host&quot;:&quot;d-3416031374175559431.ampproject.net&quot;,&quot;type&quot;:&quot;facebook&quot;,&quot;count&quot;:1,&quot;attributes&quot;:{&quot;numposts&quot;:&quot;3&quot;,&quot;href&quot;:&quot;http://www.directlyrics.com/adele-25-complete-album-lyrics-news.html&quot;,&quot;height&quot;:50,&quot;_context&quot;:{&quot;ampcontextVersion&quot;:&quot;1908231648370&quot;,&quot;ampcontextFilepath&quot;:&quot;https://3p.ampproject.net/1908231648370/ampcontext-v0.js&quot;,&quot;sourceUrl&quot;:&quot;https://agenciaecos.com/aprovacao/allseg/page5.html&quot;,&quot;referrer&quot;:&quot;https://agenciaecos.com/aprovacao/allseg/&quot;,&quot;canonicalUrl&quot;:&quot;https://agenciaecos.com/aprovacao/allseg/&quot;,&quot;pageViewId&quot;:&quot;667&quot;,&quot;location&quot;:{&quot;href&quot;:&quot;https://agenciaecos.com/aprovacao/allseg/page5.html&quot;},&quot;startTime&quot;:1567023821997,&quot;tagName&quot;:&quot;AMP-FACEBOOK-COMMENTS&quot;,&quot;mode&quot;:{&quot;localDev&quot;:false,&quot;development&quot;:false,&quot;minified&quot;:true,&quot;lite&quot;:false,&quot;test&quot;:false,&quot;version&quot;:&quot;1908231648370&quot;,&quot;rtvVersion&quot;:&quot;011908231648370&quot;},&quot;canary&quot;:false,&quot;hidden&quot;:false,&quot;initialLayoutRect&quot;:{&quot;left&quot;:598,&quot;top&quot;:2225,&quot;width&quot;:707,&quot;height&quot;:50},&quot;initialIntersection&quot;:{&quot;time&quot;:4397.869999986142,&quot;rootBounds&quot;:{&quot;left&quot;:0,&quot;top&quot;:0,&quot;width&quot;:1920,&quot;height&quot;:969,&quot;bottom&quot;:969,&quot;right&quot;:1920,&quot;x&quot;:0,&quot;y&quot;:0},&quot;boundingClientRect&quot;:{&quot;left&quot;:598,&quot;top&quot;:1425,&quot;width&quot;:707,&quot;height&quot;:50,&quot;bottom&quot;:1475,&quot;right&quot;:1305,&quot;x&quot;:598,&quot;y&quot;:1425},&quot;intersectionRect&quot;:{&quot;left&quot;:0,&quot;top&quot;:0,&quot;width&quot;:0,&quot;height&quot;:0,&quot;bottom&quot;:0,&quot;right&quot;:0,&quot;x&quot;:0,&quot;y&quot;:0},&quot;intersectionRatio&quot;:0},&quot;domFingerprint&quot;:&quot;759354836&quot;,&quot;experimentToggles&quot;:{&quot;pump-early-frame&quot;:true,&quot;chunked-amp&quot;:true,&quot;amp-ad-ff-adx-ady&quot;:false,&quot;amp-list-load-more&quot;:true,&quot;amp-consent-v2&quot;:true,&quot;canary&quot;:false,&quot;amp-story-v1&quot;:true,&quot;hidden-mutation-observer&quot;:true,&quot;a4aProfilingRate&quot;:false,&quot;version-locking&quot;:true,&quot;new-loaders&quot;:false,&quot;amp-auto-ads-adsense-holdout&quot;:false,&quot;as-use-attr-for-format&quot;:false,&quot;blurry-placeholder&quot;:true,&quot;amp-playbuzz&quot;:true,&quot;flexAdSlots&quot;:false,&quot;fixed-elements-in-lightbox&quot;:true,&quot;amp-access-iframe&quot;:true,&quot;ios-scrollable-iframe&quot;:false,&quot;amp-list-viewport-resize&quot;:true,&quot;doubleclickSraExp&quot;:false,&quot;doubleclickSraReportExcludedBlock&quot;:false,&quot;ampdoc-closest&quot;:true,&quot;amp-story-responsive-units&quot;:true,&quot;ios-fixed-no-transfer&quot;:false,&quot;macro-after-long-task&quot;:false},&quot;sentinel&quot;:&quot;0-41698395183695981874&quot;},&quot;type&quot;:&quot;facebook&quot;}}"
                    height="50" scrolling="no" allow="sync-xhr 'none';"
                    data-amp-3p-sentinel="0-41698395183695981874" class="i-amphtml-fill-content"
                    style="border: none;"></iframe>
            </amp-facebook-comments>
        </div>
    </div>

</section>

@if (!empty($array_cats_relacionadas))
<section class="events1 cid-rAgg3VNhMx relacionados" style="padding-top:unset!important">
    <div class="container">
            <div class="title mbr-pb-4 align-center">
                <h3 class="mbr-section-title mbr-bold mbr-fonts-style section-title display-5">Artigos Relacionados</h3>
            </div>
        <div class="mbr-row mbr-jc-c result_ajax_blog">
            @foreach ($array_cats_relacionadas as $varias_cat)
                @foreach ($varias_cat as $cat_inside)
                    @if ($cat_inside->id_texto != $blog->id_texto && $loop->index < 3)
                        <div class="card mbr-col-sm-12 mbr-col-md-4 mbr-col-lg-4 mt-2 mb-2 mt-4">
                            <div class="card-wrapper">
                                <div class="card-img">
                                    <amp-img src="{{!empty($cat_inside->imagem) ? asset('imagens_paginas').'/'.$cat_inside->imagem : asset('img/no_img_blog.png')}}" layout="responsive"
                                        width="538.2775119617226" height="270" alt="image"
                                        class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout"
                                        i-amphtml-layout="responsive">
                                        <i-amphtml-sizer style="padding-top: 50.16%;"></i-amphtml-sizer>
                                        <div placeholder="" class="placeholder amp-hidden">
                                            <div class="mobirise-spinner">
                                                <em></em>
                                                <em></em>
                                                <em></em>
                                            </div>
                                        </div>
                                        <a href="{{url('/blog/'.$cat_inside->id_texto.'/'.str_slug($cat_inside->titulo, '_'))}}"></a>
                                        <img decoding="async" alt="image" src="{{!empty($cat_inside->imagem) ? asset('imagens_paginas').'/'.$cat_inside->imagem : asset('img/no_img_blog.png')}}"
                                        class="i-amphtml-fill-content i-amphtml-replaced-content">
                                    </amp-img>
                                </div>
                                <div class="card-box">
                                    <h3 class="card-title mbr-bold mbr-fonts-style mbr-pb-6 display-5"><a href="{{url('/blog/'.$cat_inside->id_texto.'/'.str_slug($cat_inside->titulo, '_'))}}"
                                        class="text-red">{{$cat_inside->titulo}}</a></h3>
                                        <div>
                                            <div class="iconfont-wrapper">
                                                <span class="amp-iconfont fa fa-calendar"></span>
                                            </div>
                                        <p class="custom-card-text2 mbr-fonts-style mbr-card-subtitle mbr-text-i display-4">
                                            <strong>{{\Carbon\Carbon::parse($cat_inside->created_at)->format('d/m/Y')}}</strong></p>

                                    </div>
                                    <p class="card-text mbr-fonts-style mbr-pt-3 display-7">{!!Str::limit($cat_inside->descricao, 150)!!}</p>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach

            {{-- <div class="card mbr-col-sm-12 mbr-col-md-4 mbr-col-lg-4 mt-2 mb-2 mt-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{!empty($item->imagem) ? asset('imagens_paginas').'/'.$item->imagem : asset('img/no_img_blog.png')}}" layout="responsive"
                            width="538.2775119617226" height="270" alt="image"
                            class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout"
                            i-amphtml-layout="responsive">
                            <i-amphtml-sizer style="padding-top: 50.16%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="{{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}"></a>
                            <img decoding="async" alt="image" src="{{!empty($item->imagem) ? asset('imagens_paginas').'/'.$item->imagem : asset('img/no_img_blog.png')}}"
                                class="i-amphtml-fill-content i-amphtml-replaced-content">
                        </amp-img>
                    </div>
                    <div class="card-box">
                    <h3 class="card-title mbr-bold mbr-fonts-style mbr-pb-6 display-5"><a href="{{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}"
                                class="text-red">Teste</a></h3>
                        <div>
                            <div class="iconfont-wrapper">
                                <span class="amp-iconfont fa fa-calendar"></span>
                            </div>
                            <p class="custom-card-text2 mbr-fonts-style mbr-card-subtitle mbr-text-i display-4">
                                <strong>xx/xx/xxxx</strong></p>

                        </div>
                        <p class="card-text mbr-fonts-style mbr-pt-3 display-7">Teste Teste Teste</p>

                    </div>
                </div>
            </div> --}}

            {{-- <div class="card mbr-col-sm-12 mbr-col-md-4 mbr-col-lg-4 mt-2 mb-2 mt-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <amp-img src="{{!empty($item->imagem) ? asset('imagens_paginas').'/'.$item->imagem : asset('img/no_img_blog.png')}}" layout="responsive"
                            width="538.2775119617226" height="270" alt="image"
                            class="mobirise-loader i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-layout"
                            i-amphtml-layout="responsive">
                            <i-amphtml-sizer style="padding-top: 50.16%;"></i-amphtml-sizer>
                            <div placeholder="" class="placeholder amp-hidden">
                                <div class="mobirise-spinner">
                                    <em></em>
                                    <em></em>
                                    <em></em>
                                </div>
                            </div>
                            <a href="{{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}"></a>
                            <img decoding="async" alt="image" src="{{!empty($item->imagem) ? asset('imagens_paginas').'/'.$item->imagem : asset('img/no_img_blog.png')}}"
                                class="i-amphtml-fill-content i-amphtml-replaced-content">
                        </amp-img>
                    </div>
                    <div class="card-box">
                    <h3 class="card-title mbr-bold mbr-fonts-style mbr-pb-6 display-5"><a href="{{url('/blog/'.$blog->id_texto.'/'.str_slug($blog->titulo, '_'))}}"
                                class="text-red">Teste</a></h3>
                        <div>
                            <div class="iconfont-wrapper">
                                <span class="amp-iconfont fa fa-calendar"></span>
                            </div>
                            <p class="custom-card-text2 mbr-fonts-style mbr-card-subtitle mbr-text-i display-4">
                                <strong>xx/xx/xxxx</strong></p>

                        </div>
                        <p class="card-text mbr-fonts-style mbr-pt-3 display-7">Teste Teste Teste</p>

                    </div>
                </div>
            </div> --}}
            
        </div>
    </div>
</section>
@endif