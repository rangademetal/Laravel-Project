@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Istoric</div>
                <div class="card-body">
                    @foreach($data as $value)
                    <table class="table">
                        <tr>
                            <td>{{ $value->name}}<td>
                            <td>{{ $value->status}}<td>
                            <td>{{ $value->created_at}}<td>  <br/>                              
                        </tr>
                    </table>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
