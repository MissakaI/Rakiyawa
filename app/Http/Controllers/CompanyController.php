<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function showCompanyDetails()
    {

        $companyData = DB::table('companies')->where('id', '2')->first();

        return view('company-profile')->with('companyData', $companyData);
        // echo $companyData->employee_count;

    }
    public function showCompanyDetailsAdmin()
    {

        $companyData = DB::table('companies')->where('id', '2')->first();

        return view('company-profile-admin')->with('companyData', $companyData);
        // echo $companyData->employee_count;

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

    public function login(Request $request){
        $username = $request->get( 'username');
        $password = $request->get('password');

        $data = DB::table( 'company_admins')->where( 'username', $username)->first();
        if($data!=null){
            if($password==$data->password){
                return redirect( 'companyprofile');
            }else{
                return redirect('companylogin');
            }

        }else{
            return redirect( 'companylogin');
        }




    }

    public function update(Request $request, $id)
    {
        //

        $company = company::findOrFail($id);

        $company->name = $request['name'];
        $company->website = $request['web-site'];
        // 'address'=> $request->get( 'address'),
        $company->foundation_year = $request['year'];
        $company->employee_count = $request['count'];
        $company->about = $request['company-name'];


        $company->save();
        return redirect('companyprofile');

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
