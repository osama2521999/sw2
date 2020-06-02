@extends('layouts.index')

@section('title','Admin')

@section('contant')
 
<!-- @section('H_active','active') -->
@section('navbar')
	
    <li class="nav-item "><a href="registerworker" class="nav-link">Rigister worker</a></li>
	<li class="nav-item "><a href="A_make_report" class="nav-link">Make reports</a></li>
    <li class="nav-item active"><a href="A_view_report" class="nav-link">View reports</a></li>
	<li class="nav-item "><a href="aloggedout" class="nav-link">Logout</a></li>
	
@endsection

<style>

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #c850c0;
  background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
  background: -o-linear-gradient(45deg, #4158d0, #c850c0);
  background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
  background: linear-gradient(45deg, #4158d0, #c850c0);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}

.wrap-table100 {
  width: 1170px;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  /* background: #36304a; */
     background: #1a1a1a;;

}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: OpenSans-Regular;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: OpenSans-Regular;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: pointer;
}

.column1 {
  width: 260px;
  padding-left: 40px;
}

.column2 {
  width: 160px;
}
</style>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
        @if(count($reports) >0)
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Report</th>
                <th class="column1">Sender</th>
                <th class="column2">Sent at</th>
                <th class="column2">Delete</th>
							</tr>
						</thead>
						<tbody>
           @foreach($reports ?? '' as $row) 
                        <tr>
                            <td class="column1">{{ $row['report'] }}</td>
                            <td class="column2">{{ $row['sender'] }}</td>
                            <td class="column2">{{ $row['created_at'] }}</td>
                            <td class="column2"><a href="A_view_report/{{ $row['id'] }}/delete" style="color: #f44336"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        </tr>
					@endforeach
						</tbody>
					</table>
        @endif
        @if(count($reports) <= 0)
          <p><font size="30" color="white">No Reports for you !!</font></p>
        @endif    
				</div>
			</div>
		</div>
	</div>
	
@endsection