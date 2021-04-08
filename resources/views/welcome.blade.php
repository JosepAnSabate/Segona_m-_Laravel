
@extends('layouts.app')  
@section('content')
<div class='container'>
   <div class='row'>
    <div class='col-12 text-center'>
        <h1>{{__('ui.welcome')}}</h1>
       
    </div>
    </div>

    @foreach($announcements as $announcement)
    @include('announcement._announcements')
    @endforeach

 
</div>


@endsection