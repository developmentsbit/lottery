@extends('frontend.layouts.master')
<!--page title -->
@section('page_title')
@lang('frontend.about_us')
@endsection
<!--page title -->
@section('body')

<!-- page title -->
<div class="page-title">
    <div class="container">
        <h2>@lang('frontend.about_us')</h2>
        <a href="{{ url('/') }}">@lang('frontend.home')</a> / @lang('frontend.about_us')
    </div>
</div>
<!-- page title -->

<!-- thai lottery section about -->

<section class="p-4" style="background: #043b35">
    <div class="container" style="background: #104747;padding: 34px;border-radius: 1% 1% 1% 1%; color:#fff;">
        <img src="{{ asset('Backend/settings/') }}/{{ $settings->logo }}" alt="">
        <p>
            Lottery In Thailand, according to history, began in the reign of King Chulalongkorn Rama 5, with an English potato named “ Teacher Ablabaster ” leading the European lottery prize. First published by the first, called “ Lottery ” by KingKing Chulalongkorn has graciously graciously. The Royal Decree allowed the Chamber of Commerce to issue the lottery for the first time in Thailand in the year.Prof. In 1874, at the royal ceremony of the celebration With the objective of helping foreign merchants who bring products to perform in the museum at the Concordia Building in the Royal Palace And later in the reign of King Rama VI in the year.Prof.In 1917, during the period of World War I, the United Kingdom, England, which was an Allied country. Wishing to borrow money from Thailand for war But cannot borrow directly from the Thai government Because it will affect the budget of the National Council of England Therefore implementing a policy to borrow money from the people as wellOutside the lottery, with the royal permission granted by King Rama VI and later in the year.In 1923, the Royal Decree allowed the issuance of ” million baht tiger lotteries ” to raise 1 million volunteer rudder funds by publishing 1 million copies each Later, during the reign of King Rama VII After the change of rule in the year.Prof.In 1933, the government had a policy to reduce the money Rush. (Money collected from Thai men who do not have to serve in the military) causing the state to lack income. Therefore, the government lottery was called “ Lottery, the Siamese government ”, with 1 million copies distributed each 1 baht, 4 installments Later in the year.Prof. In 1934, the Cabinet approved the Ministry of Interior to issue a lottery to nourish the municipality by specifying that If any month is the month that the lottery is issued That month, the press will sell the lottery of the municipality. By starting the first sale in November.Prof. 1935 and then released the lottery in April, May.Prof. By 1936, 500,000 copies were printed, 1 baht each, and government lottery and municipal lottery were issued In the year.Prof.In 1939, which was considered an era in which the government began to take action seriously. In which the Cabinet resolved to transfer the lottery business to the government And the municipality lottery Come to the Ministry of Finance And a government lottery committee was appointed. With Phraya Brahma Talat Sri Pilas as chairmanOn April 5, 1939, on that day, it was considered the founding day of the Government Lottery Office until now And the lottery, the government continued to develop until the year.Prof. In 1974, the Office Act was issued. Dragkin divides the government. Require the lottery office to divide the government into legal entities And is a state enterprise affiliated with the Ministry of Finance In addition to conducting domestic affairs The Government Lottery Office also has coordination. And exchange ideas and news about lottery affairs with foreign countries By becoming a member of the World Lottery Association :WLA) and has been a member of the Asia Pacific Lottery Association (APLA) since 2000.2000 (Note: The World Lottery Association is developed from the organization. International Association of State Lotteries, which the office has been a member since May.1960)
        </p>
    </div>
</section>
<!-- thai lottery section about -->



@endsection

