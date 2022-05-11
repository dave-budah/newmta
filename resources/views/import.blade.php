<x-base-layout>
    <section class="container" style="min-height: 70vh; margin-top: 12rem;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="text-center heading-block py-2 text-white mb-5">
                    <h1 class="text-3xl font-bold text-gray-800">Import CSV</h1>
                </div>
                <div class="card-body bg-light border">
                    <form action="/importfile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="csv_file">CSV File or Excel File</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                        <div class="col-md-12 py-4 text-center">
                            <button type="submit" class="btn btn-success btn-send pt-2 btn-block">Upload CSV</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
