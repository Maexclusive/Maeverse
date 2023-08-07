@extends('layouts.header')

@section('content')
<div>
    @include('sweetalert::alert')
    <!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
        @include('layouts.navbar')
        @include('layouts.sidebar')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Control Panel</a></li>
				<li class="breadcrumb-item active">Permissions</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Permissions</h1>
			<!-- END page-header -->

            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Permissions</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>

                    <!-- END panel-heading -->

                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        {{-- modal tambah Permission --}}
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
                        <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('users.store') }}">
                                    @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="email"  value="{{ old('email') }}" placeholder="Email Addres">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        {{-- end modal tambah user --}}

                        <table id="data-table-combine" class="table table-striped table-bordered align-middle">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th> Permission Name </th>
						<th> Rules </th>
						<th> Description</th>
						<th> Read </th>
						<th> Write </th>
						<th> Update </th>
						<th> Delete </th>
						<th> Date Created </th>
						<th> Date Modified </th>
					</tr>
				</thead>
				<tbody>





					<tr class="table-active">
						<td>
							1
						</td>
						<td> Full Control </td>
						<td> main.permission.fctrl</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>01/01/2001</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="">
						<td>
							1
						</td>
						<td> Read &amp; Execute </td>
						<td> main.permission.rxe</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>13/07/2003</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> List Folder Contents </td>
						<td> main.permission.lstfldr</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>12/05/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="">
						<td>
							1
						</td>
						<td> Read </td>
						<td> main.permission.read</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>10/01/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> Modify </td>
						<td> main.permission.modify </td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>13/01/2021</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="">
						<td>
							1
						</td>
						<td> Write </td>
						<td> main.permission.write</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>01/01/2013</td>
						<td>13/07/2023</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td> Special Permission </td>
						<td> main.permission.spclprmsn</td>
						<td>
							Call in to confirm
						</td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td><input type="checkbox"> </td>
						<td>05/05/2000</td>
						<td>13/07/2023</td>
					</tr>
				</tbody>
			</table>

                    </div>
                    <!-- END panel-body -->

                </div>
                <!-- END panel -->
            </div>

		</div>
		<!-- END #content -->

		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>

</div>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
@endsection
