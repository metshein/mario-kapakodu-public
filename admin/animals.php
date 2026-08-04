<?php require_once('includes/header.php'); ?>

<!-- Admin nav end -->
<div class="container-xl">
    <!-- Lehe pealkiri -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="h2 fw-bold mb-1">Loomad</h1>
            <p class="text-muted mb-0">
                Halda varjupaiga loomi: vaata, lisa, muuda või kustuta.
            </p>
        </div>

        <a href="#" class="btn btn-success">
            <i class="fa-solid fa-plus me-2"></i>
            Lisa uus loom
        </a>

    </div>

    <!-- Filtrid -->
    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <div class="row g-3">

                <div class="col-lg-4">
                    <label class="form-label fw-semibold">Otsi looma</label>

                    <div class="input-group">
                        <input type="text" class="form-control"
                            placeholder="Otsi nime, liigi või kirjelduse järgi...">

                        <button class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>

                <div class="col-lg-3">
                    <label class="form-label fw-semibold">Liik</label>

                    <select class="form-select">
                        <option>Kõik liigid</option>
                        <option>Koer</option>
                        <option>Kass</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <label class="form-label fw-semibold">Staatus</label>

                    <select class="form-select">
                        <option>Kõik staatused</option>
                        <option>Kodus</option>
                        <option>Hoolduses</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <label class="form-label fw-semibold">Vanus</label>

                    <select class="form-select">
                        <option>Kõik</option>
                        <option>Kuni 1 a</option>
                        <option>1–5 a</option>
                        <option>5+ a</option>
                    </select>
                </div>

            </div>

            <div class="text-end mt-4">

                <button class="btn btn-outline-secondary me-2">
                    <i class="fa-solid fa-rotate-left me-2"></i>
                    Tühista filtrid
                </button>

                <button class="btn btn-success">
                    <i class="fa-solid fa-filter me-2"></i>
                    Rakenda filtrid
                </button>

            </div>

        </div>

    </div>

    <!-- Tabel -->
    <div class="card shadow-sm border-0">

        <div class="table-responsive">

            <table class="table align-middle table-hover mb-0">

                <thead>

                    <tr>
                        <th>Pilt</th>
                        <th>Nimi</th>
                        <th>Liik</th>
                        <th>Sugu</th>
                        <th>Vanus</th>
                        <th>Staatus</th>
                        <th>Lisatud</th>
                        <th class="text-end">Tegevused</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>
                            <img src="../assets/images/rex.png" class="rounded" width="70">
                        </td>

                        <td class="fw-semibold">Rex</td>
                        <td>Koer</td>
                        <td>Isane</td>
                        <td>2 a</td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Kodus
                            </span>
                        </td>

                        <td>01.05.2024</td>

                        <td class="text-end">

                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>
                            <img src="../assets/images/mimi.png" class="rounded" width="70">
                        </td>

                        <td class="fw-semibold">Mimi</td>
                        <td>Kass</td>
                        <td>Emane</td>
                        <td>6 k</td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning-emphasis">
                                Hoolduses
                            </span>
                        </td>

                        <td>30.04.2024</td>

                        <td class="text-end">

                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>
                            <img src="../assets/images/musti.png" class="rounded" width="70">
                        </td>

                        <td class="fw-semibold">Musti</td>
                        <td>Koer</td>
                        <td>Isane</td>
                        <td>3 a</td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Kodus
                            </span>
                        </td>

                        <td>29.04.2024</td>

                        <td class="text-end">

                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>
                            <img src="../assets/images/triibik.png" class="rounded" width="70">
                        </td>

                        <td class="fw-semibold">Triibik</td>
                        <td>Kass</td>
                        <td>Isane</td>
                        <td>1 a</td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning-emphasis">
                                Hoolduses
                            </span>
                        </td>

                        <td>28.04.2024</td>

                        <td class="text-end">

                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-pen"></i>
                            </button>

                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <button class="btn btn-outline-secondary btn-sm">
                                <i class="fa-solid fa-eye"></i>
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

        <div class="card-footer bg-white d-flex justify-content-between align-items-center">

            <small class="text-muted">
                Kuvatakse 1–4 kokku 24 loomast.
            </small>

            <nav>

                <ul class="pagination pagination-sm mb-0">

                    <li class="page-item disabled">
                        <a class="page-link" href="#">«</a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="#">»</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>


<?php require_once('includes/footer.php'); ?>