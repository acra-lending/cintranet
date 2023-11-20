<!-- This needs to be moved to partials.documents -->
<div class="tab-pane fade" id="nav-jr-processor" role="tabpanel" aria-labelledby="nav-jr-processor-tab">
    <div class="row">
        @include('pages.direct.partials.jrprocessor.navtabs')
        <div class="col-sm-10">
            <div class="tab-content" id="vert-tabs-tabContent">
                {{-- @include('pages.direct.partials.jrprocessor.forms') --}}
                @include('pages.direct.partials.jrprocessor.checklists')
                @include('pages.direct.partials.jrprocessor.emailtemplates')
                @include('pages.direct.partials.jrprocessor.processingguides')
                @include('pages.direct.partials.jrprocessor.systemguides')
            </div>
        </div>
    </div>
</div>