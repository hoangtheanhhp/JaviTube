<div class="modal fade" id="modalReportForm" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                        <div class="login-right">
                            <h3>Report</h3>
                            <form action="{{ route('reports.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="song_id" value="{{ $song->id }}"
                                <div>
                                    <h4>Content</h4>
                                    <textarea name="content" value="{{ old('content') }}"></textarea>
                                </div>
                                <div>
                                    <input type="submit" value="Send" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
