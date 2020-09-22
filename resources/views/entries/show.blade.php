@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$entry->title}}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{$entry->content}}
                   @can('update', $entry)
                </div>
                <div class="text-center">
                <a href="{{url('/entries/'.$entry->id.'/edit')}}" class="btn btn-primary mb-3">Editar Entrada</a>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection