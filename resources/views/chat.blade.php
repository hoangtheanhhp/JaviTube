<!-- resources/views/chat.blade.php -->
{{-- <script src="https://vuejs.org/js/vue.js"></script> --}}
@extends('layouts.master')
{{-- <div id="app">
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
</div>
<script>
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
</script>
<style>
  .chat {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .chat li {
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
  }
  
  .chat li .chat-body p {
    margin: 0;
    color: #777777;
  }
  
  .panel-body {
    overflow-y: scroll;
    height: 350px;
  }
  
  ::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
  }
  
  ::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5;
  }
  
  ::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
  }
  .open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
  }
  
  /* The popup chat - hidden by default */
  .chat-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }
  
  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }
  
  /* Full-width textarea */
  .form-container textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    resize: none;
    min-height: 200px;
  }
  
  /* When the textarea gets focus, do something */
  .form-container textarea:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Set a style for the submit/send button */
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }
  
  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }
  
  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;}
  </style> --}}