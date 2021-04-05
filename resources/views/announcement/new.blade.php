@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Nou anunci
                </div>
                <div class="card-body">                
                    <form method="POST" action='{{route("announcement.create")}}'>
                        @csrf
                    
                        <div class="form-group">
                            <label for="announcementName">Titulo</label>
                            <input type="text" class="form-control" id="announcementName"
                        name="title" value="{{old("title")}}">
                            @error('title')
                                    <small id="emailHelp" class="form-text" style="color:red;">
                                        {{ $message }}
                                    </small>
                                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="announcementBody">Anuncio</label>
                            <textarea class="form-control" name="body" id="announcementBody" cols="30"
                                rows="10">{{old("body")}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection