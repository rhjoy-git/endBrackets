@extends('layouts.masterlayout')

@section('content')
{{-- Navbar --}}
@include('frontend.particals.navbar')
{{-- Hero Section --}}
@include('frontend.particals.hero-section')
{{-- Services Carousel --}}
@include('frontend.particals.services-carousel')
{{-- Our Wort --}}
@include('frontend.particals.our-work')
{{-- Service We Provide --}}
@include('frontend.particals.services')
{{-- Testimonial --}}
@include('frontend.particals.testimonial')
{{-- Why Choose Us --}}
@include('frontend.particals.choose-us')
{{-- FAQ --}}
@include('frontend.particals.faq')
{{-- Clients --}}
@include('frontend.particals.clients')
{{-- Contact Us --}}
{{-- @include('frontend.particals.contact-us') --}}

{{-- Branding --}}
@include('frontend.particals.branding')
{{-- Footer --}}
@include('frontend.particals.footer')
@endsection