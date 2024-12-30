<div>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Contact Message  #{{ $contact->id }}</h5>
                    <a href="{{ route('contacts') }}" class="btn btn-primary mb-2 text-nowrap">
                        Messages
                    </a>
                </div>
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">Name :</span>
                            <span class="text-dark">{{ $contact->name }}</span>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">E-mail :</span>
                            <span class="text-dark">{{ $contact->email }}</span>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">Phone Number :</span>
                            <span class="text-dark">{{ $contact->phone }}</span>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">Subject :</span>
                            <span class="text-dark">{{ $contact->subject }}</span>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">Message :</span>
                            <span class="text-dark">{{ $contact->message }}</span>
                        </div>
                        <div class="col-12 col-md-6 mt-5">
                            <span class="fw-bold text-dark">{{ __('translations.createdAt') }}:</span>
                            <span class="text-dark">{{ $contact->created_at->format('d-m-Y h:i a') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>