@extends('layouts.app')
@section('content')
<br>
<br>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Nou anunci (Secret: {{$uniqueSecret}})
                </div>
                <div class="card-body">                
                    <form method="POST" action='{{route("announcement.create")}}'>
                         @csrf 
                        <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                        <div class="form-group">
                            <label for="announcementName">{{__('ui.titol')}}</label>
                            <input type="text" class="form-control" id="announcementName"
                        name="title" value="{{old("title")}}">
                            @error('title')
                                    <small id="emailHelp" class="form-text" style="color:red;">
                                        {{ $message }}
                                    </small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                        <label class="form-label" for="categories">{{__('ui.detailscategory')}}</label>
                        <select class="form-select" id="categoriesJ" name="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                                {{$category->name}}</option>
                            @endforeach
                            </select>
                    </div>
                                                    
                            <div class="form-group">
                                <label for="announcementPrice">{{__('ui.detailsprice')}}</label>
                                <input type="number" step="0.01" class="form-control" id="announcementPrice" aria-describedby="priceHelp" name="price" value="{{old("price")}}">
                                @error('price')
                                <small id="priceHelp" class="form-text" style="color:red;">{{ $message }}</small>
                                @enderror
                            </div>
                        <div class="form-group">
                            <label for="announcementBody">{{__('ui.anunci')}}</label>
                            <textarea class="form-control" name="body" id="announcementBody" cols="30"
                                rows="10">{{old("body")}}</textarea>
                        </div>

                        <div class="mb-3">
                        <label for="announcementImages" class="form-label">{{__('ui.imatges')}}</label>
                        <div class="dropzone" id="drophere"></div>
                        @error('images')
                            <small class="alert alert-danger">{{ $message }}</small>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary buto">{{__('ui.publicar')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection