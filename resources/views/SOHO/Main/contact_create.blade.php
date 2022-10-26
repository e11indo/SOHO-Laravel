@extends('layout.SOHO_layout')

@section('content')

<div class="soho_container">
    <div class="banner">
        <div class="d-flex align-items-center justify-content-center" style="height:100%;">
            <p>문의글 쓰기</p>
        </div>
    </div>    
</div>

<div class="soho_container mt-5">
    <div class="footer-title">
        글쓰기
    </div>

<div class="soho_container mt-5">
    <form method="post" action ='Contact_save'>
        @csrf
        <div class="table_board_view">
            <div class="table_row">
                <div class="show th" style="width:15%">
                    등록자
                </div>
                <input  name="username" class="show td" style="width:85%">
                <div class="show th" style="width:15%">
                    비밀번호
                </div>
                <input type="password" name="password" class="show td" style="width:85%">
                    
                </div>
            </div>
            <div class="table_row">
                <div class="show th d-flex align-items-center justify-content-center">
                    제목
                </div>
                <input name="title" class="show td">
            </div>
            <div class="table_row">
                <div class="show th d-flex align-items-center justify-content-center">
                    내용
                </div>
                <input name="content" class="show td" style="height: 500px; overflow-y:scroll">
            </div>
        </div>
        <div class="Contact_btn" style="margin-top:10px">
            <input type="image" src="/image/button_submit.gif" alt="없음" style="position: absolute;;right: 0">
        </div>
    </div>
</form>
</div>  


@stop