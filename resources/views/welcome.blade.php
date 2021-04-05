
@extends('layouts.app')  
@section('content')
@if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
@endif
    <h1>Benvingut</h1>
@endsection