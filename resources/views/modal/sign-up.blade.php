<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-right">
                            <h3>SIGN UP</h3>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" name="email" required>
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" name="password" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Re-password :</h4>
                                    <input type="password" name="password_confirmation" required="">
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="SIGNUP">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
