@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2 class="title-show">
                {{ $ticket->title }}
                @include('tickets/partials/status', compact('ticket'))
            </h2>

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <p class="date-t">
                <span class="glyphicon glyphicon-time"></span> {{ $ticket->created_at->format('d/m/y h:ia') }}
                - {{ $ticket->author->name }}
            </p>
            <h4 class="label label-info news">
                {{ count($ticket->voters) }} votos
            </h4>

            <p class="vote-users">
            @foreach($ticket->voters as $user)
                <span class="label label-info">{{ $user->name }}</span>
            @endforeach
            </p>
            @if (Auth::check())
                @if ( ! currentUser()->hasVoted($ticket))
                {!! Form::open(['route' => ['votes.submit', $ticket->id], 'method' => 'POST']) !!}
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-thumbs-up"></span> Votar
                    </button>
                {!! Form::close() !!}
                @else
                {!! Form::open(['route' => ['votes.destroy', $ticket->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-primary" >
                    <span class="glyphicon glyphicon-thumbs-down"></span> Quitar voto
                </button>
                {!! Form::close() !!}
                @endif
            @endif

            <h3>Nuevo Comentario</h3>

            @include('partials/errors')

            <form action="{{ route('comments.submit', $ticket->id) }}" method="POST" accept-charset="UTF-8">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="comment">Comentarios:</label>
                    <textarea rows="4" class="form-control" name="comment" cols="50" id="comment">{{ old('comment') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Enlace:</label>
                    <input class="form-control" name="link" type="text" id="link" value="{{ old('link') }}">
                </div>
                <button type="submit" class="btn btn-primary">Enviar comentario</button>
            </form>

            <h3>Comentarios ({{ count($ticket->comments) }})</h3>

            @foreach ($ticket->comments as $comment)
            <div class="well well-sm">
                <p><strong>{{ $comment->user->name }}</strong></p>
                <p>{{ $comment->comment }}</p>
                @if ($comment->link)
                    <p>
                        <a href="{{ $comment->link }}" rel="nofollow" target="_blank">
                            {{ $comment->link }}
                        </a>
                    </p>
                @endif
                <p class="date-t">
                    <span class="glyphicon glyphicon-time"></span>
                    {{ $comment->created_at->format('d/m/Y h:ia') }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection