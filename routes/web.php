<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DocumentController;
use App\Livewire\AboutUs;
use App\Livewire\OurExpertise;
use App\Livewire\OurPhilosophy;
use App\Livewire\OurService;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcomefn');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'checkUserType'])->group(function () {
    Route::delete('/customers/{customer}/confirmDestroy', [CustomerController::class, 'confirmDestroy'])->name('customers.confirmDestroy');
    Route::resource('customers', CustomerController::class);
});

Route::get('/contact-form', function () {
    return view('contact-form', ['uuid' => null]);
})->name('contact-form');

Route::get('/contact-form/{uuid}', function ($uuid) {
    return view('contact-form', ['uuid' => $uuid]);
})->middleware('auth')
->name('contact-form.uuid');

Route::get('/contact-form-response', function () {
    return view('contact-form-response');
})->name('contact-form-response');

Route::get('/individual-onboarding/{customerUuid}', function ($customerUuid) {
    $customerName = User::where('uuid', $customerUuid)->first()->name;
    return view('individual-onboarding', compact('customerUuid', 'customerName'));
})->middleware('auth')->name('individual-onboarding');

Route::get('/corporate-onboarding/{customerUuid}', function ($customerUuid) {
    $customerName = User::where('uuid', $customerUuid)->first()->name;
    return view('corporate-onboarding', compact('customerUuid', 'customerName'));
})->middleware('auth')->name('corporate-onboarding');

Route::get('/trust-onboarding/{customerUuid}', function ($customerUuid) {
    $customerName = User::where('uuid', $customerUuid)->first()->name;
    return view('trust-onboarding', compact('customerUuid', 'customerName'));
})->middleware('auth')->name('trust-onboarding');

Route::get('/foundation-onboarding/{customerUuid}', function ($customerUuid) {
    $customerName = User::where('uuid', $customerUuid)->first()->name;
    return view('foundation-onboarding', compact('customerUuid', 'customerName'));
})->middleware('auth')->name('foundation-onboarding');

Route::get('/charity-onboarding/{customerUuid}', function ($customerUuid) {
    $customerName = User::where('uuid', $customerUuid)->first()->name;
    return view('charity-onboarding', compact('customerUuid', 'customerName'));
})->middleware('auth')->name('charity-onboarding');

Route::get('documents/{filename}', [DocumentController::class, 'download'])->name('documents.download');


// -------------------- FORM TO COMPLETE BY CUSTOMER -------------------

// 3) KYC Indiviual Form2 23.05.24 FINAL
Route::get('/kyc-form-individual/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('k-y-c-form-individual', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('kyc-form-individual');

// 5. B - Doc 5.1 Form_A_2020
Route::get('/form-a/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('form-a', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('form-a');

// 15. TAX COMPLIANCE CONFIRMATION
Route::get('/form-tax-confirm/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('form-tax-confirm', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('form-tax-confirm');




// -------------------- FORM TO COMPLETE BY OTHER GROUP -------------------
// 6. B - DOC 5.2 Form_K_2020
Route::get('/form-k/{customerUuid}/{formId?}', function ($customerUuid, $formId="") {
    return view('form-k', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('form-k');


// 7. B - DOC 5.4 Form_T_2020 (1)
Route::get('/form-t/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('form-t', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('form-t');

// 8. B - DOC 5.3 Form_S_2020
Route::get('/form-s/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('form-s', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('form-s');

// 12) KYC CORPORATE FORM
Route::get('/kyc-form-corporate/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('k-y-c-form-corporate', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('kyc-form-corporate');




// -------------------- FORM TO COMPLETE BY RM -------------------

// 1) RM - KYC Client Profile - Internal
Route::get('/kyc-form-r-m/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('k-y-c-form-r-m', ['customerUuid' => $customerUuid, 'formId' => $formId]);

})->middleware('auth')->name('kyc-form-r-m');

// 4) AML Risk Profile
Route::get('/aml-risk-profile/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('a-m-l-risk-profile', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('aml-risk-profile');

// 14) MANDATE AGREEMENT TRUST - Final Version
Route::get('/mandate-agreement/{customerUuid}/{formId?}', function ($customerUuid, $formId = "") {
    return view('mandate-agreement', ['customerUuid' => $customerUuid, 'formId' => $formId]);
})->middleware('auth')->name('mandate-agreement');


require __DIR__.'/auth.php';


// Route::get('/kyc-form-individual-pdf/{customerUuid}', function ($customerUuid) {
//     return view('pdf.k-y-c-form-individual', ['customerUuid' => $customerUuid, 'isPDF' => true, 'firstName' => 'John', 'lastName' => 'Doe']);
// })->middleware('auth')->name('kyc-form-individual-pdf');

Route::get('our-expertise', OurExpertise::class)->name('our-expertise');
Route::get('our-service', OurService::class)->name('our-service');
Route::get('about-us', AboutUs::class)->name('about-us');
Route::get('our-philosophy', OurPhilosophy::class)->name('our-philosophy');
