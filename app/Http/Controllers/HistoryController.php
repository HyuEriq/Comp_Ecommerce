<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use App\Models\TagihanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $startDate = $request->input('startDate');
    $endDate = $request->input('endDate');

    // Check if both startDate and endDate are provided
    if ($startDate && $endDate) {
        $startDate = Carbon::parse($startDate)->startOfDay();
        $endDate = Carbon::parse($endDate)->endOfDay();

        $data = TagihanModel::with('Produk')->latest()
            ->where('status', 'selesai')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        // Format the dates for the input fields
        $startDateFormatted = $startDate->toDateString();
        $endDateFormatted = $endDate->toDateString();
    } else {
        // No filter applied, fetch all data
        $data = TagihanModel::with('Produk')->latest()
            ->where('status', 'selesai')
            ->get();

        $startDateFormatted = null;
        $endDateFormatted = null;
    }
    if ($request->input('export') == 'pdf') {
        $dompdf = new Dompdf();

        // Load a view to generate PDF content
        $pdfContent = view('Admin.Dashboard.Histori.pdf', compact('data', 'startDateFormatted', 'endDateFormatted'))->render();
        $dompdf->loadHtml($pdfContent);

        // Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('TagihanHistory.pdf');
    }

    // Pass the input values back to the view
    return view('Admin.Dashboard.Histori.history', [
        'tittle' => 'History Order Admin',
        'history' => $data,
        'startDate' => $startDateFormatted, // Pass formatted startDate back to the view
        'endDate' => $endDateFormatted,     // Pass formatted endDate back to the view
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
