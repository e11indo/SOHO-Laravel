<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{
    public function Contact(){/* 
        $contact = Contact::orderBy('id','desc')->paginate(10); */
        $contact = DB::table('contact') -> leftJoin('comments','contact.id','=','comments.parent_id') 
        -> selectRaw('contact.*,count(comments.parent_id) as commentcount') 
        -> groupBy('contact.id') -> orderBy('id','desc')->paginate(10);

        return view('SOHO.Main.contact',compact('contact'));
    }

    public function Contact_view($id){
        $contact = contact::where('id', $id) -> first();
        $comment = DB::table('comments')->where('parent_id', '=', $id)->get();

        return view('SOHO.Main.contact_view', compact('contact','comment'));
    }

    /* 해당 id글의 패스워드가 맞을 시 삭제 */
    public function delete(Request $request, $id){
        $validation = $request -> validate([
            'password' => 'required'
        ]);
        $delete_value = contact::where('password', $validation['password']) 
        -> where('id',$id) ->first();

        if($delete_value == null){
            echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
            return redirect() -> route('contact');
        }
        else{
            echo "<script>alert('삭제했습니다.');</script>";
            $delete_value -> delete();
            return redirect() -> route('contact');
        }
    }

        /* 글 저장 */
        public function save(Request $request){
            $validation = $request -> validate([
/*                 'picture' => 'image|mimes:jpeg,png,jpg,gif,svg', */
                'title' => 'required',
                'content' => 'required',
                'username' => 'required',
                'password' => 'required',

            ]);
    
/*             Contact::create([
                'title' => $validation['title'],
                'content' => $validation['content'],
                'username' => $validation['username'],
                'password' => $validation['password']
            ]); */
            $contact = new Contact();
            $contact -> title =$validation['title'];
            $contact -> content =$validation['content'];
            $contact -> username =$validation['username'];
            $contact -> password =$validation['password'];

/*             if($request -> hasFile('picture')){
                $fileName = time().'_'.$request -> file('picture') -> getClientOriginalName();
                $path = $request -> file('picture') -> storeAs('public/images', $fileName);
                $contact -> image_name = $fileName;
                $contact -> image_path = $path;
            } */
            $contact -> save();


            return redirect() -> route('contact');
        }

        public function search(Request $request){
            /* value값과 일치하는지 확인 */
            if($_GET["option"] == "title"){ 
                $validation = $request -> validate([
                    'title' => 'required'
                ]);
                $searches = contact::where('title', $validation['title'])->paginate(10);
                return view('SOHO.Main.contact_search', compact(['searches']));
            }
            else if($_GET["option"] == "username"){
                $validation = $request -> validate([
                    'username' => 'required'
                ]);
                $searches = contact::where('username', $validation['username'])->paginate(10);
                return view('SOHO.Main.contact_search', compact(['searches']));
            }
        }
}