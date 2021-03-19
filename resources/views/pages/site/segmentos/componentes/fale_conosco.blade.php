<section class="Info4 cid-rtG4ORrRcB" id="info4-29">
    <div class="container">
        <div class="mbr-row mbr-black">
            <div class="title-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-6 mbr-flex">
                <div class="title-block mbr-col-sm-12 mbr-col-md-12">
                    <h3 class="mbr-section-title mbr-fonts-style mbr-bold mbr-white display-5">
                        {{$fale_conosco->descricao}}</h3>

                    <span
                        class="mbr-text mbr-fonts-style mbr-pt-2 mbr-white custom-section-text1 display-5">{!!$fale_conosco->texto!!}</span>

                </div>
            </div>
            <div class="form-wrap mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-6 mbr-flex">
                <div class="form-block mbr-col-md-12 mbr-col-sm-12 mbr-col-lg-12 align-center mbr-m-auto">

                    <h3 class="mbr-section-title mbr-fonts-style mbr-bold mbr-white display-5">{{$fale_conosco->titulo}}
                    </h3>

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
                    <form action="{{route('contatos.enviar')}}" method="POST"
                        class="mbr-form mbr-jc-c mbr-flex custom-form">
                        @csrf
                        <div class="fieldset mbr-form-row">
                            <div class="mbr-col-md-6 mbr-col field mbr-col-sm-12">
                                <input name="nome" type="text" placeholder="Nome" class="field-input">
                            </div>
                            <div class="mbr-col-md-6 mbr-col field mbr-col-sm-12">
                                <input name="email" type="email" placeholder="E-mail" class="field-input">
                            </div>
                            <div class="mbr-col-md-6 mbr-col field mbr-col-sm-12">
                                <input name="telefone" type="text" placeholder="Telefone" class="field-input">
                            </div>
                            <div class="text-field mbr-col-md-12 field mbr-col-sm-12">
                                <textarea name="texto" placeholder="Mensagem" class="field-input"></textarea>
                            </div>
                            <div class="mbr-col-md-12 field mbr-col-sm-12 mbr-section-btn">
                                <button type="submit"
                                    class="btn btn-md mbr-bold btn-secondary display-7">ENVIAR</button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

</section>
