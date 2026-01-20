<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>

        :root {
            --primary-color: #bc6c25;   
            --secondary-color: #dda15e; 
            --bg-color: #fefae0;        
            --text-dark: #4a3b2a;      
            --delete-color: #bc4749;    
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-dark);
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-custom {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table-custom thead {
            background-color: var(--primary-color);
            color: var(--bg-color);
        }
        .table-custom tbody tr {
            border-bottom: 1px solid var(--secondary-color);
        }
        .table-custom tbody tr:hover {
            background-color: rgba(188, 108, 37, 0.1);
        }

        .btn-view {
            background-color: var(--text-dark) !important;
            color: white !important;
            border: none;
        }
        .btn-edit {
            background-color: var(--primary-color) !important;
            color: white !important;
            border: none;
        }
        .btn-delete {
            background-color: var(--delete-color) !important;
            color: white !important;
            border: none;
        }
        .action-btn-base {
            margin: 0 2px;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Student Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Student List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>