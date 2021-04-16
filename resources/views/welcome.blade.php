
@extends('layouts.app')  
@section('content')
<br>
<div class='container-fluid p-0'>
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center no-gutter">
      <div class="col-12 text-center">
      <h1>{{__('ui.welcome')}}</h1>
      <br>
       <h3>{{__('ui.intro')}}</h3>
      </div>
    </div>
  </div>
</header>
  
       
       
   

    @foreach($announcements as $announcement)
    @include('announcement._announcements')
    @endforeach

 
</div>


@endsection