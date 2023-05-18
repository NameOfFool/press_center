<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryNews;
use App\Models\Document;
use App\Models\DocumentField;
use App\Models\Field;
use App\Models\News;
use App\Models\Tag;
use DB;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\Factory;
use Illuminate\View\View;
use mikehaertl\pdftk\Pdf;
use Schema;
use Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function categories()
    {
        $categories = Category::whereNull('parent_id')->get();
        $allCategories = Category::pluck('name', 'id')->all();
        return view('admin.categories.index', compact('categories', 'allCategories'));
    }

    public function createCategory()
    {
        $categories = Category::get();
        return view('admin.categories.create', compact('categories'));
    }

    public function getNews($id)
    {

        $news = CategoryNews::getNewsByCategoryId($id);
        return view('admin.news.index', compact('news', 'id'));
    }

    public function postCategory(Request $request)
    {
        $name = $request->name;
        $parent_id = $request->root;
        $category = new Category();
        $category->name = $name;
        if ($parent_id != "NULL")
            $category->parent_id = $parent_id;
        $category->save();
        return redirect('/admin');
    }

    public function createNews($id)
    {
        $categories = Category::whereNull('parent_id')->get();
        $allCategories = Category::pluck('name', 'id')->all();
        $current = Category::find($id);
        return view('admin.news.create', compact("categories", 'current', 'allCategories'));
    }

    public function editNews($id): Factory|View|Application
    {
        $news = News::whereId($id)->get()[0];
        $categories = $news->categories;
        return view("admin.news.create", compact("categories", "news"));
    }

    /**
     * @param Request $request
     * @return Redirector|Application|RedirectResponse
     */
    public function postNews(Request $request): Redirector|Application|RedirectResponse
    {
        $categories = explode(" ", $request->cats);
        $name = $request->name;
        $date_of_publication = $request->date_of_publication;
        $content = base64_encode($request->news_content);
        $date_of_drop = $request->date_of_drop;
        $date_of_creation = now();
        $last_news = News::count()>0?News::orderByDesc("id")->get()[0]->id:0;
        $news_id = $request->id ?? $last_news + 1;
        $news = News::updateOrInsert(
            ["id" => $news_id], [
            "name" => $name,
            "date_of_publication" => $date_of_publication,
            "date_of_drop" => $date_of_drop,
            "date_of_creation" => $date_of_creation,
            "content" => $content,
        ]);
        foreach ($categories as $category) {
            CategoryNews::updateOrCreate([
                'category_id' => $category,
                'news_id' => $news_id
            ]);
        }
        return redirect(route("admin"));
    }

    public function tags()
    {
        $documents = Document::all();
        return view("admin.documents.index", compact("documents"));
    }
    public function editDoc(int $id)
    {
        $document = Document::whereId($id)->get()[0];
        $fields = Field::all();
        $user_columns = $this->getUserColumns();
        $organisation_columns = $this->getOrganisationColumns();
        $pdfFields = $document->fieldsName;
        return view("admin.documents.create",compact([
            "fields",
            "pdfFields",
            "document",
            "user_columns",
            "organisation_columns"
        ]));
    }
    function getUserColumns(): array
    {
        $user_columns = Schema::getColumnListing("users");
        return array_diff($user_columns, ['id', 'admin', 'photo', 'password', 'remember_token', 'created_at', 'updated_at', 'email_verified_at']);

    }
    function getOrganisationColumns():array
    {
        $organisation_columns = Schema::getColumnListing("organisations");
        return array_diff($organisation_columns, ['id', 'user_id', 'created_at', 'updated_at']);
    }
    public function createDoc()
    {
        $user_columns = $this->getUserColumns();
        $organisation_columns = $this->getOrganisationColumns();
        $fields = Field::all();
        return view("admin.documents.create", compact(
            "user_columns",
            "organisation_columns",
            "fields"));
    }

    public function loadFields(Request $request)
    {
        $path = $_FILES['file']['tmp_name'];
        $pdf = new Pdf($path);
        return response()->json($pdf->getDataFields());
    }

    public function postDoc(Request $request)
    {
        $file_name = $request->file_name;
        $name = $request->name;
        $file = $_FILES['file']['tmp_name'];
        Storage::put("documents/$file_name.pdf", file_get_contents($file));
        $document = Document::create(["name"=>$name,"file"=>$file_name]);
        foreach($request->toArray() as $key=>$value){
            if($key!=="file_name"&&$key!=="name"&&$key!=="_token"&&$key!=="file"&&$value!=="none"){

                DocumentField::create(["field_id"=>$value,"document_id"=>$document->id,"pdf_field_name"=>$key]);
            }
        }
        return redirect("documents");
    }

    public function createNewAutoField(Request $request): Redirector|Application|RedirectResponse
    {
        $field_name = $request->name;
        $table_field = $request->table_field;
        $table = explode(" ", $table_field);
        $field = Field::create([
            'field_name' => $field_name,
            'auto_table_name' => $table[1],
            'auto_field_name' => $table[0]
        ]);
        return redirect(route("document.create"));
    }
}
