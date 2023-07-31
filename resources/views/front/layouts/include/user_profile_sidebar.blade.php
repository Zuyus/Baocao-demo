<div class="section-wrap account-page-sidemenu user-profile-sidebar">
    <nav class="account-page-menu">
        <ul>
            <li class="{{$menu == 'profile' ? 'active' : ''}}"><a href="{{route('user.profile')}}"><i class="fas fa-user"></i>{{__('My Profile')}}</a></li>
            <li class="{{$menu == 'order' ? 'active' : ''}}"><a href="{{route('user.profile.myOrder')}}"><i class="fas fa-box-open"></i>{{__('My Order')}}</a></li>
            <li class="{{$menu == 'review' ? 'active' : ''}}"><a href="{{route('user.profile.myReview')}}"><i class="fas fa-user-edit"></i>{{__('My Review')}}</a></li>
        </ul>
    </nav>
</div>
