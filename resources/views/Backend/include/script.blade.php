<script src="{{ asset('backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('backend/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('backend/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('backend/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('backend/dist/js/custom.min.js')}}"></script>
<script src="{{ asset('backend/dist/js/custom.js')}}"></script>

<!--This page JavaScript -->
<!-- <script src="{{ asset('backend/dist/js/pages/dashboards/dashboard1.js')}}"></script> -->
<!-- Charts js Files -->
<script src="{{ asset('backend/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{ asset('backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('backend/dist/js/pages/chart/chart-page-init.js')}}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
    CKEDITOR.replace( 'text-ckeditor' );
</script>


@yield('per_page_js')