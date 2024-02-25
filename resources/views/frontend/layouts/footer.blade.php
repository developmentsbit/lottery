<!-- section pay method -->
<section class="p-4" style="background: #8458B3">
    <div class="container" style="background: #51297b;padding: 34px;border-radius: 1% 1% 1% 1%;">
        <div class="title">
            <h3>@lang('frontend.pay_method')</h3>
        </div>
        <div class="method_images">
            <img src="{{ asset('Frontend/image/pay_method/bank.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/mastercard.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/visacard.png') }}" alt="" class="img-fluid">
            <!-- <img src="{{ asset('Frontend/image/pay_method/paypal.png') }}" alt="" class="img-fluid"> -->
            <img src="{{ asset('Frontend/image/pay_method/neteller.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/perfectmoney.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/skrill.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</section>
<!-- section pay method -->

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white"style="background-color: #51297b">
        <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            <img src="{{ asset('Backend/settings/455602170.png') }}">
                        </h6>
                        <p style="color: #fff;">
                        ลอตเตอรีในประเทศไทยตามประวัติเริ่มต้นในรัชสมัยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัวรัชกาลที่โดยมีชื่ออังกฤษว่าเป็นครั้งแรกที่ได้รับการตีพิมพ์ในรูปแบบการออกรางวัลลอตเตอรี่แบบยุโรปที่เรียกว่า"ลอตเตอรี"โดยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว .
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->
                    <div class="col-md-9 col-lg-9 col-xl-9">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-3 footer-list">
                                <h4 class="text-uppercase mb-4" style="color: #fff; font-weight: 600;">USEFUL LINKS</h4>
                                <ul>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a href="{{ url('/') }}" class="text-white">Home</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a href="{{ url('AboutUs') }}" class="text-white">About Us</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a href="{{url('VisionMission')}}" class="text-white">Vision & Mission</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a href="{{url('AwardsPrize')}}" class="text-white">Discount</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a href="{{url('ContactUs')}}" class="text-white">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3 footer-list">
                                <h4 class="text-uppercase mb-4" style="color: #fff; font-weight: 600;">SUPPORT</h4>
                                <ul>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a class="text-white">Customer Care</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a class="text-white">Live Chat</a></li>
                                    <li><i class="fa-regular fa-circle-right"></i>  <a class="text-white">Email Chat</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 footer-list" style="color: #fff;">
                                <h4 class="text-uppercase mb-4" style="color: #fff; font-weight: 600;">CONTACT</h4>
                                <p>Email: info.thailotto3up@gmail.com</p>
                                <p>Website: www.thailotto3up.com</p>
                                <p>Address: The Government Lottery Office (Sanambin Nam)</p>
                                <p>359 Nonthaburi Road, Tha Sai Amphoe Mueang Nonthaburi, NONTHABURI 11000</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"> Copyright © 2015  by <a class="text-white">thailotto3up.com</a> All Rights Reserved
        </div>
    </footer>
</div>

</div>
<!-- End of .container -->
<!-- footer starts from here -->
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
    "></script>

<!-- font awsome js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/brands.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/conflict-detection.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/regular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/solid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/v4-shims.min.js"></script>
<!-- font awsome js -->

@stack('footer_script')

<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

<script>
    $('#submitLoacaleEn').on('click',function(){
        $('#locale').val('en');
        $('#changeLocale').submit();
    });
    $('#submitLoacaleBn').on('click',function(){
        $('#locale').val('bn');
        $('#changeLocale').submit();
    });

    function submitLoacle()
    {

    }
</script>

<script>
    (function($) { // Begin jQuery
        $(function() { // DOM ready
            // If a link has a dropdown, add sub menu toggle.
            $('nav ul li a:not(:only-child)').click(function(e) {
                $(this).siblings('.nav-dropdown').toggle();
                // Close one dropdown when selecting another
                $('.nav-dropdown').not($(this).siblings()).hide();
                e.stopPropagation();
            });
            // Clicking away from dropdown will remove the dropdown class
            $('html').click(function() {
                $('.nav-dropdown').hide();
            });
            // Toggle open and close nav styles on click
            $('#nav-toggle').click(function() {
                $('nav ul').slideToggle();
            });
            // Hamburger to X toggle
            $('#nav-toggle').on('click', function() {
                this.classList.toggle('active');
            });
        }); // end DOM ready
    })(jQuery); // end jQuery
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65d076668d261e1b5f61ba81/1hmr4t0p6';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->


@stack('footer_script')

</body>
</html>
