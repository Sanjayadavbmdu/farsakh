<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Office Dashboard| Farsak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="{{ asset('tenant/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />



    <!-- Datatables css -->
    <link href="{{ asset('tenant/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('tenant/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('tenant/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('tenant/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />


    <script type="text/javascript">
        let translateInstance = null;

        function googleTranslateElementInit() {
            translateInstance = new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ar',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');

            // Initialize with saved language
            const savedLang = localStorage.getItem('selectedLanguage');
            if (savedLang === 'ar') {
                triggerArabicTranslation();
            }
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Theme Config Js -->
    <script src="{{ asset('tenant/assets/js/config.js') }}"></script>
    <style>
        [dir="rtl"] {
            direction: rtl;
            text-align: right;
        }

        /* Fix dropdown position for RTL */
        [dir="rtl"] .dropdown-menu-end {
            right: auto !important;
            left: 0 !important;
        }

        /* Hide Google's default translator */
        .skiptranslate {
            display: none !important;
        }

        /* Prevent body shift */
        body {
            top: 0 !important;
        }
    </style>

    <style>
        .btn-primary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }

        .btn-secondary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }


        .btn-primary:hover {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }

        .btn-primary {
            background-color: #206843;
            border-color: #206843;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Language Dropdown -->
    {{-- <div class="container text-end mt-3">
        <div id="google_translate_element"></div>
    </div> --}}

    <!-- Begin page -->
    <div class="wrapper">

        <!-- Menu -->
        <!-- Sidenav Menu Start -->


        @include('office.includes.sidebar')
        @include('office.includes.right-sidebar')
        <!-- Sidenav Menu End -->

        <!-- Topbar Start -->
        @include('office.includes.header')
        <!-- Topbar End -->


        <div class="page-content">

            @yield('content')
        </div>
    </div>

    @include('office.includes.foot')

    @yield('script')
    <!-- Language Handling Script -->
    <script>
        // Initialize language on load
        document.addEventListener('DOMContentLoaded', () => {
            const savedLang = localStorage.getItem('selectedLanguage') || 'en';
            setLanguage(savedLang, false);

            // Hide Google's banner
            const observer = new MutationObserver(() => {
                const banner = document.querySelector('.goog-te-banner');
                if (banner) banner.style.display = 'none';
            });
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });

        // Language change handler
        function setLanguage(lang, userTriggered = true) {
            if (lang === localStorage.getItem('selectedLanguage') && userTriggered) return;

            // Update UI state
            document.documentElement.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');
            document.getElementById('selectedLang').textContent = lang === 'ar' ? 'Ar' : 'En';
            localStorage.setItem('selectedLanguage', lang);

            // Handle translation
            if (lang === 'ar') {
                triggerArabicTranslation();
            } else {
                resetToEnglish();
            }
        }

        function triggerArabicTranslation() {
            const iframe = document.querySelector('.goog-te-menu-frame');
            if (iframe) {
                iframe.onload = () => {
                    const select = iframe.contentDocument.querySelector('.goog-te-menu2-select');
                    if (select) {
                        select.value = 'ar';
                        select.dispatchEvent(new Event('change'));
                    }
                };
                iframe.contentWindow.location.reload();
            }
        }

        function resetToEnglish() {
            if (translateInstance) {
                translateInstance.restore();
                document.cookie = 'googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
                document.documentElement.setAttribute('dir', 'ltr');
            }
        }

        // Event listeners
        document.querySelectorAll('.change-lang').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                setLanguage(btn.dataset.lang);
            });
        });
    </script>






</body>

</html>
