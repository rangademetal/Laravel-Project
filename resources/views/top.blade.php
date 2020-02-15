@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Top</div>

                <div class="card-body">
                  
                    <table class="table">
						    
                        @foreach($data as $value)
                        <tr>
                            <td>{{ $value->name}}<td>
                            <td>{{ $value->count}}<td>                             
                        </tr>
                         @endforeach
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
