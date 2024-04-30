<div class='alert alert-danger'>your account is under review , come back later  </div>
<script>
    setTimeout(function() {
    window.location.href = "{{ url('/') }}";  // Replace with your desired route
    }, 5000); // Delay in milliseconds (5 seconds in this case)
    </script>