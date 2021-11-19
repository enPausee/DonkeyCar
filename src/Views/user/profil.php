<?php
if (isset($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $type => $message) {
        echo '<div class="alert alert-' . $type . '">' . $message . '</div>';
    }
    unset($_SESSION['flash']);
}
?>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?= $user->firstName . " " . $user->lastName ?></span><span class="text-black-50"><?= $user->email ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?= $user->firstName ?>" value=""></div>
                    <div class="col-md-6"><label class="labels">Lastname</label><input type="text" class="form-control" value="" placeholder="<?= $user->lastName ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="<?= $user->phone ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="<?= $user->email ?>" value=""></div>
                    <div class="col-md-12"><label class="labels">Birthdate</label><input type="text" class="form-control" placeholder="<?= $user->birthDate ?>" value=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>