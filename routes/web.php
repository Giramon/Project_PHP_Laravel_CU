<?php

use Illuminate\Support\Facades\Route;

// Home

Route::get('/', function () {
    return view('index');
});

// Admin Panel

Route::get('/admin_panel', function () {
    return view('admin/autoreg');
});

// Validate Login and Password

Route::get('validate', function () {
    return view('admin/validate');
});

// Selection Add College or University and Specialty Add College or University

Route::get('selection', function () {
    return view('admin/selection');
});

// Add College

Route::get('add_college', function () {
    return view('admin/college/add_college');
});

// Validate Add College

Route::get('accept_college', function () {
    return view('admin/college/accept_college');
});

// Add University

Route::get('add_university', function () {
    return view('admin/university/add_university');
});

// Validate Add University

Route::get('accept_university', function () {
    return view('admin/university/accept_university');
});

// Add specialty College

Route::get('add_specialty_college', function () {
    return view('admin/college/add_specialty_college');
});

// Accept specialty College

Route::get('accept_specialty_college', function () {
    return view('admin/college/accept_specialty_college');
});

// Add specialty University

Route::get('add_specialty_university', function () {
    return view('admin/university/add_specialty_university');
});

// Accept specialty University

Route::get('accept_specialty_university', function () {
    return view('admin/university/accept_specialty_university');
});

// View list elements

Route::get('list_all_university', function () {
    return view('pages/list_all_university');
});

Route::get('list_all_college', function () {
    return view('pages/list_all_college');
});

// Output all elements

Route::get('output_college', function () {
    return view('pages/output_college');
});

Route::get('output_university', function () {
    return view('pages/output_university');
});
