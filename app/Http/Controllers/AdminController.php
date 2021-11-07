<?php

namespace App\Http\Controllers;

use App\ProgramData;
use App\TimeSlot;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Time;
use Stripe\Stripe;
use DataTables;


class AdminController extends Controller
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
            $data = ProgramData::with('programInfo','user')->select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('added_by', function($row){
                    return $row->user->name;
                })
                ->addColumn('program_name', function($row){

                    return $row->programInfo->program_name;
                })
                ->addColumn('action', function($row){

                    $btn = "<a href='admin/program/edit/'.$row->id class='edit btn btn-primary btn-sm'>View</a>";

                    return $btn;
                })

                ->make(true);
        }

        return view('admin.index');
    }


}
