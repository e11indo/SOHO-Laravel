@extends('layout.SOHO_layout')

@section('content')
<div class="soho-banner" style="position: relative">
    <span style="position: absolute; top:30%; left:20%;font-size:25px; color:white">바쁜 우리를 위한 로봇 솔루션</span>
    <span style="position: absolute; top:40%;left:20%; font-size:45px; color:white">AI 서비스로봇</span>
    <img src="/image/Robot_banner.png" alt="" style="width:100%">
</div>

<div class="page1">
    <div class="soho_container mt-5">
        <div class="d-flex align-items-center justify-content-center" style="font-size: 35px; font-weight:bold">AI 서빙로봇은?</div>
        <div class="d-flex align-items-center justify-content-center" style="margin-top:15px"><h5>별도의 설치물이 필요없는 완전한 자율주행 기술과 간편한 사용법으로</h5></div>
        <div class="d-flex align-items-center justify-content-center"><h5>어떠한 매장 환경에서도 안정적인 서빙이 가능합니다.</h5></div>
    </div>
</div>

<div class="page2">
    <div class="soho_container" style="padding-top: 50px">
        <div class="d-flex align-items-center justify-content-center " style="font-size: 35px; font-weight:bold">AI 서빙로봇 기능</div>
        <div class="d-flex align-items-center justify-content-center">
            <img src="/image/Robot_1.png" alt="" style="width: 100%;margin-top:20px">
        </div>
    </div>
</div>

<div class="page1">
    <div class="soho_container mt-5">
        <div class="d-flex align-items-center justify-content-center" style="font-size: 35px; font-weight:bold">AI 서빙로봇 가격</div>
        <div class="enterprise mt-5">
            <table class="robot_table" style="font-weight: bold">
                <tr class="table-title">
                    <td style="width:20%">구매방식</td>
                    <td style="width:20%">구성</td>
                    <td style="width:30%">금액</td>
                    <td style="width:30%">기타</td>
                </tr>
                <tr>
                    <td rowspan="4">임대형</td>
                    <td>무약정</td>
                    <td>105만원/월</td>
                    <td rowspan="4" style="text-align: start; font-size:20px; padding:15px">
                        <p>약정기간 내 무상 A/S</p>
                        <p>영업 배상책임보험 제공</p>
                        <p style="color:#35b9c5"> KT가 로봇을 소유</p>
                    </td>
                </tr>
                <tr>
                    <td>12개월</td>
                    <td>95만원/월</td>
                </tr>
                <tr>
                    <td>24개월</td>
                    <td>85만원/월</td>
                </tr>
                <tr>
                    <td>36개월</td>
                    <td>65만원/월</td>
                </tr>
                <tr>
                    <td rowspan="4">판매형</td>
                    <td>일시불</td>
                    <td>2,000만원</td>
                    <td rowspan="4" style="text-align: start; font-size:20px; padding:15px">
                        <p>2년간 내 무상 A/S</p>
                        <p>3년간 영업 배상책임보험 제공</p>
                        <p style="color:#35b9c5"> 고객이 로봇을 소유</p>
                    </td>
                </tr>
                <tr>
                    <td>12개월</td>
                    <td>95만원/월</td>
                </tr>
                <tr>
                    <td>24개월</td>
                    <td>85만원/월</td>
                </tr>
                <tr>
                    <td>36개월</td>
                    <td>65만원/월</td>
                </tr>
            </table>
    
    
            
        </div>
    </div>
</div>

@stop
