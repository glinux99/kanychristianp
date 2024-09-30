{{-- <script>var hostUrl = "assets/";</script> --}}
		{{-- <!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="admin/assets/plugins/global/plugins.bundle.js"></script>
		<script src="admin/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
        <script src="admin/assets/js/custom/modals/new-target.js"></script>
		<script src="admin/assets/js/custom/widgets.js"></script>
		<script src="admin/assets/js/custom/apps/chat/chat.js"></script>
		<script src="admin/assets/js/custom/modals/create-app.js"></script>
		<script src="admin/assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript--> --}}
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="admin/assets/plugins/global/plugins.bundle.js"></script>
		<script src="admin/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="admin/assets/js/custom/modals/new-target.js"></script>
		<script src="admin/assets/js/custom/widgets.js"></script>
		<script src="admin/assets/js/custom/apps/chat/chat.js"></script>
		<script src="admin/assets/js/custom/modals/create-app.js"></script>
		<script src="admin/assets/js/custom/modals/upgrade-plan.js"></script>
            <script>
                function updateFunction(self){
                    // alert(self);
                    document.getElementById('id').value
                    document.getElementById("title").value=self.title;
                    document.getElementById("description").value=self.description;
                    // alert(123);
                }

                function updateFunctionAuthor(self){
                    // alert(self.id);
                    document.getElementById('id').value=self.id;
                    // document.getElementById("title").value=self.title;
                    document.getElementById("name").value=self.user.name;
                    document.getElementById("description").value=self.user.description ;
                    // alert(123);
                }

            </script>
