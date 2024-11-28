<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Include authentication routes
require __DIR__.'/auth.php';

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Home (index) page - Only accessible to authenticated users
    Route::get('/', function () {
        return view('index');
    })->name('home');

    // Dashboard
    Route::get('/dashboard', function () {
        return view('index');
    })->middleware('verified')->name('dashboard');

    // Profile management
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    // Role-based routes
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard'); // Create the admin dashboard view
    });

    Route::middleware('role:employee')->group(function () {
        Route::get('/employee', function () {
            return view('employee.dashboard');
        })->name('employee.dashboard'); // Create the employee dashboard view
    });
});

Route::get('/layouts/hori-topbar-light', function () {
    return view('layouts.hori-topbar-light');
})->name('layouts.hori-topbar-light');
Route::view('/layouts/hori-boxed-width', 'layouts.hori-boxed-width')->name('layouts.hori-boxed-width');
Route::view('/layouts/hori-preloader', 'layouts.hori-preloader')->name('layouts.hori-preloader');
Route::view('/layouts/hori-colored-header', 'layouts.hori-colored-header')->name('layouts.hori-colored-header');
Route::view('/auth/lock-screen', 'auth.lock')->name('auth.lock');


// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::view('/lock-screen', 'auth-lock-screen')->name('auth.lock-screen');
    Route::view('/login', 'auth-login')->name('auth.login');
    Route::view('/recover-password', 'auth-recoverpw')->name('auth.recoverpw');
    Route::view('/register', 'auth-register')->name('auth.register');

    // Add logout route
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
});

// Calendar and Chat Routes
Route::view('/calendar', 'calendar')->name('calendar');
Route::view('/chat', 'chat')->name('chat');
// Route for Google Maps view
Route::view('/google-maps', 'maps.google')->name('maps.google');

// Route for Vector Maps view
Route::view('/vector-maps', 'maps.vector')->name('maps.vector');

// Charts Routes
Route::prefix('charts')->group(function () {
    Route::view('/apex', 'charts-apex')->name('charts.apex');
    Route::view('/chartist', 'charts-chartist')->name('charts.chartist');
    Route::view('/chartjs', 'charts-chartjs')->name('charts.chartjs');
    Route::view('/flot', 'charts-flot')->name('charts.flot');
    Route::view('/knob', 'charts-knob')->name('charts.knob');
    Route::view('/sparkline', 'charts-sparkline')->name('charts.sparkline');
});

// E-commerce Routes
Route::prefix('ecommerce')->group(function () {
    Route::view('/add-product', 'ecommerce-add-product')->name('ecommerce.add-product');
    Route::view('/cart', 'ecommerce-cart')->name('ecommerce.cart');
    Route::view('/checkout', 'ecommerce-checkout')->name('ecommerce.checkout');
    Route::view('/customers', 'ecommerce-customers')->name('ecommerce.customers');
    Route::view('/orders', 'ecommerce-orders')->name('ecommerce.orders');
    Route::view('/product-detail', 'ecommerce-product-detail')->name('ecommerce.product-detail');
    Route::view('/products', 'ecommerce-products')->name('ecommerce.products');
    Route::view('/shops', 'ecommerce-shops')->name('ecommerce.shops');
});

// Email, Chat, Calendar, and Invoice Routes (all under 'email' prefix)
Route::prefix('email')->group(function () {
    Route::view('/compose', 'email-compose')->name('email.compose');
    Route::view('/inbox', 'email-inbox')->name('email.inbox');
    Route::view('/read', 'email-read')->name('email.read');
    // Chat index route included under the same prefix
    Route::view('/chat', 'chat.index')->name('chat.index'); // Chat route added here
    // Calendar index route added under the same prefix
    Route::view('/calendar', 'calendar.index')->name('calendar.index'); // Calendar route added here
    // Invoice index route added under the same prefix
    Route::view('/invoice', 'invoice.index')->name('invoice.index'); // Invoice route added here
});


// Form Routes
Route::prefix('forms')->group(function () {
    Route::view('/advanced', 'form-advanced')->name('forms.advanced');
    Route::view('/editors', 'form-editors')->name('forms.editors');
    Route::view('/elements', 'form-elements')->name('forms.elements'); // Ensure this line exists
    Route::view('/mask', 'form-mask')->name('forms.mask');
    Route::view('/uploads', 'form-uploads')->name('forms.uploads');
    Route::view('/validation', 'form-validation')->name('forms.validation');
    Route::view('/wizard', 'form-wizard')->name('forms.wizard');
    Route::view('/xeditable', 'form-xeditable')->name('forms.xeditable');
});

Route::get('/logout', function () {
    return redirect()->route('home'); // Or 'home'
});



// Icons Routes
Route::prefix('icons')->group(function () {
    Route::view('/dripicons', 'icons-dripicons')->name('icons.dripicons');
    Route::view('/fontawesome', 'icons-fontawesome')->name('icons.fontawesome');
    Route::view('/materialdesign', 'icons-materialdesign')->name('icons.materialdesign');
    Route::view('/themify', 'icons-themify')->name('icons.themify');
});

// Layout Routes
Route::prefix('layouts')->group(function () {
    Route::view('/boxed', 'layouts-boxed')->name('layouts.boxed');
    Route::view('/compact-sidebar', 'layouts-compact-sidebar')->name('layouts.compact-sidebar');
    Route::view('/dark-sidebar', 'layouts-dark-sidebar')->name('layouts.dark-sidebar');
    Route::view('/horizontal', 'layouts-horizontal')->name('layouts.horizontal');
});

// Misc Pages
Route::prefix('pages')->group(function () {
    Route::view('/404', 'pages-404')->name('pages.404');
    Route::view('/500', 'pages-500')->name('pages.500');
    Route::view('/blank', 'pages-blank')->name('pages.blank');
    Route::view('/coming-soon', 'pages-comingsoon')->name('pages.coming-soon');
    Route::view('/faq', 'pages-faq')->name('pages.faq');
    Route::view('/invoice', 'pages-invoice')->name('pages.invoice');
    Route::view('/maintenance', 'pages-maintenance')->name('pages.maintenance');
    Route::view('/pricing', 'pages-pricing')->name('pages.pricing');
    Route::view('/timeline', 'pages-timeline')->name('pages.timeline');
});

// Tables Routes
Route::prefix('tables')->group(function () {
    Route::view('/basic', 'tables-basic')->name('tables.basic');
    Route::view('/datatable', 'tables-datatable')->name('tables.datatable');
    Route::view('/editable', 'tables-editable')->name('tables.editable');
    Route::view('/responsive', 'tables-responsive')->name('tables.responsive');
});

// UI Components
Route::prefix('ui')->group(function () {
    Route::view('/alerts', 'ui-alerts')->name('ui.alerts');
    Route::view('/buttons', 'ui-buttons')->name('ui.buttons');
    Route::view('/cards', 'ui-cards')->name('ui.cards');
    Route::view('/carousel', 'ui-carousel')->name('ui.carousel');
    Route::view('/modals', 'ui-modals')->name('ui.modals');
    Route::view('/typography', 'ui-typography')->name('ui.typography');
    Route::view('/video', 'ui-video')->name('ui.video');
    Route::view('/dropdowns', 'ui-dropdowns')->name('ui.dropdowns');
    Route::view('/grid', 'ui-grid')->name('ui.grid');
    Route::view('/lightbox', 'ui-lightbox')->name('ui.lightbox'); // Added route for lightbox
    Route::view('/rangeslider', 'ui-rangeslider')->name('ui.rangeslider');
    Route::view('/session-timeout', 'ui-session-timeout')->name('ui.session-timeout');
    Route::view('/progressbars', 'ui-progressbars')->name('ui.progressbars');
    Route::view('/sweet-alert', 'ui-sweet-alert')->name('ui.sweet-alert');
    Route::view('/tabs-accordions', 'ui-tabs-accordions')->name('ui.tabs-accordions');
    Route::view('/general', 'ui-general')->name('ui.general');
    Route::view('/colors', 'ui-colors')->name('ui.colors');
    Route::view('/rating', 'ui-rating')->name('ui.rating');

    Route::view('/images', 'ui-images')->name('ui.images'); // Added route for images
});


