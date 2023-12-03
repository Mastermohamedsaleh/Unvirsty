@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')


<h4 class="text-color text-center mt-4">Mangment Promotion</h4>







<div class="container mt-5">



<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Delete_all">
       Return All
</button><br><br>




 <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th class="alert alert-info">#</th>
                                            <th class="alert alert-info">Name</th>
                                            <th class="alert alert-danger">College</th>
                                            <th class="alert alert-danger">السنة الدراسية</th>
                                            <th class="alert alert-danger">الصف الدراسي السابق</th>
                                            <th class="alert alert-danger">القسم الدراسي السابق</th>
                                            <th class="alert alert-success">المرحلة الدراسية الحالي</th>
                                            <th class="alert alert-success">السنة الدراسية الحالية</th>
                                            <th class="alert alert-success">الصف الدراسي الحالي</th>
                                            <th class="alert alert-success">القسم الدراسي الحالي</th>
                                            <th>Processes</th>
                                        </tr>
                                        </thead>
                                     
                                        @foreach($promotions as $promotion)
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{$promotion->student->name}}</td>
                                                <td>{{$promotion->f_college->name}}</td>
                                                <!-- <td>{{$promotion->academic_year}}</td> -->
                                                <td>{{$promotion->f_classroom->name}}</td>
                                                <td>
                                                    @if($promotion->from_section) 
                                                    $promotion->f_section->name
                                                    @else
                                                    'no Section'
                                                    @endif
                                                </td>
                                                <td>{{$promotion->t_college->name}}</td>
                                                <!-- <td>{{$promotion->academic_year_new}}</td> -->
                                                <td>{{$promotion->t_classroom->name}}</td>
                                                <td>
                                                
                                                @if($promotion->to_section_id) 
                                                $promotion->t_section->name
                                                    @else
                                                    'no Section'
                                                    @endif
                                                </td>
                                                <td>

                                                <a href="{{route('students.edit',$promotion->id)}}"
                                                       class="btn btn-info btn-sm" role="button" aria-pressed="true"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#Delete_Student{{ $promotion->id }}"
                                                           ><i
                                                            class="fa fa-trash"></i></button>
                                            <a href="{{route('students.show',$promotion->id)}}"
                                            class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i
                                            class="far fa-eye"></i></a>


                                                   
                                                </td>
                                            </tr>
                                
                                        @endforeach
                                    </table>






                                    </div>
</div>


@include('Admin.promotion.Delete_all')





 @include('footer')
