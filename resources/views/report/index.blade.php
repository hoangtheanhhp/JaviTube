@extends('layouts.master')
@section('content')
@include('includes.top-nav')
<div class="container custom-page">
    <table class="table-user table" style="margin: 70px;">
        <thead>
            <tr>
            <th scope="col">Content</th>
            <th scope="col">Report by</th>
            <th scope="col">Reported Song</th>
            <th scope="col">Reported User</th>
            <th scope="col">Delete Report</th>
            <th scope="col">Delete Song</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($reports as $report)
            <tr>
            <td>{{ $report->content }}</td>
            <td><a href="{{route("users.show",$report->user->id)}}"> {{ $report->user->name }}</td>
            <td><a href="{{route("songs.show",$report->song->id)}}"> {{ $report->song->name }}</td>
            <td><a href="{{route("users.show",$report->song->user->id)}}"> {{ $report->song->user->name }}</td>
            <td>
                <form action="{{route('admin.report.remove',$report->id)}}" method="post">
                    <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                
                    <input type="submit" class="btn btn-danger" value="delete" />
                </form>
            
            </td>
            <td><form action="{{route('admin.report.removeall',$report->id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE" />
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                
                <input type="submit" class="btn btn-danger" value="delete" />
            </form></td>
            </tr>
        @endforeach 
        </tbody>
    </table>
</div>
@include('includes.footer')
@endsection