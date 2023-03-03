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
        $path = public_path("Form.pdf");
        $inn = "7  7  2  6  4  9  2  0  4  8  8  6";
        $pdf = new Pdf($path, [
            'command' => 'C:\Program Files (x86)\PDFtk\bin\pdftk.exe',
            'useExec' => true,
            'locale' => 'en_US.utf8',
            'procEnv' => [
                'LANG' => 'en_US.utf-8',
            ],
        ]);

        $result = $pdf->fillForm([
           'Text1' =>$inn
        ])->needAppearances()->saveAs("foolish_form.pdf");
        if ($result === false) {
            dd($pdf->getError());
        }
    }
}
