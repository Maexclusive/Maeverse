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
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active">Vm</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">VM</h1>
			<!-- END page-header -->


            
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Data</button>
            
            

            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data VM</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <!-- END panel-heading -->
                
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <table id="data-table-fixed-header" class="table table-striped table-bordered align-middle">
                            <thead>
                                <tr>
                                    <th width="1%">NO</th>
                                    <th class="text-nowrap">VM NAME</th>
                                    <th class="text-nowrap">VM ETHERNET</th>
                                    <th class="text-nowrap">VM IP</th>
                                    <th class="text-nowrap">VM GATEWAY</th>
                                    <th class="text-nowrap">VM NAMESERVER</th>
                                    <th class="text-nowrap">VM VLAN</th>
                                    <th class="text-nowrap">VM HOST</th>
                                    <th class="text-nowrap">VM HOSTNAME</th>
                                    <th class="text-nowrap">VM OS</th>
                                    <th class="text-nowrap">VM KERNEL</th>
                                    <th class="text-nowrap">NOTE</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vm as $v)
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark">{{ ++$i }}</td>
                                    <td>
                                        <p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_name }}</p>
                                    </td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_ethernet }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_ip }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_gateway }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_name_server }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_vlan }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_host }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_hostname }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_os }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->vm_kernel }}</p></td>
                                    <td><p class="d-inline-block text-truncate" style="width: 5rem;">{{ $v->note }}</p></td>
                                    <td> 
                                        <form action="{{ route('vm.destroy',$v->vm_id) }}" method="POST">
                                        {{-- <a class="btn btn-primary" href="{{ route('vm.edit',$v->vm_id) }}">Edit</a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type="button" id="" onclick="details_buttong({{ $v->vm_id }})" name="DetailsButton"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_details">Details</button>
                                        <!--   -->
                                      </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $vm->links() !!}
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

    {{-- modal Tambah Data --}}
            <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data VM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('vm.store') }}">
                        @csrf
                    <div class="modal-body">
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM NAME</label>
                                <input type="text" name="vm_name" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM ETHERNET</label>
                                <input type="text" name="vm_ethernet" class="form-control" placeholder="..." >
                            </div>
                        </div>
                        
                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM IP</label>
                                <input type="text" name="vm_ip" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM GATEWAY</label>
                                <input type="text" name="vm_gateway" class="form-control" placeholder="..." >
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM NAMESERVER</label>
                                <input type="text" name="vm_name_server" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM VLAN</label>
                                <input type="text" name="vm_vlan" class="form-control" placeholder="..." >
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM HOST</label>
                                <input type="text" name="vm_host" class="form-control" placeholder="..." >
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM HOSTNAME</label>
                                <input type="text" name="vm_hostname" class="form-control" placeholder="...">
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md">
                                <label for="floatingInputGrid">VM OS</label>
                                <input type="text" name="vm_os" class="form-control" placeholder="...">
                            </div>
                            <div class="col-md">
                                <label for="floatingInputGrid">VM KERNEL</label>
                                <input type="text" name="vm_kernel" class="form-control" placeholder="...">
                            </div>
                        </div>
                        <label class="form-label">NOTE</label>
                        <input class="form-control mb-3" name="note" placeholder="...">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            {{-- end modal Tambah Data--}}

            {{-- modal Details --}}
            <div class="modal fade m-3" id="modal_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data VM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                        
                    <div class="modal-body">
                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM NAME</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_Name" type="text" name="vm_name" class="form-control" placeholder="...">Windows</label>
                                
                            </div>
                            
                        </div>
                        
                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM IP</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_IP" type="text" name="vm_name" class="form-control" placeholder="...">( IP Address )</label>
                            </div>
                            
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM GATEWAY</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Gateway" type="text" name="vm_name" class="form-control" placeholder="...">( [ Gateway ])</label>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM NAMESERVER</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_NameServer" name="vm_name" class="form-control" placeholder="...">( [ VM NameServer ] )</label>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM VLAN</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_Vlan" name="vm_name" class="form-control" placeholder="...">( VM VLAN )</label>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM HOSTNAME</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_Hostname" type="text" name="vm_name" class="form-control" placeholder="...">( vm hostname )</label>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM OS</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_OS" type="text" name="vm_name" class="form-control" placeholder="...">( vm os )</label>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                                <label class="col-md-1" for="floatingInputGrid">VM KERNEL</label>
                                <label for="floatingInputGrid">:</label>
                                <label id="Vm_Kernel" type="text" name="vm_name" class="form-control" placeholder="...">( vm kernel )</label>
                            </div>
                        </div>

                        <label class="form-label">NOTE</label>
                        <label type="text" name="vm_name" class="form-control" placeholder="...">( Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque suscipit, asperiores blanditiis culpa velit sint quod, eveniet odit ipsum vero nemo excepturi laborum quasi, a quisquam cupiditate maiores eos earum! )</label>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                
                </div>
                </div>
            </div>
            {{-- end modal Details --}}
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

<script>
    $(document).ready(function() {
        $("#details_button").onclick(function() {
            
        });
    });

    function details_buttong(ids) {
        
        axios.get('/vm/' + ids)
        .then(function (response) {
            // handle success
            
            $("#Vm_Name").html(response.data[0].vm_name)
            $("#Vm_IP").html(response.data[0].vm_ip)
            $("#Gateway").html(response.data[0].vm_gateway)
            $("#Vm_NameServer").html(response.data[0].vm_name_server)
            $("#Vm_Vlan").html(response.data[0].vm_vlan)
            $("#Vm_Hostname").html(response.data[0].vm_hostname)
            $("#Vm_OS").html(response.data[0].vm_os)
            $("#Vm_Kernel").html(response.data[0].vm_kernel)
        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .finally(function () {
            // always executed
        });
    }
</script>
<script>

    
</script>
@endsection
