@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    List is here 


                    @foreach($students as $student)
                        <li class="list-group-item" >
                                {{ $student['name'] }} - {{$student['email']}} - {{$student['semester']}} - {{$student['phone']}}

                                <form class="float-right" method="get" action="{{route('edit',$student->id)}}">
                                    @csrf
                                    <button type="submit">Edit</button>
                                </form>
                                <form class="float-right" method="get" action="{{route('delete',$student->id)}}">
                                    @csrf
                                    <button type="submit">Delete</button>
                                </form>
                        </li>
                    @endforeach

                    <br/>
                    <form method="get" action="{{ route('add') }}">
                        @csrf
                            <input type="hidden" name="temp" value="temp">
                            <button type="submit" class="green">Add</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
