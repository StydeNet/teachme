@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <h1>
                    {{ $title }}
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary">
                        Nueva solicitud
                    </a>
                </h1>

                <p class="label label-info news">
                    {{ $text_total }}
                </p>

                @foreach($tickets as $ticket)
                    @include('tickets/partials/item', compact('ticket'))
                @endforeach

                {!! $tickets->render() !!}

            </div>

        </div>
    </div>
</div>

{!! Form::open(['id' => 'form-vote', 'route' => ['votes.submit', ':id'], 'method' => 'POST']) !!}
{!! Form::close() !!}

{!! Form::open(['id' => 'form-unvote', 'route' => ['votes.destroy', ':id'], 'method' => 'DELETE']) !!}
{!! Form::close() !!}

@endsection