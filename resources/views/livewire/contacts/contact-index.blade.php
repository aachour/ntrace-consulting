<div>
    <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between">
            <h4 class="card-title mb-3">
               Contact List 
            </h4>
        </div>
        <div class="card-datatable table-responsive" wire:ignore>
            <table class="dataTable table border-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id}}</td>
                            <td>{{ $contact->name}}</td>
                            <td>{{ $contact->email}}</td>
                            <td>{{ $contact->phone}}</td>
                            <td>{{ $contact->message}}</td>
                            <td>{{ $contact->created_at->format('d-m-Y h:i a')}}</td>
                            <td>
                                    <a href="{{ route('contacts.view', ['id' => $contact->id, 'status' => '1']) }}" class="text-body view-user-button">
                                        <i class="ti ti-eye ti-sm"></i>
                                    </a>

                                    <a href="#" class="text-body delete-record delete-button" data-id="{{ $contact->id }}">
                                        <i class="ti ti-trash ti-sm mx-2 text-danger"></i>
                                    </a>

                                    @if($contact->status == 0)
                                    <a href="#" class="text-body toggleStatus" data-id="{{ $contact->id }}" data-status="1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-original-title="Mark as Read">
                                        <i class="fa-regular fa-envelope-open"></i>
                                    </a>
                                    @else
                                    <a href="#" class="text-body toggleStatus" data-id="{{ $contact->id }}" data-status="0"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-warning" data-bs-original-title="Mark As Unread">
                                        <i class="fa-regular fa-envelope"></i>
                                    </a>
                                    @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @script
        @include('livewire.deleteConfirm')
    @endscript

    @script
    <script>
        $(document).on('click', '.toggleStatus', function() {
            let id = $(this).data('id');
            let status = $(this).data('status');
            $wire.dispatch('toggleStatus', {
                id , status
            })
        })
    </script>
    @endscript
</div>