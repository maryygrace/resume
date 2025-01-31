<?php
// Define personal information
$name = "MARY GRACE BALOGO";
$title = "WEB DEVELOPER";
$phone = "09100520553";
$email = "balogomarygrace@gmail.com";
$address = "San Isidro, Buenavista, Guimaras";
$github = "https://github.com/maryygrace";

// Define education
$education = [
    [
        "period" => "2022 - 2026",
        "institution" => "Guimaras State University",
        "degree" => "Bachelor of Science in Information Technology"
    ],
    [
        "period" => "2019 - 2021",
        "institution" => "Agsanyan National High School",
        "degree" => "General Academic Strand",
        "gpa" => ""
    ],
    [
        "period" => "2009 - 2015",
        "institution" => "San Isidro Elementary School",
        "degree" => "",
        "gpa" => ""
    ]
];

// Define skills
$techskills = [
    "PHP",
    "HTML/CSS",
    "MySQL",
    "Responsive Web Design"
];
$personalskills = [
    "Project Management",
    "Teamwork",
    "Time Management",
    "Leadership",
    "Effective Communication",
    "Critical Thinking"
];


// Define languages
$languages = [
    "English (Intermediate)",
    "Filipino (Fluent)"
];

// Define career objective
$objective = "To utilize my expertise in web development to design and build innovative, user-friendly applications, while continuously enhancing my skills to deliver impactful digital solutions in a collaborative team environment.";

// Define work experience
$experience = [
    [
        "company" => "ABC Company",
        "position" => "Senior Developer",
        "duration" => "2021 - Present",
        "responsibilities" => [
            "Design, develop, and maintain scalable software applications and systems to meet business requirements.",
            "Lead and mentor a team of developers, ensuring best practices in coding, testing, and deployment.",
            "Collaborate with cross-functional teams to define, design, and ship new features and improvements.",
            "Perform code reviews and ensure high-quality, maintainable, and efficient code.",
            "Troubleshoot, debug, and optimize existing systems for performance and reliability."
        ]
    ],
    [
        "company" => "XYZ Company",
        "position" => "Junior Developer",
        "duration" => "2018 - 2020", 
        "responsibilities" => [
            "Assist in the development and maintenance of web and software applications under the guidance of senior developers.",
            "Participate in code reviews and contribute to team knowledge sharing.",
            "Collaborate with team members to understand project requirements and deliver solutions on time."
        ]
    ]
];
// Define references
$references = [
    [
        "name" => "Ferdinand Marcos Jr.",
        "position" => "President of the Republic of the Philippines",
        "phone" => "8888",
        "email" => "info@bongbongmarcos.com"
    ],
    [
        "name" => "Elon Musk",
        "position" => "Tesla Motors / CEO",
        "phone" => "1-888-518-3752",
        "email" => "info@tesla.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Resume</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="resume">
        <!-- Left Column -->
        <div class="left-column">
            <header>

            <div class="profile-image">
                <img src="assets/profile.jpg" alt="Profile Image">
            </div>
            </header>

            <section class="contact">
                <h3>Contact</h3>
                <p>Phone: <?php echo $phone; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Address: <?php echo $address; ?></p>
                <p>Github: <?php echo $github; ?></p>
            </section>

            <section class="education">
                <h3>Education</h3>
                <?php foreach ($education as $edu) { ?>
                    <div class="education-item">
                        <p><strong><?php echo $edu["period"]; ?></strong></p>
                        <p><?php echo $edu["institution"]; ?></p>
                        <p><?php echo $edu["degree"]; ?></p>
                        <?php if (isset($edu["gpa"])) { ?>
                            <p><?php echo $edu["gpa"]; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </section>

            <section class="skills">
                <h3>Skills</h3>
                <h4>Technical Skills</h4>
                <ul>
                    <?php foreach ($techskills as $skill) { ?>
                        <li><?php echo $skill; ?></li>
                    <?php } ?>
                </ul>
                <h4>Personal Skills</h4>
                <ul>
                    <?php foreach ($personalskills as $skill) { ?>
                        <li><?php echo $skill; ?></li>
                    <?php } ?>
                </ul>
            </section>

            <section class="languages">
                <h3>Languages</h3>
                <ul>
                    <?php foreach ($languages as $language) { ?>
                        <li><?php echo $language; ?></li>
                    <?php } ?>
                </ul>
            </section>
        </div>

        <!-- Right Column -->
        <div class="right-column">
            <div class="info">
                <h1><?php echo $name; ?></h1>
                <h2><?php echo $title; ?></h2>
            </div>
            <section class="profile">
                <h3>Career Objective</h3>
                <p><?php echo $objective; ?></p>
            </section>

            <section class="experience">
                <h3>Work Experience</h3>
                <?php foreach ($experience as $job) { ?>
                <div class="job">
                     <h4><?php echo $job["company"]; ?></h4>
                     <p><em><?php echo $job["position"]; ?></em></p>
                     <p><strong><?php echo $job["duration"]; ?></strong></p> 
                    <ul>
                        <?php foreach ($job["responsibilities"] as $responsibility) { ?>
                        <li><?php echo $responsibility; ?></li>
                        <?php } ?>
                    </ul>
        </div>
    <?php } ?>
</section>

            <section class="references">
                <h3>References</h3>
                <?php foreach ($references as $reference) { ?>
                    <div class="reference">
                        <p><strong><?php echo $reference["name"]; ?></strong></p>
                        <p><?php echo $reference["position"]; ?></p>
                        <p>Phone: <?php echo $reference["phone"]; ?></p>
                        <p>Email: <?php echo $reference["email"]; ?></p>
                    </div>
                <?php } ?>
            </section>
        </div>
    </div>
</body>
</html>