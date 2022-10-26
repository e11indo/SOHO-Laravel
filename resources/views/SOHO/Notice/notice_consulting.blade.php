@extends('layout.SOHO_layout')

@section('content')
<div class="soho_container">
    <div class="banner">
        <div class="d-flex align-items-center justify-content-center" style="height:100%;">
            <p>고객 센터</p>
        </div>
    </div>    
</div>

<div class="soho_container mt-5">
    <div class="row">
        <div class="col-4 category d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_question')}}">자주하는 질문</a>
        </div>
        <div class="col-4 category d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_information')}}">가입안내</a>
        </div>
        <div class="col-4 category active d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_consulting')}}">상담신청</a>
        </div>

    </div>
</div>

<div class="soho_container mt-5">
    <div class="information-box">
        <div style="width:100%">
            <div class="information-box-left">
                <h3>상담신청</h3>
                <p>이름과 연락처를 남겨주시면</p>
                <p>빠른 시일 내에 연락드리겠습니다.</p>
            </div>
            <div class="information-box-right"><img src="/image/icon_guide.gif" alt=""></div>
        </div>
    </div>
</div>

<div class="soho_container mt-5">
    <form action="Consulting" method="POST" name="consulting" onsubmit="return checkName()">
        @csrf
        <div class="row consulting-box">
            <div class="col-1 d-flex align-items-center justify-content-center">
                <label for="name">이름</label>
            </div>
            <div class="col-11 d-flex align-items-center">
                <input type="text" name="name" id="consulting-input">
            </div>
        </div>
        <div class="row consulting-box">
            <div class="col-1 d-flex align-items-center justify-content-center">
                <label for="name">회사</label>
            </div>
            <div class="col-11 d-flex align-items-center">
                <input type="text" name="company" id="consulting-input">
            </div>
        </div>
        <div class="row consulting-box">
            <div class="col-1 d-flex align-items-center justify-content-center">
                <label for="name">전화번호</label>
            </div>
            <div class="col-8 d-flex align-items-center">
                <input type="text" name="tel" id="consulting-input">
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <label for="name">상담시간</label>
            </div>
            <div class="col-2 d-flex align-items-center">
                <select name="time">
                    @for($i=9; $i <=18; $i++)
                        <option>{{$i}} 시</option>
                    @endfor
                    <option>상관없음</option>
                </select>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
            <input type="submit" class="consulting-submit" value="상담신청하기">
        </div>
    
    </form>
</div>

@stop