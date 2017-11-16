<?php



Route::get('/',function(){

    return view('welcome');

});
Route::get('/contact',function(){

    return view('contact');
});
Route::get('/features',function(){
    
        return view('features');
    });

Route::get('/request',function(){

    return view('request');
});