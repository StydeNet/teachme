@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <h1>
                    Solicitudes Recientes
                    <a href="#" class="btn btn-primary">
                        Nueva solicitud
                    </a>
                </h1>

                <p class="label label-info news">
                    Hay {{ $tickets->total() }} Solicitudes Recientes
                </p>

                @foreach($tickets as $ticket)
                    @include('tickets/partials/item', compact('ticket'))
                @endforeach

                {!! $tickets->render() !!}

            </div>

            <hr>

            <p><a href="http://duilio.me" target="_blank">duilio.me</a></p>

        </div>
    </div>
</div>

@endsection