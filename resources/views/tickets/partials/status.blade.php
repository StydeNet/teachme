<span{!! Html::classes(['label label-info absolute', 'highlight' => $ticket->open]) !!}>
    {{ trans('tickets.status.' . $ticket->status) }}
</span>
