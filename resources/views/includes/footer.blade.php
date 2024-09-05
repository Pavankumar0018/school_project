<div class="modal fade" id="modal-switch">
	<div class="modal-dialog  modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-header py-2">
				<h4 class="modal-title font-20 text-primary">Select Login As</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			@if (session('roles'))
				<div class="modal-body p-2">
					<form method="POST" class='' action="{{ url('second_login') }}"
						novalidate>
						@csrf
						@php
							$colorClasses = [
								'primary',
								'success',
								'danger',
								'warning',
								'info',
								'secondary',
								'dark',
							];
							$colorIndex = 0;
						@endphp
						@foreach (session('roles') as $row)
							<button class="btn text-capitalize m-1 btn-{{ $colorClasses[$colorIndex] }}" type="submit"
								value="{{ $row }}" name="submit">
								{{ $row }}
							</button>
							@php
								$colorIndex = ($colorIndex + 1) % count($colorClasses);
							@endphp
						@endforeach
					</form>
				</div>
			@endif
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<div class="overlay toggle-icon"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
    <p class="mb-0">Copyright © 2024 BWJ Tech Solutions. All right reserved.</p>
</footer>
</div>

<!-- PWA -->
<!-- <script src="assets/pwa/app.js"></script> -->

<!-- jQuery and Plugins -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Additional Plugins -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- App JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/my/fontawesome.js') }}"></script>
<script src="{{ asset('assets/my/myjs.js') }}"></script>
<script src="{{ asset('assets/my/sweetalert2.min.js') }}"></script>

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
