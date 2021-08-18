<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resume/CV Design</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <div class="resume">
        <div class="resume_left">
            <div class="resume_profile">
                <img src="{{ url('image/img.jpg') }}" alt="profile_pic">
            </div>
            <div class="resume_content">
                <div class="resume_item resume_info">
                    <div class="title">
                        <p class="bold">Ifeoluwa Olubo</p>
                        <p class="regular">Backend Developer</p>
                    </div>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-signs"></i>
                            </div>
                            <div class="data">
                                26 Adeosun Street, Lagos <br /> Nigeria
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="data">
                                +234 9028849304
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="data">
                                ifeoluwaolubo@gmail.com
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fab fa-weebly"></i>
                            </div>
                            <div class="data">
                                www.ifeoluwaolubo.com
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="resume_item resume_skills">
                    <div class="title">
                        <p class="bold">skill's</p>
                    </div>
                    <ul>
                        <li>
                            <div class="skill_name">
                                Node
                            </div>
                            <div class="skill_progress">
                                <span style="width: 80%;"></span>
                            </div>
                            <div class="skill_per">80%</div>
                        </li>
                        <li>
                            <div class="skill_name">
                                Express
                            </div>
                            <div class="skill_progress">
                                <span style="width: 78%;"></span>
                            </div>
                            <div class="skill_per">78%</div>
                        </li>
                        <li>
                            <div class="skill_name">
                                Laravel
                            </div>
                            <div class="skill_progress">
                                <span style="width: 82%;"></span>
                            </div>
                            <div class="skill_per">82%</div>
                        </li>
                        <li>
                            <div class="skill_name">
                                JS
                            </div>
                            <div class="skill_progress">
                                <span style="width: 90%;"></span>
                            </div>
                            <div class="skill_per">90%</div>
                        </li>
                        <li>
                            <div class="skill_name">
                                Python
                            </div>
                            <div class="skill_progress">
                                <span style="width: 88%;"></span>
                            </div>
                            <div class="skill_per">88%</div>
                        </li>
                    </ul>
                </div>
                <div class="resume_item resume_social">
                    <div class="title">
                        <p class="bold">Social</p>
                    </div>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Facebook</p>
                                <p>ifeoluwa@facebook</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fab fa-twitter-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Twitter</p>
                                <p>ifeoluwa@twitter</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Youtube</p>
                                <p>i_am_ifeoluwa@instagram</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Linkedin</p>
                                <p>ifeoluwa@linkedin</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="resume_right">
            <div class="resume_item resume_about">
                <div class="title">
                    <p class="bold">About Me</p>
                </div>
                <p>I am a software developer with skills in Python and Javascipt interested in building highly-scalable web applications and software, with strong interest in learning new technologies.</p>
            </div>
            <div class="resume_item resume_work">
                <div class="title">
                    <p class="bold">Work Experience</p>
                </div>
                <ul>
                    <li>
                        <div class="date">2015 - 2017</div>
                        <div class="info">
                            <p class="semi-bold">Unique computers</p>
                            <p>Involved in training of students in the use of web application tools.</p>
                        </div>
                    </li>
                    <li>
                        <div class="date">2017 - 2020</div>
                        <div class="info">
                            <p class="semi-bold">T-shirt of MFS</p>
                            <p>Mainly focused on the backed to provide good and efficient user experience.</p>
                        </div>
                    </li>
                    <li>
                        <div class="date">2020 - Present</div>
                        <div class="info">
                            <p class="semi-bold">Rellish</p>
                            <p>Senior backend developer at the rellish company. Involved in monitoring and provide efficient support to the users upload in the app.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_education">
                <div class="title">
                    <p class="bold">Education</p>
                </div>
                <ul>
                    <li>
                        <div class="date">2011 - 2017</div>
                        <div class="info">
                            <p class="semi-bold">Figil College</p>
                            <p>Secondary School Attended. Science department.</p>
                        </div>
                    </li>
                    <li>
                        <div class="date">2000 - 2010</div>
                        <div class="info">
                            <p class="semi-bold">University of Lagos</p>
                            <p>Mathematics Department, Faculty of Education</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="resume_item resume_hobby">
                <div class="title">
                    <p class="bold">Hobby</p>
                </div>
                <ul>
                    <li><i class="fas fa-book"></i></li>
                    <li><i class="fas fa-gamepad"></i></li>
                    <li><i class="fas fa-music"></i></li>
                    <li><i class="fab fa-pagelines"></i></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="contact-me">
        <a href="{{ route('contact') }}">Contact Me</a>
    </div>

</body>

</html>