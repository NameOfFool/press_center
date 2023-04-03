<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentField;
use App\Models\Field;
use App\Models\KPP;
use App\Models\Organisation;
use Auth;
use DB;
use Illuminate\Http\Request;
use mikehaertl\pdftk\Command;
use \mikehaertl\pdftk\Pdf;
use Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view("documents.index", compact("documents"));
    }

    public function fillForm(int $id)
    {
        $doc = Document::whereId($id)->get()[0];
        $path = storage_path("app/documents/$doc->file.pdf");
        $organisationID = Organisation::whereUserId($id);
        $pdf = new Pdf($path);
        $fields = $doc->fields;
        $data = [];
        foreach ($fields as $field) {
            $field_name = DB::table("documents_fields")
                ->where("field_id", "=", $field->id)
                ->where("document_id", "=", $id)
                ->first();
            $value =
                DB::table($field->auto_table_name)->
                select($field->auto_field_name)->
                where('id', '=', Auth::id())->get()->pluck($field->auto_field_name);
            if(!$organisationID->get()->isEmpty()&&($field->auto_table_name == "organisations" || $field->auto_table_name == "k_p_p_s" )){
                $value =
                    DB::table($field->auto_table_name)->
                    select($field->auto_field_name)->
                    where('id', "=", $organisationID)->get()->pluck($field->auto_field_name);
            }
            if(!$value->isEmpty()) {
                $data[$field_name->pdf_field_name] = $value[0];
            }
        }
        $result = $pdf->fillForm($data)->needAppearances()->saveAs(storage_path("app/tmp/$doc->file.pdf"));
        if($result ===false){
            dd($pdf->getError());
        }
        $headers = ['Content-Type:application/pdf',"location:".route("documents")];
        return response()->download(storage_path("app/tmp/$doc->file.pdf"),$doc->file.".pdf",$headers)->deleteFileAfterSend();
    }
}
