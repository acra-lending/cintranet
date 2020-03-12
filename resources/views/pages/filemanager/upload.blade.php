@extends('layouts.default')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1 class="m-0 text-dark">File Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">File Manager</a></li>
              <li class="breadcrumb-item active">Upload</li>
              </ol>
          </div><!-- /.col -->
          </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <iframe src="/filemanager" style="width: 100%; height: 800px; overflow: hidden; border: none;"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

      <script>
        var lfm = function(id, type, options) {
          let button = document.getElementById(id);
    
          button.addEventListener('click', function () {
            var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
            var target_input = document.getElementById(button.getAttribute('data-input'));
            var target_preview = document.getElementById(button.getAttribute('data-preview'));
    
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = function (items) {
              var file_path = items.map(function (item) {
                return item.url;
              }).join(',');
    
              // set the value of the desired input to image url
              target_input.value = file_path;
              target_input.dispatchEvent(new Event('change'));
    
              // clear previous preview
              target_preview.innerHtml = '';
    
              // set or change the preview image src
              items.forEach(function (item) {
                let img = document.createElement('img')
                img.setAttribute('style', 'height: 5rem')
                img.setAttribute('src', item.thumb_url)
                target_preview.appendChild(img);
              });
    
              // trigger change event
              target_preview.dispatchEvent(new Event('change'));
            };
          });
        };
    
        // lfm('lfm2', 'file', {prefix: route_prefix});
        lfm('lfm', 'image', {prefix: route_prefix});
      </script>

      <style>
        .popover {
          top: auto;
          left: auto;
        }
      </style>