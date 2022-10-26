@extends('layout.SOHO_layout')

@section('content')

<div class="soho_container">
    <div class="banner">
        <div class="d-flex align-items-center justify-content-center" style="height:100%;">
            <p>문의글</p>
        </div>
    </div>    
</div>

<div class="soho_container mt-5">
    <div class="footer-title">
        Q & A
    </div>

    <div class="footer-desc">

        <form action="/Contact_search" method="get">
            <div class="row" style="margin-bottom: 5px">
                <div class="col-4 d-flex align-items-center ">
                        <select name="option" id="contact_option" onchange="chageLangSelect()" style="height: 80%">
                            <option name="title" id="title" value="title">제목</option>
                            <option name="username" id="username" value="username">이름</option>
                        </select>
                        <input type="text" name="title" id="select_option" style="height: 80%;margin-left:10px">
                        <input type="image" id="option_enter" src="image/button_find.gif" style="height: 80%;margin-left:10px">
                </div>
            </div>
        </form>

        <table style="width: 100%">
            <thead class="table-thead">
                <th style="width:10%">번호</th>
                <th>제목</th>
                <th style="width:15%">등록자</th>
                <th style="width:20%">등록일</th>
            </thead>

            @if(!empty($searches) && $searches->count())
            @foreach($searches as $key => $value)
                <tbody class="table-tbody">
                    <td style="width:5%">{{$key+1}}</td>
                    <td style="text-align: start"><a href="{{route('contact_view', $value -> id)}}">{{$value -> title}}</a></td>
                    <td style="width:10%">{{$value -> username}}</td>
                    <td style="width:20%">{{$value -> created_at -> format('Y-m-d')}}</td>
                </tbody>
            @endforeach
            @else
            <tr>
                <td colspan="10">상담 예약 고객이 없습니다.</td>
            </tr>
            @endif
        </table>

        <div style="margin-top:40px;margin-right:auto; margin-left:auto;" class="d-flex justify-content-center">
            {!! $searches->links() !!}
        </div>

        <div class="Contact_btn">
            <a href="{{Route('contact_create')}}" style="right: 0"> 
                <img src="/image/button_write.gif" alt="없음">
            </a>
        </div>

    </div>
</div>

@stop