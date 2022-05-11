<x-base-layout>
    <section class="container" style="min-height: 100vh; margin-top: 8rem;">
        <div class="row">
            <div class="text-center heading-block py-2 text-white mb-5 mt-5">
                <h1 class="text-3xl font-bold text-gray-800">Manage Listings</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="listings_management">
                    <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Brand</th>
                        <th>Image</th>
                        <th>Width</th>
                        <th>Radius</th>
                        <th>Profile</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @unless(empty($listings))
                        @foreach($listings as $listing)
                    <tr>
                        <td>{{ $listing->id }}</td>
                        <td>{{ $listing->name }}</td>
                        <td>
                            <img src="{{ $listing->image ? asset('storage/' . $listing->image) : asset('images/tyre-b.jpg') }}" alt="{{ $listing->name }}">
                        </td>
                        <td>{{ $listing->width }}</td>
                        <td>{{ $listing->radius }}</td>
                        <td>{{ $listing->profile }}</td>
                        <td>{{ $listing->price }}</td>
                        <td>{{ $listing->location }}</td>
                        <td>{{ $listing->tags }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="actions">
                                <a href="/listings/{{ $listing->id }}/edit" type="button" class="btn btn-primary me-2">Edit</a>

                                <form action="/listings/{{ $listing->id }}" method="POST" class="">
                                    @csrf
                                    @method('DELETE')
                                    <button href="/list" type="button" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="10" class="text-center">No listings found</td>
                        </tr>
                    @endunless

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-base-layout>
