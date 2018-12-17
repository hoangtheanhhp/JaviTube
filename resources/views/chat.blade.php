<!-- resources/views/chat.blade.php -->
{{-- <script src="https://vuejs.org/js/vue.js"></script> --}}
@extends('layouts.app')

@section('content')
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup panel panel-default form-container" id="myForm">
    <div class="panel-heading">Chats</div>
    <div class="panel-body">
      <chat-messages :messages="messages"></chat-messages>
  </div>
    <div class="panel-footer">
      <chat-form
          v-on:messagesent="addMessage"
          :user="{{ Auth::user() }}"
      ></chat-form>
  </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
</div>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>
@endsection
