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
