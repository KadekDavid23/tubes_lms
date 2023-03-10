@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Membuat Kursus Baru
    </div>

    <div class="card-body">
        <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(auth()->user()->isAdmin())
                <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="teacher">Guru*</label>
                    <select name="teachers[]" class="form-control" id="teacher" multiple>
                        @foreach($teachers as $id => $teacher)
                            <option value="{{ $id }}">{{ $teacher }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('title'))
                        <em class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </em>
                    @endif
                </div>
            @endif -->
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="title">Judul*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($course) ? $course->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="slug">Slug*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug', isset($course) ? $course->slug : '') }}" required>
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="description">Deskripsi*</label>
                <textarea id="desccription" name="description" rows="5" class="form-control" value="{{ old('description', isset($course) ? $course->description : '') }}" required>
                </textarea>
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="price">Harga*</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($course) ? $course->price : '') }}" required />
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
            </div>
    
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="start_date">Tanggal Start*</label>
                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date', isset($course) ? $course->start_date : '') }}" required />
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
                <label for="published">Diterbitkan*</label>
                <select name="published" class="form-control" id="published">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                @if($errors->has('slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </em>
                @endif
            </div>

            <div>
                <button class="btn btn-danger" type="submit" >Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection