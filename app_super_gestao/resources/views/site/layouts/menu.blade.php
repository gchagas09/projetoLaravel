 @extends('site.layouts.basico')
 
 @section('menu')
 <div class="menu">
            <ul>
                <li><a href="{{ route('site.index') }}">Principal</a></li>
                <li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
                <li><a href="{{ route ('app.fornecedor.index')}}">Fornecedor</a></li>
            </ul>
</div>
@endsection