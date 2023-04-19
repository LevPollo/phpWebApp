@extends("layouts.app")
@section("section")
    <div class="row">
            <div class="card w-50 mx-auto">
                <div class="card-header">
                    <h5 class="card-title">Create new post:</h5>
                    <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route("postCreate")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Title:</label>
                            <input name="title" type="text" class="form-control" placeholder="New post" required="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Text</label>
                            <textarea name="text" rows="20" class="form-control" placeholder="I'm Ban. I have 20 cars." ></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label w-100">File input</label>
                            <input name="image" type="file" >
                            <small class="form-text text-muted">Example block-level help text here.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </div>

@endsection
