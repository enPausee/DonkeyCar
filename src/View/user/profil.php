<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-6" width="150px" src="/picture/user/<?=$user->image?>">
                <span class="font-weight-bold"><?=$user->first_name . " " . $user->last_name?></span>
                <span class="text-black-50"><?=$user->email?></span>
                <span><label>Compte créé le</label><?=" " . substr($user->created_at, 0, 10) //print only the Y-M-D
?></span>
                <form action="/user/edit" method="POST">
                    <input type="submit" value="Edit profile" class="btn btn-secondary">
                </form>
                <a href="/order/pendingOrder" class="btn btn-secondary" style="margin-top: 10px;">Voir vos locations en
                    cours</a>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control"
                            placeholder="<?=$user->first_name?>" value="" disabled></div>
                    <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control"
                            value="" placeholder="<?=$user->last_name?>" disabled></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                            class="form-control" placeholder="<?=$user->phone?>" value="" disabled></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"
                            placeholder="<?=$user->email?>" value="" disabled></div>
                    <div class="col-md-12"><label class="labels">Birthdate</label><input type="text"
                            class="form-control" placeholder="<?=$user->birth_date?>" value="" disabled></div>
                </div>
            </div>
        </div>
        </ div>
    </div>