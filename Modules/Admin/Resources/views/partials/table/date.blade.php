<!--<span data-toggle="tooltip" title="{{ is_null($date) ? '' : $date->toFormattedDateString() }}">
    {!! is_null($date) ? '&mdash;' : $date->diffForHumans() !!}
    change DD/MM/YY
</span>-->


<span data-toggle="tooltip" title="{{ is_null($date) ? '' : $date->diffForHumans() }}">
    {!! is_null($date) ? '&mdash;' : $date->format("d/m/Y") !!}
</span>
