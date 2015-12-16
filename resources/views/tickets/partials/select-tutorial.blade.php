<form action="{{ route('tickets.details', $ticket->id) }}" method="POST" accept-charset="UTF-8">
    {!! csrf_field() !!}
    <input type="hide" name="comment_id" value="{{ $comment->id }}">
    <input type="hide" name="link" value="{{ $comment->link }}">
    <button type="submit" class="btn btn-primary">Seleccionar tutorial</button>
</form>

