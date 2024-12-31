<div>
    <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between">
            <h4 class="card-title mb-3">
               Subscribers List 
            </h4>
        </div>
        <div class="card-datatable table-responsive" wire:ignore>
            <table class="dataTable table border-top">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Subscribed At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscribers as $subscriber)
                        <tr>
                            <td>{{ $subscriber->id}}</td>
                            <td>{{ $subscriber->email}}</td>
                            <td>{{ $subscriber->created_at->format('d-m-Y h:i a')}}</td>
                            <td>
                                    <a href="#" class="text-body delete-record delete-button" data-id="{{ $subscriber->id }}">
                                        <i class="ti ti-trash ti-sm mx-2 text-danger"></i>
                                    </a>
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

</div>