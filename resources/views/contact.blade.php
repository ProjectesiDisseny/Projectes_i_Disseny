@extends('layouts.main')
@section('content')
<article>
  <section class="contact_section_1">
    @if(count($errors) > 0)
      <div class="alert" role="alert">
        <ul>
          @foreach($errors->all() as $error)
            <li>{!! $error !!}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <h3>{{ trans('contact.section_1.h3') }}</h3>
    <div class="contact_section_1_form">
      {!! Form::open() !!}
        <div class="form_group">
          <label for="name">{{ trans('contact.section_1.label') }}</label>
          <input name="name">
        </div>
        <div class="form_group">
          <label for="email">{{ trans('contact.section_1.label_2') }}</label>
          <input name="email" type="email">
        </div>
        <div class="form_group">
          <label for="phone">{{ trans('contact.section_1.label_3') }}</label>
          <input name="phone" type="number">
        </div>
        <div class="form_group">
          <label for="pack">{{ trans('contact.section_1.label_4') }}</label>
          <select name="pack">
            <option value="{{ trans('contact.section_1.label_4_1') }}">{{ trans('contact.section_1.label_4_1') }}</option>
            <option value="{{ trans('contact.section_1.label_4_2') }}">{{ trans('contact.section_1.label_4_2') }}</option>
          </select>
        </div>
        <div class="form_group">
          <label for="content">{{ trans('contact.section_1.label_5') }}</label>
          <textarea name="content" cols="60" rows="4"></textarea>
        </div>
        <div class="form_group">
          <label for="privacity">{{ trans('contact.section_1.label_6') }}</label>
          <input class="form_group_checkbox" type="checkbox" name="privacity">
          <p class="text_normal form_group_checkbox_text">{{ trans('contact.section_1.p') }} <a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
      'routes.privacity')}}">{{ trans('contact.section_1.p_1') }}</a></p>
        </div>
        <div class="form_group">
          <input type="submit" value="{{ trans('contact.section_1.input') }}" class="button">
        </div>
        {!! Form::close() !!}
      </form>
  </section>
</article>
@stop
