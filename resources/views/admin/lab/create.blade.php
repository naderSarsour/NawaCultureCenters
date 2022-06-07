@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>حجز مختبر </h1>
<a class="btn btn-outline-dark" href="{{route('admin.lab.index')}}">رجوع</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.lab.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>اسم المختبر</lable>
                <input type="text" name="lab_name" value="{{old('lab_name')}}" placeholder="lab_name" class="form-control" />
          
            </div>

            <div class="mb-3">
                <lable>توقيت الحجز من : </lable>
                <input type="dateTime-local" name="from" value="{{old('from')}}" placeholder="from" class="form-control" />
            </div>
            <div class="mb-3">
                <lable>توقيت الحجز إلى :</lable>
                <input type="dateTime-local" name="to" value="{{old('to')}}" placeholder="to" class="form-control" />
          
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label>اسم المركز</label>
                    {{-- <select class="form-control" name="center_name">
                        <option value="" selected>Select</option>
                        @foreach ($lab as $item)
                            <option {{ ($item->center_id == $center->id) ? 'selected' : '' }} value="{{ $item->center_id }}">{{ $center->center_name }}</option>
                        @endforeach
                    </select> --}}
                    

                    <select name="center_id" id="center_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($centers as $center) <option value="{{ $center->id }}">{{ $center->center_name }}</option> @endforeach </select>
                </div>
            </div>
            

            <div class="col-md-12">
                <div class="mb-3">
                    <label>الفئة</label>
                    <select name="category_id" id="category_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($category as $category) <option value="{{ $category->id }}">{{ $category->category_name }}</option> @endforeach </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label>اسم الدورة</label>
                    <select name="course_id" id="course_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($course as $course) <option value="{{ $course->id }}">{{ $course->course_name }}</option> @endforeach </select>
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label>اسم المدرب</label>
                    <select name="trainer_id" id="trainer_id" class="form-control"> <option value=""> -- Select One --</option> @foreach ($trainer as $trainer) <option value="{{ $trainer->id }}">{{ $trainer->trainer_name }}</option> @endforeach </select>
                </div>
            </div>

            <button class="ntn btn-primary">إضافة</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop