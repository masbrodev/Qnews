@extends('layouts.admin')
@section('content')

	<div class="col-10 col-lg-8 main-admin">
		<div class="title-admin pbot">Daftar Komentar</div>
		<div class="col-12 pic-content bbotn mtop">
				<div class="col-12 main-val">
					<div class="col-8">{{ Session::get('msg') }}</div>
					@foreach ($comments as $comment)
						<div class="col-12 val-content subval-content pbot">
							<div class="col-10 col-lg-8 col-md-6 col-sm-4 col-xs-2 sub-main">
								<div class="col-12">{{ $comment->isi }}</div>
								<div class="col-12 ket-com">
									<?php $controller->fullTime($comment->created_at); ?>
									<div class="col-9">Pada : <a href="/berita/{{ $comment->path }}">{{ $comment->judul }}</a></div>
								</div>
								<div class="col-12 pad1 ptop">
									<a href="/editComment/{{ $comment->id }}" class="col-1 col-xs-4 btn-edit">Edit</a>
						</div>
					@endforeach
				</div>
		</div>
	</div>
@endsection