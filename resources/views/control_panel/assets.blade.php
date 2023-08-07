@extends('layouts.header')

@section('content')

<div>
    
    <!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed ">
        @include('layouts.navbar')
        @include('layouts.sidebar')
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<!-- BEGIN breadcrumb -->
			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active">Assets</li>
			</ol>
			<!-- END breadcrumb -->
			<!-- BEGIN page-header -->
			<h1 class="page-header">Assets</h1>
			<!-- END page-header -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal_tambah_data">Tambah Data</button>
            {{-- modal --}}
            <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
                </div>
            </div>
            
            {{-- end modal --}}
            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Asset</h4>
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
                                    <th width="1%">No</th>
                                    
                                    <th class="text-nowrap">VM Name</th>
                                    <th class="text-nowrap">VM Hostname</th>
                                    <th class="text-nowrap">VM IP</th>
                                    <th class="text-nowrap">VM OS</th>
                                    <th class="text-nowrap">Company Name</th>
                                    <th class="text-nowrap">Tunnel Provider</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td width="1%" class="fw-bold text-dark">1</td>
                                    
                                    <td>Linux</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                    <td>X</td>
                                    <td>
                                        <button class="btn btn-success" onclick="details_buttong()" data-bs-toggle="modal" data-bs-target="#modal_details">Details</button>
                                        <button class="btn btn-danger" onclick="" >Delete</button>
                                    </td>
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

    {{-- modal Details --}}
    <div class="modal fade m-3" id="modal_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data VM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
                
            <div class="modal-body">
                <div class="row g-2 mb-3">
                    <div class="col d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM NAME</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_Name" type="text" name="vm_name" class="form-control" placeholder="...">Windows</label>
                        
                    </div>
                    
                </div>
                
                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM IP</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_IP" type="text" name="vm_name" class="form-control" placeholder="...">( IP Address )</label>
                    </div>
                    
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM GATEWAY</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Gateway" type="text" name="vm_name" class="form-control" placeholder="...">( [ Gateway ])</label>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM NAMESERVER</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_NameServer" name="vm_name" class="form-control" placeholder="...">( [ VM NameServer ] )</label>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM VLAN</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_Vlan" name="vm_name" class="form-control" placeholder="...">( VM VLAN )</label>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM HOSTNAME</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_Hostname" type="text" name="vm_name" class="form-control" placeholder="...">( vm hostname )</label>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM OS</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_OS" type="text" name="vm_name" class="form-control" placeholder="...">( vm os )</label>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM KERNEL</label>
                        <label for="floatingInputGrid">:</label>
                        <label id="Vm_Kernel" type="text" name="vm_name" class="form-control" placeholder="...">( vm kernel )</label>
                    </div>
                </div>

                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Tunnel Cloudflare Info</div>
                <hr>
                <form role="form">
                    <div class="form-group pb-4">
                        <label for="exampleInputEmail1" class="float-start pb-2">
                            Tunnel Provider
                        </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="e.g Cloudflare" />
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Domain
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Domain" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Name
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mY uBuNtu Server" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Type
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g SSH/TCP/FTP" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Password
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Password" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Username
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Username" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Login Key
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="IP Address" />
                        </div>
                    </div>
                    <!-- <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                CMS
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g Wordpress" />
                        </div>
                        <div class="form-group col">
                
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Engine
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g PHP" />
                        </div>
                        <div class="form-group col">
                
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Status
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g Active" />
                        </div>
                    </div> -->

                    <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Tunnel Ngrok Info</div>
                <hr>
                <form role="form">
                    <div class="form-group pb-4">
                        <label for="exampleInputEmail1" class="float-start pb-2">
                            Tunnel Provider
                        </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="e.g Ngrok" />
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Host
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Host" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Name
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mY uBuNtu Server" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Type
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g SSH/TCP/FTP" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Password
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Password" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Email
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Email" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Port
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Port" />
                        </div>
                    </div>
                
                
                
                
                </form>
                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Company Info</div>
                
                <hr>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Company Name
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g PT. Akasata Cyber Tech" />
                    </div>
                    
                    
                </div>

                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Optional Details</div>
                
                <hr>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Login
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="URL/FTP/SSH" />
                    </div>
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Username
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alternate Username" />
                    </div>
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Password
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alternate Password" />
                    </div>
                </div>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Optional Info
                        </label>
                        <textarea type="text" class="form-control " id="exampleInputPassword1" placeholder="Alternate Username"
                            style="height:150px" ></textarea>
                    </div>
                </div>
                <div class="text-secondary text-start"><i class="fas fa-square-plus
                     fa-md"></i> Aditional Column</div>
                
                <hr>
                
                <div id="barisan3" class="col-md-12">
                    <div class="form-group row col-12">
                        <div class="col "><input class="form-control fs-15px text-center" placeholder="ColumnName" name="Nama[]"
                                 type="text"></div>
                        <div class="col"><input class="form-control fs-15px" placeholder="Value" name="Nama[]" 
                                type="text"></div>
                        <div class="col"><button id="" onClick="tambahin3()" class="btn btn-success">Add More</button></div>
                    </div><br>
                
                
                
                
                
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

    {{-- modal Tambah Data --}}
    <div class="modal fade m-3" id="modal_tambah_data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data VM</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form method="POST" action="{{ route('assets.store') }}">
                @csrf
            <div class="modal-body">
                <div class="row g-2 mb-3">
                    <div class="col d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM NAME</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_name" type="text" name="vm_name" class="form-control" placeholder="Windows..."></input>
                        
                    </div>
                    
                </div>
                
                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM IP</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_ip" type="text" name="vm_ip" class="form-control" placeholder="( IP Address )..."></input>
                    </div>
                    
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM ETHERNET</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_Gateway" type="text" name="vm_ethernet" class="form-control" placeholder="( [ Gateway ])..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM GATEWAY</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_Gateway" type="text" name="vm_gateway" class="form-control" placeholder="( [ Gateway ])..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM NAMESERVER</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_nameserver" name="vm_name_server" class="form-control" placeholder="( [ VM NameServer ] )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM VLAN</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_vlan" name="vm_vlan" class="form-control" placeholder="( VM VLAN )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM HOST</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_vlan" name="vm_host" class="form-control" placeholder="( VM VLAN )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM HOSTNAME</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_hostname" type="text" name="vm_hostname" class="form-control" placeholder="( vm hostname )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM OS</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_os" type="text" name="vm_os" class="form-control" placeholder="( vm os )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">VM KERNEL</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_kernel" type="text" name="vm_kernel" class="form-control" placeholder="( vm kernel )..."></input>
                    </div>
                </div>

                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 justify-content-center align-items-center">
                        <label class="col-2" for="floatingInputGrid">NOTE</label>
                        <label for="floatingInputGrid">:</label>
                        <input id="input_vm_kernel" type="text" name="note" class="form-control" placeholder="( Note )..."></input>
                    </div>
                </div>

                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Providers</div>
                <hr>
                <div class="row g-2 mb-3">
                    <div class="col-md d-flex flex-row gap-2 align-items-center">
                        <label class="col-2" for="floatingInputGrid">Select Providers</label>
                        <label for="floatingInputGrid">:</label>

                        <!-- <select class="form-control" name="" id="input_provider">
                            <option id="provider_cloudflare" value="cloudflare">Cloudflare</option>
                            <option value="Ngrok">Ngrok</option>
                        </select> -->

                        <div class="btn-group">
                            <button type="button" onclick="prov_ngrok()" id="provider_ngrok" class="btn btn-white" value="ngrok">Ngrok</button>
                            <button type="button" onclick="prov_cloudflare()" id="provider_cloudflare" class="btn btn-white" value="cloudflare">Cloudflare</button>
                            
                        </div>
                        
                    </div>
                </div>
                <hr>

                
                <div id="cloudflare_division" class="">
                    <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Tunnel Cloudflare Info</div>
                <hr>
                    <div class="form-group pb-4">
                        <label class="float-start pb-2">
                            Tunnel Provider
                        </label>
                        <input type="text" class="form-control" placeholder="e.g Cloudflare" value="Cloudflare"/>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Domain
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Domain" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Name
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mY uBuNtu Server" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Type
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g SSH/TCP/FTP" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Password
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Password" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Username
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Username" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Login Key
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="IP Address" />
                        </div>
                    </div>
                    <!-- <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                CMS
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g Wordpress" />
                        </div>
                        <div class="form-group col">
                
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Engine
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g PHP" />
                        </div>
                        <div class="form-group col">
                
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Status
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g Active" />
                        </div>
                    </div> -->
                </div>
                    
                <div id="ngrok_division">
                    <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Tunnel Ngrok Info</div>
                <hr>
                
                    <div class="form-group pb-4">
                        <label for="exampleInputEmail1" class="float-start pb-2">
                            Tunnel Provider
                        </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="e.g Ngrok" value="Ngrok" />
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Host
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Host" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Name
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="mY uBuNtu Server" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Tunnel Type
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g SSH/TCP/FTP" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Password
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Password" />
                        </div>
                    </div>
                    <div class="form-group row pb-4">
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Email
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Login Email" />
                        </div>
                        <div class="form-group col">
                            <label for="exampleInputPassword1" class="float-start pb-2">
                                Port
                            </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Port" />
                        </div>
                    </div>
                </div>
                    
                
                
                
                
                
                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Company Info</div>
                
                <hr>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Company Name
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="e.g PT. Akasata Cyber Tech" />
                    </div>
                    
                    
                </div>

                <div class="text-secondary text-start"><i class="fas fa-circle-info fa-md"></i> Optional Details</div>
                
                <hr>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Login
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="URL/FTP/SSH" />
                    </div>
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Username
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alternate Username" />
                    </div>
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Alternate Password
                        </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alternate Password" />
                    </div>
                </div>
                <div class="col-md-12 row pb-4">
                    <div class="form-group col">
                
                        <label for="exampleInputPassword1" class="float-start pb-2">
                            Optional Info
                        </label>
                        <textarea type="text" class="form-control " id="exampleInputPassword1" placeholder="Alternate Username"
                            style="height:150px" ></textarea>
                    </div>
                </div>
                <div class="text-secondary text-start"><i class="fas fa-square-plus
                     fa-md"></i> Aditional Column</div>
                
                <hr>
                <div id="barisan3" class="col-md-12">
                    <div class="form-group row col-12">
                        <div class="col "><input class="form-control fs-15px text-center" placeholder="ColumnName" name="Nama[]"
                                 type="text"></div>
                        <div class="col"><input class="form-control fs-15px" placeholder="Value" name="Nama[]" 
                                type="text"></div>
                        <div class="col"><button id="" onClick="tambahin3()" class="btn btn-success">Add More</button></div>
                    </div><br>
                </div>
                <label class="form-label">NOTE</label>
                <label type="text" name="vm_name" class="form-control" placeholder="...">( Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque suscipit, asperiores blanditiis culpa velit sint quod, eveniet odit ipsum vero nemo excepturi laborum quasi, a quisquam cupiditate maiores eos earum! )</label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        
        </div>
        </div>
    </div>
    {{-- end modal Tambah Data --}}

</div>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>

<script>
    function details_buttong() {
        
        axios.get('/vm/' + "1")
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


    function prov_cloudflare() {
        $('#provider_cloudflare').addClass('active');
        $('#provider_ngrok').removeClass('active');
        $('#ngrok_division').addClass('d-none')
        $('#cloudflare_division').removeClass('d-none')
    }

    function prov_ngrok() {
        $('#provider_ngrok').addClass('active');
        $('#provider_cloudflare').removeClass('active');
        $('#cloudflare_division').addClass('d-none')
        $('#ngrok_division').removeClass('d-none')

    }

    // Function to perform different actions based on the selected option


    $(document).ready(function () {
        const selectElement = $("#input_provider");
        const selectedOption = selectElement.value;
        const resultContainer = document.getElementById("resultContainer");


        // Function to add attributes when hovering over the select elements
        function addAttributesOnHover() {
        // Add attributes to select elements with specific IDs
        $('#provider_cloudflare').attr('data-hovered','true');
        $('#option2').attr('data-hovered', 'true');
        // Add more IDs and attributes as needed
        }

        // Function to remove attributes when unhovering from the select elements
        function removeAttributesOnUnhover() {
            // Remove attributes from select elements with specific IDs
            $('#provider_cloudflare').removeAttr('style','d-none');
            $('#option2').removeAttr('data-hovered');
            // Remove more attributes as needed
        }


        // Add hover event listener to the select elements
        $('#provider_cloudflare, #option2').hover(
            function() {
            addAttributesOnHover();
            },
            function() {
            removeAttributesOnUnhover();
            }
        );



        // Perform different actions based on the selected option
        // if (selectedOption === "cloudflare") {
        //     $("cloudflare_division").attr("class", "d-none")
        // } else if (selectedOption === "Ngrok") {
        //     resultContainer.innerHTML = "Option 2 is selected.";
        // } else if (selectedOption === "option3") {
        //     resultContainer.innerHTML = "Option 3 is selected.";
        // } 
    });
    

    // Attach event listener to the select element to detect changes
    // document.getElementById("options").addEventListener("change", handleOptionChange);

    // Call the function initially to display the default option
    // handleOptionChange();
</script>
@endsection
