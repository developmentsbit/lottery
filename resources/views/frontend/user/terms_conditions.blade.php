@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.terms_condition')
@endsection
<!--page title -->
@section('body')

<style>
    .term h3 {
        color: #fff;
        border-bottom: 2px solid;
        padding: 11px;
        text-align: left;
    }

    .term ul li {
        list-style: none;
        padding: 12px 12px;
        text-align: left;
        /* align-items: center; */
    }
</style>
<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.terms_condition')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.terms_condition')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section terms conditions -->

<section class="p-4" style="background: #8458B3">
    <div class="container" style="background: #51297b;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <div class="row">
            <div class="term">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>TERMS &amp; CONDITIONS (Terms and Conditions):</h3>
                </div>
                
                <ul>
                    <li>1. One man one account & Should be verified account.</li>
                    <li>2. 1,000,000 lottery tickets in each unit: 40 Baht per ticket.</li>
                    <li>3. (Available Date start from August 1, 2015 until present).</li>
                    <li>4. One bet code name number 1 entry. More number not original.</li>
                    <li>5. One man and one account should be confirmed and drawn.</li>
                    <li>6. 1,000,000 tickets, 40 baht per ticket</li>
                    <li>7. (Date of sale starting from 1 August 2015 to the present)</li>
                    <li>8. Single bet code, same number 1 item, not eligible to add amount</li>
                </ul>
            </div>
            
            <div class="term">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3>IF UNIT SOLD OUT, DETERMINE PRIZES PER UNIT ARE AS FOLLOWS (If The Unit Is Sold Out, The Unit Price Will Be As Follows):</h3>
                </div>
                
                <ul>
                    <li>1. 1st. Prize- Quantity 1-Value (Baht) 3,000,000</li>
                    <li>2. 2nd. Prize- Quantity 5-Value (Baht) 100,000</li>
                    <li>3. 3rd. Prize- Quantity 10-Value (Baht) 40,000</li>
                    <li>4. 4th. Prize- Quantity 50-Value (Baht) 20,000</li>
                    <li>5. 5th. Prize- Quantity 100-Value (Baht) 10,000</li>
                    <li>6. Extra prize that is related and the numbers are closest to 1st prize Prize- Quantity 2-Value (Baht) 50,000</li>
                    <li>7. In three digits: Draw 4 times Prize- Quantity 4,000-Value (Baht) 2,000</li>
                    <li>8. In two digits: Draw 1 times Prize- Quantity 10,000-Value (Baht) 1,000</li>
                    <li>9. Day 1. Prize - Prize 1 Value (baht) 3,000,000</li>
                    <li>10. 2nd time. Prize - amount 5 value (baht) 100,000</li>
                    <li>11. 3. Prize - amount 10 value (baht) 40,000</li>
                    <li>12 Rank 4 Prize - Amount 50 - Value (baht) 20,000</li>
                    <li>13 5. Prize - amount 100 - value (baht) 10,000</li>
                    <li>14 Related special prizes and numbers close to 1st prize, 2nd prize worth (baht) 50,000</li>
                    <li>15 Three digits: 4 times the lottery - amount 4,000 - value (baht) 2,000</li>
                    <li>16 Two digits: 1 time prize draw, 10,000 - value (baht) 1,000</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- thai lottery section terms conditions -->



@endsection

