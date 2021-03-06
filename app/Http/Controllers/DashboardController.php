<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use DateTime;
use Carbon\Carbon;


class DashboardController extends Controller
{
    //

    public function form()

    {
        $datas = Dashboard::all();
        return view('form',compact('datas'));
    }

    public function home()

    {

        $date = new DateTime;
        $date->modify('-15 minutes');
        $formatted_date = $date->format('H:i:s');
        $datas = Dashboard::where('time','>=',$formatted_date)->orderBy('created_at', 'desc')->get();
        return view('welcome',compact('datas'));
    }

    public function search(Request $request)
    {   
        $query = $request['text'];
        $datas = Dashboard::where('department', 'like', '%' . $query . '%')
            ->orWhere('plant', 'like', '%' . $query . '%')
            ->orWhere('machine', 'like', '%' . $query . '%')
            ->take(10)
            ->get();
        return view('welcome', compact('datas'));
    }

    public function save(Request $request)
    {
        $data = $request->all();

        $date = date('H:i:s', time());

        $check = Dashboard::create([
            'plant' => $data['plant'],
            'department' => $data['department'],
            'machine' => $data['machine'],
            'op_no' => $data['op_no'],
            'complaint' => $data['complaint'],
            'date' => $data['date'],
            'cause' => $data['cause'],
            'time' => $date,
          ]);

        return redirect("/")->with('success', 'Datas Successfully submitted..');

    }
}
