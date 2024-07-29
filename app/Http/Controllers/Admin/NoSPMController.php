<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoSPMController extends Controller
{
    public function generateCode()
    {
        // Generate parts of the code
        $sequenceNumber = '0222';
        $type = 'SPM-LS';
        $department = 'DPUTR-SDA';
        $year = date('Y'); // Current year

        // Combine parts to create the formatted code
        $formattedCode = $sequenceNumber . '/' . $type . '/' . $department . '/' . $year;

        return $formattedCode;
    }

    public function showSearchPage()
    {
        // Generate the code
        $code = $this->generateCode();

        // Return the search view and pass the generated code to it
        return view('search', compact('code'));
    }
}
