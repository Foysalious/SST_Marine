<script src="{{ asset('Backend/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('Backend/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ asset('Backend/assets/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{ asset('Backend/dist/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{ asset('Backend/dist/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('Backend/dist/js/custom.min.js')}}"></script>
<script src="{{ asset('Backend/dist/js/custom.js')}}"></script>

<!--This page JavaScript -->
<script src="{{ asset('Backend/dist/js/pages/dashboards/dashboard1.js')}}"></script> 
<!-- Charts js Files -->
<script src="{{ asset('Backend/assets/libs/flot/excanvas.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot/jquery.flot.time.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot/jquery.flot.stack.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
<script src="{{ asset('Backend/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('Backend/assets/rte.js')}}"></script>
<script src="{{ asset('Backend/assets/plugins/all_plugins.js')}}"></script>
<script src="{{ asset('Backend/dist/js/pages/chart/chart-page-init.js')}}"></script>


<!--Include the JS & CSS-->



<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    var editor1 = new RichTextEditor("#summary-ckeditor");
 
</script>
<script>var editor2 = new RichTextEditor("#text");</script>
<script>var editor2 = new RichTextEditor("#client");</script>

@yield('per_page_js')
