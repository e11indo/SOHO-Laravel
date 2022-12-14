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
            <span>μΆμ² μν</span>
        </div>
        <div class="row" style="--bs-gutter-x: 0rem;">
            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main1.png" alt="">
                </div>
                <div class="card-des">
                    <h5 style="font-weight: bold">μ°λ¦¬κ°κ² ν¨ν€μ§</h5>
                    <p>μΆλλ³΄μν ν¨ν€μ§μλλ€.</p>
                </div>
                <a href="{{Route('Internet_home_1')}}"><div class="card-plus">+ λλ³΄κΈ°</div></a>
            </div>
            
            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main2.jpg" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">KT μ΄ν©κ²°ν© ν μΈ</h5>
                  <p>KT μ΄ν©κ²°ν© ν μΈμλλ€.</p>
                </div>
                <a href="{{Route('Internet_home_8')}}"><div class="card-plus">+ λλ³΄κΈ°</div></a>
            </div>

            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main3.jpg" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">μ½μ¨μ΄ λ ν</h5>
                  <p>μ°λ¦¬μ§μ μ§μΌμ£Όλ μ½μ¨μ΄μλλ€.</p>
                </div>
                <a href="{{Route('Internet_home_7')}}"><div class="card-plus">+ λλ³΄κΈ°</div></a>
            </div>

            <div class="card wh-250 ml-20">
                <div class="card-image">
                    <img src="/image/main4.png" alt="">
                </div>
                <div class="card-des">
                  <h5 style="font-weight: bold">μ§λ₯ν CCTV</h5>
                  <p>μ§λ₯ν CCTV μλλ€.</p>
                </div>
                <a href="{{Route('Internet_home_5')}}"><div class="card-plus">+ λλ³΄κΈ°</div></a>
            </div>
        </div>  
    </div>
</div>


<div class="page1">
  <div class="soho_container">
    <div class="title">
      <span>κ³ κ° νν©</span>
    </div>
    <div class="card-writing-content">
      <div class="card card-writing-1" >

        <div class="board" style="margin-bottom: 10px">
          <span style="font-weight: 600; font-size:20px">μλ΄μ μ²­</span>
          <span style="font-weight: 600;color:#ed018a">μ΄ {{$consulting ->count()}}κ±΄</span>
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
        μλ΄κ³ κ° μμ΅λλ€.
        @endif   
      </div>     
      <div class="card card-writing-2">
        <div class="board" style="margin-bottom: 10px">
          <span style="font-weight: 600; font-size:20px">κ³ κ°λ¬Έμ</span>
          <span style="font-weight: 600;color:#ed018a">μ΄ {{$contact ->count()}}κ±΄</span>
          <a href="{{Route('contact')}}" class="plus">+λλ³΄κΈ°</a>
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
        μλ΄κ³ κ° μμ΅λλ€.
        @endif   
      </div>  
    </div>
       
  </div>
</div>

<div class="background-image">
  <div class="background-page">
    <div>
      <p>LG U+ μΈμ¦ μ κ΅­ 1μ μΌν° Β· 18,000κ°μ κΈ°μ κ³ κ° Β· ν΅μ  μ λ¬Έ μ»¨μ€ν 70,000κ±΄ λν</p>
    </div>
    <div>
      <p>κ΅­λ΄ μ΅λ κΈ°μμ μ© μ λ¬Έμ»¨μ€ννκ³Ό μ§κΈ λ°λ‘ μλ΄νμΈμ</p>
    </div>
  </div>

</div>



@stop
