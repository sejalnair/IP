<?php
	include '../../includes/teacherlogin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Quiz Zone (Teacher page)</title>
    <link rel="stylesheet" type="text/css" href="../styles/teacherHome.css">
<body>
    <header style="height:8%;border-block-end: 3px solid #720245;">
        <label style="font-size:20px">Name: <?php echo $_SESSION['Name']?></label>
        <section class="action">
            <button onclick="">Change Password</button>
            <button onclick="">Logout</button>
        </section>

    </header>
    <div>
        <section>
            <header>
                <form id="create-quiz">
	                <select id="classname" required>
	                    <option value="volvo">Volvo</option>
	                    <option value="saab">Saab</option>
	                    <option value="mercedes">Mercedes</option>
	                    <option value="audi">Audi</option>
	                </select>
	                <select id="subject" required>
	                    <option value="volvo">Volvo</option>
	                    <option value="saab">Saab</option>
	                    <option value="mercedes">Mercedes</option>
	                    <option value="audi">Audi</option>
	                </select>
	                <input type="date" name="bday" max="2018-08-27" required>
	                <input type="time" id="appt-time" name="appt-time"
	               min="9:00" max="18:00" required />
            	</form>
            </header>
        </section>
        <aside>
                <div id="history" >
                    <h2>History1</h2>
                </div>
        </aside>
    </div>
</body>

</html>