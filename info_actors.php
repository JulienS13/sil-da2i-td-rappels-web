
    <img width=300 height=400 src="<?= $data['actor']['path'] ?>" alt="<?= $data['actor']['legend'] ?>"/>
    <div class="col col-lg-6">
    <h2><?= $data['actor']['legend'] ?></h2>
        <h2>Biographie</h2>
        <p>
            <?= $data['person']['birthDate'] ?>
        </p>
        <p>
            <?= $data['person']['biography'] ?>
        </p>
    </div>