<?php require_once('includes/header.php'); ?>

<!-- Site content -->
<div class="container py-5">
    <h1 class="fw-bold mb-2">Administraatori avaleht</h1>
    <p class="text-muted mb-5">Ülevaade varjupaiga tegevusest.</p>

    <!-- Stat -->
    <div class="row g-4 mb-5">
        <div class="col-lg-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <i class="fa-solid fa-paw fa-3x text-success mb-3"></i>
                    <h2 class="fw-bold">8</h2>
                    <p class="mb-0">Looma</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <i class="fa-solid fa-house fa-3x text-success mb-3"></i>
                    <h2 class="fw-bold">6</h2>
                    <p class="mb-0">Koduta</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <i class="fa-regular fa-heart fa-3x text-success mb-3"></i>
                    <h2 class="fw-bold">2</h2>
                    <p class="mb-0">Broneeritud</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body">
                    <i class="fa-regular fa-envelope fa-3x text-success mb-3"></i>
                    <h2 class="fw-bold">2</h2>
                    <p class="mb-0">Uusi sõnumeid</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Stat end -->

    <div class="row g-4">
        <!-- Animals -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Viimati lisatud loomad</h4>
                </div>

                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Nimi</th>
                                <th>Liik</th>
                                <th>Vanus</th>
                                <th>Staatus</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Rex</td>
                                <td>Koer</td>
                                <td>2 a</td>
                                <td><span class="badge bg-success">Saadaval</span></td>
                            </tr>
                            <tr>
                                <td>Mimi</td>
                                <td>Kass</td>
                                <td>6 k</td>
                                <td><span class="badge bg-warning text-dark">Broneeritud</span></td>
                            </tr>
                            <tr>
                                <td>Musti</td>
                                <td>Koer</td>
                                <td>3 a</td>
                                <td><span class="badge bg-success">Saadaval</span></td>
                            </tr>
                            <tr>
                                <td>Triibik</td>
                                <td>Kass</td>
                                <td>1 a</td>
                                <td><span class="badge bg-warning text-dark">Broneeritud</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Animals end -->

        <!-- Requests -->
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h4 class="mb-0">Viimased sõnumid</h4>
                </div>

                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Nimi</th>
                                <th>Teema</th>
                                <th>Staatus</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Kati Mae</td>
                                <td>Rexi adopteerimine</td>
                                <td><span class="badge bg-primary">Uus</span></td>
                            </tr>
                            <tr>
                                <td>Martin Tamm</td>
                                <td>Küsimus hoolduse kohta</td>
                                <td><span class="badge bg-primary">Uus</span></td>
                            </tr>
                            <tr>
                                <td>Liisa Kask</td>
                                <td>Mustiga tutvumine</td>
                                <td><span class="badge bg-success">Vastatud</span></td>
                            </tr>
                            <tr>
                                <td>Sven Oja</td>
                                <td>Kassipoja soov</td>
                                <td><span class="badge bg-success">Vastatud</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Requests end -->
    </div>
</div>
<!-- Site content end -->

<?php require_once('includes/footer.php'); ?>