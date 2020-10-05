
{{-- QUICK NAVIGATION  --}}
<div class="quick-navigation" style="margin-top:10px;">
	<span class="navigation-text"><a href=" {{ route('home') }}">Home / </a>{{ $video->title }}</span>
</div>

<div class="video-container">
	
	<div class="video-title">
		<h3>Title: {{$video->title}}</h3>
	</div>
	<div class="video-desc">
		<h3>Description: {{$video->description}}</h3>
	</div>
</br>
</br>
	<video width="" controls>
		<source src="/storage/storage/videos/{{ $video->video }}" type="video/mp4">
		<source src="/storage/storage/videos/{{ $video->video }}" type="video/ogg">
		Your browser does not support HTML5 video.
	</video>
		
</div>