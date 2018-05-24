@if (isset($reviews))
<div class="section-reviews">
    <div class="container">
        <h2 class="section-reviews-heading">{{ __('messages.reviews.label') }}</h2>

        <div class="reviews-wrapper">

            <span class="review-quote-left">
                <img src="/images/review-quote-left.svg">
            </span>
            <span class="review-quote-right">
                <img src="/images/review-quote-left.svg">
            </span>

            <div id="Reviews" class="reviews glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @foreach ($reviews as $review)
                            <li class="glide__slide">{{ $review }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="glide__bullets"></div>
            </div>

        </div>
    </div>
</div>
@endif
