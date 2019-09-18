<!-- Single Slide -->
@foreach ($posts as $post)
<div class="welcome-single-slide">
    <!-- Post Thumb -->
    <img src="{{ asset($post->featured) }}" alt="" height="400" style="background-size: cover;">
    <!-- Overlay Text -->
    <div class="project_title">
        <div class="post-date-commnents d-flex">
            @php $date = $post->created_at; $date = date( "F j, Y", strtotime($date));@endphp
            <a href="#">{{ $date }}</a>
            <a href="#">5 Comment</a>
        </div>
        <a href="{{ url('/blog/' . $post->slug) }}">
            <h5>{{ $post->title }}</h5>
        </a>
    </div>
</div>
@endforeach