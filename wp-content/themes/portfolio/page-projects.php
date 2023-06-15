<?php
/*
Template Name: Projects Page
*/
?>

<?php get_header() ?>
<?php
$image7 = get_template_directory_uri() . "/images/event.png"
?>
<?php
$image8 = get_template_directory_uri() . "/images/prog.png"
?>
<?php
$image9 = get_template_directory_uri() . "/images/iot.png"
?>
<?php
$image10 = get_template_directory_uri() . "/images/gsm.png"
?>

<!-- projects page -->
<section class="experiences">
  <div style="margin-top:80px;">
  <h2 style="color:#008759;">Projects</h2>
  <div class="container">
    <div class="experience-list">
    <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image8 ?>" alt="Experience 1">
        </div>
        <div class="experience-details">
          <h3>Program Management</h3>
          <p>THEJitu</p>
          <p style="color:#008759;">June 2023</p>
          <p>An innovative program management project focused on optimizing processes and driving cross-functional collaboration to deliver successful outcomes.</p>
          <button style="margin-bottom:10px;border:none;color:white;background-color:#008759;border-radius:10px;">
        <a href="http://localhost/EasyManage/" style="color: white; text-decoration: none;">View Details</a>
      </button>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image7 ?>" alt="Experience 1">
        </div>
        <div class="experience-details">
          <h3>Event Management</h3>
          <p>THEJitu</p>
          <p style="color:#008759;">May 2023</p>
          <p>Efficient event management platform that streamlines planning, coordination, and execution for seamless and memorable experiences.</p>
          <button style="margin-bottom:10px;border:none;color:white;background-color:#008759;border-radius:10px;">
        <a href="http://localhost/plana-event-management/" style="color: white; text-decoration: none;">View Details</a>
      </button>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image9 ?>" alt="Experience 1">
        </div>
        <div class="experience-details">
          <h3>Energy Management</h3>
          <p>Dekut</p>
          <p style="color:#008759;">June 2022 - Dec 2022</p>
          <p>An innovative energy management project leveraging advanced technologies to optimize energy consumption, reduce costs, and promote sustainability.</p>
          <button style="margin-bottom:10px;border:none;color:white;background-color:#008759;border-radius:10px;">
        <a href="https://www.overleaf.com/read/bfsxynrytnyw" style="color: white; text-decoration: none;">View Details</a>
      </button>
        </div>
      </div>
      <div class="experience">
        <div class="experience-image">
          <img src="<?php echo $image10 ?>" alt="Experience 1">
        </div>
        <div class="experience-details">
          <h3>Water billing Management</h3>
          <p>Dekut</p>
          <p style="color:#008759;">Nov 2018 - Dec 2018</p>
          <p>An efficient water billing management system that streamlines the tracking, calculation, and payment processing for water usage, ensuring accurate billing and customer satisfaction.</p>
          <button style="margin-bottom:10px;border:none;color:white;background-color:#008759;border-radius:10px;">
        <a href="https://justdoelectronics.com/gsm-based-water-level-monitoring-system-using-arduino/" style="color: white; text-decoration: none;">View Details</a>
      </button>
        </div>
      </div>
      <!-- Add more projects cards here -->
    </div>
  </div>
  </div>
</section>

<?php get_footer() ?>