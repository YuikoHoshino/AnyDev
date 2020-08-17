<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf_index', 'PdfController@pdf_index');
Route::get('/pdf_preview', 'PdfController@pdf_preview');
Route::post('/pdf_download', 'PdfController@pdf_dl')->name('pdf_download');

//fullcalender
Route::get('/eventmaster','CalendarController@index');
Route::post('/eventmaster/create','CalendarController@create');
Route::post('/eventmaster/update','CalendarController@update');
Route::post('/eventmaster/delete','CalendarController@destroy');
