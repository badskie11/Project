<!-- Update Resident Modal -->
<div wire:ignore.self class="modal fade" id="updateResidentModal" tabindex="-1" aria-labelledby="updateResidentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateResidentModalLabel">Edit Resident</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                    aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateResident">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-label">First Name</div>
                                    <input type="name" wire:model="FirstName" class="form-control">
                                    @error('FirstName')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-label">Middle Name</div>
                                    <input type="name" wire:model="MiddleName" class="form-control">
                                    @error('MiddleName')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-label">Last Name</div>
                                    <input type="name" wire:model="LastName" class="form-control">
                                    @error('LastName')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="form-label">Suffix</div>
                                    <input type="" wire:model="Suffix" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-label">Date of Birth</div>
                                    <input type="date" wire:model="DateofBirth" class="form-control">
                                    @error('DateofBirth')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-label">Civil Status</div>
                                    <select wire:model="CivilStatus" class="form-control">
                                        <option value="">--Select Status--</option> 
                                        <option value="Single">Single</option> 
                                        <option value="Married">Married</option> 
                                        <option value="Separated">Separated</option> 
                                        <option value="Widow">Widow</option> 
                                    </select>
                                    @error('CivilStatus')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-label">Place of Birth</div>
                                    <input type="" wire:model="PlaceofBirth" class="form-control">
                                    @error('PlaceofBirth')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
