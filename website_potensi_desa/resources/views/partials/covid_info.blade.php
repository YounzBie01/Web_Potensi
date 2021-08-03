<div class="container-fluid" id="pagecovid">

    <div class="row" id="framecovid">
    <div class="mt-5">
        <h4 class="text-center">Tips Pencegahan Covid-19</h4>
    </div>
    </div>


        <?php $is_even = true; ?>

        @foreach ($covid_tips as $tips)
            @if ($is_even)
            <div class="row" id="framecovid">
                <div class="col-md-3 text-center">
                    <img src="{{ $tips->image_path }}" alt="" class="bd-placeholder-img rounded-circle" width="100" height="100" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h6>{{ $tips->tips }}</h6>
                </div>
            @else 
                <div class="col-md-3 text-center">
                    <img src="{{ $tips->image_path }}" alt="" class="bd-placeholder-img rounded-circle" width="100" height="100" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <h6>{{ $tips->tips }}</h6>
                </div>
            </div>
            @endif

            <?php $is_even = !$is_even; ?>
        @endforeach

        @if (!$is_even)
            </div>
        @endif

    <div>
        <h4 class="text-center mt-5">{{ $covid_detail->last()->title }}</h4>
    </div>
    <div class="container" id="framebawah">
        {!! $covid_detail->last()->content !!}
    </div>

    <div class="text-center mt-5">
        <h4>
            Kebumen Tanggap Covid
        </h4>
    </div>
    <div class="container">
        <div class="row" id="framecall">
            <div class="col-md-2 text-center mb-5">
                <a href="#" class="btn" id="hotline"><i class="fas fa-phone-alt" id="callicon"></i>+62 811-2647-725</a>
            </div>
            <div class="col-md-2 text-center mb-5">
                <a href="#" class="btn" id="hotline"><i class="fas fa-phone-alt" id="callicon"></i>119</a>
            </div>
            <div class="col-md-2 text-center mb-5">
                <a href="#" class="btn" id="hotline"><i class="fas fa-phone-alt" id="callicon"></i>(0287) 381572</a>
            </div>
        </div>
    </div>

</div>
