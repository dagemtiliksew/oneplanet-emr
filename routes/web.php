<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;

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

Route::get('/new-patient', function () {
    return view('new-patient');
})->middleware(['auth'])->name('new-patient');

Route::middleware('auth')->group(function ($id) {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('new-patient', [PatientsController::class, 'create'])->name('new-patient');
    Route::post('new-patient', [PatientsController::class, 'store']);

    Route::get('patient/{id}', [PatientController::class, 'index'])->name('patient');
    Route::get('deletePatient', [PatientsController::class, 'delete'])->name('delete-patient');

    Route::get('patient/{id}/history', [PatientController::class, 'history'])->name('history');
    Route::post('history', [PatientController::class, 'storeHistory'])->name('store-history');

    Route::get('patient/{id}/chief-complaints', [PatientController::class, 'chief_complaints'])->name('chief-complaints');
    Route::post('chief-complaints', [PatientController::class, 'storeChiefComplaints'])->name('store-chief-complaints');

    Route::get('patient/{id}/past-medications', [PatientController::class, 'past_medications'])->name('past-medications');
    Route::post('past-medications', [PatientController::class, 'storePastMedications'])->name('store-past-medications');

    Route::get('patient/{id}/vital-signs', [PatientController::class, 'vital_signs'])->name('vital-signs');
    Route::post('vital-signs', [PatientController::class, 'storeVitalSigns'])->name('store-vital-signs');

    Route::get('patient/{id}/physical-exam', [PatientController::class, 'physical_exam'])->name('physical-exam');
    Route::post('physical-exam', [PatientController::class, 'storePhysicalExam'])->name('store-physical-exam');
    
    Route::get('patient/{id}/diagnosis', [PatientController::class, 'diagnosis'])->name('diagnosis');
    Route::post('diagnosis', [PatientController::class, 'storeDiagnosis'])->name('store-diagnosis');

    Route::get('patient/{id}/prescription', [PatientController::class, 'prescription'])->name('prescription');
    Route::post('prescription', [PatientController::class, 'storePrescription'])->name('store-prescription');
    
    Route::get('patient/{id}/summary', [PatientController::class, 'summary'])->name('summary');
});


require __DIR__.'/auth.php';
