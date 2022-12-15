@extends('admin.layoutAdmin')
@section('images')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <h4 class="card-title">Images for product : <span class="text-primary">{{ $home->home_name }}</span> </h4>
                    <a href="{{ route('view.home') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body" style="padding-bottom: 70px">
                    <div class="gallery">
                        @forelse ($images as $image)
                            <div class="gallery-item">
                                <img class="gallery-image" src="/homes_image/{{ $image->image }}" alt="Home Images ">
                                <a class="btn btn-icon btn-round delete"
                                    href="{{ route('deleteImage.home', ['id' => $image->id]) }}">
                                    <i class="fa-regular fa-trash-can center"></i>
                                </a>
                            </div>
                        @empty
                            <h2 class="alert alert-danger mt-5">No Images in home. Please add more!!!</h2>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style>
    .gallery {
        display: flex;
        flex-wrap: wrap;
        /* Compensate for excess margin on outer gallery flex items */
        margin: -1rem -1rem;
        justify-content: center;
    }

    .gallery-item {
        /* Minimum width of 24rem and grow to fit available space */
        flex: 1 0 24rem;
        /* Margin value should be half of grid-gap value as margins on flex items don't collapse */
        margin: 1rem;
        box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
        overflow: hidden;
        position: relative;
    }

    .gallery-image {
        display: block;
        width: 100%;
        /* max-width: 440px; */
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease-out;
    }

    .gallery-image:hover {
        transform: scale(1.15);
    }

    .delete {
        display: none !important;
        position: absolute !important;
        top: 50%;
        right: 50%;
        transform: translate(50%, -50%);
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        font-size: 1.5rem;
        cursor: pointer;
        transition: background 400ms ease-out;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .gallery-item:hover .delete {
        display: block !important;
    }
</style>
