<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-6" width="150px" src="/picture/user/<?= $user->image ?>">
                <span class="font-weight-bold"><?= $user->first_name . " " . $user->last_name ?></span>
                <span class="text-black-50"><?= $user->email ?></span>
                <span><label>Compte créé le</label><?= " " . substr($user->created_at, 0, 10) //print only the Y-M-D 
                                                    ?></span>
                <form action="/user/profil" method="POST">
                    <input type="submit" value="Return to profile" class="btn btn-secondary">
                </form>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right">Profile</h4>
            </div>
            <form action="/user/saveEdit" method="POST">
                <label class="labels">Modify your Lastname
                    <input type="text" class="form-control" name="last_name" placeholder="<?= $user->last_name ?>" value="<?= $user->last_name ?>">
                </label>
                <label class="labels">Modify your mobile number
                    <input type="text" class="form-control" name="phone" placeholder="<?= $user->phone ?>" value="<?= $user->phone ?>">
                </label>
                <label class="labels">Modify your email
                    <input type="text" class="form-control" name="email" placeholder="<?= $user->email ?>" value="<?= $user->email ?>">
                </label>
                <input type="submit" name="save" value="Save change" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>