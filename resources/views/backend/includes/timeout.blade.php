<!-- TimeOut Dialog-->
<div class="modal fade" id="session-dialog">
  <div class="modal-dialog" style="width:400px;" role="document">
      <div class="modal-content timeout-modal">
          <div class="modal-body">
              <button class="close" data-dismiss="modal" aria-label="Close"></button>
              <div class="text-center mt-3 mb-4"><i class="ti-lock timeout-icon"></i></div>
              <div class="text-center h4 mb-3">Set Auto Logout</div>
              <p class="text-center mb-4">You are about to be signed out due to inactivity.<br>Select after how many minutes of inactivity you log out of the system.</p>
              <div id="timeout-reset-box" style="display:none;">
                  <div class="form-group text-center">
                      <button class="btn btn-danger btn-fix btn-air" id="timeout-reset">Deactivate</button>
                  </div>
              </div>
              <div id="timeout-activate-box">
                  <form id="timeout-form" action="javascript:;">
                      <div class="form-group pl-3 pr-3 mb-4">
                          <input class="form-control form-control-line" type="text" name="timeout_count" placeholder="Minutes" id="timeout-count">
                      </div>
                      <div class="form-group text-center">
                          <button class="btn btn-primary btn-fix btn-air" id="timeout-activate">Activate</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End TimeOut Dialog-->
