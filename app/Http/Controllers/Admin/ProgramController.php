<?php

namespace App\Http\Controllers\Admin;

use App\ProgramData;
use App\Http\Controllers\Controller;
use App\ProgramInfo;
use App\TimeSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Type\Time;
use Stripe\Stripe;
use DataTables;


class ProgramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = ProgramData::with('programInfo', 'user')->select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('added_by', function ($row) {
                    if ($row->user) {
                        return $row->user->name;
                    }
                    return "";
                })
                ->addColumn('program_name', function ($row) {

                    if ($row->programInfo) {
                        return $row->programInfo->program_name;
                    }
                    return "";
                })
                ->addColumn('publish', function ($row) {
                    if(isset($row->programInfo) && $row->programInfo->is_publish ==1){
                        $btn = "<a class='btn btn-xs btn-info' >Publish</a>";
                    }elseif($row->is_publish == 0){
                        $btn = "<a class='btn btn-xs btn-danger' >Private</a>";
                    }
                    return $btn;
                })
                ->addColumn('action', function ($row) {

                    $btn = "<a href='program/edit/" . $row->id . "' class='edit btn btn-primary btn-sm'>View</a>";

                    return $btn;
                })->rawColumns(['action', 'publish'])
                ->make(true);
        }

        return view('admin..program.index');
    }

    public function edit(Request $request, $id = 0)
    {
        $program_data = ProgramData::with('programInfo')->find($id);

        if ($program_data) {
            $program_info = $program_data->programInfo;
            if ($program_info) {
                $time_slots = TimeSlot::all();
                return view('admin.program.edit', compact("program_info", 'time_slots'));
            }
        }
    }

    public function publishProgram(Request $request)
    {

        $program_info = ProgramInfo::find($request->program_id);
        if ($program_info) {
            $program_info->time_slot_id = $request->time_slot_id;
            $program_info->is_publish = $request->is_public;
            $program_info->save();
           // Session::flash('message', 'Program status updated successfully');
            return redirect()->route('admin.program');
        }
    }


}
