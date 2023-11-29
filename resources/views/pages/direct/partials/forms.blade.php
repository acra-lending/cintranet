<!-- This needs to be moved to partials.documents -->
<div class="tab-pane fade show active" id="nav-forms" role="tabpanel" aria-labelledby="nav-forms-tab">
    <div class="row">
        @include('pages.direct.partials.forms.formtabs')
        <div class="col-sm-10">
        <div class="tab-content" id="vert-tabs-tabContent">
            @include('pages.direct.partials.forms.numbers')
            @include('pages.direct.partials.forms.ad')
            @include('pages.direct.partials.forms.eh')
            @include('pages.direct.partials.forms.il')
            @include('pages.direct.partials.forms.mp')
            @include('pages.direct.partials.forms.qt')                        
            @include('pages.direct.partials.forms.ux')                        
            @include('pages.direct.partials.forms.yz')  
        </div>
        </div>
    </div>
</div>