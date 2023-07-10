<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Parents;
use Illuminate\Support\Facades\DB;

use Carbon\CarbonPeriod;
use Carbon\Carbon;

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use \LINE\LINEBot\MessageBuilder\FlexMessageBuilder;
use LINE\LINEBot\MessageBuilder\JsonMessageBuilder;

use Illuminate\Support\Facades\Mail;
use App\Mail\AdminCourse;

use App\Mail\MailCourse;

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


Route::get('/', function () {
    return redirect()->to("/login");
});

require __DIR__ . '/admin.php';
require __DIR__ . '/employee.php';

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'Postlogin']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');






