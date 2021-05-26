<div class="wrapper">
    <p id="errorMsg"></p>
    <form class="contactForm" action="#" method="post" name="myForm" onsubmit="submitForm()">
        <div id="fnameDiv">
            <label for="fname">First Name : </label>
            <input id="fname" type="text" name="fname" placeholder="Uditesh">
        </div>

        <div id="lnameDiv">
            <label for="lname">Last Name : </label>
            <input id="lname" type="text" name="lname" placeholder="Jha">
        </div>

        <div id="emailDiv">
            <label for="email">Email : </label>
            <input id="email" type="text" name="email" placeholder="uditesh@example.com">
        </div>

        <div id="genderDiv">
            <label>Gender</label>
            <input type="radio" id="male" value="male" name="gender" checked>
            <label for="male">Male</label>
            <input type="radio" id="female" value="female" name="gender">
            <label for="female">Female</label>
            <input type="radio" id="not" value="none" name="gender">
            <label for="not">Not to say</label>
        </div>

        <div id="cityDiv">
            <label for="city">Tell us your city</label>
            <select id="city" name="city">
                <option value="Toronto" selected>Toronto</option>
                <option value="Ottawa" >Ottawa</option>
                <option value="Brampton">Brampton</option>
                <option value="Kitchner">Kitchner</option>
            </select>
        </div>


        <div id="submitDiv">
            <input type="submit" value="SUBMIT" name="submitBtn" />
        </div>
    </form>
</div>
