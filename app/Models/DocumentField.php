<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DocumentField
 *
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentField newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentField newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DocumentField query()
 * @mixin \Eloquent
 */
class DocumentField extends Model
{
    use HasFactory;
    protected $table="documents_fields";
    public $timestamps = false;
    protected $fillable = ["field_id","document_id","pdf_field_name"];

    /**
     * @param $fieldName
     * @param $documentId
     * @param $pdfFieldName
     * @return void
     */
    public static function putDocFieldName($fieldName, $documentId, $pdfFieldName){
        $fieldId = Field::select("id")->where("field_name","=",$fieldName);
        DocumentField::create([
            "field_id"=>$fieldId,
            "document_id"=>$documentId,
            "pdf_field_name"=>$pdfFieldName
            ]);
    }
}
