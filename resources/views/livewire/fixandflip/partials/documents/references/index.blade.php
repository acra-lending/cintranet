<div class="tab-pane fade show active" id="nav-references" role="tabpanel" aria-labelledby="nav-references-tab" wire:ignore.self>
    <div class="row">
        <div class="col-sm-2">
            @include('livewire.fixandflip.partials.documents.references.navtabs')
        </div>
        <div class="col-sm-10">
            <div class="tab-content" id="vert-tabs-tabContent">
                @include('livewire.fixandflip.partials.documents.references.systems')
                @include('livewire.fixandflip.partials.documents.references.documents')
                @include('livewire.fixandflip.partials.documents.references.underwriting')
                @include('livewire.fixandflip.partials.documents.references.funding')
                @include('livewire.fixandflip.partials.documents.references.processes')
            </div>
        </div>
    </div>
</div>