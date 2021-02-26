@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Reports</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/learning/courses/catalog">User Management</a></li>
                  <li class="breadcrumb-item active">Reports</li>
                </ol>
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

      embed-container { 
      /* position: relative; 
      padding-bottom:56.25%; 
      height:0;  */
      overflow: hidden; 
      max-width: 100%; 
      } 
        
      .embed-container iframe, 
      .embed-container object, 
      .embed-container embed { 
      position: relative; 
      top: 0; 
      left: 0; 
      width: 100%; 
      height: 700px;
      }
      </style>

      <section class="content">
        <div class="container">
            <iframe width="1500" height="1200" src="https://app.powerbi.com/view?r=eyJrIjoiMWExNjc5NzYtYzYxOS00YWVmLWE5YjAtOWVjMGYwYWVmMWQ2IiwidCI6ImM4YjhiYjhkLTQ4NzAtNGQ2NS04NzAxLWEyZmY5ZmViMDEwMiIsImMiOjZ9" frameborder="0" allowFullScreen="false"></iframe>
        </div>
      </section>
    </div>
<!-- /.col -->
<!-- ./wrapper -->
<script src='https://players.yumpu.com/modules/embed/yp_r_iframe.js' ></script>
@stop