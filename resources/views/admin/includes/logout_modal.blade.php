<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">{{ __('Ohh No!')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ __('Are you sure you want to logout?')}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary me-2" data-bs-dismiss="modal">{{ __('Cancel')}}</button>
                <a href="{{route('admin.logout')}}" class="btn btn-primary">{{ __('Logout')}}</a>
            </div>
        </div>
    </div>
</div>
