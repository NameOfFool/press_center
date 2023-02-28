<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Writer\PDF;
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfParser\PdfParser;
use Smalot\PdfParser\Parser;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();;
        $path = public_path("Fool.pdf");

        $output = public_path("storage/foolishDoc.pdf");
        $inn = "7  7  2  6  4  9  2  0  4  8  8  6";

        $fpdi = new Fpdi;
        $fpdi->SetFont("helvetica","",13);
        $parser = new Parser();
        $pdf = $parser->parseFile($path);
        $text = $pdf->getPages()[0]->getDataTm();
        $count = $fpdi->setSourceFile($path);
        $template = $fpdi->importPage(1);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'],array($size['width'],$size['height']));
        $fpdi->useTemplate($template);
        $fpdi->Text(66,10,$inn);
        $fpdi->Output($output,"F");
        dd($text);

    }
}
