<x-base-layout>
    <section class="container" style="min-height: 100vh; margin-top: 12rem;">
        <div class="text-center heading-block py-2 text-white mb-5">
            <h1 class="text-3xl font-bold text-gray-800">Add new listing</h1>
        </div>

        <div class="row ">
            <div class="col-lg-8 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">

                            <form id="listing-form" role="form" method="POST" action="/listings" enctype="multipart/form-data">
                                @csrf
                                <div class="controls">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Brand *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter tire brand *" value="{{ old('name') }}">
                                                @error('name')
                                                <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Width *</label>
                                                <input id="form_lastname" type="text" name="width" class="form-control" placeholder="Please enter tire width *" value="{{ old('width') }}">                                           </div>
                                            @error('width')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Radius *</label>
                                                <input id="form_text" type="text" name="radius" class="form-control" placeholder="Please enter tire radius *" value="{{ old('radius') }}">
                                            </div>
                                            @error('radius')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Profile *</label>
                                                <input id="form_text" type="text" name="profile" class="form-control" placeholder="Please enter tire profile *" value="{{ old('profile') }}">
                                            </div>
                                            @error('profile')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Tags *</label>
                                                <input id="form_text" type="text" name="tags" class="form-control" placeholder="Enter tags, comma separated *" value="{{ old('tags') }}">
                                            </div>
                                            @error('tags')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Price *</label>
                                                <input id="form_text" type="text" name="price" class="form-control" placeholder="Enter tire price *" value="{{ old('price') }}">
                                            </div>
                                            @error('price')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Tire Image *</label>
                                                <input id="form_text" type="file" name="image" class="form-control">
                                            </div>
                                            @error('image')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_text">Location *</label>
                                                <input id="form_text" type="text" name="location" class="form-control" placeholder="Please enter your location *" value="{{ old('location') }}">
                                            </div>
                                            @error('location')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Description *</label>
                                                <textarea id="form_message" name="description" class="form-control" placeholder="Write your message here.">
                                                    {{ old('description') }}
                                                </textarea>
                                            </div>
                                            @error('description')
                                                <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 py-4 text-center">
                                            <button type="submit" class="btn btn-success btn-send  pt-2 btn-block">Create Post</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row mb-4-->

        </div>
    </section>
</x-base-layout>
