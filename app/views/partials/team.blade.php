@foreach(Config::get('site.team') as $team)
<div class="row"><h2>{{ $team['name'] }}</h2></div>
<div class="row">
    @foreach($team['members'] as $member)
    <div class="col-md-3 margin-btm20">
        <img src="{{ Gravatar::make($member['gravatar_email'])->defaultGravatar('mm')->size(220)->get() }}" class="img-responsive" alt="">
        <div class="person-desc">
            <h4>{{ $member['name'] }} - {{ $member['forum_name'] }}</h4>
             <p>{{ $member['role'] }}</p>
            <ul class="list-unstyled list-inline social">
                @if(isset($member['social_facebook']) && $member['social_facebook'] != '')
                <li><a href="{{ $member['social_facebook'] }}" target="_blank"><i class="ion-social-facebook-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook profile"></i></a></li>
                @endif
                @if(isset($member['social_twitter']) && $member['social_twitter'] != '')
                <li><a href="{{ $member['social_twitter'] }}" target="_blank"><i class="ion-social-twitter-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow on Twitter"></i></a></li>
                @endif
                @if(isset($member['social_googleplus']) && $member['social_googleplus'] != '')
                <li><a href="{{ $member['social_googleplus'] }}" target="_blank"><i class="ion-social-googleplus-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow on Google+"></i></a></li>
                @endif
                @if(isset($member['social_github']) && $member['social_github'] != '')
                <li><a href="{{ $member['social_github'] }}" target="_blank"><i class="ion-social-github-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow on GitHub"></i></a></li>
                @endif
                @if(isset($member['social_siteblog']) && $member['social_siteblog'] != '')
                <li><a href="{{ $member['social_siteblog'] }}" target="_blank"><i class="ion-social-wordpress-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Personal website"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
    @endforeach
</div>
<div class="divied-40"></div>
@endforeach
