<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ZkTeco\TADFactory;
use App\Models\Attendance;
use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\DutySlot;
use App\Models\DutySlotRule;
use App\Models\Employee;
use App\Models\EmployeeDutySlot;
use App\Models\ImportLog;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Facades\Excel;
class TestCntroller extends Controller
{
     public function index()
    {
        $date='2024-05-05';
        $dutySlot=DutySlot::first();
        return $dutySlot->dutySlotRule($date);


        $empDutySlots = DutySlotRule::where('duty_slot_id', 1)->where('rule_for', 'duty_slot')->where('start_date', '<=', $date)->where('end_date', '>=', $date)->orderBy('start_date', 'desc')->get();
        return $empDutySlots;
        /*$empDutySlots = EmployeeDutySlot::orderBy('start_date', 'desc')->get();
        $empDutySlot = collect($empDutySlots);
        $date = '2024-05-03';

        $filteredEmpDutySlot = $empDutySlot->filter(function ($item) use ($date) {
            return $item->rule_for === 'employee' && $item->start_date >= $date;
        });

        return $filteredEmpDutySlot;*/


        /*$tad_factory = new TADFactory(['ip' => '192.168.1.33']);
        $tad = $tad_factory->get_instance();
        $all_attendance= $tad->get_att_log();
        $filtered_att_logs = $all_attendance->filter_by_date([
            'start' => '2024-05-01',
            'end' => '2024-05-13'
        ]);
        Attendance::insert($this->makeJson($filtered_att_logs));*/

    }
    public function makeJson($data)
    {
        $xmlString = <<<XML
        $data
        XML;
        $xml = simplexml_load_string($xmlString);
        $xmlArray = json_decode(json_encode($xml), true);
        return $xmlArray['Row'];
    }
    public function import(){




        // view('test.import-component');
    }
}
