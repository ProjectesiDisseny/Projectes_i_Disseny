@extends('layouts.main')
@section('content')
  <article>
    <section class="contact_section_1">
      <div class="contact_section_1_form">
        <div class="contact_section_1_img">
          <img src="{{ asset('img/icons/success.svg') }}">
        </div>
        <h3 class="contact_section_1_success">{!! trans('success.text') !!}</h3>
      </div>
    </section>
  </article>
@stop
