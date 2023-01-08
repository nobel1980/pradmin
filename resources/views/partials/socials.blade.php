<div class="row">
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'facebook']), 'fa fa-facebook', 'Facebook', array('class' => 'btn btn-block btn-social btn-facebook')) !!}
    </div>
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'twitter']), 'fa fa-twitter', 'Twitter', array('class' => 'btn btn-block btn-social btn-twitter')) !!}
    </div>    
</div>
