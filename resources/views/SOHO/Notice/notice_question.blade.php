@extends('layout.SOHO_layout')

@section('content')
<div class="soho_container">
    <div class="banner">
        <div class=" d-flex align-items-center justify-content-center" style="height:100%;">
            <p>고객 센터</p>
        </div>
    </div>    
</div>

<div class="soho_container mt-5">
    <div class="row">
        <div class="col-4 category active d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_question')}}">자주하는 질문</a>
        </div>
        <div class="col-4 category d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_information')}}">가입안내</a>
        </div>
        <div class="col-4 category d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_consulting')}}">상담신청</a>
        </div>

    </div>
</div>

<div class="soho_container mt-5">
    @if(!empty($question) && $question->count())
    @foreach($question as $key => $value)
    <div class="question">
        <i class="fa-solid fa-circle-question"></i> {{$value -> question}}
    </div>
    <div class="answer">
        <i class="fa-solid fa-arrow-right"></i> {{$value -> answer}}
    </div>
    @endforeach
    @endif
</div>
@stop