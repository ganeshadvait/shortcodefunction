<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

// Shortcode for a larger section or entire page
function hero_image_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <img src="https://luxhospitals.com/wp-content/uploads/2024/08/dr-adhishak.png">
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('hero_image', 'hero_image_shortcode');  // Correct function name here
function best_surgeons_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="best-surgeons">
        <h5>Best Surgeons & Equipment</h5>
        <p>Lux Hospitals have top-notch Hernia experts with the latest and advanced Stryker 1688 4K Laparoscopic setup.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('best_surgeons', 'best_surgeons_shortcode');

function free_consultation_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="free-consultation">
        <h5>Get FREE Consultation</h5>
        <p>Now Lux Hospitals offer free consultation with our Hernia expert. Call us and avail Free OPD Now.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('free_consultation', 'free_consultation_shortcode');

function all_insurances_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="all-insurances">
        <h5>All Insurances Accepted</h5>
        <p>Pay 0 with our 100% Insurance Cashless facility for the complete procedure.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('all_insurances', 'all_insurances_shortcode');

function compassionate_care_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <div class="compassionate-care">
        <h5>100% Cure.</h5>
        <p>Lux Hospitals combines medical expertise and compassionate care for a 100% cure.</p>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('compassionate_care', 'compassionate_care_shortcode');

function doctor_profiles_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <style>
    .custom-container {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping */
        gap: 20px;
        overflow-x: auto; /* Enable horizontal scrolling */
        padding: 10px; /* Add some padding for better aesthetics */
    }

    .doctor-profile {
        flex: 0 0 auto; /* Prevent shrinking */
        width: 300px; /* Set a fixed width for each box */
        background-color: #F6F1CC;
    border: 1px solid #F4AE56;
        padding: 20px;
       
        border-radius: 18px;
    }

    .profile-box {
        display: flex;
        flex-direction: column; /* Stack image and details vertically on mobile */
        gap: 10px;
    }

    .profile-image img {
        max-width: 300px;
        height: 400px;
        border-radius: 10px;
    }

    .profile-details {
        flex: 1;
		display: flex;
    flex-direction: column;
    justify-content: center;
    row-gap: 10px;
    }

    .profile-details h3 {
        margin: 0 0 10px;
        font-size: 24px;
    }

    .profile-details p {
        margin: 5px 0;
        line-height: 1.4;
		font-size:15px !important;
    }

    .profile-details p strong {
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .custom-container {
            flex-wrap: wrap; /* Enable wrapping on larger screens */
            overflow-x: visible; /* Disable scrolling on larger screens */
        }

        .doctor-profile {
            flex: 1 1 45%; /* Go back to two boxes side by side */
            width: auto;
        }
   
        .profile-box {
            flex-direction: row; /* Align image and details side by side on larger screens */
            gap: 20px;
        }
		
    }
		@media(max-width:500px){
			 .profile-image img {
       width: 100%;
				 max-width: 350px;
        height: auto;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
			.profile-details p{
				font-size:14px !important;
			}
			  .profile-details h3 {
        margin: 0 0 10px;
        font-size: 20px;
    }
			.doctor-profile{
				width:100%;
			}
		}
    </style>

    <div class="custom-container">
        <!-- Box 1 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/i0QvsxUoEAQ334uVBcIghfc3rA.avif" alt="Dr. Abhishek Katha">
                </div>
                <div class="profile-details">
                    <h3>Dr. Abhishek Katha</h3>
                    <p><strong>MBBS, MS (General Surgery), FMAS, DMAS<br>
                    Advanced Laparoscopic Surgeon<br>
                    Hernia Specialist | Experience: 15 years</strong></p>
                    <p>Dr. Abhishek, a distinguished Laparoscopic surgeon
    with 15 years of experience, specializes in advanced
    Hernia treatments, including 3D mesh repairs. With a
    decade at Apollo hospitals and teaching at Apollo
    medical college, he's now enhancing lives at Lux
    hospitals. Educated at Gandhi Medical College,
    Hyderabad, his expertise ensures unparalleled care
    for Hernia patients.
    </p>
                </div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/Jc4bui0TLAFPMNv8c6fG0epb74.avif" alt="Dr. Samhitha Reddy">
                </div>
                <div class="profile-details">
                    <h3>Dr. Samhitha Reddy</h3>
                    <p><strong>MBBS, MS, FMAS, FISCP, DMAS
    Consultant General & Laparoscopic Surgeon

    <br>
                    Hernia Specialist | Experience: 8 years </strong></p>
                    <p>Dr. Samhitha is a skilled surgeon with over 8 years of
    experience, specializing in Hernia surgery alongside
    her expertise in Colorectal and Laparoscopic
    procedures. Before joining Lux, she refined her skills
    at Osmania Medical College. Her patient-focused
    approach and advanced surgical techniques offer
    exceptional care for Hernia patients
    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('doctor_profiles', 'doctor_profiles_shortcode');

function gallbladder_doctors_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <style>
    .custom-container {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping */
        gap: 20px;
        overflow-x: auto; /* Enable horizontal scrolling */
        padding: 10px; /* Add some padding for better aesthetics */
    }

    .doctor-profile {
        flex: 0 0 auto; /* Prevent shrinking */
        width: 300px; /* Set a fixed width for each box */
        background-color: #F6F1CC;
    border: 1px solid #F4AE56;
        padding: 20px;
       
        border-radius: 18px;
    }

    .profile-box {
        display: flex;
        flex-direction: column; /* Stack image and details vertically on mobile */
        gap: 10px;
    }

    .profile-image img {
        max-width: 300px;
        height: 400px;
        border-radius: 10px;
    }

    .profile-details {
        flex: 1;
		display: flex;
    flex-direction: column;
    justify-content: center;
    row-gap: 10px;
    }

    .profile-details h3 {
        margin: 0 0 10px;
        font-size: 24px;
    }

    .profile-details p {
        margin: 5px 0;
        line-height: 1.4;
		font-size:15px !important;
    }

    .profile-details p strong {
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .custom-container {
            flex-wrap: wrap; /* Enable wrapping on larger screens */
            overflow-x: visible; /* Disable scrolling on larger screens */
        }

        .doctor-profile {
            flex: 1 1 45%; /* Go back to two boxes side by side */
            width: auto;
        }
   
        .profile-box {
            flex-direction: row; /* Align image and details side by side on larger screens */
            gap: 20px;
        }
		
    }
		@media(max-width:500px){
			 .profile-image img {
       width: 100%;
				 max-width: 350px;
        height: auto;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
			.profile-details p{
				font-size:14px !important;
			}
			  .profile-details h3 {
        margin: 0 0 10px;
        font-size: 20px;
    }
			.doctor-profile{
				width:100%;
			}
		}
    </style>
   <div class="custom-container">
        <!-- Box 1 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/i0QvsxUoEAQ334uVBcIghfc3rA.avif" alt="Dr. Abhishek Katha">
                </div>
                <div class="profile-details">
                    <h3>Dr. Abhishek Katha</h3>
                    <p><strong>MBBS, MS (General Surgery), FMAS, DMAS <br>
                    Advanced Laparoscopic Surgeon<br>
                    Gallbladder Specialist | Experience: 15 years</strong></p>
                    <p>Dr. Abhishek, a distinguished Laparoscopic surgeon
with 15 years of experience, specializes in advanced
Gallbladder treatments, Cholecystectomy Surgery. With a
decade at Apollo hospitals and teaching at Apollo
medical college, he's now enhancing lives at Lux
hospitals. Educated at Gandhi Medical College,
Hyderabad, his expertise ensures unparalleled care
for Gallbladder patients.

    </p>
                </div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/Jc4bui0TLAFPMNv8c6fG0epb74.avif" alt="Dr. Samhitha Reddy">
                </div>
                <div class="profile-details">
                    <h3>Dr. Samhitha Reddy</h3>
                    <p><strong>MBBS, MS, FMAS, FISCP, DMAS
    Consultant General & Laparoscopic Surgeon

    <br>
                    Gallbladder Specialist | Experience: 8 years </strong></p>
                    <p>Dr. Samhitha is a skilled surgeon with over 8 years of
experience, specializing in Gallbladder surgery alongside
her expertise in Colorectal and Laparoscopic
procedures. Before joining Lux, she refined her skills
at Osmania Medical College. Her patient-focused
approach and advanced surgical techniques offer
exceptional care for Gallbladder patients

    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('gallbladder_doctors', 'gallbladder_doctors_shortcode');
function appendix_doctors_shortcode() {
    ob_start(); // Start output buffering
    ?>
  <style>
    .custom-container {
        display: flex;
        flex-wrap: nowrap; /* Prevent wrapping */
        gap: 20px;
        overflow-x: auto; /* Enable horizontal scrolling */
        padding: 10px; /* Add some padding for better aesthetics */
    }

    .doctor-profile {
        flex: 0 0 auto; /* Prevent shrinking */
        width: 300px; /* Set a fixed width for each box */
        background-color: #F6F1CC;
    border: 1px solid #F4AE56;
        padding: 20px;
       
        border-radius: 18px;
    }

    .profile-box {
        display: flex;
        flex-direction: column; /* Stack image and details vertically on mobile */
        gap: 10px;
    }

    .profile-image img {
        max-width: 300px;
        height: 400px;
        border-radius: 10px;
    }

    .profile-details {
        flex: 1;
		display: flex;
    flex-direction: column;
    justify-content: center;
    row-gap: 10px;
    }

    .profile-details h3 {
        margin: 0 0 10px;
        font-size: 24px;
    }

    .profile-details p {
        margin: 5px 0;
        line-height: 1.4;
		font-size:15px !important;
    }

    .profile-details p strong {
        font-weight: bold;
    }

    @media (min-width: 768px) {
        .custom-container {
            flex-wrap: wrap; /* Enable wrapping on larger screens */
            overflow-x: visible; /* Disable scrolling on larger screens */
        }

        .doctor-profile {
            flex: 1 1 45%; /* Go back to two boxes side by side */
            width: auto;
        }
   
        .profile-box {
            flex-direction: row; /* Align image and details side by side on larger screens */
            gap: 20px;
        }
		
    }
		@media(max-width:500px){
			 .profile-image img {
       width: 100%;
				 max-width: 350px;
        height: auto;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
			.profile-details p{
				font-size:14px !important;
			}
			  .profile-details h3 {
        margin: 0 0 10px;
        font-size: 20px;
    }
			.doctor-profile{
				width:100%;
			}
		}
    </style>
    <div class="custom-container">
        <!-- Box 1 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/i0QvsxUoEAQ334uVBcIghfc3rA.avif" alt="Dr. Abhishek Katha">
                </div>
                <div class="profile-details">
                    <h3>Dr. Abhishek Katha</h3>
                    <p><strong>MBBS, MS (General Surgery), FMAS, DMAS <br>
                    Advanced Laparoscopic Surgeon<br>
                    Appendix Specialist | Experience: 15 years</strong></p>
                    <p>Dr. Abhishek, a distinguished Laparoscopic surgeon
with 15 years of experience, specializes in advanced
Appendix treatments, Appendicectomy Surgery. With a
decade at Apollo hospitals and teaching at Apollo
medical college, he's now enhancing lives at Lux
hospitals. Educated at Gandhi Medical College,
Hyderabad, his expertise ensures unparalleled care
for Appendix patients.

</p>
                </div>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="doctor-profile">
            <div class="profile-box">
                <div class="profile-image">
                    <img src="https://luxhospitals.com/wp-content/uploads/2024/06/Jc4bui0TLAFPMNv8c6fG0epb74.avif" alt="Dr. Samhitha Reddy">
                </div>
                <div class="profile-details">
                    <h3>Dr. Samhitha Reddy</h3>
                    <p><strong>MBBS, MS, FMAS, FISCP, DMAS<br>
                    Consultant General & Laparoscopic Surgeon<br>
                    Appendix Specialist | Experience: 8 years</strong></p>
                    <p>Dr. Samhitha is a skilled surgeon with over 8 years of
experience, specializing in Appendix surgery alongside
her expertise in Colorectal and Laparoscopic
procedures. Before joining Lux, she refined her skills
at Osmania Medical College. Her patient-focused
approach and advanced surgical techniques offer
exceptional care for Appendix patients

</p>
                </div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean(); // Return the buffered content
}
add_shortcode('appendix_doctors', 'appendix_doctors_shortcode');
// urology hero button mobile 
// 
function urology_hero_mobile_call_button_shortcode() {
    ob_start(); 
    ?>
    <style>
    /* Ensure the button styles apply across all screen sizes */
    .urology-hero-mobile-call-button.cutsom-button {
        font-weight: 500;
        border-radius: 65px;
        padding: 15px 20px;        
        color: white;
        border: none; 
        cursor: pointer;
        display: inline-block; 
        text-align: center; 
    }

    .urology-hero-mobile-call-button.cutsom-button a {
        color: white;
        text-decoration: none; 
        display: block; 
        width: 100%;
        height: 100%;
    }
    </style>

    <button class="urology-hero-mobile-call-button cutsom-button" id="ct-button">
        <a href="tel:07969084442" class="call-button">Get Free Consultation</a>
    </button>
    <?php
    return ob_get_clean(); 
}
add_shortcode('urology_hero_mobile_call_button', 'urology_hero_mobile_call_button_shortcode');

// urology doctor profile button mobile 
// 
function urology_profile_mobile_call_button_shortcode() {
    ob_start(); 
    ?>
    <style>
    .urology-hero-mobile-call-button.cutsom-button {
        font-weight: 500;
        border-radius: 65px;
        padding: 15px 20px;        
        color: white;
        border: none; 
        cursor: pointer;
        display: inline-block; 
        text-align: center; 
    }

    .urology-hero-mobile-call-button.cutsom-button a {
        color: white;
        text-decoration: none; 
        display: block; 
        width: 100%;
        height: 100%;
    }
    </style>

    <button class="urology-hero-mobile-call-button cutsom-button" id="ct-button">
        <a href="tel:07969084442" class="call-button">Know more</a>
    </button>
    <?php
    return ob_get_clean(); 
}
add_shortcode('urology_profile_mobile_call_button', 'urology_profile_mobile_call_button_shortcode');


// urology video  button mobile 
// 
function urology_video_mobile_call_button_shortcode() {
    ob_start(); 
    ?>
    <style>
    .urology-hero-mobile-call-button.cutsom-button {
        font-weight: 500;
        border-radius: 65px;
        padding: 15px 20px;        
        color: white;
        border: none; 
        cursor: pointer;
        display: inline-block; 
        text-align: center; 
    }

    .urology-hero-mobile-call-button.cutsom-button a {
        color: white;
        text-decoration: none; 
        display: block; 
        width: 100%;
        height: 100%;
    }
    </style>

    <button class="urology-hero-mobile-call-button cutsom-button" id="ct-button">
        <a href="tel:07969084442" class="call-button">Get Quote</a>
    </button>
    <?php
    return ob_get_clean(); 
}
add_shortcode('urology_video_mobile_call_button', 'urology_video_mobile_call_button_shortcode');


// urology treatment  button mobile 
// 
function urology_treatment_mobile_call_button_shortcode() {
    ob_start(); 
    ?>
    <style>
    .urology-hero-mobile-call-button.cutsom-button {
        font-weight: 500;
        border-radius: 65px;
        padding: 15px 20px;        
        color: white;
        border: none; 
        cursor: pointer;
        display: inline-block; 
        text-align: center; 
    }

    .urology-hero-mobile-call-button.cutsom-button a {
        color: white;
        text-decoration: none; 
        display: block; 
        width: 100%;
        height: 100%;
    }
    </style>

    <button class="urology-hero-mobile-call-button cutsom-button" id="ct-button">
        <a href="tel:07969084442" class="call-button">Talk to urology expert</a>
    </button>
    <?php
    return ob_get_clean(); 
}
add_shortcode('urology_treatment_mobile_call_button', 'urology_treatment_mobile_call_button_shortcode');

