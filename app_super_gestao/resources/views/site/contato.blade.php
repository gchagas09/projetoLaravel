@extends('site.layout.basico')

@section('titulo', 'Contato')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layout._component.form_contato')
                @endcomponent
            </div>
        </div>  
    </div>
@endsection