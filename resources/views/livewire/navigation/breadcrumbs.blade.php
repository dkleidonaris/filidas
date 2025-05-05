<?php

use Livewire\Volt\Component;
use Diglactic\Breadcrumbs\Breadcrumbs;

new class extends Component {
    public $breadcrumbs;

    public function mount($breadcrumbs)
    {
        if (isset($breadcrumbs['model'])) {
            $this->breadcrumbs = Breadcrumbs::generate($breadcrumbs['for'], $breadcrumbs['model']);
        } else {
			$this->breadcrumbs = Breadcrumbs::generate($breadcrumbs['for']);
		}
    }
}; ?>

<div class="mx-auto max-w-[1200px] overflow-x-auto p-4">
	@unless ($breadcrumbs->isEmpty())
		<ol class="breadcrumb flex flex-row flex-wrap items-center gap-2">
			@foreach ($breadcrumbs as $breadcrumb)
				@if (!is_null($breadcrumb->url) && $loop->first)
					<svg
						width="20"
						height="20"
						viewBox="0 0 16 16"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<g
							id="SVGRepo_bgCarrier"
							stroke-width="0"
						></g>
						<g
							id="SVGRepo_tracerCarrier"
							stroke-linecap="round"
							stroke-linejoin="round"
						></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M1 6V15H6V11C6 9.89543 6.89543 9 8 9C9.10457 9 10 9.89543 10 11V15H15V6L8 0L1 6Z"
								fill="#000000"
							></path>
						</g>
					</svg>
					<li class="breadcrumb-item"><a
							href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
					<svg
						width="20"
						height="20"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<g
							id="SVGRepo_bgCarrier"
							stroke-width="0"
						></g>
						<g
							id="SVGRepo_tracerCarrier"
							stroke-linecap="round"
							stroke-linejoin="round"
						></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z"
								fill="#0F0F0F"
							></path>
						</g>
					</svg>
				@elseif (!is_null($breadcrumb->url) && !$loop->last)
					<li class="breadcrumb-item"><a
							href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
					<svg
						width="20"
						height="20"
						viewBox="0 0 24 24"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<g
							id="SVGRepo_bgCarrier"
							stroke-width="0"
						></g>
						<g
							id="SVGRepo_tracerCarrier"
							stroke-linecap="round"
							stroke-linejoin="round"
						></g>
						<g id="SVGRepo_iconCarrier">
							<path
								d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z"
								fill="#0F0F0F"
							></path>
						</g>
					</svg>
				@else
					<li class="breadcrumb-item active font-bold">{{ $breadcrumb->title }}</li>
				@endif
			@endforeach
		</ol>
	@endunless
</div>
