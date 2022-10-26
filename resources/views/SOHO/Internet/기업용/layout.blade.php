@extends('layout.SOHO_layout')

@section('content')
<div class="soho_container soho-banner">
    <img src="/image/subtop_5.jpg" alt="" style="width:100%">
</div>

<div class="soho_container mt-5" style="display: flex">
    <div class="soho-menu">
        <div class="enterprise-title enterprise d-flex align-items-center ">
            기업용 인터넷
        </div>
        <a href="{{Route('Internet_Enterprise_1')}}"><div class="soho-menu-content d-flex align-items-center">
            오피스넷
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_2')}}"><div class="soho-menu-content d-flex align-items-center">
            우리회사패키지
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_3')}}"><div class="soho-menu-content d-flex align-items-center">
            IPTV
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_4')}}"><div class="soho-menu-content d-flex align-items-center">
           사내전화
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_5')}}"><div class="soho-menu-content d-flex align-items-center">
            인터넷전화일반형
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_6')}}"><div class="soho-menu-content d-flex align-items-center">
            인터넷전화고급형
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_7')}}"><div class="soho-menu-content d-flex align-items-center">
            인터넷전화교환기설치형
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_8')}}"><div class="soho-menu-content d-flex align-items-center">
            클라우드고객센터
        </div></a>
    
        <a href="{{Route('Internet_Enterprise_9')}}"><div class="soho-menu-content d-flex align-items-center">
            전국대표번호
        </div></a>
     
        <a href="{{Route('Internet_Enterprise_10')}}"><div class="soho-menu-content d-flex align-items-center">
            050FAX
        </div></a>

        <a href="{{Route('Internet_Enterprise_11')}}"><div class="soho-menu-content d-flex align-items-center">
            080전화
        </div></a>
        
    </div>


    <div class="soho-content">
        @section('internet')
        @show
    </div>

</div>


@stop