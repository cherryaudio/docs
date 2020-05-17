<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);


Route::permanentRedirect('voltage-modular-user-guide', '/');
Route::permanentRedirect('cherry-audio', 'cherry-audio/modules/additive-oscillator');
Route::permanentRedirect('cherry-audio/modules', 'cherry-audio/modules/additive-oscillator');
Route::permanentRedirect('misfit-audio', 'misfit-audio/modules/drum-trigger-sequencer');
Route::permanentRedirect('misfit-audio/modules', 'misfit-audio/modules/drum-trigger-sequencer');
Route::permanentRedirect('voltage-modular-user-guide/IO-panel', 'voltage-modular-user-guide/io-panel');
Route::permanentRedirect('modules/minilfo', 'cherry-audio/modules/mini-lfo');
Route::permanentRedirect('modules/noise-generator', 'cherry-audio/modules/noise-generator');
Route::permanentRedirect('cherry-audio/modules/noise_generator', 'cherry-audio/modules/noise-generator');