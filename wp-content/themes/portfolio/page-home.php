<?php
/*
Template Name: Home Page
*/
?>

<?php get_header() ?>
<?php
$image = get_template_directory_uri() . "/images/photo1.png"
?>
<?php
$image1 = get_template_directory_uri() . "/images/photo.png"
?>
<?php
$image2 = get_template_directory_uri() . "/images/jitu.jpeg"
?>
<?php
$image3 = get_template_directory_uri() . "/images/Canva.png"
?>
<?php
$image4 = get_template_directory_uri() . "/images/Fiverr.jpg"
?>
<?php
$image5 = get_template_directory_uri() . "/images/mas.jpeg"
?>
<?php
$image6 = get_template_directory_uri() . "/images/dekut.png"
?>
<!-- intro section -->
<section class="intro">
  <div class="container">
    <div class="intro-content">
      <h2 style="font-size:25px;">Hello, My name is</h2>
      <h2 style="font-size:50px;font-weight: bold;margin-bottom: 25px;">Nicholas Kirui</h2>
      <h3 style="margin-bottom: 25px;color:#008759;text-align:center"><ion-icon name="remove-outline"></ion-icon> Mechatronics engineer, software developer, and freelancer <ion-icon name="remove-outline"></ion-icon></h3>
      <p>I have interest in...</p>

      <div class="interests">
        <ul><ion-icon style="color: #008759;" name="add-outline"></ion-icon> Information Technology (IT)</ul>
        <ul><ion-icon style="color: #008759;" name="add-outline"></ion-icon> Internet of Things (IoT)</ul>
        <ul><ion-icon style="color: #008759;" name="add-outline"></ion-icon> Automation</ul>
        <ul><ion-icon style="color: #008759;" name="add-outline"></ion-icon> Renewable energy</ul>
        <ul><ion-icon style="color: #008759;" name="add-outline"></ion-icon> Manufacturing</ul>
      </div>

      <p style="width:400px;font-size: large;border:#008759;background-color: #008759;color:#fff;border-radius:10px;text-align:center;padding:2px;" >Contact: +254715931458 | +254746106859</p>
    </div>
    <div class="intro-image">
      <img src="<?php echo $image ?>" alt="Your Image">
    </div>
  </div>
</section>

<!-- about section -->
<section class="about" id="about">
  <div class="container">
    <div class="about-image">
      <img src="<?php echo $image1 ?>" alt="Your Image">
    </div>
    <div class="about-content">
      <h2 style="margin-bottom: 10px;color:#008759;" >About Me</h2>
      <p style="margin-bottom: 10px;" >I am a highly motivated mechatronics engineer and software developer with a passion for integrating mechanical, electrical, and computer engineering principles to create innovative solutions. With a critical and analytical thinking approach, I thrive in challenging environments that require problem-solving and out-of-the-box thinking.</p>
      <p>I am an excellent team player and communicator, able to effectively collaborate with multidisciplinary teams to achieve project objectives. I am also comfortable taking the lead and assuming responsibility when necessary. My strong work ethic, attention to detail, and commitment to excellence ensure that I consistently deliver high-quality results. Download my CV from the link below.</p>
      <a href="https://drive.google.com/file/d/1xh-eB4c5snTI8HCzYfskMXLfyTG83qBo/view?usp=drive_link" class="btn-download">Download CV</a>
    </div>
  </div>
</section>

<!-- skills section -->
<section class="skills">
  <h2 style="color:#008759;" >Skills</h2>
  <div class="container">
    <div class="skills-list">
      <div class="skill">
        <div class="skill-icon">
          <i class="fab fa-html5"></i>
        </div>
        <h3 style="color:#008759">HTML5</h3>
        <p>I delved into the world of HTML, crafting webpages with tags and elements that brought my ideas to life.</p>
      </div>
      <div class="skill">
        <div class="skill-icon">
          <i class="fab fa-css3"></i>
        </div>
        <h3 style="color:#008759">CSS3</h3>
        <p>Harnessing the power of CSS, I have transformed bland webpages into visually captivating masterpieces.</p>
      </div>
      <div class="skill">
        <div class="skill-icon">
          <i class="fab fa-php"></i>
        </div>
        <h3 style="color:#008759">PHP</h3>
        <p>Using PHP, I successfully developed a dynamic and responsive website, enhancing user experience and functionality.</p>
      </div>
      <div class="skill">
        <div class="skill-icon">
          <i class="fab fa-js"></i>
        </div>
        <h3 style="color:#008759">JavaScript</h3>
        <p>Transforming ideas into interactive realities, JavaScript empowered my coding journey with its versatility, enabling me to craft dynamic web experiences and bring my imagination to life.</p>
      </div>
      <div class="skill">
        <div class="skill-icon">
          <i class="fas fa-cloud"></i>
        </div>
        <h3 style="color:#008759">Graphic design</h3>
        <p>Through my journey in graphics design with Canva, I've unleashed my creative potential, transforming ideas into visually captivating masterpieces that leave a lasting impact.</p>
      </div>
      <div class="skill">
        <div class="skill-icon">
          <i class="fas fa-file-word"></i>
        </div>
        <h3 style="color:#008759">Technical documentation</h3>
        <p>Throughout my career in engineering and IT, I have honed my expertise in creating meticulous technical documentation using LaTeX and Word documents, ensuring precise and visually appealing deliverables that effectively communicate complex concepts and procedures.</p>
      </div>
    </div>
  </div>
</section>

<!-- experiences section -->
<section class="experiences">
  <h2 style="color:#008759;" >Experiences</h2>
  <div class="container">
    <div class="experience-list">
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image2 ?>" alt="Experience 1">
        </div>
        <div class="experience-details">
          <h3>THEJitu</h3>
          <p>Software Developer Trainee</p>
          <p style="color:#008759;">April 2023 - Present</p>
          <h5>Skills learnt</h5>
            <li>Web Development</li>
            <li>PHP, HTML, CSS</li>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image3 ?>" alt="Experience 2">
        </div>
        <div class="experience-details">
          <h3>Canva</h3>
          <p>Freelance Graphic Designer</p>
          <p style="color:#008759;">Jul 2022 - December 2022</p>
          <h5>Skills learnt</h5>
          <li>Design of banners, thumbnails, and logos</li>
          <li>Design of infographics</li>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image4 ?>" alt="Experience 2">
        </div>
        <div class="experience-details">
          <h3>Fiverr</h3>
          <p>Freelance Writer</p>
          <p style="color:#008759;">Jan 2022 - Jul 2022</p>
          <h5>Skills learnt</h5>
          <li>Technicalandreportwriting</li>
          <li>SEO report writing</li>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image5 ?>" alt="Experience 2">
        </div>
        <div class="experience-details">
          <h3>MAS Intimates</h3>
          <p>Industrial Engineer</p>
          <p style="color:#008759;">Sep 2021 - Dec 2021</p>
          <h5>Skills learnt</h5>
          <li>Planning and optimization of workforce</li>
          <li>Analysing breakdowns</li>
          <li>Scheduling and implementing maintenance procedures</li>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image6 ?>" alt="Experience 2">
        </div>
        <div class="experience-details">
          <h3>Siemens Centre (Dekut)</h3>
          <p>Engineering Intern</p>
          <p style="color:#008759;">Jan 2020 - Sep 2020</p>
          <h5>Skills learnt</h5>
          <li>Introduction to Totally Integrated Automation (TIA) Portal</li>
          <li>Performed motor control using PLC</li>
          <li>Studied digital fundamentals</li>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image6 ?>" alt="Experience 2">
        </div>
        <div class="experience-details">
          <h3>Dedan Kimathi University of Technology</h3>
          <p>Research Assistant</p>
          <p style="color:#008759;">Oct 2019 - Oct 2021</p>
          <h5>Skills learnt</h5>
          <li>Collecting and processing research data</li>
          <li>Implementation of departmental research and projects</li>
        </div>
      </div>
      <!-- Add more experience cards here -->
    </div>
  </div>
</section>



<style>
  /* hover */
  a:hover {
    color: white;
  }
</style>

<?php get_footer() ?>