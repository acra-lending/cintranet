<div class="tab-pane fade show" id="nav-bulletins" role="tabpanel" aria-labelledby="nav-bulletins-tab" wire:ignore.self>
    <div class="row">
        <div class="col-sm-2">
            @include('livewire.fixandflip.partials.documents.bulletins.navtabs')       
        </div>
        <div class="col-sm-10">
            <div class="tab-content" id="vert-tabs-tabContent">
                @include('livewire.fixandflip.partials.documents.bulletins.bulletins')
            </div>
        </div>
    </div>
</div>