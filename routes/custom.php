<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;




/* Custom Routes For Portfolio */

/* single portfolio */
Route::get('portfolio/{slug}', [FrontendController::class, 'single_blog'])->name('page.single_blog');

/* Contact us page */
Route::get('contact-us', [FrontendController::class, 'contact_us'])->name('page.contact_us');
