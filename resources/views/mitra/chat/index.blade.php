@extends('layouts.mitra.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <div class="card">
                        <div class="chat">
                            <div class="chat-header clearfix">
                              {{-- <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="avatar"> --}}
                              <div class="chat-about">
                                <div class="chat-with">Users</div>
                              </div>
                            </div>
                          </div>
                        <div class="body">
                          <div id="plist" class="people-list">
                            <div class="mb-1">
                              <div id="chat-scroll">
                                <ul class="chat-list list-unstyled m-b-0" wire:poll="render">
                                @foreach ($users as $user)
                                    <a href="{{ route('mitra.chat.show', $user->kandidat->user->id) }}">
                                        <li class="clearfix" wire:click="getUser({{ $user->kandidat->user->id }})" id="user_{{ $user->kandidat->user->id }}">
                                            <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="avatar">
                                            <div class="about">
                                              <div class="name">{{ $user->kandidat->user->name }}</div>
                                              <div class="status">
                                                Online </div>
                                            </div>
                                          </li> 
                                    </a>
                                    @endforeach
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                      <div class="card">
                        <div class="chat">
                          <div class="chat-header clearfix">
                            {{-- <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="avatar"> --}}
                            <div class="chat-about">
                              <div class="chat-with">Chat</div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-box" id="mychatbox">
                          <div class="card-body chat-content">
                            No messages to show
                          </div>
                          <div class="card-footer chat-form">
                            <form wire:submit.prevent="SendMessage" enctype="multipart/form-data">
                              <input wire:model="message" type="text" class="form-control" 
                              placeholder="Type a message" id="text" name="text">
                              <input type="hidden" name="id">
                              <button class="btn btn-primary" id="submitform">
                                <i class="far fa-paper-plane"></i>
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
    </div>
@endsection
