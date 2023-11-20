<div>
    <div class="container">
        <div class="col-md-12 col-lg-12 col-xl-10">
          <div class="card card-dark card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-folder"></i>
                Documents
              </h3>
            </div>
            <div class="card-body">
              @include('livewire.fixandflip.partials.documents.navtabs')
              <br/>
              
                <div class="tab-content" id="nav-tabContent">
                    @include('livewire.fixandflip.partials.documents.references.index')
                    @include('livewire.fixandflip.partials.documents.toolkit.index')
                    @include('livewire.fixandflip.partials.documents.bulletins.index')
                </div>

          </div>
        </div>
      </div>
    </div>
</div>
