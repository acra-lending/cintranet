@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Courses</h1>
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
          <div class="col-sm-6">
            <div class="card card-danger card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-book-open"></i>
                  Catalog
                </h3><a href="{{ asset ('storage/upload/' .$courseCatalog->filename) }}" download class="btn btn-danger float-right">Download <i class="far fa-file-pdf"></i></a>
              </div>
              <div class="card-body text-center">
                <!-- Course Catalog Content -->
                <img src="{{ asset('storage/upload/course-catalog-cover.jpg') }}" class="img-thumbnail">
                  {{-- <div class='embed-container' data-page-width='494' data-page-height='640' id='ypembedcontainer' >
                    <iframe src="https://www.yumpu.com/en/embed/view/1FICVUYuyW8G25BD" frameborder="0" allowfullscreen="true"  allowtransparency="true">
                    </iframe>
                  </div> --}}
                  
              </div>
            </div>
          
          </div>

        </div>
      </section>
    </div>
<!-- /.col -->
<!-- ./wrapper -->
<script src='https://players.yumpu.com/modules/embed/yp_r_iframe.js' ></script>
@stop