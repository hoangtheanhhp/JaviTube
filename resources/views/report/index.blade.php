@foreach ($reports as $report)
<ul>
    <li>report: {{ $report->content }}</li>
    <li><a href="report/delete/{{ $report->id }}">Delete report</a></li>
</ul>
@endforeach