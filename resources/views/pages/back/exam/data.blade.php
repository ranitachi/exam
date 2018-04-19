<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Code</th>
				<th>Name</th>
				<th>Time</th>
				<th>Number of <br>Question</th>
				<th>Weight of<br>Question</th>
				<th>Total Score</th>
				<th>Passing Score</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            @php
                $no=$hal+1;
            @endphp
			@foreach ($exam as $item)
                <tr>
                    <td class="text-center align-top">{{$no}}</td>
                    <td class="text-center align-top">{{$item->code}}</td>
                    <td class="text-center align-top">{{$item->name}}</td>
                    <td class="text-center align-top">{{$item->time}}</td>
                    <td class="text-center align-top">{{$item->num_of_question}}</td>
                    <td class="text-center align-top">
                        Level 1 : <span class="label label-info label-rounded">{{$item->question_1}}</span><br>
                        Level 2 : <span class="label label-info label-rounded">{{$item->question_2}}</span><br>
                        Level 3 : <span class="label label-info label-rounded">{{$item->question_3}}</span><br>
                        Level 4 : <span class="label label-info label-rounded">{{$item->question_4}}</span><br>
                    </td>
                    <td class="text-center align-top">{{$item->total_score}}</td>
                    <td class="text-center align-top">{{$item->passing_score}}</td>
                    <td class="text-center align-top">
                        <a href="{{url('exam',$item->id)}}" class="btn btn-xs btn-primary btn-rounded"><i class="icon-pencil5"></i></a>    
                        <a href="javascript:hapus('{{$item->id}}')" class="btn btn-xs btn-danger btn-rounded"><i class="icon-trash"></i></a>    
                    </td>
                </tr>
            @php
                $no++;
            @endphp
            @endforeach
		</tbody>
	</table>
</div>
<div class="pull-right">{{$exam->links()}}</div>