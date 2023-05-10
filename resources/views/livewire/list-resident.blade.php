
<div>
<div class="card-body">
                
        <form wire:submit.prevent="listResident">
            <hr>
                <table class="table">
                    <thead>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Suffix</th>
                        <th>Date of Birth</th>
                        <th>Place of Birth</th>
                        <th>Civil Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @if(isset($list))
                            @foreach($list as $c)
                                <tr>
                                    <td>{{ $c->FirstName }}</td>
                                    <td>{{ $c->MiddleName }}</td>
                                    <td>{{ $c->LastName }}</td>
                                    <td>{{ $c->Suffix }}</td>
                                    <td>{{ $c->DateofBirth }}</td>
                                    <td>{{ $c->PlaceofBirth }}</td>
                                    <td>{{ $c->CivilStatus }}</td>
                                    <td>
                                    
                                        <button data-bs-toggle="modal" data-bs-target="#updateResidentModal" class="btn btn-info btn-sm"
                                        wire:click="updateResident({{ $c->id }})">
                                        Edit</button>
                                    
                                        <button class="btn btn-danger btn-sm"
                                        wire:click="delete('{{ $c->id }}')">
                                        Remove</button>
                                    
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </hr>
        </form>
    </div>
</div>


