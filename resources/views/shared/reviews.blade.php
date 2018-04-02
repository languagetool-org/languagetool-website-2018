<div class="section-reviews">
    <div class="container">
        <h2 class="section-reviews-heading">{{ __('messages.reviews.label') }}</h2>

        <div id="Reviews" class="glide">

            <span class="review-quote-left">
                <img src="/images/review-quote-left.svg">
            </span>
            <span class="review-quote-right">
                <img src="/images/review-quote-left.svg">
            </span>

            <div class="glide__wrapper">
                <ul class="glide__track">
                    @foreach ($reviews as $review)
                        <li class="glide__slide">{{ $review }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="glide__bullets"></div>

        </div>
    </div>
</div>

<script type="text/javascript">
    $("#Reviews").glide({
        type: "carousel"
    });
</script>