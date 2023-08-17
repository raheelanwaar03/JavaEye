<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://raheelanwaar.com/" target="_blank">{{env('APP_NAME')}}</a> 2022
        </p>
    </div>
</div>

</div>

<script>
    function showFullscreenImage(imageElement) {
        const fullscreenImage = document.querySelector("#fullscreen-image img");
        fullscreenImage.src = imageElement.src;
        document.getElementById("fullscreen-image").style.display = "flex";
    }

    function hideFullscreenImage() {
        document.getElementById("fullscreen-image").style.display = "none";
    }
</script>

<!-- Required vendors -->
<script src="{{ asset('admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js') }}/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/deznav-init.js') }}"></script>
<script src="{{ asset('admin/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('admin/js/dashboard/dashboard-1.js') }}"></script>

{{-- data table --}}

<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/js/plugins-init/datatables.init.js') }}"></script>


</body>

</html>
