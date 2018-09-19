<div class="modal fade" id="modalPostVideo" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                        <div class="login-right">
                            <h3>Thông tin bài hát</h3>
                            <form action="{{ route('song.store') }}" method="post">
                                <div>
                                    <h4>Tên bài hát :</h4>
                                    <input type="text" name="name" required="">
                                </div>
                                <div>
                                    <h4>Link Youtube:</h4>
                                    <input type="text" name="code" required="">
                                </div>
                                <div>
                                    <h4>Tên ca sĩ:</h4>
                                    <select name="singer_id">
                                        @foreach( $singers as $singer)
                                            <option value="{{ $singer->id }}">
                                                {{ $singer->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <h4>Sub Nhật:</h4>
                                    <textarea name="lyric_jan"></textarea>
                                </div>
                                <div>
                                    <h4>Sub Việt:</h4>
                                    <textarea name="lyric_vie"></textarea>
                                </div>
                                <div>
                                    <input type="submit" value="Gửi" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
