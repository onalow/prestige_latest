<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- <script src="{{asset("css/bundles/frontend/js/jquery.min.js")}}"></script> --}}
<script src="{{asset("css/bundles/frontend/js/popper.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/bootstrap.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/d3Chart.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/c3Chart.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/clipboard.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/jquery.tabelizer.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/jquery.slimscroll.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/cld-cutom.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/clx-be-custom.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/cld-home.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/chartli.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/raphael.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/morris.min.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/cld-referral-chart.js")}}"></script>
<script type="text/javascript" src="{{asset("css/bundles/frontend/js/loader.js")}}"></script>
<script src="{{asset("css/bundles/frontend/js/cld-bar-chart.js")}}"></script>
    @include('sweet::alert')
    @stack('scripts')