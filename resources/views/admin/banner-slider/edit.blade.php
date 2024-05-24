@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Control deslizante de banner</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Actualizar Carrusel</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.banner-slider.update', $bannerSlider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Image</label>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" />
                            <input type="hidden" name="old_image" value="{{ $bannerSlider->banner }}" />

                          </div>
                    </div>

                    <div class="form-group">
                        <label for="">titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ $bannerSlider->title }}">
                    </div>

                    <div class="form-group">
                        <label for="">Sub titulo</label>
                        <input type="text" class="form-control" name="sub_title" value="{{ $bannerSlider->sub_title }}">
                    </div>

                    <div class="form-group">
                        <label for="">Url</label>
                        <input type="text" class="form-control" name="url" value="{{ $bannerSlider->url }}">
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control" id="">
                            <option @selected($bannerSlider->status === 1) value="1">Activo</option>
                            <option @selected($bannerSlider->status === 0) value="0">Inactivo</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('.image-preview').css({
                'background-image': 'url({{ asset($bannerSlider->banner) }})',
                'background-size': 'cover',
                'background-position': 'center center'
            })
        })
    </script>
@endpush
