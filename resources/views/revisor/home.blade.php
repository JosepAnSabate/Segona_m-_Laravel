
@extends('layouts.app')
@section('content')
<div class='container'>
@if($announcement)
<div class='row my-4'>
    <div class='col-12'>
        <div class="card">
            <div class="card-header">
                Anuncion #{{$announcement->id}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h3>{{__('ui.user')}}</h3>
                    </div>
                    <div class="col-md-9">
                        #{{$announcement->user->id}}
                        {{$announcement->user->name}}
                        {{$announcement->user->email}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Títol</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->title}}
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Descripció</h3>
                    </div>
                    <div class="col-md-9">
                        {{$announcement->body}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                
                @foreach ($announcement->images as $image)
                    <div class="row md-2">
                    <div class="col-md-4">
                        <img src="{{$image->getUrl(300,150)}}"  class="img-fluid" alt="">
                    </div>
                    </div>
                @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
    <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Descartar</button>
    </form>
    </div>
    <div class="col-md-6 text-right">
        <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Acceptar</button>
        </form>
    </div>
</div>
@else
<div class="row">
    <div class="col-12">
        <h3>No hi ha cap anunci per a revisar.</h3>
    </div>
</div>
@endif
</div>
@endsection