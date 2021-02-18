@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Expense Reporting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="/">Human Resources</a></li>
                <li class="breadcrumb-item">Expense Reporting</a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="float-left">
                    <div class="container">
                        <div class="card" style="width: 18rem;">
                            <button class="btn btn-outline-default"><a href="{{ asset ('storage/upload/' .$expenseTraining->filename) }}" target="_blank"><img class="card-img-top" src="{{ asset ('img/hr/concur.png') }}" alt="concur"></a></button>
                            <div class="card-body">
                                <h5 class="card-title">Concur Expense Report Training</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>
  <!-- /.col -->
<!-- ./wrapper -->
@stop