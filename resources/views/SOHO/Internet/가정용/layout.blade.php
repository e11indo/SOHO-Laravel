@extends('layout.SOHO_layout')

@section('content')
<div class="soho_container soho-banner">
    <img src="/image/subtop_1.jpg" alt="" style="width:100%">
</div>

<div class="soho_container mt-5 d-flex">
    <div class="soho-menu">
        <div class="soho-menu-title d-flex align-items-center ">
            가정용 인터넷
        </div>
        <a href="{{Route('Internet_home_1')}}"><div class="soho-menu-content d-flex align-items-center">
            우리가게패키지
        </div></a>
     
        <a href="{{Route('Internet_home_2')}}"><div class="soho-menu-content d-flex align-items-center">
            인터넷
        </div></a>
     
        <a href="{{Route('Internet_home_3')}}"><div class="soho-menu-content d-flex align-items-center">
            우리가게무선인터넷
        </div></a>
     
        <a href="{{Route('Internet_home_4')}}"><div class="soho-menu-content d-flex align-items-center">
           인터넷전화
        </div></a>
     
        <a href="{{Route('Internet_home_5')}}"><div class="soho-menu-content d-flex align-items-center">
            지능형CCTV
        </div></a>
     
        <a href="{{Route('Internet_home_6')}}"><div class="soho-menu-content d-flex align-items-center">
            IPTV
        </div></a>
     
        <a href="{{Route('Internet_home_7')}}"><div class="soho-menu-content d-flex align-items-center">
            우리집지킴이Easy
        </div></a>
     
        <a href="{{Route('Internet_home_8')}}"><div class="soho-menu-content d-flex align-items-center">
            상품결합할인
        </div></a>
    
        <a href="{{Route('Internet_home_9')}}"><div class="soho-menu-content d-flex align-items-center">
            유무선결합할인
        </div></a>
     
        <a href="{{Route('Internet_home_10')}}"><div class="soho-menu-content d-flex align-items-center">
            U+투게더결합
        </div></a>
        
    </div>


    <div class="soho-content">
        @section('internet')
        @show
    </div>

</div>


@stop