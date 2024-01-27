<!-- section pay method -->
<section class="p-4">
    <div class="container">
        <div class="title">
            <h3>@lang('frontend.pay_method')</h3>
        </div>
        <div class="method_images">
            <img src="{{ asset('Frontend/image/pay_method/bank.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/mastercard.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/visacard.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/paypal.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/neteller.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/perfectmoney.png') }}" alt="" class="img-fluid">
            <img src="{{ asset('Frontend/image/pay_method/skrill.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</section>
<!-- section pay method -->

<!-- footer starts from here -->
<footer>
<div class="footer-top">
    <div class="container">
        <div class="text-center p-3" style="color: white">
            THE GOVERNMENT LOTTERY OFFICE<br>
359 SANAMABAIN NAM ROAD, TAMBON THA SAI, MUEANG NONTHUBURI DISTRICT, NONTHUBURI 40160 THAILAND.
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="text-center p-3" style="color: white">
            Copyright © 2024 <a href="https://sbit.com.bd">Skill Based IT</a> | <a href="#">Privacy & Policy</a>
        </div>
    </div>
</div>
</footer>
<!-- footer starts from here -->

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

<!-- timer js -->
<script src="{{ asset('Frontend/timer.js') }}"></script>
<!-- timer js -->

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

</body>
</html>
