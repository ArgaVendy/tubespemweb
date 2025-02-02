<div class="modal fade" id="userTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addDataUser') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="no" class="col-sm-5 col-form-label">NO</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control-plaintext" id="no" name="no"
                                value="{{ $no }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-5 col-form-label">Name</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="nama" autocomplete="off">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-5 col-form-label">Email</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-5 col-form-label">Password</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="password" name="password"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-5 col-form-label">Address</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tlp" class="col-sm-5 col-form-label">Phone Number</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="tlp" name="tlp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tgllahir" class="col-sm-5 col-form-label">Date of Birth</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="tgllahir" name="tgllahir">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="role" class="col-sm-5 col-form-label">Role</label>
                        <div class="col-sm-7">
                            <select type="text" class="form-control" id="role" name="role">
                                <option value=""> Pilih Role </option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-5 col-form-label">Profile Photo</label>
                        <div class="col-sm-7">
                            <input type="hidden" name="foto">
                            <img class="mb-2 preview" style="width: 100px;">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="inputFoto"
                                name="foto" onchange="previewImg()">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImg() {
        const fotoIn = document.querySelector('#inputFoto');
        const preview = document.querySelector('.preview');

        preview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(fotoIn.files[0]);

        oFReader.onload = function(oFREvent) {
            preview.src = oFREvent.target.result;
        }
    }
</script>
