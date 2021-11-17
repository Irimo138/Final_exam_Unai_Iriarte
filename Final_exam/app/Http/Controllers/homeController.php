<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctores = Doctor::all();
        return view('main',['doctors' => $doctores]);
    }

    public function indexDoctor()
    {
        $doctores = Doctor::all();
        return view('doctors',['doctors' => $doctores]);
    }
    public function showDoc()
    {
        return view('createDoctor');
    }

    public function patientForm()
    {
        return view('createPatient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $VACU = 3;
        if ($request->get('vacunated') == 'yes') {
            $VACU = 1;
        }else{
            $VACU = 0;
        }
        $data = $request->get('birthday');
        if($data < 1900-01-01){
            $data = now();
        }
        Patient::create([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'DNI' => $request->get('DNI'),
            'birthday' => $data,
            'vacunated' => $VACU,
        ]);

        return redirect()->route('home');
    }
    public function store2(Request $request)
    {
        Doctor::create([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'num_patients' => $request->get('patients')
        ]);

        return redirect()->route('home');
    }
    public function changeDoctor($id)
    {
        //Zirriborroa
        $patient = Patient::all();

        foreach ($patient as $key => $value) {
            if ($value->doctor_id == $id) {
                $value->doctor_id = null;
            }
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('showAll',['patients'=>$patients],['doctors'=>$doctors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //updatear el medico
        Doctor::where('id','like',$id)
                ->update(['name' => $request->get('name')],
                ['surname' => $request->get('surname')],
                ['patients' => $request->get('patients')],
            );

            return redirect('/');
    }

    public function updateDoctor($id)
    //return a la view
    {
        $doctor = Doctor::Find($id);

        return view('editdoctor',compact('doctor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Doctor::destroy($id);
        

        return redirect()->route('home');
    }
}
