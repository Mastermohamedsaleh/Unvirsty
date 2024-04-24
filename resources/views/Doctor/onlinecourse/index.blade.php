@include('header')
  <div class="wrapper">
  @include('sidebar_doctor')

      <div class="main">
@include('nav')



<div class="container mt-2">

@if ($errors->any())
                    <div class="alert alert-danger" style="width:300px; margin:0px auto">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:300px; margin:0px auto">{{ Session::get('message') }}</p>
@endif

<a href="{{route('onlinecourse.create')}}" class="btn btn-primary btn-sm" role="button"
                                   aria-pressed="true">اضافة حصة جديدة</a><br><br>

<table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
       style="text-align: center">
    <thead>
    <tr class="alert-success">
        <th>#</th>
        <th>المرحلة</th>
        <th>الصف</th>
        <th>القسم</th>
        <th>المعلم</th>
        <th>عنوان الحصة</th>
        <th>تاريخ البداية</th>
        <th>وقت الحصة</th>
        <th>رابط الحصة</th>
        <th>العمليات</th>
    </tr>
    </thead>
    <tbody>
    @foreach($onlinecourse as $c)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $c->college->name}}</td>
            <td>{{ $c->classroom->name }}</td>
            <td>{{ ( $c->section_id  ? $c->section->name : 'No Section' ) }}</td>
            <td>{{$c->doctor->name}}</td>
            <td>{{$c->topic}}</td>
            <td>{{$c->start_at}}</td>
            <td>{{$c->duration}}</td>
            <td class="text-danger"><a href="{{$c->join_url}}" target="_blank">انضم الان</a></td>
            <td>

<button type="button"
 class="mb-2 btn btn-outline-danger btn-sm" 
 data-bs-toggle="modal"
  data-bs-target="#Delete{{$c->meeting_id}}">
  <i class="fas fa-trash"></i>
</button>
@include('Doctor.onlinecourse.delete')

            </td>
        </tr>
                                        @endforeach
                                    </table>





</div>



@include('footer')