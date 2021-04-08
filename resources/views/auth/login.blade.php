
@extends('layouts.app')  
@section('content') 
<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container">
      <div class="section-title">
        <h2>{{__('ui.logina')}}<span> Segmano</span></h2>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <form action="/login" method="POST" role="form" class="php-email-form">
        @csrf
        <div class="row">
          {{-- <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Cerveceria" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div> --}}
          <div class="col-md-6 offset-md-3 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
            <div class="validate"></div>
          </div>
          <div class="col-md-6 offset-md-3 form-group mt-3 mt-md-0">
            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
            <div class="validate"></div>
          </div>
          {{-- <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>--}}
          {{-- <div class="col-md-6 form-group">
            <input type="number" class="form-control" name="capacity" id="people" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            <div class="validate"></div>
          </div>  --}}
        </div>
        {{-- <div class="form-group mt-3">
          <textarea class="form-control" name="description" rows="5" placeholder="Descripción"></textarea>
          <div class="validate"></div>
        </div> --}}
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit button" class="btn btn-primary">{{__('ui.login')}}</button></div>
      </form>
    </div>
  </section><!-- End Book A Table Section -->
@endsection