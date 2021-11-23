<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold"><?= $user->first_name . " " . $user->last_name ?></span>
                <span class="text-black-50"><?= $user->email ?></span>
                <span><label>Compte créé le</label><?= " " . substr($user->created_at, 0, 10) //print only the Y-M-D ?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?= $user->first_name ?>" value=""></div>
                    <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control" value="" placeholder="<?= $user->last_name ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?= $user->phone ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="<?= $user->email ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Birthdate</label><input type="text" class="form-control" placeholder="<?= $user->birth_date ?>" value=""></div>
                </div>
            </div>
        </div>
    </div>
</div>