<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>스피드통신</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> 
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/47b4af5cf9.js" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

</head>

<body>
<div class="top">
    <div class="topbar">
        <div class="soho_container">
        <div class="logo">
            <p class="url" style="margin-left:3px; margin-bottom:-5px">speed.com</p>
            <p class="logo_name"><a href="{{route('main')}}">스피드통신</a></p>
        </div>
        <div class="tel">
            <span>무료상담번호 <em>0000-0000</em></span>
        </div>
        <div class="user d-flex align-items-center justify-content-center" style="margin-top: 30px">
            @if(auth() ->check())
                {{auth() -> user() -> userId}}님 어서오세요
                <form action="logout" method="POST">
                    @csrf
                    <input type="submit" value="로그아웃" class="logout">
                </form>
            
            @else 
            <a href="{{route('login')}}">로그인</a>
            <a href="{{route('register')}}">회원가입</a>
            @endif
        </div>
    </div>
    </div>
    <div class="menu">
        <div class="soho_container">
        <div class="soho_navbar" style="margin-left: 10px"><i class="fa-solid fa-bars"></i></div>
        <div class="soho">
            <li class="soho_menu"><a href="{{Route('Internet_home_1')}}">가정용인터넷</a></li>
            <li class="soho_menu"><a href="{{Route('Internet_Enterprise_1')}}">기업용인터넷</a></li>
            <li class="soho_menu"><a href="{{Route('차량관제')}}">차량관제</a></li>
            <li class="soho_menu"><a href="{{Route('서빙로봇')}}">서빙로봇</a></li>
        </div>
        <div class="custom" style="float: right; display:flex">
            <li class="custom_menu"><a href="{{Route('notice_question')}}">고객센터</a></li>
            <li class="custom_menu"><a href="{{Route('contact')}}" style="margin-left: 40px">문의하기</a></li>
{{--             <li class="custom_menu"><a href="{{Route('event')}}">이벤트</a></li> --}}
        </div>
    </div>
</div>

</div>

@section('content')
@show

<div class="footer" style="border-top: 3px solid #999; margin-top:100px">
    <div class="footer-box1 ">
        <div class="soho_container d-flex justify-content-center align-items-center footer_1">
{{--             <li><a href="{{Route('intro')}}">회사소개</a></li> --}}
            <li><a href="{{Route('consume')}}">이용약관</a></li>
            <li><a href="{{Route('policy')}}">개인정보취급방침</a></li>
            <li><a href="{{Route('navigate')}}">오시는길</a></li>
            <li><a href="{{Route('email_refuse')}}">이메일무단수집거부</a></li>
        </div>
    </div>
    <div class="footer-box2">
        <div class="soho_container" style="height: 100px; margin-top:15px">
            <div>스피드통신</div>
            <div>상호: 스피드통신</div>
            <span>주소: 익산시 무왕로 스피드통신</span>
            <span>전화: 000-0000-0000</span>
            <span>팩스: 0502-329-0100 </span>
            <span>이메일: KT0100@Bizmeka.com</span>

        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>


    <script>
         $( document ).ready( function() {
        var jbOffset = $( '.menu' ).offset();
        $( window ).scroll( function() {
          if ( $( document ).scrollTop() > jbOffset.top ) {
            $( '.menu' ).addClass( 'menu_fixed' );
          }
          else {
            $( '.menu' ).removeClass( 'menu_fixed' );
          }
        });
      } );
    </script>
</body>
</html>