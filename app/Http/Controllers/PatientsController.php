<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
      /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('new-patient');
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'phone_no' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'region' => ['required', 'string', 'max:255'],
        ]);
        

        $result = DB::insert(
            'insert into patients 
            (first_name, last_name, gender, phone_no, phone_no2, home_phone, email, date_of_birth, id_no, id_type, martial_status, occupation, credit, credit_company, emergency_contact_name, emergency_contact_rel, emergency_contact_phone, emergency_contact_phone_2, emergency_contact_memo, city, sub_city, region, woreda, zone, house_no, memo, card_no) 
            values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [
            $request->first_name,
            $request->last_name,
            $request->gender,
            $request->phone_no,
            $request->phone_no2,
            $request->home_phone,
            $request->email,
            $request->date_of_birth,
            $request->id_no,
            $request->id_type,
            $request->martial_status,
            $request->occupation,
            $request->credit,
            $request->credit_company,
            $request->emergency_contact_name,
            $request->emergency_contact_rel,
            $request->emergency_contact_phone,
            $request->emergency_contact_phone_2,
            $request->emergency_contact_memo,
            $request->city,
            $request->sub_city,
            $request->region,
            $request->woreda,
            $request->zone,
            $request->house_no,
            $request->memo,
            $request->card_no,
        ]);

        return redirect('/');
    }

    public function delete(Request $request) {
        DB::delete('delete from patient_charts where patient_id = ?', [$request->id]);
        DB::delete('delete from patients where id = ?', [$request->id]);
        return back();
    }
}
