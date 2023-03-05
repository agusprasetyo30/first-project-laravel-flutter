<!-- Libs JS -->
<script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/libs/jquery/dist/jquery.slim.min.js') }}"></script>
{{-- <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('dist/libs/jqvmap/dist/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dist/libs/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('dist/libs/jqvmap/dist/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('dist/libs/jqvmap/dist/maps/continents/jquery.vmap.europe.js') }}"></script> --}}
<script src="{{ asset('dist/libs/peity/jquery.peity.min.js') }}"></script>
<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js') }}"></script>

@stack('extra-scripts')

<script>
	document.body.style.display = "block"
</script>