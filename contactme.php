<!DOCTYPE html>
<html lang="en">
    <?php require "head.php" ?>
    <body>
        <?php require  "header.php" ?>
        <script src="assets/javascript/formValidation.js"></script>
        <div class="paragraph-heading">
                <h2>Contact Me</h2>
        </div>
        <h3>
            NOTE, this form does not submit to any sort of email, Its purly cosmetic. 
            This will be implemented at a later date.
        </h3>
        <form id="orderform" action="index.php">
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
        <?php include "footer.php" ?>
    </body>
</html>