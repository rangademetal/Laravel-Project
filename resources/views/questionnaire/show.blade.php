@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rezultat</div>
                    <div class="card-body">
                        <p><?php echo $computer?></p>
                        <p><?php echo $player?></p>
                        <p><?php echo $win?></p>
                    <a href="/questionnaires/create" class="btn btn-dark">Piatra, Hartie, Foarfeca</a>
                    <a href="/istoric" class="btn btn-dark">Istoric</a> 
                    <a href="/top" class="btn btn-dark">Top</a> 
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
