<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">{{ env('APP_NAME') }}</a> 2022
        </p>
    </div>
</div>

</div>


<script>
    // Get the button element
    const button = document.getElementById('myButton');

    // Check if a timestamp is stored in local storage
    const lastClickTimestamp = localStorage.getItem('lastClickTimestamp');

    if (lastClickTimestamp) {
        const currentTime = new Date().getTime();
        const timeSinceLastClick = currentTime - parseInt(lastClickTimestamp);

        // If less than 24 hours have passed, disable the button
        if (timeSinceLastClick < 24 * 60 * 60 * 1000) {
            button.disabled = true;
        }
    }

    // Add a click event listener to the button
    button.addEventListener('click', function() {
        // Disable the button
        button.disabled = true;

        // Store the current timestamp in local storage
        const currentTime = new Date().getTime();
        localStorage.setItem('lastClickTimestamp', currentTime.toString());

        // Enable the button after 24 hours
        setTimeout(function() {
            button.disabled = false;
        }, 24 * 60 * 60 * 1000);
    });
</script>


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
