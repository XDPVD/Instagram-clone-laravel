@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
						<div>
									<div class="d-flex align-items-center">
										<div class="pr-3">
											<img class="w-100 rounded-circle" style="max-width: 40px" src="{{ $post->user->profile->profileImage() }}" alt="">
										</div>
								<div>
									<div class="font-weight-bold">
<a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a>
								<a class="pl-3" href="#">Follow</a>
								</div>
								</div>
									</div>

								<hr>
								<p>
								
								<span class="font-weight-bold">
<a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{ $post->user->username }}</span></a></div>
								</span>
								{{ $post->caption }} </p>
            </div>
        </div>
    </div>
</div>
@endsection
