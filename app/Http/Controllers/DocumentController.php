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
        $documents = Document::all();
        $this->fillForm();
        return view("documents.index",compact("documents"));
    }

    public function fillForm()
    {
        $path = public_path("3ndfl.pdf");

        $inn = "772649204886";
        $pdf = new Pdf($path);
        $result = $pdf->fillForm([
            'INN' => $inn
        ])->needAppearances()->saveAs("foolish_form.pdf");
        if ($result === false) {
            dd($pdf->getError());
        }
    }
}
