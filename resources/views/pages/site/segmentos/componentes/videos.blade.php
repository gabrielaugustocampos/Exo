<section class="header3 cid-rtd2zqxpNC" id="header3-1e">
    <div class="container">
        @if (!empty($segmento->videos[0]))
        <div class="mbr-row mbr-black">
            <div class="title-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-12 align-center mbr-pb-4">
                <div class="title-block mbr-col-sm-12 mbr-col-md-12">
                    <h1 class="mbr-section-title mbr-fonts-style mbr-bold display-5">Confira os vídeos desse Segmento
                    </h1>
                </div>
            </div>
            <div class="video-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-12">
                <div class="mbr-row mbr-p-2">
                    @foreach ($segmento->videos as $video)
                    <div class="video-block mbr-col-md-4 mbr-col-sm-12 mbr-col-lg-4 mbr-m-auto mbr-p-2">
                        <div class="video-container">
                            <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$video->url}}"
                                frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-info" role="alert">
                Este segmento não possui videos!
            </div>
        @endif
    </div>
</section>