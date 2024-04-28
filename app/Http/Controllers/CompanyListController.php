<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyListController extends Controller
{
    public function create(){
        return view("settings.company-list.create");
    }
    public function index(){
        $companies = Company::all();
        return view("settings.company-list.index", compact('companies'));

    }
    public function store(Request $request){
        // return $request;
        $company = new Company;
        $company->name = $request->name;
        $company->is_active = $request->is_active;
        $company->save();
        return redirect()->route('company-list.index')->with('success', 'Companies created successfully');
    }

    public function edit($id){
        $company = Company::find($id);
        return view('settings.company-list.edit', compact('company'));
    }

    public function update(Request $request, $id){
        $company = Company::find($id);
        $company->name = $request->name;
        $company->is_active = $request->is_active;
        $company->save();
        // session()->flash('key', 'value');
        return redirect()->route('company-list.index')->with('success', 'Companies updated successfully');
    }
    public function delete($id){
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('company-list.index')->with('success', 'Company deleted successfully');
    }

}
