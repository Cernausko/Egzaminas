<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Slėpti meniu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Pradinis</a></li>
                                @if(Auth::check())
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Valdymas</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/all-workers">Valdyti meistrus</a>
                                        <a class="dropdown-item" href="/add-service">Prideti servisa</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">Atsijungti</a>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item active"><a class="nav-link" href="/login">Prisijungimas</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>