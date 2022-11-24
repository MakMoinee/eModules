<?php

use App\Events\PostAnnouncement;
use App\Http\Controllers\ABMController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStrandController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\StrandController;
use App\Http\Controllers\StudentAnnouncement;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ViewerController;
use App\Http\Controllers\WebNotificationController;
use App\Models\Announcements;
use App\Models\Modules;
use Illuminate\Http\Request;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [HomeController::class, 'index']);
Route::resource('/course', ABMController::class);
Route::resource('/humss', ABMController::class);
Route::get('/logout', [SignOutController::class, 'index']);
Route::resource('/login', LoginController::class);
Route::resource('/signup', SignUpController::class);
Route::resource('/strands', StrandController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/adminstrands', AdminStrandController::class);
Route::resource('/modules', ModulesController::class);
Route::resource('/announcements', AnnouncementsController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/studentannounce', StudentAnnouncement::class);
Route::resource('/viewer', ViewerController::class);
Route::resource('/about', AboutController::class);
Route::resource('/superadmin', SuperAdminController::class);
Route::resource('/adminusers', AdminUsersController::class);
Route::resource('/notifications', NotifController::class);
Route::get('/chats', [ChatsController::class, 'index']);
Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);
