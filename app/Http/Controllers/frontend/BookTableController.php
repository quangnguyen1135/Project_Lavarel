<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\book_table;
use Illuminate\Http\Request;


class BookTableController extends Controller
{
    public function create()
    {
        return view('frontend.BookTable.create_table');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'seats' => 'required|integer|min:1',
                'reservation_time' => 'required|date_format:Y-m-d H:i:s|after:now',
            ]);
    
            book_table::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'seats' => $request->seats,
                'reservation_time' => $request->reservation_time,
            ]);
    
            return redirect()->route('reservations.index')->with('success', 'Reservation successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage())->withInput();
        }
    }
    

    public function index()
    {
        $reservations = book_table::all(); 
        return view('frontend.BookTable.index', compact('reservations'));
    }
}
