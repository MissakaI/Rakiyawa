<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\CompanyAdmin;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        //
        $company = new Company([
            'name' => $request->get('company-name'),
            'website' => $request->get('web-site'),
            // 'address'=> $request->get( 'address'),
            'foundation_year' => $request->get('year'),
            'employee_count' => $request->get('count'),
            'about' => $request->get('company-name'),

        ]);

        $company->save();





        $companyAdmin = new CompanyAdmin([
            'company_id' => $company->id,
            'first_name' => $request->get('first-name'),
            'last_name' => $request->get('last-name'),
            'email' => $request->get('company-email'),
            'username' => $request->get('username'),
            'password' => $request->get('password'),
        ]);

        $companyAdmin->save();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
