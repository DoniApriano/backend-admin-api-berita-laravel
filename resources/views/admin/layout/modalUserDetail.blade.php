<div class="modal fade" id="userDetail{{ $a->id }}" tabindex="-1"
    style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">{{ $a->username }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ htmlspecialchars($followers[$a->id]) }}</p>
            </div>
        </div>
    </div>
</div>
