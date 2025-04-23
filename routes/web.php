<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::get('/groups', [GroupController::class, 'index'])->name('groups.index'); // список всех групп
Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create'); // страница создания новой группы
Route::post('/groups', [GroupController::class, 'store'])->name('groups.store'); // создание новой группы
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show'); // просмотр группы и студентов

Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create'); // страница добавления студента в группу
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('students.store'); // создание студента для группы
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('students.show'); // информация о студенте
