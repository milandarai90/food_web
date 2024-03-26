@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-images container">
        <div class="images-wrapper ">
            <div class="images-section ">
                <header class="d-flex justify-content-center"><h3>Input Images to DB</h3></header>
                <div class="form-section d-flex justify-content-center" style="margin-bottom: 5rem;">
                    <form action="{{ route('images.store') }}" method="POST" class="form col-6" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" name="image"><br>
                            {{-- <input type="file" name="image" class="form-control" accept=".jpg,.png"> --}}
                          </div>
                          <div class="submit d-flex justify-content-center">
                            <input type="submit" value="Submit" class="btn btn-outline-primary">
                          </div>
                    </form>
                </div>
                <div class="image-display row" style="margin: 1rem 0;">
                    @foreach ($images as $item)
                    <div class="image-section col-2">
                        <img src="{{ asset('storage/images/'. $item->path) }}"  alt="{{ $item->name }}" style="width: 10rem; height:auto; border-radius:8px;"><br>
                    <span>{{ $item->name }} | {{ $item->path }}</span>
                    </div>
                    @if($loop->iteration % 6 == 0)
                </div>
                <div class="row" style="margin: 1rem 0;">
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    header{
        padding: 5rem 0;
    }
</style>
@endsection
