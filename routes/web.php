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

Route::get('/', function () {
    return view('users.login');
});
Route::get('createUser', function () {
    return view('createUser');
});

Route::get('addSchool', function () {
    return view('addSchool');
});
Route::get('addStudent', function () {
    return view('addStudent');
});
Route::get('about', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat', 'ParentsController@chat')->name('parents.chat');
Route::get('/chat/{id}', 'ParentsController@getMessages')->name('parents.messages');
Route::post('/chat/{id}', 'ParentsController@sendMessage')->name('parents.send');
Route::put('/homework/submit', 'HomeworkController@submit')->name('homeworks.submit');
Route::get('/dashboard', 'StudentController@home')->name('students.home');


Route::get('/create', 'StudentController@create')->name('students.create');
Route::post('/create', 'StudentController@store')->name('students.store');

Route::get('/createTeacher', 'TeacherController@create')->name('teachers.create');
Route::post('/createTeacher', 'TeacherController@store')->name('teachers.store');

Route::get('/createCourse', 'CourseController@create')->name('courses.create');
Route::post('/createCourse', 'CourseController@store')->name('courses.store');

Route::get('/createTimeTable', 'TimeTableController@create')->name('timeTables.create');
Route::post('/createTimeTable', 'TimeTableController@store')->name('timeTables.store');

Route::get('/createHomeWork', 'HomeWorkController@create')->name('homeWorks.create');
Route::post('/createHomeWork', 'HomeWorkController@store')->name('homeWorks.store');

Route::get('/createFeedback', 'FeedbackController@create')->name('feedbacks.create');
Route::post('/createFeedback', 'FeedbackController@store')->name('feedbacks.store');

Route::get('/createMessage', 'MessageController@create')->name('messages.create');
Route::post('/login', 'UserController@login')->name('users.login');
Route::get('/logout', 'UserController@logout')->name('users.logout');

Route::resource('students','StudentController');
Route::resource('school','SchoolController');
Route::resource('courses','CourseController');
Route::resource('homeworks','HomeworkController');
Route::resource('teachers','TeacherController');
Route::resource('users','UserController');
Route::resource('feedbacks','FeedbackController');
Route::resource('parents','ParentsController');
Route::resource('messages','MessageController');