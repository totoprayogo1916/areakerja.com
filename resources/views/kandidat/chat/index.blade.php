@extends('layouts.mitra.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div>
                    <div class="row justify-content-center min-vh-75" wire:poll="mount">
                        {{-- @if (auth()->user()->is_admin == true) --}}
                        <div class="col-md-3" wire:init>
                            <div class="card" style="height: 100%">
                                <div class="card-header">
                                    Users
                                </div>
                                <div class="card-body chatbox p-0">
                                    <ul class="list-group list-group-flush" wire:poll="render">
                                        @foreach ($users as $user)
                                            <a href="{{ route('kandidat.chat.show', $user->user->id) }}"
                                                class="text-dark link">
                                                <li class="list-group-item" wire:click="getUser({{ $user->user->id }})"
                                                    id="user_{{ $user->user->id }}">
                                                    <img class="img-fluid avatar"
                                                        src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png">
                                                    {{ $user->user->name }}
                                                    {{-- @if ($user->is_online) <i
                                                            class="fa fa-circle text-success online-icon"></i> @endif
                                                    @if (filled($not_seen))
                                                        <div class="badge badge-success rounded">{{ $not_seen->count() }}
                                                        </div>
                                                    @endif --}}
                                                </li>
                                            </a>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- @endif --}}
                        <div class="col-md-8">
                            <div class="card" style="height: 100%">
                                <div class="card-header">
                                    Chat
                                    {{-- @if (isset($clicked_user)) {{ $clicked_user->name }}

                        @elseif(auth()->user()->is_admin == true)
                            Select a user to see the chat
                        @elseif($admin->is_online)
                            <i class="fa fa-circle text-success"></i> We are online
                        @else
                            Messages
                        @endif --}}
                                </div>
                                <div class="card-body message-box">
                                    No messages to show
                                </div>
                                {{-- @if (auth()->user()->is_admin == false) --}}
                                <div class="card-footer">
                                    <form wire:submit.prevent="SendMessage" enctype="multipart/form-data">
                                        {{-- <div wire:loading wire:target='SendMessage'>
                                            Sending message . . .
                                        </div>
                                        <div wire:loading wire:target="file">
                                            Uploading file . . .
                                        </div> --}}
                                        {{-- @if ($file)
                                    <div class="mb-2">
                                        You have an uploaded file <button type="button" wire:click="resetFile"
                                            class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Remove
                                            {{ $file->getClientOriginalName() }}</button>
                                    </div>
                                @else
                                    No file is uploaded.
                                @endif --}}
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input wire:model="message"
                                                    class="form-control input shadow-none w-100 d-inline-block"
                                                    placeholder="Type a message">
                                            </div>
                                            {{-- @if (empty($file))
                                        <div class="col-md-1">
                                            <button type="button" class="border" id="file-area">
                                                <label>
                                                    <i class="fa fa-file-upload"></i>
                                                    <input type="file" wire:model="file">
                                                </label>
                                            </button>
                                        </div>
                                    @endif --}}
                                            <div class="col-md-4">
                                                <button class="btn btn-primary d-inline-block w-100"><i
                                                        class="far fa-paper-plane"></i>
                                                    Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
