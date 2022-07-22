<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"> <?= isset($_SESSION['auth']) ? 'Hi! '. $_SESSION['auth_user']['name'] : 'Hey!' ?>  </h5> 
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
              <p>
                <?= isset($_SESSION['message']) ? $_SESSION['message'] : "" ?>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") {
?>
  <script>
    $(document).ready(function() {
      $("#myModal").modal('show');
    })
  </script>
<?php
  unset($_SESSION['message']);
}
?>