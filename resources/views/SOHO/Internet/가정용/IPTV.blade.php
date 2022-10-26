@extends('SOHO.Internet.가정용.layout')

@section('internet')

<div class="row">
    <div class="soho_content">
        <div class="footer-title" style="padding-bottom: 15px">
            IPTV
        </div>
        <h4 style="margin-top: 20px">매장에 필요한 통신상품과 다양한 혜택을 묶어 할인된 요금으로 이용할 수 있는 페이지</h4>
    </div>
    <div class="row">
        <div class="soho-col-6">
            <div class="soho-content-table mt-5">
                <div class="soho-content-title">
                    <span>추천상품1</span>
                </div>
                <table>
                    <tr>
                        <td rowspan="2" class="table-title">U+인터넷</td>
                        <td>기가슬림결제안심</td>
                        <td rowspan="2" class="table-pay">38,500원</td>
                    </tr>
                    <tr>
                        <td>사장님광장</td>
                    </tr>
                    <tr>
                        <td class="table-title">U+인터넷전화</td>
                        <td>자유통화4</td>
                        <td class="table-pay">6,600원</td>
                    </tr>
                    <tr>
                        <td class="table-title">U+지능형CCTV</td>
                        <td>에스원안심 1대</td>
                        <td class="table-pay">13,200원</td>
                    </tr>
                    <tr>
                        <td class="table-title">U+tv</td>
                        <td>베이직</td>
                        <td class="table-pay">14,300원</td>
                    </tr>
                    <tr>
                        <td class="table-title">정상요금</td>
                        <td colspan="2" class="table-total">72,600원</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="soho-col-6">
            <div class="soho-content-table mt-5">
                <div class="soho-content-title">
                    <span>추천상품2</span>
                </div>
                <table>
                    <tr>
                        <td rowspan="2" class="table-title">U+인터넷</td>
                        <td>우리가게무선인터넷프리미엄</td>
                        <td rowspan="2" class="table-pay">38,500원</td>
                    </tr>
                    <tr>
                        <td>사장님광장</td>
                    </tr>
                    <tr>
                        <td class="table-title">U+인터넷전화</td>
                        <td>자유통화4</td>
                        <td class="table-pay">6,600원</td>
                    </tr>
                    <tr>
                        <td class="table-title">LG헬로비전 헬로tv</td>
                        <td>UHD뉴베이직</td>
                        <td class="table-pay">8,800원</td>
                    </tr>
                    <tr>
                        <td class="table-title">에스원HD아날로그CCTV</td>
                        <td>카메라 1대</td>
                        <td class="table-pay">31,900원</td>
                    </tr>
                    <tr>
                        <td class="table-title">정상요금</td>
                        <td colspan="2" class="table-total">85,800원</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    

    <div class="row" style="margin-top: 100px">
        <div class="soho-col-6" style="position: relative">
            <div class="sales">
                누구나 할인(추천 상품1)
            </div>

            <div class="soho-content-table">
                <table>
                    <tr>
                        <td class="table-title">상품 결합할인</td>
                        <td>8,800원</td>
                    </tr>
                    <tr>
                        <td class="table-title">패키지 월정액</td>
                        <td>63,800원</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="soho-col-6" style="position: relative">
        <div class="sales">
            누구나 할인(추천 상품2)
        </div>

        <div class="soho-content-table">
            <table>
                <tr>
                    <td class="table-title">상품 결합할인</td>
                    <td>11,000원</td>
                </tr>
                <tr>
                    <td class="table-title">패키지 월정액</td>
                    <td>74,800원</td>
                </tr>
            </table>
        </div>
    </div>
    
    </div>
    <div class="row" style="margin-top: 100px">
        <div class="soho-col-6" style="position: relative">
            <div class="sales">
                누구나 할인(추천 상품1)
            </div>

            <div class="soho-content-table">
                <table>
                    <tr>
                        <td class="table-title">U+ 투게더 결합할인</td>
                        <td>11,000원</td>
                    </tr>
                    <tr>
                        <td class="table-title">제휴카드할인</td>
                        <td>11,000원</td>
                    </tr>
                    <tr>
                        <td class="table-title">패키지 월정액</td>
                        <td>10,800원</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="soho-col-6" style="position: relative">
        <div class="sales">
            누구나 할인(추천 상품2)
        </div>

        <div class="soho-content-table">
            <table>
                <tr>
                    <td class="table-title">상품 결합할인</td>
                    <td>11,000원</td>
                </tr>
                <tr>
                    <td class="table-title">제휴카드할인</td>
                    <td>42,000원</td>
                </tr>
                <tr>
                    <td class="table-title">패키지 월정액</td>
                    <td>21,800원</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>


@stop