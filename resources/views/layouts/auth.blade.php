<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	@include('layouts.admin.header')
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat  bgi-attachment-fixed" style="background-image: url(assets/images/main-slider/slide24.jpg">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">

					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Logo-->
					<a href="/" class="mb-1 d-flex align-items-center justify-content-center">
						<img alt="Logo" src="/assets/images/logo-2.png" class="h-150px" />
					</a>
					<!--end::Logo-->
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                            @csrf
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Se connecter</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Connecter pour publier des livres
								<a href="#" class="link-primary fw-bolder">ou demander une autorisation</a></div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Mot de passe</label>
									<!--end::Label-->
									<!--begin::Link-->
									<a href="#" class="link-primary fs-6 fw-bolder">Mot de passe oublie ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit"  class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Se connecter</span>
								</button>
								<!--end::Submit button-->
								<!--begin::Separator-->
								<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
								<!--end::Separator-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="admin/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continuer with Google</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="admin/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continuer with Facebook</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="admin/assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continuer with Apple</a>
								<!--end::Google link-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="/contact" class="text-white text-hover-primary px-2">A propos</a>
						<a href="mailto:support@kanychristian.com" class="text-white text-hover-primary px-2">Contact</a>
						<a href="/contact" class="text-white text-hover-primary px-2">Contact</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
        @include('layouts.admin.script')
	</body>
	<!--end::Body-->
</html>
