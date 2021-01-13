@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Student</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="post" action="{{ route('add') }}">
                        @csrf
                        <label>Name</label> : <input type="text" name="name" placeholder="Enter your name" /><br/>
                        <label>Email</label> : <input type="text" name="email" placeholder="Enter your email" /><br/>
                        <label>Semester</label> :
                            <select name="semester">
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
                        <label>Phone</label> : <input type="number" name="phone" placeholder="Enter your phone " /><br/>
                        <button type="submit" >ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
