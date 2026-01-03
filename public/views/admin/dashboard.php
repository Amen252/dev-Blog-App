<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVBLOG | Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/devblog/public/assets/css/admin.css">
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo-icon"><i class="fas fa-feather-alt"></i></div>
            <div class="logo-text">DEV<span>BLOG</span></div>
        </div>
        
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-label">Main Menu</li>
                <li><a href="#" class="active"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fas fa-file-alt"></i> <span>All Posts</span></a></li>
                <li><a href="#"><i class="fas fa-users"></i> <span>Users</span></a></li>
                <li><a href="#"><i class="fas fa-comment-dots"></i> <span>Comments</span></a></li>

            </ul>
        </nav>

        <div class="sidebar-footer">
            <a href="#" class="logout-btn">
                <i class="fas fa-sign-out-alt"></i> <span>Sign Out</span>
            </a>
        </div>
    </aside>

    <main class="main-content">
    <header class="top-header">
    <div class="header-left">
        <a href="../index.php" class="back-home-link">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Home</span>
        </a>

        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search analytics...">
        </div>
    </div>

    <div class="user-profile">
        <div class="notifications">
            <i class="fa-regular fa-bell"></i>
            <span class="badge"></span>
        </div>
        <div class="profile-info">
            <p class="user-name">Admin User</p>
            <div class="avatar">A</div>
        </div>
    </div>
</header>

        <div class="content-wrapper">
            <h1 class="page-title">Dashboard Overview</h1>

            <section class="stats-grid">
                <div class="stat-card">
                    <div class="stat-header">
                        <div class="icon-box blue"><i class="fas fa-users"></i></div>
                        <span class="trend positive">+12%</span>
                    </div>
                    <div class="stat-body">
                        <h3>Total Users</h3>
                        <p>1,240</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="icon-box purple"><i class="fas fa-pencil-alt"></i></div>
                        <span class="trend positive">+5.4%</span>
                    </div>
                    <div class="stat-body">
                        <h3>Blog Posts</h3>
                        <p>48</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-header">
                        <div class="icon-box green"><i class="fas fa-comments"></i></div>
                        <span class="trend negative">-2%</span>
                    </div>
                    <div class="stat-body">
                        <h3>Comments</h3>
                        <p>3,892</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

</body>
</html>