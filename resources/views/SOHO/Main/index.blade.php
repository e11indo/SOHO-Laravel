@extends('layout.SOHO_layout')

@section('content')
<div class="page1">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/image/main_banner.jpg" class="d-block w-100" alt="..." style="height: 100%">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="/image/main_banner.jpg" class="d-block w-100" alt="..." style="height: 100%">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

<div class="page2">
    <div class="soho_container">
        <div class="title">
            <span>추천 상품</span>
        </div>
        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main1.png" alt="">
                </div>
                <div class="card-des">
                    <h5 style="font-weight: bold">우리가게 패키지</h5>
                    <p>출동보안형 패키지입니다.</p>
                </div>
                <a href="{{Route('Internet_home_1')}}"><div class="card-plus">+ 더보기</div></a>
            </div>
            
            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main2.jpg" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">KT 총합결합 할인</h5>
                  <p>KT 총합결합 할인입니다.</p>
                </div>
                <a href="{{Route('Internet_home_8')}}"><div class="card-plus">+ 더보기</div></a>
            </div>

            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main3.jpg" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">코웨이 렌탈</h5>
                  <p>우리집을 지켜주는 코웨이입니다.</p>
                </div>
                <a href="{{Route('Internet_home_7')}}"><div class="card-plus">+ 더보기</div></a>
            </div>

            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main4.png" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">지능형 CCTV</h5>
                  <p>지능형 CCTV 입니다.</p>
                </div>
                <a href="{{Route('Internet_home_5')}}"><div class="card-plus">+ 더보기</div></a>
            </div>
        </div>  
    </div>
</div>


<div class="page1">
  <div class="soho_container">
    <div class="title">
      <span>고객 현황</span>
    </div>
    <div class="card-writing-content">
      <div class="card card-writing-1" >

        <div class="board" style="margin-bottom: 10px">
          <span style="font-weight: 600; font-size:20px">상담신청</span>
          <span style="font-weight: 600;color:#ed018a">총 {{$consulting ->count()}}건</span>
        </div>
        @if(!empty($consulting) && $consulting->count())
        @foreach($consulting as $key => $value)
        <div class="row">
            <div class="col-7 d-flex align-items-center ">
                {{$value -> name}}
            </div>
            <div class="col-2 d-flex align-items-center ">
                <span style="font-size: 12px">{{$value -> time}}</span>
            </div>
            <div class="col-3 d-flex align-items-center ">
                <span style="font-size: 12px">{{$value -> created_at -> format('Y-m-d')}}</span>
            </div>
        </div>
        @endforeach
        @else
        상담고객 없습니다.
        @endif   
      </div>     
      <div class="card card-writing-2">
        <div class="board" style="margin-bottom: 10px">
          <span style="font-weight: 600; font-size:20px">고객문의</span>
          <span style="font-weight: 600;color:#ed018a">총 {{$contact ->count()}}건</span>
          <a href="{{Route('contact')}}" class="plus">+더보기</a>
        </div>
      
        @if(!empty($contact) && $contact->count())
        @foreach($contact as $key => $value)
        <div class="row">
            <div class="col-10">
                <a href="{{route('contact_view', $value -> id)}}">{{$value -> title}}</a>
            </div>
            <div class="col-2 d-flex align-items-center ">
                <span style="font-size: 12px">{{$value -> created_at -> format('Y-m-d')}}</span>
            </div>
        </div>
        @endforeach
        @else
        상담고객 없습니다.
        @endif   
      </div>  
    </div>
       
  </div>
</div>

<div class="background-image">
  <div class="background-page">
    <div>
      <p>LG U+ 인증 전국 1위 센터 · 18,000개의 기업 고객 · 통신 전문 컨설팅 70,000건 돌파</p>
    </div>
    <div>
      <p>국내 최대 기업전용 전문컨설팅팀과 지금 바로 상담하세요</p>
    </div>
  </div>

</div>



@stop
