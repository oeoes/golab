@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card border-0 shadow-sm p-3 mt-5">
                    <div class="h3 text-center">Join</div>
                    <span class="text-muted text-center">Complete personal information</span>
                    <hr>
                    <form action="{{ route('user.complete') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="{{ $email }}" name="email" type="email" class="form-control" placeholder="email..." style="cursor: not-allowed">
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input name="name" type="text" class="form-control" placeholder="password...">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="password...">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                    @if($errors->any())
                        <div class="display-1">Error</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection