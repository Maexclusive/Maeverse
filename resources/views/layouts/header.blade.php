<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />
	<!-- ================== END core-css ================== -->

	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{ asset('plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
</head>
<body>
    <main class="py-4">
        @yield('content')
    </main>
    <!-- ================== BEGIN core-js ================== -->

	<script src="{{ asset('js/vendor.min.js') }}"></script>
	<script src="{{ asset('js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/jszip/dist/jszip.min.js')}}"></script>

	<script src="{{ asset('plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
	<script src="{{ asset('plugins/datatables.net-fixedheader-bs5/js/fixedHeader.bootstrap5.min.js')}}"></script>
	<script src="{{ asset('js/demo/table-manage-fixed-header.demo.js')}}"></script>
	<script src="{{ asset('plugins/@highlightjs/cdn-assets/highlight.min.js')}}"></script>
	<script src="{{ asset('js/demo/render.highlight.js')}}"></script>
	<!-- ================== END page-js ================== -->

	<!-- ================== BEGIN page-js ================== -->
	<!-- <script src="{{ asset('plugins/gritter/js/jquery.gritter.js')}}"></script> -->
	<script src="{{ asset('plugins/flot/source/jquery.canvaswrapper.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.colorhelpers.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.saturated.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.browser.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.drawSeries.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.uiConstants.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.time.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.resize.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.pie.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.crosshair.js')}}"></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.categories.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.navigate.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.touchNavigate.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.hover.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.touch.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.selection.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.symbol.js')}} "></script>
	<script src="{{ asset('plugins/flot/source/jquery.flot.legend.js')}} "></script>
	<script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.min.js')}} "></script>
	<script src="{{ asset('plugins/jvectormap-next/jquery-jvectormap.min.js')}} "></script>
	<script src="{{ asset('plugins/jvectormap-content/world-mill.js')}} "></script>
	<script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}} "></script>
	<script src="{{ asset('js/demo/dashboard.js')}} "></script>




    <!-- START Custom End Page JQuery -->


<script>
  var options = {
    dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex me-0 me-md-3"l><"d-block d-lg-inline-flex"B>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-md-5"i><"col-md-7"p>>>',
    buttons: [
      { extend: 'copy', className: 'btn-sm' },
      { extend: 'csv', className: 'btn-sm' },
      { extend: 'excel', className: 'btn-sm' },
      { extend: 'pdf', className: 'btn-sm' },
      { extend: 'print', className: 'btn-sm' }
    ],
    responsive: true,
    colReorder: true,
    keys: true,
    rowReorder: true,
    select: true
  };

  if ($(window).width() <= 767) {
    options.rowReorder = false;
    options.colReorder = false;
  }
  $('#data-table-combine').DataTable(options);
</script>
    <!-- END Custom End Page JQuery -->

    <script>
    $(document).ready(function() {
    // Get the selected element by ID
    var searchInput = $('#search_jquery');
    var DataButtons = $('.dt-buttons');

    // Add the class to the parent().parent().parent() HTML element
    searchInput.parent().parent().parent().removeClass('d-xl-block justify-content-center');
    searchInput.parent().parent().parent().addClass('d-flex justify-content-end');
    DataButtons.attr('style', 'transform: translate(10px, -25px);');
  });
</script>

	{{-- API JS Libs --}}
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	


	<!-- ================== END page-js ================== -->
</body>
