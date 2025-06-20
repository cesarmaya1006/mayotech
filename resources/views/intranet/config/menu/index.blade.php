@extends('intranet.layout.app')
@section('cssPagina')
<link rel="stylesheet" href="{{ asset('css/intranet/menu/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/intranet/menu/menu_nestable.css') }}">
@endsection

@section('tituloPagina')
<i class="fas fa-list-ul mr-3" aria-hidden="true"></i> Configuración Menus
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
<li class="breadcrumb-item active">Menús</li>
@endsection
@section('botonesCard')
<button class="btn btn-primary btn-xs" type="button">Button</button>
@endsection

@section('cuerpoPagina')
    <div class="row">
        <div class="col-12">
            @csrf
            <div class="cf nestable-lists">
                <div class="dd" id="nestable">
                    <ol class="dd-list" id="dd_list99" data-url="{{ route('menu.ordenar') }}">
                        @foreach ($menus as $key => $item)
                            @if ($item['menu_id'] != 0)
                                @break
                            @endif
                            @include('intranet.config.menu.menu-item')
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptPagina')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('js/intranet/configuracion/menu/jquery.nestable.js') }}"></script>
<script src="{{ asset('js/intranet/configuracion/menu/index.js') }}"></script>
@endsection
@section('modalesPagina')

@endsection
