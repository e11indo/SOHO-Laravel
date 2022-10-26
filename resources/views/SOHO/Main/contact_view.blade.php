@extends('layout.SOHO_layout')

@section('content')

<div class="soho_container">
    <div class="banner">
        <div class="d-flex align-items-center justify-content-center" style="height:100%;">
            <p>문의글 보기</p>
        </div>
    </div>    
</div>

<div class="soho_container mt-5">
    
    <div class="footer-title">
        상세 글 보기
    </div>
    
<div class="soho_container mt-5">
    <div class="Contact_btn mt-5" style="height: 40px">
        <a href="{{Route('contact')}}" style="right: 0"> 
            <img src="/image/button_list.gif" alt="없음" >
        </a>
        <form action="/Contact/{{$contact -> id}}" method="post">
            @method('delete')
            @csrf
            <input type="password" name="password" placeholder="비밀번호">
            <input type="image" src="/image/button_delete.gif" name="delete" id="password">
            
        </form>
        </div>
    </div>  
    <div class="table_board_view">
        <div class="table_row">
            <div class="show th" style="width:15%">
                제목
            </div>
            <div class="show td" style="width:85%">
                {{$contact -> title}}
            </div>
            <div class="show th" style="width:15%">
                등록자
            </div>
            <div class="show td" style="width:85%">
                {{$contact -> username}}
            </div>
        </div>
        <div class="table_row">
            <div class="show th d-flex align-items-center justify-content-center">
                내용
            </div>
            <div class="show td" style="height: 500px; overflow-y:scroll">
                {{$contact -> content}}
            </div>
        </div>
    </div>

    <div class="comment_title" style="font-weight: bold">댓글 {{$comment -> count()}}</div>


    @auth
    <form method="post" action="{{route('comment.add')}}" class="comment mt-3">
        @csrf
        <input type="hidden" name="parent_id" value="{{$contact->id}}">
        <textarea name="commentStory" class="comment_story"></textarea>
        <input type="submit" value="작성" class="comment_btn">
    </form>
    @endauth

    @foreach($comment as $item)
    <div class="mt-3 comment_item" style="display: flex;">
        <div class="d-flex align-items-center comment_story">
            {{$item->commentStory}} <span style="color:#989898; font-size:11px;margin-left:10px">{{$item->created_at}}</span>
        </div>
        <div class="d-flex align-items-center justify-content-center">        
            <span style="color:#989898; font-size:13px">{{$item->userName}}</span>
        </div>
    </div>
    @endforeach
</div>


@stop