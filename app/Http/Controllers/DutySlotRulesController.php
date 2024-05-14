<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\DutySlot;
use App\Models\DutySlotRule;
use App\Models\Employee;
use Illuminate\Http\Request;

class DutySlotRulesController extends Controller
{
    public function index(Request $request)
    {
        $dutySlots=DutySlot::get();
        if ($request->ajax()) {
            $searchKey = $request->search['value'] ?? '';
            $company = $request->company;
            $department = $request->department;
            $designation = $request->designation;
            $date = $request->date ?? date('Y-m-d');
            $start_date=$date;
            $end_date=$date;
            $limit = $request->length;
            if ($limit < 0) $limit = 10;
            $offset = $request->start;
            // Orders
            $orderByColumn = null;
            $orderByDirection = null;

            // Check if the order array exists in the request and has at least one item
            if (isset($request->order) && count($request->order) > 0) {
                $firstOrderItem = $request->order[0];
                $orderByColumn = $firstOrderItem['name'] ?? null;
                $orderByDirection = $firstOrderItem['dir'] ?? null;
            }
            $query = DutySlotRule::query();
            $recordsTotal = $query->count();
            if ($searchKey) {
                $query->where(function ($query) use ($searchKey) {
                    $query->orWhere('slot_name', 'like', "%{$searchKey}%");
                });
            }
            // ORDERS

            switch ($orderByColumn) {
                case 'slot_name':
                    $query->orderBy('slot_name', $orderByDirection);
                    break;
                case 'start_time':
                    $query->orderBy('start_time', $orderByDirection);
                    break;
                case 'threshold_time':
                    $query->orderBy('threshold_time', $orderByDirection);
                    break;
                case 'end_time':
                    $query->orderBy('end_time', $orderByDirection);
                    break;
                default:
                    // Handle unknown column
                    break;
            }

            $recordsFiltered = $query->get();  // Filtered Data to count
            $query->limit($limit)->offset($offset);

            $queryData = $query->get();

            $queryDataJson = [];
            foreach ($queryData as $item) {
                $queryDataJson[] = [
                    'id' => $item->id,
                    'slot_name' => $item->dutySlot->slot_name ?? '',
                    'threshold_time' => $item->threshold_time ?? '',
                    'start_time' => $item->start_time ?? '',
                    'end_time' => $item->end_time ?? '',
                    'start_date' => date('d M Y', strtotime($item->start_date)) ?? '',
                    'end_date' => date('d M Y', strtotime($item->end_date)) ?? '',
                ];
            }
            $request = [
                'status' => 1,
                'recordsTotal' => $recordsTotal,
                'recordsFiltered' => $recordsFiltered->count(),
                'data' => $queryDataJson,
                'orderableColumns' => $orderByColumn . $orderByDirection
            ];
            return response()->json($request);
        }

        $trashedEmployees = Employee::onlyTrashed()->get();
        return view('duty-slot-rules.index', compact('dutySlots'));
    }

    public function store(Request $request){
        // return $request;
        $dutySlotId=$request->duty_slot_id;
        $startDate=$request->start_date;
        $endDate=$request->end_date;
        $startTime=$request->start_time;
        $thresholdTime=$request->threshold_time;
        $endTime=$request->end_time;

        if(!$dutySlotId){
            return back()->with('error', 'Duty Slot Name is required!');
        }

        $query=New DutySlotRule();
        $query->duty_slot_id=$dutySlotId;
        $query->start_date=$startDate;
        $query->end_date=$endDate;
        $query->start_time=$startTime;
        $query->threshold_time=$thresholdTime;
        $query->end_time=$endTime;
        if($query->save()){
            return back()->with('success', 'Successfully Created!');
        }
    }
}
