@extends('layouts.main')
@section('content')
<article>
  <section class="aboutus_section_1">
    <h1 class="h1_nosaltres">{{ trans('aboutus.h1')}}</h1>
    <p class="text_normal">
      {!! trans('aboutus.p') !!}
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2973.84853663375!2d1.8983478149105626!3d41.810023177651594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4f95b583b2c69%3A0x70d97c7e530b31be!2sProjectes+i+Disseny+INCAFE+S.L.U.!5e0!3m2!1sca!2ses!4v1490121830550" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</article>
@stop
