<x-base-layout>
    <section class="section py-5" style="margin-top: 8rem; min-height: 100vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto bg-light border p-2">
                    <div class="mb-4">
                        <a href="/" class="btn-return"><i class="fa fa-home" style="font-size: 1.4rem;"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="image-holder">
                                <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('images/tyre-b.jpg') }}" alt="{{ $listing->name }}">
                            </div>
                        </div>
                        <div class="col-md-7 prod__info">
                            <h4 class="product-detail-name">{{ $listing->name }}</h4>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <h5 class="fw-bold sizes">Width:<span class="spec__data"> {{ $listing->width }}</span></h5>
                                <h5 class="fw-bold sizes">Radius:<span class="spec__data"> {{ $listing->radius }}</span></h5>
                                <h5 class="fw-bold sizes">Profile:<span class="spec__data"> {{ $listing->profile }}</span></h5>
                            </div>
                            <hr>
                            <h5 class="fw-bold sizes">Prize:<span class="spec__data"> $ {{ $listing->price }}</span></h5>
                            <hr>
                            <h5 class="fw-bold sizes">Dealer:<span class="spec__data"> {{ $listing->user->name }}</span></h5>
                            <hr>
                            <h5 class="fw-bold"><i class="fa fa-phone"></i> :<span class="spec__data"> {{ $listing->user->mobile }}</span></h5>
                            <hr>
                            <h5 class="fw-bold"><i class="fab fa-whatsapp"></i> :<span class="spec__data"> {{ $listing->user->whatsapp }}</span></h5>
                            <hr>
                            <h5 class="fw-bold"><i class="fa fa-map-marker-alt"></i> :<span class="spec__data"> {{ $listing->location }}</span></h5>
                            <hr>
                            <div class="description">
                                <h5 class="fw-bold">Description</h5>
                            </div>
                            <p class="my-4">
                                {{ $listing->description }}
                            </p>

                            <div class="tags my-4">
                                <h5 class="spec__data">Tags</h5>
                                <x-tags :tagsCsv="$listing->tags"></x-tags>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
