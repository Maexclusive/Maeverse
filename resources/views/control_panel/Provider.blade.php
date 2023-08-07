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
                <li class="breadcrumb-item active">Providers</li>
            </ol>
            <!-- END breadcrumb -->
            <!-- BEGIN page-header -->
            <h1 class="page-header">Providers</h1>
            <!-- END page-header -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#modal-tefos">Tambah Data</button>
            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Provider</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                                    class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning"
                                data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>

                    <!-- END panel-heading -->

                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        {{-- modal tambah Data Provider --}}
                        

                        
                        <div class="modal fade" id="modal-tefos">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Provider</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('Provider.store') }}">
                                            @csrf
                                        <div class="col pb-4">
                                            

                                            <div class="row g-2 mb-3">
                                                <div class="col d-flex flex-row gap-2 justify-content-center align-items-center">
                                                    <label class="col-2" for="floatingInputGrid">Nama Provider</label>
                                                    <label for="floatingInputGrid">:</label>
                                                    <input id="input_vm_name" type="text" name="name" class="form-control" placeholder="Windows..."></input>
                                                </div>
                                            </div>

                                            <div class="row g-2 mb-3">
                                                <div class="col d-flex flex-row gap-2 justify-content-center align-items-center">
                                                    <label class="col-2" for="floatingInputGrid">Deskripsi</label>
                                                    <label for="floatingInputGrid">:</label>
                                                    <input id="input_vm_name" type="text" name="deskripsi" class="form-control" placeholder="Masukan Deskripsi"></input>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group col  col-md-4 mb-3 row">
                                                <label for="exampleInputPassword1"  class="float-start pb-2">
                                                    Nama Provider
                                                </label>
                                                <input type="text" class="form-control" name="name" id="exampleInputPassword1"
                                                    placeholder="e.g Wordpress" />
                                            </div>
                                            <div class="form-group col row col-md-4">
                                                <label for="exampleInputPassword1" class="float-start pb-2">
                                                    Deskripsi
                                                </label>
                                                <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1"
                                                    placeholder="e.g PHP" />
                                            </div> --}}
                                            
                                        </div>
                                        {{-- <div class="text-secondary text-start"><i class="fas fa-square-plusfa-md"></i> Aditional Column</div>
                                        <hr>
                                        <div id="barisan3" class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6 "><input
                                                        class="form-control fs-15px text-center"
                                                        placeholder="ColumnName" name="Nama[]" required type="text">
                                                </div>
                                                <div class="col-md-4"><input class="form-control fs-15px"
                                                        placeholder="Value" name="Nama[]" required type="text">
                                                </div>
                                                <div class="col-md-2"><button id="" onClick="tambahin3()"
                                                        class="btn btn-success">Add More</button></div>
                                            </div><br>
                                        </div> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                            
                        
                        {{-- end modal tambah user --}}

                        <table id="data-table-fixed-header" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th class="text-nowrap">Nama Provider</th>
                                    <th class="text-nowrap">Deskripsi</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1 ?>
                                @foreach ($provider as $p)
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark"><?php echo $i++ ?></td>
                                    <td>{{ $p->name}}</td>
                                    <td>{{ $p->deskripsi}}</td>
                                    <td>
                                        <form action="{{ route('Provider.destroy',$p->tpr_id) }}" method="POST">
                                            <a class="btn btn-primary" href="">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                data-confirm-delete="true">Delete</button>
                                        </form>
                                    </td>
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
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
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
