<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;
use App\Models\User;
use App\Models\bookmark;
use App\Models\categorie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class bookController extends Controller
{
    public function index(){
        $userroles=$this->auth();
        $randbooks = books::all()->random(3);
        $categories = categorie::all();
        
        if(Auth::user()===null){
            $data = [
                "books"=> $randbooks,
                "categories" => $categories,
                "userroles" => $userroles,
            ];
        }else{
            $id=Auth::user()->id;
        $data = [
            "books"=> $randbooks,
            "categories" => $categories,
            "userroles" => $userroles,
            "id" => $id,
        ];

    }
    return view('welcome' , $data);

}

    public function bookInCategorie($id){
        $userroles=$this->auth();

        $category = Categorie::find($id);
        $categories = categorie::all();

        $books = $category->book;
        $data = [
            "books"=> $books,
            "categories" => $categories,
            "userroles" => $userroles,
            "id" => $id,
        ];
        return view('bookIncategorie', $data);
    }

    
    public function Categorie(){
        $userroles=$this->auth();
        $categories = Categorie::all();
        $id=Auth::user()->id;
        // dd($userroles);
        $data = [
        "userroles"=> $userroles,
        "categories" => $categories,
        "id" => $id,
    ];
        return view('categorie', $data);
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
                'idBook'=>'required|integer' , 
            ]);
            
            $bookmark=bookmark::create([
                'bookid' => $request->idBook,
                'userid' => Auth::user()->id,
            ]);
        return redirect()->back()->with('success', 'Form submitted successfully!');
               
    
    }


     public function MyBookmarks(){

        $user=Auth::user();
        if($user===null){
           return redirect('/login');
        }
        
        $userroles=$this->auth();
           $id=Auth::user()->id;
                    $books = Books::join('bookmarks', 'books.id', '=', 'bookmarks.bookid')->where('bookmarks.userid', $id)->select('books.*') ->get();
                    $categories = categorie::all();
                    $id=Auth::user()->id;
                    $data = [
                        "books"=> $books,
                        "categories" => $categories,
                        "userroles" => $userroles,
                        "id" => $id,
                    ];
                    // dd($data);
                    return view('bookmark',$data);
    }
   
public function detail($id){
    $userroles=$this->auth();

    $categories = categorie::all();
    $book= books::find($id);
    // dd($book);
    $data = [
        "book"=> $book,
        "categories" => $categories,
        "userroles" => $userroles,  
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



        public function auth(){
              $user = Auth::user();
        
            if($user===null){
                return false;
            }else{
                $role=User::with('role')->find($user->id)->role->contains('id', 1);
           
             return $role;
            }
        }



        public function allcategorie(){
            return categorie::all();
        }
        
        
}