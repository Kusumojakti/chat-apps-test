@extends('layouts.app')

@section('title', 'Chat Apps')

@section('content')
<div class="container-fluid">
    <header class="d-flex align-items-center p-3 text-white border-bottom">
        <button class="btn btn-outline-secondary d-md-none me-3" id="toggleSidebar">
            ☰
        </button>

        <img src="https://images.unsplash.com/photo-1526313199968-70e399ffe791?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="" class="rounded-circle me-3" style="width: 40px; height: 40px; object-fit: cover;">
        <div>
            <h6 class="mb-0 text-dark">{{ $chatData['results'][0]['room']['name'] }}</h6>
            <small class="text-secondary">{{ implode(', ', array_column($chatData['results'][0]['room']['participant'],
                'name')) }}</small>
        </div>
    </header>
</div>
<div class="container py-4">
    <div class="d-flex flex-column gap-3">
        @foreach ($chatData['results'] as $chat)
        @foreach ($chat['comments'] as $comment)
        @php
        $isMe = $comment['sender'] == 'customer@mail.com';
        @endphp

        <div class="d-flex {{ $isMe ? 'justify-content-end' : 'justify-content-start' }}">
            <div class="p-3 rounded shadow-sm {{ $isMe ? 'bg-primary text-white' : 'bg-light text-dark' }}"
                style="max-width: 75%;">


                <strong class="d-block {{ $isMe ? 'text-end' : 'text-start' }}">
                    {{ $comment['sender'] }}
                </strong>
                <hr>

                @if ($comment['type'] === 'text')
                {{ $comment['message'] }}
                @elseif ($comment['type'] === 'image')
                <img src="{{ $comment['file_url'] }}" alt="Image" class="img-fluid rounded"
                    style="max-width: 200px; height: auto;">
                @elseif ($comment['type'] === 'video')
                <a href="{{ $comment['file_url'] }}" target="_blank">
                    <img src="{{ $comment['thumbnail_url'] }}" alt="Video" style="max-width: 200px; height: auto;"
                        class="img-fluid rounded">
                    <div class="small text-muted">Klik untuk menonton video</div>
                </a>
                @elseif ($comment['type'] === 'pdf')
                <iframe src="https://docs.google.com/gview?url={{ urlencode($comment['file_url']) }}&embedded=true"
                    style="width:100%; height:250px;" frameborder="0">
                </iframe>
                @endif

                <div class="text-end small opacity-75">10:00 AM</div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</div>
@endsection