@extends('base.site.index')
@section('content')

    @component('base.site.componentes.navbar', ["segmentos" => $segmentos, "redes_sociais_navbar" => $redes_sociais_navbar, "array_produtos_merge" => $array_produtos_merge])
        @slot('blog')
            #blog
        @endslot
        @slot('allseg')
            #allseg
        @endslot
    @endcomponent

    <section class="events3 cid-rAghLg91pJ" id="events3-2g">
        <div class="container">
            <div class="row align-items-center mbr-white">
                <span class="fa fa-envelope-open-text fa-2x d-flex align-items-center mr-2"></span><p class="custom-section-text-title mbr-bold mbr-fonts-style mbr-ib display-2">{{$contato->titulo}}</p>
            </div>
        </div>
    </section>


    <section style="margin-top: 4rem;margin-bottom: 4rem;">
        
        <div class="container">
            <div class="row">
                <p class="mbr-fonts-style text-black display-5 p-2 mbr-bold">Contato</p>
                <div class="mbr-col-md-12">
                     <form class="mbr-form display-4" action="{{route('enviar_contato')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 p-2">
                                <input type="text" class="form-control input" placeholder="Nome*" name="nome"
                                    title="Preencha este campo" required='required'>
                            </div>
                            <div class="col-md-6 p-2">
                                <input type="email" class="form-control input" placeholder="Email*" name="email"
                                    title="Preencha este campo" required>
                            </div>
                            <div class="col-md-12 p-2">
                                <input type="text" class="form-control phone" placeholder="Telefone/Celular*"
                                    name="telefone" title="Preencha este campo" id="telefone" required>
                            </div>
                            <div class="col-md-12 p-2">
                                <textarea name="texto" placeholder="Mensagem" class="field-input user-valid valid" id="mensagem" title="Preencha este campo" required></textarea>
                            </div>
                            <div class="col-md-12 p-2">
                                <button type="submit" class="btn btn-sm-m btn-primary display-7">Enviar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            <div class="row mt-5 mb-2">
                <div class="google-map">
                    {!!$contato->texto!!}
                    {{-- <iframe allowfullscreen="" frameborder="0" height="400" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d463.0902590203986!2d-46.565836!3d-21.791015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x87c4be96b90be869!2sALL+SEG+ALLSEG!5e0!3m2!1spt-BR!2sbr!4v1560801262513!5m2!1spt-BR!2sbr" style="border:0" width="100%"></iframe> --}}
                </div>
            </div>
        </div>


    </section>
    

@endsection


