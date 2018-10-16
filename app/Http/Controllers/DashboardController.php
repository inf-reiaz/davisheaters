<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use ConsoleTVs\Charts\Facades\Charts;

use App\User;
use App\Project;
use App\Blog;

use DB;

class DashboardController extends Controller
{
    public function getDashboard()
    {
    	$users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    	$project = Project::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    	$blog = Blog::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
    // 	$users = User::all();

        $chart = Charts::database($users, 'bar', 'highcharts')

			      ->title("Monthly new Register Users")

			      ->elementLabel("Total Users")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
        $project = Charts::database($project, 'line', 'highcharts')

			      ->title("Monthly Project")

			      ->elementLabel("Total Project")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
        $pie = Charts::database($blog, 'pie', 'highcharts')

			      ->title("Monthly Blog")

			      ->elementLabel("Total Blog")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
        return view('admin.pages.dashboard',compact('chart','project','pie'));
    }
}
