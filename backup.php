if($_SESSION['success']){
    ?>
<div class="position-fixed top-0 start-0 w-100 bg-light" style="z-index: 50;">
  <div class="container py-12">
    <div class="d-flex justify-content-center">
      <div class="alert alert-success bg-success px-8 border-0" role="alert">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0 pe-6">
            <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#5B627C"></rect><line x1="9.35355" y1="16.6464" x2="13.3536" y2="20.6464" stroke="#19191B"></line><line x1="23.3536" y1="11.3536" x2="13.3536" y2="21.3536" stroke="#19191B"></line></svg>
          </div>
          <div class="py-2 ps-5 border-start border-dark-light border-opacity-10">
            <span class="d-inline-block fw-semibold">Data saved successfully
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <?php
}
?>
<script>
  // Hide the message after 10 seconds
  setTimeout(function() {
    document.getElementById('successMessage').style.display = 'none';
  }, 10000);  // 10000ms = 10 seconds
</script>