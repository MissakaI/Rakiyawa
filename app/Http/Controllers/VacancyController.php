<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table=DB::table('vacancies')->get();
        return view('vacancy-view') -> with('table',$table);
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
        $savevacancy=new Vacancy();


        $savevacancy->company_id = $request->company_id;
        $savevacancy->job_title = $request->job_title;
        $savevacancy->job_position = $request->job_position;
        $savevacancy->deadline = $request->deadline;
        $savevacancy->description= $request->description;
        $savevacancy->brochure= $request->brochure;
        $savevacancy->contact_info = '{"number":"'.$request->contact_info.'"}';
        $savevacancy->location= '{"city":"'.$request->location.'"}'; 
        $savevacancy->save();

        return redirect('company');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        // $table=DB::table('vacancies')->get();
        $table=DB::table('vacancies')->where('id',$id)->first();

        return view('vacancy-update')-> with('table',$table);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $user= Vacancy::findOrFail($id);

        $user->company_id = $request['company_id'];
        $user->job_title = $request['job_title'];
        $user->job_position = $request['job_position'];
        $user->deadline  = $request['deadline'];
        $user->description = $request['description'];
        $user->brochure = $request['brochure'];
        $user->contact_info ='{"number":"'.$request->contact_info.'"}';
        $user->location = '{"city":"'.$request->location.'"}'; 

        $user->save();

        return redirect('vacancy-view');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB:: table('vacancies') ->where('id',$id)->delete();
        return redirect('vacancy-view');
    }

}
