@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game</div>
                    <div class="card-body">
                        <form action="/questionnaires" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" class="form-control" placeholder="Enter status">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @error('status')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Send Status</button>


                        </form>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
