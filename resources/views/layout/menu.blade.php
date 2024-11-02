<div class="row">
    <div class="col-12">

        <nav class="navbar navbar-expand-sm navbar-light bg-light">

            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="EduFun Logo" style="height: 40px;">
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="{{ route('category.dataScience') }}">Data Science</a>
                            <a class="dropdown-item" href="{{ route('category.networkSecurity') }}">Network Security</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('writers.index') }}">Writers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>
</div>