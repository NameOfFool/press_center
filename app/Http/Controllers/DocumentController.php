<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use mikehaertl\pdftk\Command;
use \mikehaertl\pdftk\Pdf;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();;
    }

    public function fillForm()
    {
        $path = public_path("Form.pdf");

        $inn = "772649204886";
        $pdf = new Pdf($path, [
            'command' => 'C:\Program Files (x86)\PDFtk\bin\pdftk.exe',
            'useExec' => true,
        ]);
        $result = $pdf->fillForm([
            'Text1' => $inn
        ])->needAppearances()->saveAs("foolish_form.pdf");
        if ($result === false) {
            dd($pdf->getError());
        }
    }
}
