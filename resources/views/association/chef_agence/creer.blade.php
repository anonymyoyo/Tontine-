

<div class="card mb-3">
    <div class="card-header">
    <h5 class="card-title">Nouveau Chef d'agence</h5>
    </div>
    <div class="card-body">

<form action="{{ route('ajouter.chef_d_agence') }}" method="post" enctype="multipart/form-data">
            @csrf
    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Nom du chef d'agence</label>
            <input type="text" name="name" class="form-control" placeholder="Enter fullname" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
            <div class="mb-3">
            <label class="form-label">Association</label>
            <select name="association_id"  class="form-select">
                <option value="0">Selectionner</option>
                @foreach ($association as $associations)
                    <option value="{{ $associations->id }}" class="form-option">{{ $associations->name }}</option>
                @endforeach
                {{-- <option value="1">{{ $gerant->name }}</option> --}}
            </select>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email address" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Telephone</label>
            <input type="text" name="phone" class="form-control" placeholder="Enter phone number" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Ville</label>
            <input type="text" name="ville" class="form-control" placeholder="Enter company name" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Pays</label>
            <input type="text" name="pays" class="form-control" placeholder="Enter business address" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Piece d'identification</label>
            <input type="file" name="identification" class="form-control" placeholder="Enter province/territory" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="image" class="form-control" placeholder="Enter postal code" />
        </div>
        </div>
        <div class="col-lg-3 col-sm-4 col-12">
            <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Enter postal code" />
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="mb-3">
            {{-- <label class="form-label">Reglements</label> --}}
            <input class="form-control" value="Submit" type="submit">
            </div>
        </div>
    </div>

</form>
    <!-- Row end -->
    </div>
    {{-- <div class="card-footer">
        <div class="d-flex gap-2 justify-content-end">
            <button type="button" class="btn btn-outline-secondary">
            Cancel
            </button>
            <button type="button" class="btn btn-success">
            Creer
            </button>
        </div>
    </div> --}}
</div>
