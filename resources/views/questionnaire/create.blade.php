@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game</div>
                    <div class="card-body">
                        <p></p>
                        <form action="/questionnaires" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Alege:</label><br/>
                                <label><input type="radio" name="status" value="foarfeca"/>Foarfeca</label><br/>
                                <label><input type="radio" name="status" value="hartie"/>Hartie</label><br/>
                                <label><input type="radio" name="status" value="piatra"/>Piatra</label><br/>
                            </div>
                            <button type="submit" class="btn btn-dark">Send Status</button>
                        </form>
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
