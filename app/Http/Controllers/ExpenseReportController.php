<?php

namespace App\Http\Controllers;

use App\ExpenseReport;
use App\Mail\SummaryReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExpenseReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reports=ExpenseReport::all();
        return view('expenseReport.index',compact('reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validData=$request->validate([
            'title'=>'required|min:3|max:20'
        ]);
        $title=$request->title;
        $report=new ExpenseReport();
        $report->title=$title;
        $report->save();
        return redirect()->route('expense_reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $ExpenseReport)
    {
        //
        return view('expenseReport.show',['report'=>$ExpenseReport]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $report=ExpenseReport::find($id);
        return view('expenseReport.edit',compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $title=$request->title;
        // dd($title);
        $report=ExpenseReport::find($id);
        $report->title=$title;
        $report->save();
        return redirect()->route('expense_reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $report=ExpenseReport::findOrFail($id);
        $report->delete();
        return redirect()->route('expense_reports.index');
    }
    public function confirm_delete($id)
    {
        //
        $report=ExpenseReport::find($id);
        return view('expenseReport.confirm-delete',compact('report'));
    }
    public function confirm_send_email($id)
    {
        //
        $report=ExpenseReport::find($id);
        return view('expense.confirm-send-email',compact('report'));
    }
    public function send_email(Request $request, $id)
    {
        //
        $report=ExpenseReport::find($id);
        Mail::to($request->email)->send(new SummaryReport($report));
        return redirect()->route('expense_reports.show',$id);
    }

}
