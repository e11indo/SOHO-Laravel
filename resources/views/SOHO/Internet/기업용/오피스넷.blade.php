@extends('SOHO.Internet.기업용.layout')

@section('internet')

<div class="row">
    <div class="soho_content">
        <div class="footer-title" style="padding-bottom: 15px">
            오피스넷/기가오피스넷
        </div>
        <h5 style="margin-top: 20px">최대 1기가의 속도로, 중소규모 사무실 또는 소상공인 고객에게 맞는 상품을 선택할 수 있는 인터넷 서비스</h5>
    </div>

    <div class="enterprise">
        <div class="mt-5" style="font-weight:bold; font-size:18px; padding-left:5px">요금제 한눈에 보기</div>
        <table>
            <tr class="table-title">
                <td rowspan="2">구분</td>
                <td rowspan="2">최대속도</td>
                <td colspan="5">월정액</td>
            </tr>
            <tr class="table-title">
                <td>인터넷전화 결합시</td>
                <td>3년</td>
                <td>2년</td>
                <td>1년</td>
                <td>무약정</td>
            </tr>
            <tr>
                <td rowspan="3">유동IP</td>
                <td>1G</td>
                <td class="table-total">44,000원</td>
                <td class="table-total">49,500원</td>
                <td>53,900원</td>
                <td>58,300원</td>
                <td>62,700원</td>
            </tr>
            <tr>
                <td>500M</td>
                <td class="table-total">38,500원</td>
                <td class="table-total">44,400원</td>
                <td>46,200원</td>
                <td>50,600원</td>
                <td>56,100원</td>
            </tr>
            <tr>
                <td>100M</td>
                <td class="table-total">27,500원</td>
                <td class="table-total">30,800원</td>
                <td>33,000원</td>
                <td>35,200원</td>
                <td>37,400원</td>
            </tr>

            <tr>
                <td rowspan="3">고정IP</td>
                <td>1G</td>
                <td class="table-total">44,000원</td>
                <td class="table-total">49,500원</td>
                <td>53,900원</td>
                <td>58,300원</td>
                <td>62,700원</td>
            </tr>
            <tr>
                <td>500M</td>
                <td class="table-total">38,500원</td>
                <td class="table-total">44,400원</td>
                <td>46,200원</td>
                <td>50,600원</td>
                <td>56,100원</td>
            </tr>
            <tr>
                <td>100M</td>
                <td class="table-total">27,500원</td>
                <td class="table-total">30,800원</td>
                <td>33,000원</td>
                <td>35,200원</td>
                <td>37,400원</td>
            </tr>
        </table>


        <div class="mt-5" style="font-weight:bold; font-size:18px; padding-left:5px">부가서비스 안내</div>
        <table>
            <tr class="table-title">
                <td rowspan="2">구분</td>
                <td rowspan="2">기기명</td>
                <td colspan="5">월정액</td>
            </tr>
            <tr class="table-title">
                <td>3년약정</td>
                <td>2년약정</td>
                <td>1년약정</td>
                <td>무약정</td>
            </tr>
            <tr>
                <td rowspan="2" class="table-pay">와이파이 공유기</td>
                <td>기가와이파이</td>
                <td class="table-total">3,300원</td>
                <td>4,840원</td>
                <td>8,800원</td>
                <td>13,200원</td>
            </tr>
            <tr>
                <td>기가와이파이 프리미엄</td>
                <td class="table-total">5,500원</td>
                <td>7,700원</td>
                <td>10,450원</td>
                <td>13,200원</td>
            </tr>
        </table>
        
    </div>

    
</div>

@stop