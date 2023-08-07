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
				<li class="breadcrumb-item active">Users</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Domains</h1>
			<!-- END page-header -->

            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Users</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>

                    <!-- END panel-heading -->

                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        {{-- modal tambah Domain --}}
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
                        <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Domain</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('Domain.store') }}">
                                    @csrf
                                <div class="modal-body">
                                    
                                    <div class="mb-3">
                                        <input type="text" class="form-control mb-3" name="domain_name" placeholder="Masukan Nama Domain" required>
                                        
                                        {{-- <input type="text" class="form-control" name="domain_name" placeholder="Masukan Domain" required> --}}
                                    </div>
                                    {{-- <div class="text-secondary text-start"><i class="fas fa-square-plus
                                    fa-md"></i> Aditional Column</div>
                                    <hr>
                                    <div id="barisan3" class="col-md-12">
                                        <div class="row">
                                            <div class="col "><input class="form-control fs-15px text-center" placeholder="ColumnName" name="Nama[]"
                                                    required type="text"></div>
                                            <div class="col"><input class="form-control fs-15px" placeholder="Value" name="Nama[]" required
                                                    type="text"></div>
                                            <div class="col"><button id="" onClick="tambahin3()" class="btn btn-success ">Add More</button></div>
                                        </div><br>
                                    </div> --}}
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
                                    <th width="1%">No</th>
                                    <th class="text-nowrap" width="80%">Nama Domain</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach ($domains as $d)
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark"><?php echo $i++ ?></td>
                                    <td>{{$d->domain_name}}</td>
                                    <td> 
                                        <form action="{{ route('Domain.destroy',$d->cfd_id) }}" method="POST">
                                        <a class="btn btn-primary" href="">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" data-confirm-delete="true">Delete</button>
                                    </form></td>
                                </tr>
                                @endforeach
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
