<header id="header">
{{-- <div class="header-links">
<div class="container">
<ul class="list-inline social-links text-right">
<li>
<a href="https://www.facebook.com/cryptoluxofficial/" target="_blank"><i class="fa fa-facebook-f"></i></a>
</li>
<li>
<a href="https://twitter.com/cryptoluxio" target="_blank"><i class="fa fa-twitter"></i></a>
</li>
<li>
<a href="https://t.me/CryptoLuxCLX" target="_blank"><i class="fa fa-send"></i></a>
</li>
<li>
<a href="https://t.me/CLXCommunity" class="wide">
<i class="fab fa-telegram-plane"></i>
Community&nbsp;
</a>
</li>
</ul>
</div>
</div> --}}

<nav class="navbar navbar-expand-lg" style="z-index: 20;">
  <div class="container">

    {{-- <a class="navbar-brand" href="index.html"><img src="{{asset("css/bundles/homepage/landing/assets/img/logo.png")}}"> PIS</a> --}}

    <a  class="navbar-brand" href="/" style="color: white;">
      {{-- <img src="{{asset("css/bundles/frontend/images/logo1.jpeg")}}"></a> --}}
      <img  src="{{asset("css/bundles/frontend/images/s.png")}}"> {{-- <span>PRESTIGE</span> --}}</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup" style="height: vh-0;">
        <a class="close d-block d-md-none" href="#" data-toggle="collapse" data-target="#navbarNavAltMarkup"><i class="fa fa-times"></i></a>
        <ul class="navbar-nav ml-auto">
         @guest

         <li class="nav-item">
          <a class="nav-item nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownInvestment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Investment
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownInvestment" style="opacity: 0.95; z-index: 10000000">
            <a class="dropdown-item" href="{{ route('show.packages')}}">Cryptocurrencies</a>
            <a class="dropdown-item" href="/non_farm_payroll">Non-Farm Payroll [NFP]</a>
            <a class="dropdown-item" href="{{ route('show.cloud_mining')}}">Cloud Mining</a>
            <a class="dropdown-item" href="/pis_loan">Loans</a>
            <a class="dropdown-item" href="/hedge_fund">Hedge Funds</a>
            {{-- <a class="dropdown-item" href="#">Forex</a> --}}
            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Company
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownCompany" style="opacity: 0.95; z-index: 10000000">
            <a class="dropdown-item" href="/aboutus">About Us</a>
            <a class="dropdown-item" href="{{asset("css/bundles/homepage/docs/terms-conditions.pdf")}}" target="_blank">Terms and Conditions</a>
            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-item nav-link" href="/faq">Faq</a>
        </li>
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="/payouts">Payouts</a>
        </li> --}}
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="bundles/homepage/docs/whitepaper.pdf" target="_blank">Whitepaper</a>
        </li> --}}
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="/team">Team</a>
        </li> --}}

        @else
        <li class="nav-item">
          <a class="nav-item nav-link" href="{{ route('home')}}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/login" id="navbarDropdownInvestment" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Investment
          </a>
          <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownInvestment" style="opacity: 0.8; text-align:center;">
            <a class="dropdown-item" href="{{ route('show.packages')}}">Cryptocurrencies</a>
            <a class="dropdown-item" href="/non_farm_payroll">Non-Farm Payroll [NFP]</a>
            <a class="dropdown-item" href="{{ route('show.cloud_mining')}}">Cloud Mining</a>
            <a class="dropdown-item" href="/pis_loan">Loans</a>
            <a class="dropdown-item" href="/hedge_fund">Hedge Funds</a>
            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCompany" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Company
          </a>
          <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownCompany" style="opacity: 0.7;">
            <a class="dropdown-item" href="/aboutus">About Us</a>
            {{-- <a class="dropdown-item" href="#">Our Policies</a> --}}
            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
          </div>
        </li>
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="/referral">Referral</a>
        </li> --}}
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="en/representative.html">Representative</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-item nav-link" href="/faq">Faq</a>
        </li>
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="/payouts">Payouts</a>
        </li> --}}
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="bundles/homepage/docs/whitepaper.pdf" target="_blank">Whitepaper</a>
        </li> --}}
{{--         <li class="nav-item">
          <a class="nav-item nav-link" href="/team">Team</a>
        </li> --}}
        @endguest
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->username }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest


      <li class="nav-item dropdown country">
    {{--     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
          <span class="flag-icon flag-icon-gb"></span> EN
        </a> --}}

        <div id="google_translate_element" ></div>
        <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
          }
        </script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      </li>
    </ul>
  </div>
</div>
</nav>
</header>