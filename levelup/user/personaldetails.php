<?php
session_start();
include '../dbconnection.php';
$userid = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Style css file -->
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="css/UserStyle.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <title>User Profile</title>
</head>

<body onload="document.querySelector('#username').focus()">

    <!-- Navbar php file import -->
    <?php
    require 'userNavbar.php'
    
    ?>

    <!-- sidebar php file import -->
    <?php
    require 'userSidebar.php'
        ?>

    <div class="main-containt">
        <div class="container">
            <div class="title-links">
                <h1>Personal Details</h1>
                <span class="add-links-icon" onclick="edit_pesunal_details()"><i class="fas fa-edit"> - Edit</i></span>
                <hr>
            </div>
            <!-- <h1>Personal Details</h1> -->
            <!-- <hr class="userhr"> -->
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $retrivesql = "SELECT * FROM `userpersonaldetails` WHERE sno = $userid";
                    $result2 = mysqli_query($conn, $retrivesql);
                    $row = mysqli_fetch_array($result2);
                    ?>
                    <form action="" method="post" style="margin-bottom: 120px"
                        onsubmit="return persunal_detail_validation()">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username">Username <span style="color: red;">*</span></label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="User Name *" value="<?php echo $row['username']; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fullname">Full name <span style="color: red;">*</span></label>
                                    <input type="text" name="fullname" class="form-control" id="fullname"
                                        placeholder="Full name *" value="<?php echo $row['fullname']; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone <span style="color: red;">*</span></label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="9999-9999-99 *" maxlength="10" value="<?php echo $row['phone']; ?>"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span style="color: red;">*</span></label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="username@example.com *" value="<?php echo $row['email']; ?>"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Location <span style="color: red;">*</span></label>
                                    <input type="text" name="location" class="form-control" id="location"
                                        placeholder="Noida, Utter Pradesh *" value="<?php echo $row['location']; ?>"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="select-skill">Country <span style="color: red;">*</span></label>
                                    <!-- <input type="text" class="form-control" id="country_selector"
                                        placeholder="Country *"> -->
                                    <select name="country" class="form-control" id="select-skill" disabled>
                                        <option selected="selected">
                                            <?php echo $row['country']; ?>
                                        </option>
                                        <!-- <optgroup id="country-optgroup-Africa" label="Africa"> -->
                                        <option value="Algeria">Algeria</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Central African Republic">Central African Republic </option>
                                        <option value="Chad">Chad</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo - Brazzaville">Congo - Brazzaville</option>
                                        <option value="Congo - Kinshasa">Congo - Kinshasa</option>
                                        <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Réunion">Réunion</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="São Tomé and Príncipe">São Tomé and Príncipe </option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                        <!-- </optgroup> -->
                                        <!-- <optgroup id="country-optgroup-Americas" value="Americas"> -->
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Virgin Islands">British Virgin Islands </option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles </option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis </option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                            Grenadines</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands </option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <!-- </optgroup> -->
                                        <!-- <optgroup id="country-optgroup-Asia" value="Asia"> -->
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="China">China</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hong Kong SAR China">Hong Kong SAR China</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Macau SAR China">Macau SAR China</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Myanmar [Burma]">Myanmar [Burma]</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Neutral Zone">Neutral Zone</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palestinian Territories">Palestinian Territories </option>
                                        <option value="People's Democratic Republic of Yemen">People's Democratic
                                            Republic of Yemen</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="United Arab Emirates">United Arab Emirates </option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yemen">Yemen</option>
                                        <!-- </optgroup> -->
                                        <!-- <optgroup id="country-optgroup-Europe" value="Europe"> -->
                                        <option value="Albania">Albania</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina </option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="East Germany">East Germany</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Metropolitan France">Metropolitan France</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro </option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen </option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="Union of Soviet Socialist Republics">Union of Soviet Socialist
                                            Republics</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <!-- </optgroup> -->
                                        <!-- <optgroup id="country-optgroup-Oceania" value="Oceania"> -->
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos [Keeling] Islands">Cocos [Keeling] Islands </option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald
                                            Islands</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Pitcairn Islands">Pitcairn Islands</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="South Georgia and the South Sandwich Islands"> South Georgia and
                                            the South Sandwich Islands</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <!-- </optgroup> -->
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="intro">Objective <span style="color: red;">*</span></label>
                            <textarea name="objective" id="" cols="30" rows="10" class="form-control" id="intro"
                                placeholder="Write about yourself (min 50 characters) *"
                                disabled><?php echo $row['objective']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-background-colour" id="submitbutton"
                            disabled>Save</button>
                        <a href="index.php" class="btn btn-danger blue-light-button">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- my javascript file include -->
    <script src="../js/script.js"></script>

    <script src="js/persunalDetails.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->

    <!-- fontawesome kit -->
    <script src="https://kit.fontawesome.com/d86ae2f46d.js" crossorigin="anonymous"></script>
</body>

</html>

<?php
$usermessage = $usermessageerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $country = $_POST["country"];
    $objective = $_POST["objective"];
    $detailsql = "UPDATE `userpersonaldetails` SET username='$username',fullname='$fullname',phone='$phone',email='$email',location='$location',country='$country',objective='$objective' WHERE sno = $userid";
    $result = mysqli_query($conn, $detailsql);
    if ($result) {
        $usermessage = true;
    } else {
        $usermessageerror = true;
    }
}

if ($usermessage) {
    echo "<script>alert('Your data uploaded successfully.')</script>";
}
if ($usermessageerror) {
    echo "<script>alert('Sorry!!!, unable to update your data for somereason, Please contact to admin or try again later.')</script>";
}
?>

