<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Consulting;
use App\Models\Question;

class NoticeController extends Controller
{
    public function notice_question(){
        $question = Question::orderBy('id','desc') ->paginate(20);
        return view('SOHO.Notice.notice_question',compact('question'));
    }
    
    public function notice_information(){
        return view('SOHO.Notice.notice_information');
    }
    
    public function notice_consulting(){
        return view('SOHO.Notice.notice_consulting');
    }

    public function consulting(Request $request){
        $validation = $request -> validate([
            'name' => 'required',
            'company' => 'required',
            'tel' => 'required',
            'time' => 'required'
        ]);

        $consulting = new consulting();
        $consulting -> name/* 쿼리 이름 설정 */ = $validation['name'];
        $consulting -> company/* 쿼리 이름 설정 */ = $validation['company'];   
        $consulting -> tel/* 쿼리 이름 설정 */ = $validation['tel'];  
        $consulting -> time/* 쿼리 이름 설정 */ = $validation['time'];  
        $consulting -> save();

        return redirect() -> route('notice_consulting'); /* 정보 저장 후에 이동할 페이지 */
    }
}