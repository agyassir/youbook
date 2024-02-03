<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\bookmark;
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
        return view('bookIncategorie', $data);
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

    public function bookmark(Request $request){
            $request->validate([
                'idUser' => 'required|integer',
                'idBook'=>'required|integer' , 
            ]);
            
            $bookmark=bookmark::create([
                'bookid' => $request->idBook,
                'userid' => $request->idUser,
            ]);
        return redirect()->back()->with('success', 'Form submitted successfully!');
                }


        public function MyBookmarks($id){
                    $books = Books::join('bookmarks', 'books.id', '=', 'bookmarks.bookid')->where('bookmarks.userid', $id)->select('books.*') ->get();
                    $categories = categorie::all();
                    
                    $data = [
                        "books"=> $books,
                        "categories" => $categories,
                    ];

                    return view('bookmark',$data);
                }
   
public function detail($id){
    $categories = categorie::all();
    $book= books::find($id);
    // dd($book);
    $data = [
        "book"=> $book,
        "categories" => $categories,
    ];

    return view('detail',$data);
}
public function update(Request $request){
    $request->validate([
        'title' => 'required|string',
        'description' => 'required|string',
        'categorie_id'=>'required|integer' , 
        'bookID'=>'required|integer' , 
    ]);
    $bookId=$request->bookID;


    $book = Books::find($bookId);

if ($book) {
    $books= $book->update([
        'title' => $request->title,
        'description' => $request->description,
        'categorie_id' => $request->categorie_id,
    ]);
}
if($books){
    return redirect()->back()->with('success', 'book updated successfully!');
}

            }
        
        
        
        public function deleteBook($id){
            $book = Books::find($id);
// dd($book);
            if($book){
               $del= $book->delete();
               if($del){
       return redirect()->route('bookmarked',['id'=>1]);
                }else{
                echo "hadchi makhdamch";
            }
            }

           
        }
        
        
        
        
}