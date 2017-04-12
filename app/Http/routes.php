<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;
use App\Http\Requests\ContactCreate;

Route::group(
[
  'prefix' => LaravelLocalization::setLocale(),
  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localize' ]
],
function()
{
  /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
  Route::get('/', function()
  {
    return view('index', ['urlname' => 'index']);
  });
  Route::get(LaravelLocalization::transRoute('routes.faq'),function(){
    return view('faq', ['urlname' => 'faq']);
  });
  Route::get(LaravelLocalization::transRoute('routes.aboutus'),function(){
    return view('aboutus', ['urlname' => 'aboutus']);
  });
  Route::get(LaravelLocalization::transRoute('routes.contact'),function(){
    return view('contact', ['urlname' => 'contact']);
  });
  Route::post(LaravelLocalization::transRoute('routes.contact'),function(ContactCreate $request){
    App\Contact::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'phone' => $request['phone'],
      'pack' => $request['pack'],
      'content' => $request['content']
    ]);
    Mail::send('emails.contact', $request->all(), function($msj){
      $msj->subject('Sol·licitud de contacte');
      $msj->to('info@projectesidisseny.com');
    });
    return view('emails.success', ['urlname' => 'success']);
  });
  Route::get(LaravelLocalization::transRoute('routes.legaladvice'), function(){
    return view('legaladvice', ['urlname' => 'legaladvice']);
  });
  Route::get(LaravelLocalization::transRoute('routes.privacity'), function(){
    return view('privacity', ['urlname' => 'privacity']);
  });

});

include('oldlinks.php');
foreach($urls as $url){
  Route::get($url, function(){
    return redirect('/');
  });
}
