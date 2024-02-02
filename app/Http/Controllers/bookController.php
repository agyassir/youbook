<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\categorie;
use Illuminate\Support\Facades\Storage;
class bookController extends Controller
{
    public function index(){
        $randbooks = books::all()->random(3);
        $categories = categorie::all();
  
        $data = [
            "books"=> $randbooks,
            "categories" => $categories,
        ];

        return view('welcome' , $data);
    }


    public function bookInCategorie($id){

        $category = Categorie::find($id);
        $categories = categorie::all();

        $books = $category->book;
        $data = [
            "books"=> $books,
            "categories" => $categories,
        ];
        return view('bookIncategorie', compact('books'));
    }

    
    public function Categorie(){

        $categories = Categorie::all();
      

        return view('categorie', compact('categories'));
    }
    public function ajouter(Request $request){
        
         $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'pdf' => 'required|file|mimes:pdf|max:10240',
            'categorie_id'=>'required|integer' , 
        ]);
        $pdfPath = $request->file('pdf')->store('pdfs', 'public');
      
        $book=books::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'booksUrl' => Storage::url($pdfPath),
            'categorie_id' =>  $request->categorie_id,
        ]);
        if (!$book) {  
            return view('bookIncategorie');
        }
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
   
}
