
@extends('layouts.app')  
@section('content')
<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><h3>{{$announcement->title}}</h3></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">Publicat el: {{$announcement->created_at->format('d/m/Y')}}</span>
						</div>
						<h4 class="price">Preu actual: <span> {{$announcement->price}}€</p></strong></span></h4>
                        <p class="product-description">Descripció del producte{{$announcement->body}}</p>
                        <br>				
						<p class="vote"><strong>Autor: </strong>{{$announcement->user->name}}. </p>
						<h4 class="sizes">Categoria: <a href="{{route('category.announcements',
                ['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">
                {{$announcement->category->name}}</a></h4>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row my-3">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{$announcement->title}}</h3>
                    <em>{{$announcement->created_at->format('d/m/Y')}}</em>
                    
                </div>
                <div class="car-body d-flex justify-content-between">
                    
                    <img src="https://via.placeholder.com/150" alt="">
                    <div>
                
                    <p class="stylep"> {{$announcement->body}} </p>
                    <br>
                    <br>
                    <p><strong> {{$announcement->price}} €</p></strong>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-between">
                <strong>Categoria: <a href="{{route('category.announcements',
                ['name'=>$announcement->category->name,'id'=>$announcement->category->id])}}">
                {{$announcement->category->name}}</a></strong>
                <strong>Autor: {{$announcement->user->name}} </strong>
                </div>                
                <a class="ms-auto" href="{{route("announcement.details", ['id'=>$announcement->id])}}"><button type="button" class="btn btn-success">Més informació...</button></a>
        
               
                
            </div>
            </div>
    </div>
<!-- cards, carrousel i info welc -->
<p> {{$announcement->body}} </p>
@endsection
