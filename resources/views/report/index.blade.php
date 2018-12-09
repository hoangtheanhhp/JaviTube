@foreach ($reports as $report)
<ul>
    <li>report: {{ $report->content }}</li>
    <li><a class="btn btn-danger" href="report/{{ $report->id }}/remove">Delete report</a></li>
    <li><a class="btn btn-danger" href="report/{{ $report->id }}/remove">Delete report</a></li>
    <li><form action="song/{{$report->->id}}" method="post">
        <input type="hidden" name="_method" value="DELETE" />
            {{ csrf_field() }}
             {{ method_field('DELETE') }}
      
         <input type="submit" class="btn btn-danger" value="delete" />
        </form></li>

</ul>
@endforeach
