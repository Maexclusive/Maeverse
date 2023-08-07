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
                <li class="breadcrumb-item active">Cloudflare Tunnels</li>
            </ol>
            <!-- END breadcrumb -->
            <!-- BEGIN page-header -->
            <h1 class="page-header">Cloudflare Tunnels</h1>
            <!-- END page-header -->

            <div class="col-xl">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Data Cloudflare Tunnels</h4>
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


                        {{-- modal tambah Cloudflare Tunnel --}}
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Tambah Data</button>
                        <div class="modal fade m-3" id="staticBackdrop" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Tunnel Cloudflare
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('Cloudflare.store') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group pb-4">
                                                <label for="exampleInputEmail1" class="float-start pb-2">
                                                    Domain
                                                </label>
                                                <input type="text" name="domain_id" hidden>
                                                <select class="form-control" name="domain_name" id="domain_names"
                                                    placeholder="Domain">
                                                    @foreach ($domains as $dmns)
                                                    <option value="{{ $dmns->domain_name}}">{{ $dmns->domain_name}}
                                                    </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-12 row pb-4">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Tunnel Name
                                                    </label>
                                                    <input type="text" class="form-control" name="tunel_name"
                                                        id="exampleInputPassword1" placeholder="Tunnel Name" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Tunnel Host
                                                    </label>
                                                    
                                                    
                                                    <input type="text" class="form-control" name="tunel_host"
                                                        id="exampleInputPassword1" placeholder="Tunnel Host" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 row pb-4">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Tunnel Type
                                                    </label>
                                                    <select class="form-control" name="" id="slct_options">
                                                        <option value="SSH">SSH</option>
                                                        <option value="TCP">TCP</option>
                                                        <option value="FTP">FTP</option>
                                                    </select>
                                                    {{-- <input type="text" class="form-control" name="tunel_type"
                                                        id="exampleInputPassword1" placeholder="e.g SSH/TCP/FTP" /> --}}
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="float-start pb-2">
                                                        Username
                                                    </label>
                                                    <input type="text" class="form-control" name="tunel_login_users"
                                                        id="exampleInputPassword1" placeholder="Username" />
                                                </div>
                                            </div>
                                            <div class="col row pb-4">
                                                <div class="form-group col">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Login User
                                                    </label>
                                                    <input type="text" class="form-control"
                                                        id="exampleInputPassword1" name="tunel_login_password"
                                                        placeholder="User" />
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Login Credential
                                                    </label>
                                                    <input id="ssh_key_login" type="text" class="form-control"
                                                        name="tunel_login_key" 
                                                        placeholder="SSH Key" />
                                                    <input id="password_login" type="password" class="form-control d-none"
                                                        name="tunel_login_key"
                                                        placeholder="Password" />
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Login Type
                                                    </label>
                                                    {{-- <select class="form-control" name="login_type"
                                                        id="login_types">
                                                        <option value="password_option" name="password_login_type">
                                                            Password</option>
                                                        <option value="ssh_key_option" name="ssh_login_type">SSH
                                                        </option>
                                                    </select> --}}
                                                    <!-- dropdown -->
                                                    <div class="btn-group form-control p-0">
                                                        <a id="lgn_type_title" href="#" class="btn dropdown-toggle" data-bs-toggle="dropdown">SSH</a>
                                                        
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><button type="button" class="dropdown-item" onclick="btn_login_type_passwd()">Password</button></li>
                                                            <li><button type="button" class="dropdown-item" onclick="btn_login_type_ssh()">SSH Key</button></li>
                                                            
                                                        </ul>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- <div class="text-secondary text-start"><i
                                                    class="fas fa-circle-info fa-md"></i> Aditional Info</div>
                                            <hr>
                                            <div class="col-md-12 row pb-4">
                                                <div class="form-group col-md-4">

                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Alternate Login
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                        placeholder="URL/FTP/SSH" />
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Alternate Username
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Alt. Username" />
                                                </div>
                                                <div class="form-group col-md-4">

                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Alternate Password
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                                        placeholder="Alt. Password" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 row pb-4">
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputPassword1" class="float-start pb-2">
                                                        Info
                                                    </label>
                                                    <textarea type="text" class="form-control "
                                                        id="exampleInputPassword1" placeholder="More Information"
                                                        style="height:150px" />
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="text-secondary text-start"><i
                                                    class="fas fa-square-plusfa-md"></i> Aditional Column</div>
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

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end modal tambah user --}}

                    <table id="data-table-fixed-header" class="table table-striped table-bordered align-middle">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th class="text-nowrap">Domain</th>
                                <th class="text-nowrap">Tunnel Name</th>
                                <th class="text-nowrap">Tunnel Host</th>
                                <th class="text-nowrap">Tunnel Type</th>
                                <th class="text-nowrap">Username</th>
                                <th class="text-nowrap">Password</th>
                                <th class="text-nowrap">Login Key</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1 ?>
                            @foreach ($cloud as $c)
                            <tr class="odd gradeX">
                                <td width="1%" class="fw-bold text-dark">
                                    <?php echo $i++ ?>
                                </td>
                                <td>{{ $c->domain_name }}</td>
                                <td>{{ $c->tunel_name }}</td>
                                <td>{{ $c->tunel_host }}</td>
                                <td>{{ $c->tunel_type }}</td>
                                <td>{{ $c->tunel_login_users }}</td>
                                <td>{{ $c->tunel_login_password }}</td>
                                <td>{{ $c->tunel_login_key }}</td>
                                <td>
                                    <form action="{{ route('Cloudflare.destroy',$c->tcf_id) }}" method="POST">
                                        <a class="btn btn-primary" href="">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            data-confirm-delete="true">Delete</button>
                                        <button type="button" class="btn btn-success"
                                            data-confirm-delete="true">Details</button>
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
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i
            class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
</div>

</div>
<script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()
    })

    function btn_login_type_passwd() {
        $('#password_login').removeClass('d-none');
        $('#ssh_key_login').addClass('d-none');
        $('#lgn_type_title').text('Password');
    }

    function btn_login_type_ssh() {
        $('#ssh_key_login').removeClass('d-none');
        $('#password_login').addClass('d-none');
        $('#lgn_type_title').text('SSH');

    }

</script>

@endsection