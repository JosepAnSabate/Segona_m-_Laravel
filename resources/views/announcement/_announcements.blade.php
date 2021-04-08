<div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            <div>
                <div class="card-header d-flex justify-content-between">
                    <h3>{{$announcement->title}}</h3>
                    <em>{{$announcement->created_at->format('d/m/Y')}}</em>
                    
                </div>
                <div class="car-body d-flex justify-content-between">
                <div> 
                               
                @foreach ($announcement->images as $image)
                <div class="carousel-item @if($loop->first)active @endif">
                <img src="{{Storage::url($image->file)}}"" class="d-block w-100" alt="...">
                </div>
                @endforeach
                   </div> 
                
                    <div>
                    <p class="stylep"> {{$announcement->body}} </p>
                    <br>
                    <br>
                    <p><strong> {{$announcement->price}} €</p></strong>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-between">
                <strong>{{__('ui.detailscategory')}} <a href="{{route('category.announcements',
                ['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">
                {{$announcement->category->name}}</a></strong>
                <strong>{{__('ui.detailsautor')}} {{$announcement->user->name}} </strong>
                </div>                
                <a class="ms-auto" href="{{route("announcement.details", ['id'=>$announcement->id])}}"><button type="button" class="btn btn-success">{{__('ui.readmore')}}</button></a>
        
               
                
            </div>
            </div>
    </div>



