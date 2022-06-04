@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

      <style>
      .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
      }
      
      .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
      }
      
      .color-palette-set {
      margin-bottom: 15px;
      }

      .color-palette span {
      display: none;
      font-size: 12px;
      }

      .color-palette:hover span {
      display: block;
      }

      .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
      }

      .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
      }
      </style>

      <section class="content">
        <div class="container">
            <iframe width="1550" height="3500" src="https://app.powerbi.com/view?r=eyJrIjoiNTIwMTQyMWMtMDk4Mi00ZTFhLTlhNWMtNTk3OTFjMzIzYzA0IiwidCI6ImM4YjhiYjhkLTQ4NzAtNGQ2NS04NzAxLWEyZmY5ZmViMDEwMiIsImMiOjZ9&pageName=ReportSection" frameborder="0" allowFullScreen="false"></iframe>
        </div>
      </section>
    </div>
<!-- /.col -->
@stop