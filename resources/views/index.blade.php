@extends('layouts.main')
@section('content')
<article>
  <section class="index_section_1">
      <h2>{{ trans('index.section_1.h2') }}</h2>
      <div>
        <a href="#web" class="button">{{ trans('index.section_1.a_2') }}</a>
        <a href="#click" class="button">{{ trans('index.section_1.a_2') }}</a>
      </div>
  </section>
  <section class="index_section_2">
    <div class="index_section_2_img">
      <img src="{{asset('img/responsive-web.jpg')}}" alt="{{ trans('index.section_2.img_alt') }}">
    </div>
    <div class="index_section_2_text">
      <h3>{{ trans('index.section_2.h3') }}</h3>
      <p class="text_normal">{{ trans('index.section_2.p_1') }}</p>
      <p class="text_normal">{{ trans('index.section_2.p_2') }}</p>
    </div>
  </section>
  <section class="index_section_6">
    <h3 class="blue">{{ trans('index.section_6.h3') }}</h3>
    <div class="packs">
      <div class="pack_ext">
        <div class="pack">
          <h3>{{ trans('index.section_6.packs.h3') }}</h3>
          <ul class="text_normal">
            <li>{{ trans('index.section_6.packs.li_1') }}</li>
            <li></li>
            <li>{{ trans('index.section_6.packs.li_2') }}</li>
            <li>{{ trans('index.section_6.packs.li_3') }}</li>
            <li>{{ trans('index.section_6.packs.li_4') }}</li>
          </ul>
          <a href="#web">
            <p class="contact contact_2">
              <img src="{{asset('img/icons/arrow.svg')}}" alt="{{ trans('index.section_6.packs.img_alt') }}">
            </p>
          </a>
        </div>
        <div class="user">
          <div>
            <img src="{{asset('img/user-face-1.png')}}" alt="{{ trans('index.section_6.packs.user.img_alt') }}">
          </div>
          <p class="text_normal">{{ trans('index.section_6.packs.user.p') }}</p>
        </div>
      </div>
      <div class="pack_ext">
        <div class="pack">
          <h3>{{ trans('index.section_6.packs_2.h3') }}</h3>
          <ul class="text_normal">
            <li>{{ trans('index.section_6.packs_2.li_1') }}</li>
            <li></li>
            <li>{{ trans('index.section_6.packs_2.li_2') }}</li>
            <li>{{ trans('index.section_6.packs_2.li_3') }}</li>
            <li>{{ trans('index.section_6.packs_2.li_4') }}</li>
          </ul>
          <a href="#web">
            <p class="contact contact_2">
              <img src="{{asset('img/icons/arrow.svg')}}" alt="{{ trans('index.section_6.packs_2.img_alt') }}">
            </p>
          </a>
        </div>
        <div class="user">
          <div>
            <img src="{{asset('img/user-face-1.png')}}" alt="{{ trans('index.section_6.packs_2.user.img_alt') }}">
          </div>
          <p class="text_normal">{{ trans('index.section_6.packs_2.user.p') }}</p>
        </div>
      </div>
    </div>
  </section>
  <section id="web" class="index_section_3">
    <div class="index_section_3_text">
      <h3>{{ trans('index.section_3.h3') }}</h3>
      <p class="text_normal">{{ trans('index.section_3.p') }}</p>
    </div>
    <div class="packs">
      <div class="pack">
        <h3>{{ trans('index.section_3.packs.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_3.packs.li')}}</li>
          <li>{{ trans('index.section_3.packs.li_2')}}</li>
          <li>{{ trans('index.section_3.packs.li_3')}}</li>
          <li>{{ trans('index.section_3.packs.li_4')}}</li>
          <li>{{ trans('index.section_3.packs.li_5')}}</li>
          <li>{{ trans('index.section_3.packs.li_6')}}</li>
          <li>{{ trans('index.section_3.packs.li_7')}}</li>
          <li>{{ trans('index.section_3.packs.li_8')}}</li>
          <li>{{ trans('index.section_3.packs.li_9')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_3.packs.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_3.packs.a')}}</a></p>
      </div>
      <div class="pack">
        <h3>{{ trans('index.section_3.packs_2.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_3.packs_2.li')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_2')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_3')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_4')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_5')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_6')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_7')}}</li>
          <li>{{ trans('index.section_3.packs_2.li_8')}}</li>
          <li>{{ trans('index.section_3.packs.li_9')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_3.packs_2.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_3.packs_2.a')}}</a></p>
      </div>
      <div class="pack">
        <h3>{{ trans('index.section_3.packs_3.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_3.packs_3.li')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_2')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_3')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_4')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_5')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_6')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_7')}}</li>
          <li>{{ trans('index.section_3.packs_3.li_8')}}</li>
          <li>{{ trans('index.section_3.packs.li_9')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_3.packs_3.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_3.packs_3.a')}}</a></p>
      </div>
  </section>
  <section class="index_section_4" id="click">
    <h3>{{ trans('index.section_4.h3')}}</h3>
    <p class="text_normal">{{ trans('index.section_4.p')}}</p>
    <div class="index_section_4_marketplace">
      <div>
        <img src="{{asset('img/logo-ebay.jpg')}}" alt="{{ trans('index.section_4.img_alt')}}">
      </div>
      <div>
        <img src="{{asset('img/logo-amazon.jpg')}}" alt="{{ trans('index.section_4.img_alt')}}">
      </div>
      <div>
        <img src="{{asset('img/logo-google-shopping.jpg')}}" alt="{{ trans('index.section_4.img_alt')}}">
      </div>
    </div>
    <div class="packs">
      <div class="pack">
        <h3>{{ trans('index.section_4.packs.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_4.packs.li')}}</li>
          <li>{{ trans('index.section_4.packs.li_2')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_4.packs.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_4.packs.a')}}</a></p>
      </div>
      <div class="pack">
        <h3>{{ trans('index.section_4.packs_2.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_4.packs_2.li')}}</li>
          <li>{{ trans('index.section_4.packs_2.li_2')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_4.packs_2.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_4.packs_2.a')}}</a></p>
      </div><div class="pack">
        <h3>{{ trans('index.section_4.packs_3.h3')}}</h3>
        <ul class="text_normal">
          <li>{{ trans('index.section_4.packs_3.li')}}</li>
          <li>{{ trans('index.section_4.packs_3.li_2')}}</li>
        </ul>
        <p class="preu">{{ trans('index.section_4.packs_3.p')}}</p>
        <p class="contact"><a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'),
    'routes.contact')}}">{{ trans('index.section_4.packs_3.a')}}</a></p>
      </div>
    </div>
  </section>
  <section class="index_section_5">
    <div class="index_section_5_box">
      <h3>{{ trans('index.section_5.h3')}}</h3>
      <p class="text_normal">{{ trans('index.section_5.p') }}<a href="{{ LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.faq' )}}"> FAQ</a></p>
    </div>
    <div class="index_section_5_box">
      <h3>{{ trans('index.section_5.h3_2') }}</h3>
      <p class="text_normal">{{ trans('index.section_5.p_2') }}</p>
    </div>
  </section>
</article>
@stop
