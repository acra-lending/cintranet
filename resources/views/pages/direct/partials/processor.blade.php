<!-- This needs to be moved to partials.documents -->
<div class="tab-pane fade show" id="nav-processor" role="tabpanel" aria-labelledby="nav-processor-tab">
    <div class="row">
        @include('pages.direct.partials.processor.navtabs')
        <div class="col-sm-10">
            <div class="tab-content" id="vert-tabs-tabContent">
                @include('pages.direct.partials.processor.forms')
                @include('pages.direct.partials.processor.checklists')
            </div>
        </div>
    </div>
</div>