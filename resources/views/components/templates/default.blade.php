<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.5
* @link https://github.com/tabler/tabler
* Copyright 2018-2019 The Tabler Authors
* Copyright 2018-2019 codecalm.net Paweł Kuna
* Licensed under MIT (https://tabler.io/license)
-->
<html lang="en">
	@include('components.templates.partials._head')

	<body class="antialiased">
		@include('components.templates.partials._sidebar')

		<div class="page">
			<div class="content">
				<div class="container-xl">
				<!-- Page title -->
				<div class="page-header">
						<div class="row align-items-center">
						<div class="col-auto">
							<h2 class="page-title">
							{{ $title ?? 'Dashboard' }}
							</h2>
						</div>
						</div>
				</div>
				<div class="row row-deck row-cards">
						{{ $slot }}
				</div>
				</div>

				@include('components.templates.partials._footer')
			</div>
		</div>

		@include('components.templates.partials._script')
		
	</body>
</html>