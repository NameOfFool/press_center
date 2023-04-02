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
        return view("docs.index",compact("documents"));
    }

    public function fillForm()
    {
        $path = public_path("docs/Template.pdf");
        $inn = "772649204886";
        $pdf = new Pdf($path);
        $fields = $pdf->getDataFields();
        $result = $pdf->fillForm([
            'INN' => $inn
        ])->needAppearances()->saveAs(public_path("foolish_form.pdf"));
        if ($result === false) {
            dd($pdf->getError());
        }
    }
}
