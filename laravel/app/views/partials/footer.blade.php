<section id="footer-defoult" class="padding-60">
    <div class="container">
        <div class="row">
            <div class="col-md-3 margin-btm20">
                <div class="footer-column">
                    <h3>Sentora</h3>
                    <p class="margin-btm20">
                        Sentora is an open-source web hosting control panel built specifically to work on a variety of Linux distributions. Sentora is licensed under the GPLv3 and is a separately maintained fork of the original ZPanel project. Sentora is developed and maintained by the original members of the ZPanel team.<br />Meet the <a href="{{ URL::route('the-team') }}">Team</a>
                    </p>
                    <ul class="list-unstyled list-inline social">
                        <li><a href="https://www.facebook.com/sentoracp" target="_blank"><i class="ion-social-facebook-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Like On Facebook"></i></a></li>
                        <li><a href="https://twitter.com/sentoracp" target="_blank"><i class="ion-social-twitter-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow us on Twitter"></i></a></li>
                        <li><a href="https://github.com/sentora" target="_blank"><i class="ion-social-github-outline"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Fork it on GitHub!"></i></a></li>

                    </ul>
                </div><!--footer columns end-->
            </div>
            <div class="col-md-6 margin-btm20">
                <div class="footer-column">
                    <h3>Latest announcements</h3>
                    <ul class="list-unstyled contact-list margin-btm20">
                        @foreach($senApiNews as $item)
                        <li><strong><a href="{{ $item->url }}"><i class="ion-ios7-bookmarks-outline"></i> {{ $item->title }}</a></strong> <small>posted {{ (new \Carbon\Carbon())->createFromTimestamp($item->created_epoch)->diffForHumans() }}</small></li>
                        @endforeach
                    </ul>

                </div><!--footer columns end-->
            </div>
            <div class="col-md-3 margin-btm20">
                <div class="footer-column">
                    <h3>Latest release</h3>
                    <h1><i class="ion-android-download"></i> <a href="{{ URL::route('download') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download it now?">{{ $senApiVersion }}</a></h1>

                    <h3>Love Sentora?</h3>
                    <p class="small">If you benefit from and/or like using Sentora then please help drive the future development of the project by <a href="{{ URL::route('donate') }}">donating today</a>!</p>
                </div>
            </div>

        </div><!--row end -->
        <div class="divied-40"></div>
        <div class="row">
            <div class="col-md-12 text-center margin-btm20">
                <a href="{{ URL::route('home') }}"><img src="/img/sentora_watermark.png" alt="Sentora - The open-source web hosting control panel"></a>
            </div>
            <div class="col-md-12 text-center">
                <span>&copy; Copyright 2014 <a href="/">The Sentora Project</a>. All rights reserved.</span>
            </div>
        </div>
    </div><!--container-->
</section><!--footer default end-->
