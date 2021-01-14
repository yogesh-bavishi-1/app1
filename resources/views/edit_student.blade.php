@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Student Data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="post" action="{{ route('edit',$student->id) }}">
                        @csrf
                        <label>Name</label> : <input type="text" name="name" placeholder="Enter your name" value="{{$student->name}}" /><br/>
                        <label>Email</label> : <input type="text" name="email" placeholder="Enter your email" value="{{$student->email}}" /><br/>
                        <label>Semester</label> :
                            <select name="semester" value="{{$student->semester}}">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        <br/>
                        <label>Phone</label> : <input type="number" name="phone" placeholder="Enter your phone " value="{{$student->phone}}" /><br/>
                        <button type="submit" >Update</button>
                        <button><a style="text-decoration: none; color:#000" href="{{ route('home') }}">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
