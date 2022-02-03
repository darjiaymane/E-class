<?php
    $navbar = <<<Navbar
    <div class="col bg-main vh-100 w-80">
                <nav class="nav-bar d-flex justify-content-between align-items-center p-2 pe-4 pe-sm-5 bg-white">
                    <button class="bg-white border-0" aria-label="return"> <i class="fal fa-caret-circle-down fa-rotate-90 text-mutedx fw-light "></i></button>
                    <div class="d-flex align-items-center gap-3">
                        <div class="input-group border rounded-2 p-1">
                            <div class="form-outline">
                            <input type="search" id="form1" class="ps-2 form-control border-0 d-none d-sm-inline" placeholder="search" />
                            </div>
                            <button type="button" class="border-0 bg-white px-1 pb-sm-1" aria-label="search">
                            <i class="fas fa-search text-muted fw-light "></i>
                            </button>
                        </div>
                        <button class="bg-white border-0" aria-label="return"><i class="fas fa-bell ms-1 ms-sm-4 text-muted fw-light"></i></button>
                    </div>
                </nav>
    Navbar;
    echo $navbar;

?>