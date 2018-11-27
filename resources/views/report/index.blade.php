@foreach ($reports as $report)
<ul>
    <li>report: {{ $report->content }}</li>
    <li><a class="btn btn-danger" href="report/{{ $report->id }}/remove">Delete report</a></li>
</ul>
@endforeach
