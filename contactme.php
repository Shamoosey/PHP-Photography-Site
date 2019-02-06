<?php 
	include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
    <body>
    <script type="text/javascript" src="assets/javascript/formValidation.js"></script>
        <div class="paragraph-heading">
                <h2>Personal Information</h2>
        </div>
        <form id="orderform"
             action="https://youtu.be/3uIcXRbZ458"
             >
            <ul>
                <li>
                    <label for="fName">First Name:</label>
                    <input id="fName" name="fName" type="text" />
                    <p class="addressError error" id="fName_error">* Required field</p>
                </li>
                <li>
                    <label for="lName">Last Name:</label>
                    <input id="lName" name="lName" type="text" />
                    <p class="addressError error" id="lName_error">* Required field</p>
                </li>
                <li>
                    <label for="address">Address:</label>
                    <input id="address" name="address" type="text" />
                    <p class="addressError error" id="address_error">* Required field</p>
                </li>
                <li>
                    <label for="city">City:</label>
                    <input id="city" name="city" type="text" />
                    <p class="addressError error" id="city_error">* Required field</p>
                </li>
                <li>
                    <label for="province">Province:</label>
                    <select id="province" name="province">
                        <option selected disabled="disabled" value="">--------SELECT--------</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Columbia</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">Newfoundland & Labrador</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="ON">Ontario</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="QC">Quebec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="NT">Northwest Territories</option>
                        <option value="NU">Nunavut</option>
                        <option value="YT">Yukon</option>
                    </select>
                    <p class="addressError error" id="province_error">* Required field</p>
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" />
                    <p class="addressError error" id="email_error">* Required field</p>
                    <p class="addressError error" id="emailformat_error">* Invalid email address</p>
                </li>
                <li>
                    <label for="phone">Phone Number:</label>
                    <input id="phone" name="phone" type="text" />
                    <p class="addressError error" id="phone_error">* Required field</p>
                    <p class="addressError error" id="phoneformat_error">* Invalid phone number</p>
                </li>
                <li>
                    <label for="comments">Additional Comments:</label>
                    <input id="comments" name="comments" type="text"/>
                </li>
            </ul>
            <div class="clear">
                <button type="submit" id="submit">Book Appointment</button>
                <button type="reset" id="clear">Reset Fields</button>
            </div>
        </form>
        <?php include "footer.php"; ?>
    </body>
</html>