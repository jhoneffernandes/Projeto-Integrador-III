                <?php foreach ($burgers as $burger): ?>
                       <div class="col my-5 mx-4 text-center d-flex justify-content-center align-items-center flex-column">
                <a href="/lanches" class="text-decoration-none text-danger citens">
                <h2 class="fontetema text-nowrap"><?= ($burger->name) ?></h2>
                  <img class="" src="img/<?= ($burger->imgname) ?>" alt="">
                </a>
                </div>
                <?php endforeach; ?>
