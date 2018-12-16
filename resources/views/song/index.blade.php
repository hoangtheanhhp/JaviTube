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
    <div class="col-md-12 like-padding">
      <div class="col-md-6 like-padding">
        <button class="button button-like" id="like">
          <i class="fa fa-heart"></i>
          <span>Like</span>
        </button>
        <button class="button button-like liked" id="unlike">
          <i class="fa fa-heart"></i>
          <span>Unlike</span>
        </button>
      </div>
      <div class="col-md-6 like-padding">
        <h1>
          <div id="liked_number">
            {{\DB::table('like')->where('song_id',$song->id)->count()}} liked!!!
          </div>
          
        </h1>
      </div>
    </div>
    <div class="col-md-12 option-song">
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
    </div>

      <div class="col-md-12">
        <div class="row">
          <div v-if="user">
            <div class="col-sm-2">
              <div class="thumbnail">
                <img class="img-responsive user-photo" src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/12106871_583655928440532_93649083947705630_n.jpg?_nc_cat=110&_nc_ht=scontent.fhan2-4.fna&oh=6b305cb42ad984bbe5c9f7c11e6bfb0e&oe=5C687437">
              </div><!-- /thumbnail -->
            </div><!-- /col-sm-1 -->

            <div class="col-sm-10">
              <div class="panel panel-default">
              <form>
                <div class="form-group">
                  <label class="label-comment" for="comment">Comment:</label>
                  <textarea class="form-control comment" rows="5" id="commenttext" name="content" placeholder="How do you feel? Comment here!"></textarea>
                </div>

                <div class="panel-footer">
                  <button class="btn btn-warning" @click.prevent="postComment">Comment</button>
                </div>
              </form>
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