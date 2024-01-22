<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">

    <div class="card card-danger card-outline">
      {{-- <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-table"></i>
          Marketing Material
        </h3>
      </div> --}}
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            @include('livewire.sales.partials.current.navtabs.flyersnavtabs')
          </div>
          <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="vert-tabs-tabContent">
                    @include('pages.sales.flyers_headers.self_employed')
                    @include('pages.sales.flyers_headers.1099only')
                    @include('pages.sales.flyers_headers.bankstatements')
                    @include('pages.sales.flyers_headers.allprograms')
                    @include('pages.sales.flyers_headers.atr')
                    @include('pages.sales.flyers_headers.businesspurpose')
                    @include('pages.sales.flyers_headers.expandingGuid')
                    @include('pages.sales.flyers_headers.forignnat')
                    @include('pages.sales.flyers_headers.investmentsol')
                    @include('pages.sales.flyers_headers.bridge')
                    @include('pages.sales.flyers_headers.cashout')
                    @include('pages.sales.flyers_headers.condjumbo')
                    @include('pages.sales.flyers_headers.dscrflyer')
                    @include('pages.sales.flyers_headers.ioflyers')
                    @include('pages.sales.flyers_headers.itinflyer')
                    @include('pages.sales.flyers_headers.nqmniche')
                    @include('pages.sales.flyers_headers.plprograms')
                    @include('pages.sales.flyers_headers.sbmfflyers')
                    @include('pages.sales.flyers_headers.uniqproperties')
                    @include('pages.sales.flyers_headers.wvorflyer')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>