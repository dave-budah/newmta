
<x-base-layout>
<!-- Hero Slider -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('images/hero-a.jpg') }}" class="d-block w-100" alt="...">
            <div class="cover">
                <div class="carousel-caption d-md-block">
                    <h5>Welcome to Motor Trade Africa</h5>
                    <p class="mb-4">Find the best tyre dealers in one place</p>
                    <a href="#" class="button my-4">Learn more</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/hero-b.jpg') }}" class="d-block w-100" alt="...">
            <div class="cover">
                <div class="carousel-caption d-md-block">
                    <h5>Best tyre dealership</h5>
                    <p class="mb-4">Some representative placeholder content for the second slide.</p>
                    <a href="#" class="button my-4">Learn more</a>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/hero-c.jpg') }}" class="d-block w-100" alt="...">
            <div class="cover">
                <div class="carousel-caption d-md-block">
                    <h5>Wheel related accessories</h5>
                    <p class="mb-4">Some representative placeholder content for the third slide.</p>
                    <a href="#" class="button my-4">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Slider -->

<x-partials.search/>

<!-- Search fields -->
<section id="search-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img">
                            <img src="{{ asset('images/sizes.png') }}" alt="" width="100%">
                        </div>
                    </div>
                    <!--                Tyre by size -->
                    <div class="col-md-6">
                        <div class="search-card mt-5">
                            <form action="/" id="tyre-by-size" class="text-center">
                                @csrf
                                <h5 class="default-h-four">Tyres by size</h5>

                                <select class="form-select" name="width" aria-label="sort" id="second-tyre-size" required>
                                    <option selected>Width:</option>
                                    @foreach($listings as $listing)
                                        <option value="{{ $listing->width }}">{{ $listing->width }}</option>
                                    @endforeach
                                </select>

                                <select class="form-select" name="profile" aria-label="sort" id="model" required>
                                    <option selected>Profile:</option>
                                    @foreach($listings as $listing)
                                        <option value="{{ $listing->profile }}">{{ $listing->profile }}</option>
                                    @endforeach
                                </select>
                                <select class="form-select" name="radius" aria-label="sort" id="tyre-size" required>
                                    <option selected>Radius:</option>
                                    @foreach($listings as $listing)
                                        <option value="{{ $listing->radius }}">{{ $listing->radius }}</option>
                                    @endforeach
                                </select>


                                <button class="compare btn py-2" type="submit">Compare now</button>
                            </form>
                        </div>
                    </div>
                    <!--                Rim by vehicle -->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Search fields -->

<section class="featured py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="bg-light d-block text-center mb-5 p-2">
                    <div class="d-flex justify-content-between flex-md-row flex-sm-column align-items-center">
                        <h4 class="default-h-four">Tires</h4>
                        <select class="form-select" aria-label="sort" id="sort">
                            <option selected style="font-size: .8rem">Sort by:</option>
                        </select>
                    </div>
                </div>

                <!--        Products -->
                <div class="row my-3">
                   @unless(count($listings) == 0)
                   @foreach($listings as $listing)
                            <div class="col-md-3">
                                <div class="tyre-card p-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                     title="Click to view more">
                                    <a href="/listings/{{ $listing->id }}">
                                        <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('images/tyre-b.jpg') }}" alt="">
                                    </a>

                                    <div class="product-detail">
                                        <div class="d-flex justify-content-between m-0 p-2">
                                          <span>
                                              <small>Brand</small>
                                                <h6 class="product-name">{{ $listing->name }}</h6>
                                          </span>
                                           <span>
                                               <small>Price</small>
                                                <h6 class="price">${{ $listing->price }}</h6>
                                           </span>
                                        </div>
                                        <div class="d-flex justify-content-between m-0 p-2">
                                           <span>
                                                <small>Size</small>
                                            <h5 class="size fw-bold">{{ $listing->width }}/{{ $listing->profile }} R {{ $listing->radius }}</h5>
                                           </span>
                                            <span>
                                                <i class="fa fa-map-marker-alt"></i>
                                                <h6>{{ $listing->location }}</h6>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    @else
                       <div class="mx-auto">
                           <h3>No results found</h3>
                       </div>
                    @endunless



                    <div class="my-2 w-100 text-center">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mx-auto">
                                {{ $listings->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--        Products -->
            </div>
        </div>
    </div>
</section>



</x-base-layout>
