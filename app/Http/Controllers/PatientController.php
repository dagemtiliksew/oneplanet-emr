<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        return view('patient.dashboard', ['patient' => $patient]);
    }

    public function history($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select diabetes, hypertension, asthma, tb, hiv from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.history', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storeHistory(Request $request) {
        $hasDiabetes = !empty($request->diabetes);
        $hasHypertension = !empty($request->hypertension);
        $hasAsthma = !empty($request->asthma);
        $hasTb = !empty($request->tb);
        $hasHiv = !empty($request->hiv);
        
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (diabetes, hypertension, asthma, tb, hiv, patient_id) values (?, ?, ?, ?, ?, ?)', [$hasDiabetes, $hasHypertension, $hasAsthma, $hasTb, $hasHiv, $request->id]);
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set diabetes = ?, hypertension = ?, asthma = ?, tb = ?, hiv = ? where id = ?', [$hasDiabetes, $hasHypertension, $hasAsthma, $hasTb, $hasHiv, $patient_chart->id]);
        }

        return back();
    }

    public function chief_complaints($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select chief_complaints from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.chief-complaints', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storeChiefComplaints(Request $request) {
        $request->validate([
            'chief_complaints' => ['required', 'string', 'max:255'],
        ]);
        
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (chief_complaints, patient_id) values (?, ?)', [$request->chief_complaints, $request->id]);

        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set chief_complaints = ? where id = ?', [$request->chief_complaints, $patient_chart->id]);
        }

        return back();
    }

    public function past_medications($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select past_medications from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.past-medications', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storePastMedications(Request $request) {
        $request->validate([
            'past_medications' => ['required', 'string', 'max:255'],
        ]);
        
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (past_medications, patient_id) values (?, ?)', [$request->past_medications, $request->id]);
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set past_medications = ? where id = ?', [$request->past_medications, $patient_chart->id]);
        }

        return back();
    }


    public function vital_signs($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select temperature, pulse, blood_pressure, respiratory_rate, oxygen_saturation, height, weight, bmi from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.vital-signs', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storeVitalSigns(Request $request) {
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (temperature, pulse, blood_pressure, respiratory_rate, oxygen_saturation, height, weight, bmi, patient_id) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->temperature, $request->pulse, $request->blood_pressure, $request->respiratory_rate, $request->oxygen_saturation, $request->height, $request->weight, $request->bmi, $request->id]
        );
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set temperature = ?, pulse = ?, blood_pressure = ?, respiratory_rate = ?, oxygen_saturation = ?, height = ?, weight = ?, bmi = ? where id = ?', 
            [$request->temperature, $request->pulse, $request->blood_pressure, $request->respiratory_rate, $request->oxygen_saturation, $request->height, $request->weight, $request->bmi, $patient_chart->id]
        );
        }

        return back();
    }

    public function physical_exam($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select general_appearance, heent, neck, chest_and_lung, cardiovascular, abdomen, genitourinary, rectal, musculoskeletal, lymph_nodes, extremities, neurological, other from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.physical-exam', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storePhysicalExam(Request $request) {
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (general_appearance, heent, neck, chest_and_lung, cardiovascular, abdomen, genitourinary, rectal, musculoskeletal, lymph_nodes, extremities, neurological, other, patient_id) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->general_appearance, $request->heent, $request->neck, $request->chest_and_lung, $request->cardiovascular, $request->abdomen, $request->genitourinary, $request->rectal, $request->musculoskeletal, $request->lymph_nodes, $request->extremities, $request->neurological, $request->other, $request->id]
        );
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set general_appearance = ?, heent = ?, neck = ?, chest_and_lung = ?, cardiovascular = ?, abdomen = ?, genitourinary = ?, rectal = ?, musculoskeletal = ?, lymph_nodes = ?, extremities = ?, neurological = ?, other = ? where id = ?', 
            [$request->general_appearance, $request->heent, $request->neck, $request->chest_and_lung, $request->cardiovascular, $request->abdomen, $request->genitourinary, $request->rectal, $request->musculoskeletal, $request->lymph_nodes, $request->extremities, $request->neurological, $request->other, $patient_chart->id]);
        }

        return back();
    }

    public function diagnosis($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select diagnosis from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.diagnosis', ['patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storeDiagnosis(Request $request) {
        $request->validate([
            'diagnosis' => ['required', 'string', 'max:255'],
        ]);
        
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (diagnosis, patient_id) values (?, ?)', [$request->diagnosis, $request->id]);
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set diagnosis = ? where id = ?', [$request->diagnosis, $patient_chart->id]);
        }

        return back();
    }

    public function prescription($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select prescription from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.prescription', ['patient' => $patient, 'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }

    public function storePrescription(Request $request) {
        $request->validate([
            'prescription' => ['required', 'string', 'max:255'],
        ]);
        
        $patient_chart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$request->id]);

        if(count($patient_chart) == 0) {
            $result = DB::insert('insert into patient_charts (prescription, patient_id) values (?, ?)', [$request->prescription, $request->id]);
        } else {
            $patient_chart = $patient_chart[0];
            $result = DB::update('update patient_charts set prescription = ? where id = ?', [$request->prescription, $patient_chart->id]);
        }

        return back();
    }

    public function summary($id)
    {
        $patient = DB::select('select * from patients where id = ? LIMIT 1', [$id]);

        $patientChart = DB::select('select * from patient_charts where patient_id = ? LIMIT 1', [$id]);

        return view('patient.summary', ['patient' => $patient,  'patient_chart' => count($patientChart) == 0 ? null : $patientChart[0]]);
    }
}
