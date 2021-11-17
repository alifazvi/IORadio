<?php

namespace App\Http\Controllers;

use App\ProgramData;
use App\ProgramInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;


class ProgramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createPostView()
    {
        $user = Auth::user();
        $program_info = ProgramInfo::where('user_id', $user->id)->first();
        $program_data = ProgramData::where('user_id', $user->id)->get();
      //  dd($program_data->toArray());
        return view('create_post', compact('program_data', 'program_info'));
    }


    public function archiveProgram(Request $request, $id=0)
    {
        $program_info = ProgramInfo::with('programData')->find($id);

        return view('archives', compact('program_info'));
    }

    public function addProgramData(Request $request)
    {
        $request->validate([
            'delivery_date' => 'required',
            'file_mp3' => 'required|max:25000',
        ]);

        $user = Auth::user();
        $program_data = ProgramData::where('user_id', $user->id)->orderBy('created_at', 'ASC')->get();
        $program_info = ProgramInfo::where('user_id', $user->id)->first();
        if ($program_data->count() >= 3) {
            $program_data->first()->delete();
        }
        $file_name = time().'.'.$request->file_mp3->extension();
        $request->file_mp3->move(public_path('uploads'), $file_name);
        $program= ProgramData::create([
            'user_id' => $user->id,
            'program_file' => $file_name,
            'program_id' => ($program_info && isset($program_info->id))?$program_info->id:null,
            'delivery_date' => $request->delivery_date,
        ]);
        Session::flash('message', 'Program data has been created successfully.');
        return redirect('create_post');
    }


    public function addProgramInfo(Request $request)
    {
        $request->validate([
            'program_name' => 'required',
            'program_desc' => 'required',
            'program_file' => 'required|max:25000',
        ]);

        $user = Auth::user();
        $program_info = ProgramInfo::where('user_id', $user->id)->first();
        $file_name = time().'.'.$request->program_file->extension();
        $request->program_file->move(public_path('uploads'), $file_name);

        if (!$program_info) {
            $program_info= ProgramInfo::create([
                'user_id' => $user->id,
                'program_name' => $request->program_name,
                'program_detail' => $request->program_desc,
                'program_photo' => $file_name,
            ]);
            $program_data = ProgramData::where(['user_id'=>$user->id])->update(['program_id'=>$program_info->id]);
        }else{
            $program_info->program_name = $request->program_name;
            $program_info->program_detail = $request->program_desc;
            $program_info->program_photo = $file_name;
            $program_info->save();
        }

        Session::flash('message', 'Program data has been added successfully.');
        return redirect('create_post');
    }


    public function deleteProgramData(Request $request)
    {
       $pro=ProgramData::find($request->program_id);
        $pro->delete();
        return response()->json(["code" => 200, "msg" => "Program Data deleted successfully"]);
    }
}
