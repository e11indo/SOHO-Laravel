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
        <div class="col-4 category active d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_information')}}">가입안내</a>
        </div>
        <div class="col-4 category d-flex align-items-center justify-content-center">
            <a href="{{Route('notice_consulting')}}">상담신청</a>
        </div>

    </div>
</div>

<div class="soho_container mt-5">
    <div class="information-box">
        <div style="width:100%" class="info-box">
            <div class="information-box-left">
                <h3>가입신청 안내</h3>
                <p>아래 신청서에 개인정보를 작성하여 </p>
                <p>가입신청하기 버튼을 클릭해주시면 됩니다.</p>
            </div>
            <div class="information-box-right"><img src="/image/icon_guide.gif" alt=""></div>
        </div>
    </div>
</div>

<div class="soho_container mt-5">
    <div class="information-box">
        <div style="width:25%">
            <img src="http://byheaven4you1.cafe24.com/stn/stn_lg_btn.jpg" alt="">
            <a href="http://gigasolution.co.kr/online/regist_lg.asp?m_id=S1S&g_code_course=0001" target='_blank'><img src="http://byheaven4you1.cafe24.com/stn/stn_lg_join_btn.jpg" alt=""></a>
        </div>
        <div style="width:25%;margin-left:20px">
            <img src="http://byheaven4you1.cafe24.com/stn/stn_sk_btn.jpg" alt="">
            <a href="http://gigasolution.co.kr/online/regist_sk.asp?m_id=S1S&g_code_course=0001" target='_blank'><img src="http://byheaven4you1.cafe24.com/stn/stn_sk_join_btn.jpg" alt="" ></a>
        </div>
        <div style="width:25%;margin-left:20px">
            <img src="http://byheaven4you1.cafe24.com/stn/stn_kt_btn.jpg" alt="">
            <a href="http://gigasolution.co.kr/online/regist_kt.asp?m_id=S1S&g_code_course=0001" target='_blank'><img src="http://byheaven4you1.cafe24.com/stn/stn_kt_join_btn.jpg" alt="" ></a>
        </div>
        <div style="width:25%;margin-left:20px">
            <img src="http://byheaven4you1.cafe24.com/stn/stn_cj_btn.jpg" alt="">
            <a href="http://gigasolution.co.kr/online/regist_he.asp?m_id=S1S&g_code_course=H011" target='_blank'><img src="http://byheaven4you1.cafe24.com/stn/stn_cj_join_btn.jpg" alt="" ></a>
        </div>
    </div>
</div>


@stop