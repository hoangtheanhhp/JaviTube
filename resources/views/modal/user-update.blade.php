<div class="modal fade" id="updateProfile" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-right">
                            <h3>Update Profile</h3>
                            <form method="POST" action="{{ route('users.update', ['id' => Auth::user()->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="sign-in">
                                    <img class="img-thumbnail" src="{{ Auth::user()->avatar }}">
                                    <input type="file" name="avatar">
                                </div>
                                <div class="sign-in">
                                    <h4>Name :</h4>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="sign-in">
                                    <h4>Birthday :</h4>
                                    <input type="date" name="birthday" value="{{ Auth::user()->birthday }}">
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="Update">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
