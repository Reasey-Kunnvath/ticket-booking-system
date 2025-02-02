@extends('backend.layout.masterPage')
@section('title', 'Venue Manage')
@section('event_show','show')
@section('venue_active','active')
@section('content')
<div class="container">
      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>Coming Soon</h1><br><br><br><br>
        <a class="btn" href="{{url('/dashboard')}}">Back to home</a>
        <img src="{{asset('backend/assets/img/not-found.svg')}}" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      </section>
    </div>
@endsection
