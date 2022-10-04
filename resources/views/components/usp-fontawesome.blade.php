<div class="row">
    @foreach ($layout->items as $usp)
        <div class="col-md-4 mb-7">
            <div class="text-center px-lg-3">
                <span class="mb-5 btn btn-icon btn-lg btn-soft-danger rounded-circle">
                    <span class="{!! $usp->icon !!} fa-2x btn-icon__inner btn-icon__inner-bottom-minus"></span>
                </span>
                <p>{{ $usp->title }}</h3>
                    {!! $usp->content !!}
            </div>
        </div>
    @endforeach
</div>
