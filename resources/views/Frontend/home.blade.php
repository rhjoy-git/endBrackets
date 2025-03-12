@extends('layouts.masterlayout')

@section('content')
{{-- Navbar --}}
@include('frontend.particals.navbar')
{{-- Hero Section --}}
@include('frontend.particals.hero-section')

{{-- @include('frontend.particals.test') --}}
{{-- Services Carousel --}}
@include('frontend.particals.services-carousel')
{{-- Service We Provide --}}
@include('frontend.particals.services')
{{-- Testimonial --}}
@include('frontend.particals.testimonial')
{{-- Why Choose Us --}}
@include('frontend.particals.choose-us')
{{-- Clients --}}
@include('frontend.particals.clients')
{{-- FAQ --}}
@include('frontend.particals.faq')

{{-- Contact Us --}}
@include('frontend.particals.contact-us')
{{-- Branding --}}
@include('frontend.particals.branding')
{{-- Footer --}}
@include('frontend.particals.footer')
@endsection