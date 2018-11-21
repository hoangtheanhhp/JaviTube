<div class="modal fade" id="changePassword" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="login-right">
                    <h3>Change Password</h3>
                    <form action="{{ route('users.change.password')}}" method="post">
                        @csrf
                        <div>
                            <h4>Password :</h4>
                            <input type="password" name="password" required>
                        </div>
                        <div>
                            <h4>New Password :</h4>
                            <input type="password" name="new_password" required>
                        </div>
                        <div>
                            <h4>Re-new Password :</h4>
                            <input type="password" name="renew_password" required>
                        </div>
                        <div>
                            <input type="submit" value="Change" >
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
