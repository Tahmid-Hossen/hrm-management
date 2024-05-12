<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\Employee;
use App\Models\ImportLog;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Facades\Excel;
class TestCntroller extends Controller
{
     public function index()
    {
        return userPermissions();

    }
    public function import(){




        // view('test.import-component');
    }
}
