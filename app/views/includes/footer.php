<!-- Footer -->
<footer id="footer"
        class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
    <div class="row align-items-center">
        <!-- Footer Nav -->
        <div class="col-md-4 g-mb-10 g-mb-0--md">
            <ul class="list-inline text-center text-md-left mb-0">
                <!--<li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="#!">FAQ</a>
                </li>
                <li class="list-inline-item">
                    <span class="g-color-gray-dark-v6">|</span>
                </li>-->
                <li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" target="_blank" href="/contact">Contact</a>
                </li>
                <li class="list-inline-item">
                    <span class="g-color-gray-dark-v6">|</span>
                </li>
                <li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-secondary--hover" href="/cgu">CGU</a>
                </li>
            </ul>
        </div>
        <!-- End Footer Nav -->

        <!-- Footer Socials -->
        <div class="col-md-4 g-mb-10 g-mb-0--md">
            <ul class="list-inline g-font-size-16 text-center mb-0">
                <li class="list-inline-item g-mx-10">
                    <a href="https://www.facebook.com/untoitpartage" class="g-color-facebook g-color-secondary--hover">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-10">
                    <a href="https://twitter.com/UtpLorraine" class="g-color-twitter g-color-secondary--hover">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-10">
                    <a href="https://twitter.com/UtpLorraine" class="g-color-twitter g-color-secondary--hover">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Footer Socials -->

        <!-- Footer Copyrights -->
        <div class="col-md-4 text-center text-md-right">
            <small class="d-block g-font-size-default">&copy; <?=date('Y')?> Un Toit Partagé. Tous droits réservés. Développé par <a href="https://delia-solutions.com/">Delia-solutions</a></small>
        </div>
        <!-- End Footer Copyrights -->
    </div>
</footer>
<!-- End Footer -->
</div>
</div>
</main>

<!-- JS Global Compulsory -->
<script src="/assets/vendor/jquery/jquery.min.js"></script>
<script src="/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

<script src="/assets/vendor/popper.js/index.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

<script src="/assets/vendor/cookiejs/jquery.cookie.js"></script>


<!-- jQuery UI Core -->
<script src="/assets/vendor/jquery-ui/ui/widget.js"></script>
<script src="/assets/vendor/jquery-ui/ui/version.js"></script>
<script src="/assets/vendor/jquery-ui/ui/keycode.js"></script>
<script src="/assets/vendor/jquery-ui/ui/position.js"></script>
<script src="/assets/vendor/jquery-ui/ui/unique-id.js"></script>
<script src="/assets/vendor/jquery-ui/ui/safe-active-element.js"></script>

<!-- jQuery UI Helpers -->
<script src="/assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
<script src="/assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

<!-- jQuery UI Widgets -->
<script src="/assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- JS Plugins Init. -->
<script src="/assets/vendor/appear.js"></script>
<script src="/assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
<script src="/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/assets/vendor/chartist-js/chartist.min.js"></script>
<script src="/assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
<script src="/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/assets/vendor/bloodhound-js/js/bloodhound.min.js"></script>
<script src="/assets/vendor/bloodhound-js/js/typeahead.jquery.min.js"></script>
<script src="/assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- JS Unify -->
<script src="/assets/js/hs.core.js"></script>
<script src="/assets/js/components/hs.side-nav.js"></script>
<script src="/assets/js/helpers/hs.hamburgers.js"></script>
<script src="/assets/js/components/hs.range-datepicker.js"></script>
<script src="/assets/js/components/hs.datepicker.js"></script>
<script src="/assets/js/components/hs.dropdown.js"></script>
<script src="/assets/js/components/hs.scrollbar.js"></script>
<script src="/assets/js/components/hs.area-chart.js"></script>
<script src="/assets/js/components/hs.donut-chart.js"></script>
<script src="/assets/js/components/hs.bar-chart.js"></script>
<script src="/assets/js/helpers/hs.focus-state.js"></script>
<script src="/assets/js/components/hs.popup.js"></script>
<script src="/assets/js/helpers/hs.focus-state.js"></script>
<script src="/assets/js/helpers/hs.file-attachments.js"></script>
<script src="/assets/js/components/hs.file-attachement.js"></script>
<script src="/assets/js/components/hs.text-editor.js"></script>

<!-- JS Custom -->
<script src="/assets/js/custom.js"></script>
<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of custom select
        $('.js-select').selectpicker();

        // initialization of hamburger
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of charts
        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');

        // initialization of forms
        $.HSCore.helpers.HSFileAttachments.init();
        $.HSCore.components.HSFileAttachment.init('.js-file-attachment');
        $.HSCore.helpers.HSFocusState.init();

        // initialization of text editors
        $.HSCore.components.HSTextEditor.init('.js-text-editor');

        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav', {
            afterOpen: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            },
            afterClose: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            }
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
<script>
    function wip(){
        alert('Comme vous le savez colocationseniors.fr est en construction. Cette fonctionnalité n\'est pas encore disponible mais le sera prochainement !');
    }
</script>

</body>

</html>