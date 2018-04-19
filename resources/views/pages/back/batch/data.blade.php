<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Code</th>
				<th>Tahun</th>
				<th>Max Capacity</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            @php
                $no=$hal+1;
            @endphp
			@foreach ($batch as $item)
                <tr>
                    <td class="text-center">{{$no}}</td>
                    <td class="text-center">{{$item->code}}</td>
                    <td class="text-center">{{$item->year}}</td>
                    <td class="text-center">{{$item->max_capacity}}</td>
                    <td class="text-center">
                        <a href="{{url('batch',$item->id)}}" class="btn btn-xs btn-primary btn-rounded"><i class="icon-pencil5"></i></a>    
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
<div class="pull-right">{{$batch->links()}}</div>