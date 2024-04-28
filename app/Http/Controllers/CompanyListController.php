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
        // $companies = Company::all();
        return view("settings.company-list.index");

    }
    public function store(Request $request){
        // return $request;
        $companies = new Company;
        $companies->name = $request->name;
        $companies->is_active = $request->is_active;
        $companies->save();
        return redirect()->route('company-list.index')->with('success', 'Companies created successfully');
    }
}
