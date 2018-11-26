@extends('layouts.master')
@section('content')
    @include('includes.top-nav')
    @foreach ($reports as $report)
    <ul>
        <li>report: {{ $report->name }}</li>
        <li><form action="report/{{$report->id}}" method="post">
            <input type="hidden" name="_method" value="DELETE" />
                {{ csrf_field() }}
                 {{ method_field('DELETE') }}
          
             <input type="submit" class="btn btn-danger" value="delete" />
            </form></li>
    </ul>
    @endforeach
    @include('includes.footer')
@endsection