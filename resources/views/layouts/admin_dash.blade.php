@extends('header')

<div class="d-flex" id="wrapper">
    <div class="bg-white">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase">
            <i class="fas fa-tachometer-alt me-2"></i> User Management
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-project-diagram me-2"></i> Projects
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-chart-line me-2"></i> Analytics
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-paperclip me-2"></i> Report
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-shopping-cart me-2"></i> Store Mng
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-gift me-2"></i> Products
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-comment-dots me-2"></i> Chat
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-map-marker-alt me-2"></i> Outlet
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </div>
    </div>

    {{-- Side bar end --}}

    <div class="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle">
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </i>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb2 md-lg-0">
                    <li class="nav-item-dropdown">
                        <a href="" class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i> JehanKandy
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="#" class="dropdown-item">Profile</a></li>
                            <li><a href="#" class="dropdown-item">Settings</a></li>
                            <li><a href="#" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
