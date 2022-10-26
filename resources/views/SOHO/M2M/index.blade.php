@extends('layout.SOHO_layout')

@section('content')
<div class="soho-banner" style="position: relative">
    <span style="position: absolute; top:30%; left:20%;font-size:25px; color:white">실시간 차량관제 - 업무용 차량, 한눈에 확인</span>
    <span style="position: absolute; top:40%;left:20%; font-size:35px; color:white">차량운행일지 <span style="font-weight: bold">U+실시간 차량관제</span></span>
    <img src="/image/Car_banner.png" alt="" style="width:100%">
</div>

<div class="page1">
    <div class="soho_container mt-5">
        <div class="d-flex align-items-center justify-content-center" style="font-size: 35px; font-weight:bold" id="m2m_title">LG U+ 차량관제란?</div>
        <div class="d-flex align-items-center justify-content-center" style="margin-top:15px"><h5>실시간 관제, 운행경로, 각종 운행관련 통계를 제공하여</h5></div>
        <div class="d-flex align-items-center justify-content-center" id="m2m_desc"><h5>차량관리를 가능하게 해주는 솔루션</h5></div>
        <div class="d-flex align-items-center justify-content-center" id="m2m_desc"><p>제조회사, 유통회사, 건설회사, 영업용 차량을 보유한 대/중소기업등 차량관리가 필요한 고객!</p></div>
        <div class="d-flex align-items-center justify-content-center" id="m2m_desc"><p>PC와 스마트폰에서 차량의 현재 상태를 한눈에 확인!</p></div>
    </div>
</div>

<div class="page2">
    <div class="soho_container" style="padding-top: 50px">
        <div class="d-flex align-items-center justify-content-center " style="font-size: 35px; font-weight:bold" id="m2m_title">LG U+ 차량관제 시스템</div>
        <div class="d-flex align-items-center justify-content-center" style="text-align:center;:15px"><h5>GPS를 내장한 LTE 통신단말기를 통해 차량의 위치 및 상태를 PC와 스마트폰에서 실시간 확인!</h5></div>
        <div class="d-flex align-items-center justify-content-center" id="m2m_desc"><h5>차량의 운행정보를 분석해 효율적인 차량관리를 지원하는 서비스</h5></div>
        <div class="d-flex align-items-center justify-content-center">
            <img src="/image/Car_flow.png" alt="" style="width: 100%">
        </div>
    </div>
</div>
    

<div class="page1">
    <div class="soho_container mt-5">
        <div class="d-flex align-items-center justify-content-center" style="font-size: 35px; font-weight:bold">LG U+ 차량관제 주 기능</div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_1.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">차량주요지표</span>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_2.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">실시간 위치</span>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_3.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">운행경로</span>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_4.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">차량운행일지</span>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_5.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">차량예약배차</span>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="text-align:center">
                    <img src="/image/Car_6.jpg" alt="" style="width: 100%">
                    <span style="margin:10px; font-size:18px; font-weight:600">모바일APP</span>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@stop
