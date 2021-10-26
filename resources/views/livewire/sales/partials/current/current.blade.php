<div class="col-sm-12 col-md-12 col-lg-12 col-xl-10">

    <div class="card card-danger card-outline">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-table"></i>
          Current Rate Sheets
        </h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            @include('livewire.sales.partials.current.navtabs.navtabs')
          </div>
          <div class="col-sm-12 col-md-9">
            <div class="tab-content" id="vert-tabs-tabContent">
              @include('livewire.sales.partials.current.ombs.ombs')
              @include('livewire.sales.partials.current.3mbs.3mbs')
              @include('livewire.sales.partials.current.dscr.dscr')
              @include('livewire.sales.partials.current.nonprime.nonprime')
              @include('livewire.sales.partials.current.jumboprime.jumboprime')
              @include('livewire.sales.partials.current.odd.odd')
              @include('livewire.sales.partials.current.oddplus.oddplus')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>