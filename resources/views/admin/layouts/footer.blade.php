
<footer class="footer">

  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


<!-- plugins:js -->
<script src="{{url('Admin/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{url('Admin/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{url('Admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{url('Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{url('Admin/js/dataTables.select.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{url('Admin/js/off-canvas.js')}}"></script>
<script src="{{url('Admin/js/hoverable-collapse.js')}}"></script>
<script src="{{url('Admin/js/template.js')}}"></script>
<script src="{{url('Admin/js/settings.js')}}"></script>
<script src="{{url('Admin/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{url('Admin/js/dashboard.js')}}"></script>
<script src="{{url('Admin/js/Chart.roundedBarCharts.js')}}"></script>
<script>
    
      let currentNumber = 0;
        const targetNumber = 200;
        const duration = 100; // Animation duration in milliseconds
        const intervalTime = 1; // Update interval in milliseconds
        const increment = targetNumber / (duration / intervalTime);

        const numberElement = document.getElementById('number');
        const numberElement2 = document.getElementById('number2');
        const numberElement3 = document.getElementById('number3');
        const numberElement4 = document.getElementById('number4');

        const interval = setInterval(() => {
            currentNumber += increment;
            if (currentNumber >= targetNumber) {
                currentNumber = targetNumber;
                clearInterval(interval); // Stop the animation
            }
            numberElement.textContent = Math.round(currentNumber);
            numberElement2.textContent = Math.round(currentNumber);
            numberElement3.textContent = Math.round(currentNumber);
            numberElement4.textContent = Math.round(currentNumber);
        }, intervalTime);
</script>
<!-- End custom js for this page-->

