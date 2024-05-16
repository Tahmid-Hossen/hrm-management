@php $assetVersion=getAssetVersion(); @endphp

{{-- <script src="https://cdn.jsdelivr.net/npm/@tabler/icons@1.74.0/icons-react/dist/index.umd.min.js"></script> --}}
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
  integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script src="http://codeseven.github.io/toastr/build/toastr.min.js"></script>
<script src="{{ asset('/assets/js/theme-switcher.js') }}"></script>
<script src="{{ asset("/assets/{$assetVersion}/js/scripts.js") }}"></script>

{{--<script src="{{ asset('/assets/js/datatable.js') }}"></script>--}}
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.js"></script>

<script src="{{ asset('/assets/js/lodash.min.js') }}"></script>
<script src="{{ asset('/assets/js/apex-charts.min.js') }}"></script>
<script src="{{ asset('/assets/js/preline-helper.js') }}"></script>

<script src="{{ asset('/assets/js/core-full-calendar.min.js') }}"></script>
<script src="{{ asset('/assets/js/daygrid-full-calendar.min.js') }}"></script>

<script>

    //new DataTable('#example-trash')

    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif

    @if (Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>

