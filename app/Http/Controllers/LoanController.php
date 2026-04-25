<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['user','loanDetails.book'])->get();
        return view('loans.index', compact('loans'));
    }
}
