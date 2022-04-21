<!-- This needs to be moved to partials.documents -->
<div class="tab-pane fade show" id="nav-loan-officer" role="tabpanel" aria-labelledby="nav-loan-officer-tab">
    <div class="row">
        @include('pages.direct.partials.loanofficer.navtabs')
        <div class="col-sm-10">
            <div class="tab-content" id="vert-tabs-tabContent">
                @include('pages.direct.partials.loanofficer.forms')
                @include('pages.direct.partials.loanofficer.checklists')
                @include('pages.direct.partials.loanofficer.training')
            </div>
        </div>
    </div>
</div>