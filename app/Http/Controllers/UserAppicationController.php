<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VacancyApplication;
use App\Vacancy;
use App\Company;

class UserAppicationController extends Controller
{
    public function save(Request $request){
        $application = new VacancyApplication();
        $application->vacancy_id=$request->vacancy_id;
        $application->member_id=$request->member_id;

        $file=$request->file('cv');

        $application->cv=$file;

    }

    public function view($id){
        $vacancy=Vacancy::find($id);
        if ($vacancy!=null){
            $company=Company::find($vacancy->company_id);
            if ($company!=null){
                return view('vacancy-user',['vacancy'=>$vacancy,'company'=>company]);
            }
        }
    }
}
