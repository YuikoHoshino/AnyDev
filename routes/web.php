<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pdf_index', 'PdfController@pdf_index');
Route::get('/pdf_preview', 'PdfController@pdf_preview');
Route::get('/pdf_download', 'PdfController@pdf_dl');
