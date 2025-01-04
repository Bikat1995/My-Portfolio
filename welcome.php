<?php
// include 'db.php'; 
require_once 'projects.php';

$project = new Projects();
$result = $project->getProjects();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcomestyle.css">
    <title>Bikat Tilahun - Portfolio</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Bikat Tilahun</h1>
            <nav>
                <ul>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="hero">
        <div class="container">
            <img src="photo_2024-10-03_09-16-57.jpg" alt="Bikat Tilahun" class="hero-image">
            <h2>Hi, I am Bikat Tilahun!</h2>
            <p>Welcome to my portfolio. A place to showcase my projects and creativity!</p>
            <p>Please, consider reaching out through my contact page for any collaboration or feedback.</p>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="project-list">
                <?php
                    foreach ($result as $row) {
                        echo "
                        <div class='project-card'>
                            <h3>{$row['title']}</h3>
                            <p>{$row['description']}</p>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </section>

    <footer>
        <section id="about">
            <div class="about-description">
                <h2>About This Website</h2>
                <p>This portfolio showcases my skills, projects, and creative work. It serves as a platform to demonstrate my capabilities and connect with potential collaborators.</p>
            </div>
        </section>
        <section id="contact">
            <div class="contact-section">
                <h2>Contact Me</h2>
                <p>If you're interested in working together or have any questions, feel free to reach out!</p>
                <a href="contact (2).php">
                    <button class="contact-button">Get in Touch</button>
                </a>
            </div>
        </section>
    </footer>

    <div class="container">
        <p>&copy; 2024 Bikat Tilahun. All rights reserved.</p>
    </div>
</body>
</html>