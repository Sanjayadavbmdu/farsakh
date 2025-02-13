 <!-- Vendor js -->
 <script src="{{asset('tenant/assets/js/vendor.min.js')}}"></script>

 <!-- App js -->
 <script src="{{asset('tenant/assets/js/app.js')}}"></script>

 <!-- Apex Chart js -->
 <script src="{{asset('tenant/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

 <!-- Projects Analytics Dashboard App js -->
 <script src="{{asset('tenant/assets/js/pages/dashboard.js')}}"></script>



  <!-- Datatables js -->
  <script src="{{asset('tenant/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('tenant/assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".change-lang").forEach(item => {
            item.addEventListener("click", function () {
                let selectedLang = this.getAttribute("data-lang");
                
                // Update direction based on language
                if (selectedLang === "ar") {
                    document.documentElement.setAttribute("dir", "rtl");
                } else {
                    document.documentElement.setAttribute("dir", "ltr");
                }

                // Optional: Save selection in localStorage
                localStorage.setItem("selectedLang", selectedLang);
            });
        });

        // Load saved language preference
        let savedLang = localStorage.getItem("selectedLang");
        if (savedLang) {
            document.documentElement.setAttribute("dir", savedLang === "ar" ? "rtl" : "ltr");
        }
    });
</script>
