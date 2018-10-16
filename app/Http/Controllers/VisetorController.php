<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Charts;
use ConsoleTVs\Charts\Facades\Charts;

use App\User;

use DB;

class VisetorController extends Controller
{
    public function index()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    // 	$users = User::all();

        $chart = Charts::database($users, 'bar', 'highcharts')

			      ->title("Monthly new Register Users")

			      ->elementLabel("Total Users")

			      ->dimensions(1000, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);

        return view('chart',compact('chart'));

    }
}
