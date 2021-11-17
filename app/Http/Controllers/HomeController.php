<?php

namespace App\Http\Controllers;

use App\Donation;
use App\ProgramInfo;
use App\TimeSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Time;
use Stripe\Stripe;


class HomeController extends Controller
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
    public function index()
    {

        $days = TimeSlot::select('day')->groupBy('day')->get();
        $start = Carbon::now()->startOfWeek(Carbon::SUNDAY)->format('m/d/Y');
        $end = Carbon::now()->endOfWeek(Carbon::SATURDAY)->format('m/d/Y');

        $time_slots = TimeSlot::with(['programInfo' => function ($q) use ($start, $end) {
            $q->whereHas('programData', function ($q) use ($start, $end) {
                $q->whereBetween('delivery_date', [$start, $end]);
            });
        }])->get();
        $time_slots = $time_slots->groupBy('time_from');

        $recent_program = ProgramInfo::with('latestProgramData')->latest()->first();
        // dd($time_slots->toArray());
        //        foreach ($time_slots As $a){
//            if(!is_null($a->programInfo) && $a->programInfo->count() > 0){
//                dd($a->toArray());
//            }
//        }
        return view('home', compact('days', 'time_slots', "recent_program"));
    }

    public function submitDonate(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $donation = new Donation();
        $donation->program_id = $request->program_id;
        $donation->name = $request->name;
        $donation->amount = $request->amount;
        $donation->message = $request->message;
        $donation->save();

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->program_name,
                        ],
                        'unit_amount' => (int)((int)$request->amount * 100),
                    ],
                    'quantity' => 1,
                ]
            ],
            'payment_method_types' => [
                'card',
            ],
            'mode' => 'payment',
            'success_url' => URL('/checkout/success'),
            'cancel_url' => URL('/checkout/cancel'),
        ]);
        return redirect($checkout_session->url);
    }
}
