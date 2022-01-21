@extends('layouts.default')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tools</h1>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
          <!--This the div tag to render functionality to.Note the id of the tag. -->
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <h3 class="p-0">Payment</h3>
                    <div id="servicemac-payment-widget" class="p-3"></div>
              </div>
              <!--This the div tag to render functionality to.Note the id of the tag. -->
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <h3 class="p-0">Payoff</h3>
                    <div id="servicemac-payoff-widget" class="p-3"></div>
              </div>
              <!--This the div tag to render functionality to.Note the id of the tag. -->
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <h3 class="p-0">Find My Loan</h3>
                    <div id="servicemac-findmyloan-widget" class="p-3"></div>
              </div>
              <!-- This the div tag to render functionality to. Note the id of the tag. -->
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                <h3 class="p-0">Net Payoff</h3>
                    <div id="servicemac-netpayoff-widget" class="p-3"></div>
              </div>
          </div>
        </section>
</div>
@endsection

@push('includes.scripts')
<!-- You will need to have a reference to ServiceMacs Widget Render -->
<script src="https://corp.servicemacusa.com//Handlers/ServiceMacWidgetRender.ashx?apiKey=NHBrekFoZSN2WXd2IXNEOWZjayFfa1FaKm0mbWRV"></script>


<!-- You will create a script tag to initialize the widgets -->
<script>
$(document).ready(function () {

<!-- Check to see if the key is valid -->
if(validKey)
{


    <!-- Render a widget by prodiving the type, in this case PaymentWidget, and the id of the tag to render to. -->
    RenderServiceMacWidget('PaymentWidget','servicemac-payment-widget');


    <!-- Render a widget by prodiving the type, in this case PayoffWidget, and the id of the tag to render to. -->
    RenderServiceMacWidget('PayoffWidget','servicemac-payoff-widget');


    <!-- Render a widget by prodiving the type, in this case FindMyLoanWidget, and the id of the tag to render to. -->
    RenderServiceMacWidget('FindMyLoanWidget','servicemac-findmyloan-widget');


    <!-- Render a widget by prodiving the type, in this case NetPayoffWidget, and the id of the tag to render to. -->
    RenderServiceMacWidget('NetPayoffWidget','servicemac-netpayoff-widget');


};

});

</script>
<script>
setTimeout(function() {
    // let filter = document.getElementsByClassName('alert alert-danger').removeAttribute('style');
    let filter = document.getElementsByClassName('alert alert-danger');

    Array.prototype.forEach.call(filter, function(element) {
        element.removeAttribute('style');
    })
}, 3500);


</script>
@endpush