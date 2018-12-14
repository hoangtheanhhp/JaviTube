@extends('layouts.master')
@section('content')
@include('includes.header')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $song->youtube_id }}?rel=0&autoplay=1&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div>
          @if (Auth::check())
            @if (Auth::user()->liked($song->id))
            <a href="{{route('songs.unlike',$song->id)}}">unlike</a>
            @else
            <a href="{{route('songs.like',$song->id)}}">like</a>
            @endif
          @else
          <a href="#" data-toggle="modal" data-target="#myModal4"><span>Like</span></a> 
          @endif

          <span>{{ $song->be_liked->count() }} likes</span>
        </div>
      </div>
      <div class="col-md-6">
        <ul class="nav nav-tabs">
            <li><a href="#originalLyric">Original</a></li>
            <li><a href="#translation">Translation</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="originalLyric"><p class="lyric">{{ $song->original_lyric }}</pre></div>
            <div role="tabpanel" class="tab-pane fade" id="romajiLyric"><pre>{{ $song->vietnam_lyric }}</pre></div>
            <div role="tabpanel" class="tab-pane fade" id="Events"></div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div v-if="user">
            <div class="col-sm-2">
              <div class="thumbnail">
                <img class="img-responsive user-photo" src="">
              </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-10">
              <div class="panel panel-default">
                <div class="panel-body">
                  <textarea id="commenttext" name="content" placeholder="How do you feel? Comment here!"></textarea>
                </div>
                <div class="panel-footer">
                  <button class="btn btn-warning" @click.prevent="postComment">Comment</button>
                </div>
              </div>
            </div>
          </div>
          <div v-else>
            <h4>You must be logged in to submit a comment!</h4> <a href="#" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
          </div>

          <div v-for="comment in comments">
            <div class="col-sm-2">
              <div class="thumbnail">
                <img class="img-responsive user-photo" src="@{{ comment.user.avatar }}" alt="@{{ comment.user.name + ' Profile Picture' }}">
              </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-10">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <strong>@{{comment.user.name}}</strong> <span class="text-muted">on @{{comment.created_at}}</span>
                </div>
                <div class="panel-body">
                  @{{comment.body}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


</div>
@include('modal.sign-in')
@include('includes.footer')
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
          $("#like").click(function(){
            $.get("{{route('songs.like',$song->id)}}",function(data, status){
              $("#like").hide();
              $("#unlike").show();
              like_num();
            });
          });
          $("#unlike").click(function(){
            $.get("{{route('songs.unlike',$song->id)}}",function(data, status){
              $("#unlike").hide();
              $("#like").show();
              like_num();
            });
          });
          like_num();
          $.get("{{route('songs.liked',$song->id)}}",function(data,status){
            if (data == true){
              $("#unlike").hide();
              $("#like").show();
            } else{
              $("#unlike").hide();
              $("#like").show();
            }
          });
        });

        
        function like_num() {
          $.get("{{route('songs.like_num',$song->id)}}",function(data,status){
            $("#liked_number").text(data+" liked!!!")
          });
        }
    </script>
    <script>
      const app = new Vue({
          el: '#app',
          data: {
              comments: {},
              commentBox: '',
              song: {!! $song->toJson() !!},
              user: {!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
          },
          mounted() {
              this.getComments();
          },
          methods: {
              getComments() {
                  axios.get('/api/songs/'+this.song.id+'/comments')
                       .then((response) => {
                           this.comments = response.data
                       })
                       .catch(function (error) {
                           console.log(error);
                       }
                  );
              },
              postComment() {
                  axios.post('/api/songs/'+this.song.id+'/comment', {
                      api_token: this.user.api_token,
                      body: this.commentBox
                  })
                  .then((response) => {
                      this.comments.unshift(response.data);
                      this.commentBox = '';
                  })
                  .catch((error) => {
                      console.log(error);
                  })
              }
          }
      })
    </script>
@endsection