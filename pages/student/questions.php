<?php
	include '../../includes/addquestions.php';
	

?>

<!Doctype html>
<html>
<head>
<title>Add Questions</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="../styles/stuque.css">

</head>
	<body>
        <header>
            <div id="header">
                <h2 style="color:white;padding:5px;display:contents">Quiz Title:..................</h2>
                <!-- Timer -->
                <input id="time" type="time" name="remaining_time " style="float:right">
                <label  style="color:white;padding:5px;float: right;font-size:22px;">Remaining Time:</label>
               
            </div>
        </header>
			<aside>
                    <input type="button" name="startqz" value="1" id="quebtn" style="margin-left:18px"/>
                    <input type="button" name="startqz" value="2" id="quebtn"/>
                    <input type="button" name="startqz" value="3" id="quebtn"/>
                    <input type="button" name="startqz" value="4" id="quebtn"/>
                    <input type="button" name="startqz" value="5" id="quebtn" style="margin-left:18px"/>
                    <input type="button" name="startqz" value="6" id="quebtn"/>
                    <input type="button" name="startqz" value="7" id="quebtn"/>
                    <input type="button" name="startqz" value="8" id="quebtn"/>
                    <input type="button" name="startqz" value="9" id="quebtn" style="margin-left:18px"/>
                    <input type="button" name="startqz" value="10" id="quebtn" />
                    <input type="button" name="startqz" value="11" id="quebtn"/>
                    <input type="button" name="startqz" value="12" id="quebtn"/>
                    <input type="button" name="startqz" value="13" id="quebtn" style="margin-left:18px"/>
                    <input type="button" name="startqz" value="14" id="quebtn"/>
                    <input type="button" name="startqz" value="15" id="quebtn"/>
                    <input type="button" name="startqz" value="16" id="quebtn"/>
                    <input type="button" name="startqz" value="17" id="quebtn" style="margin-left:18px"/>
                    <input type="button" name="startqz" value="18" id="quebtn"/>
                    <input type="button" name="startqz" value="19" id="quebtn"/>
                    <input type="button" name="startqz" value="20" id="quebtn"/>
			</aside>
			<section>
				<form action="" method="post">
			
				<div id="que">
					<h2> Question:- </h2>
					<div >
						<textarea  name="Questions" id="questions"><?php if(isset($post['question']) && !empty($_POST["question"])){ echo $_SESSION['question'];}else{echo 'empty';}?></textarea>
					</div>

					<div id="choice">
                        <input type="radio" name="option" >&nbsp;
                        <!-- style="margin-left:18px"<?php echo $row['c1']; ?> -->
						<input type="text" name="ot1" style="width: 30%; padding:8px; border:solid 2px #123456;margin-top:10px;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot2" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot3" style="width: 30%; padding:8px; border:solid 2px #123456;"><br><br>
						<input type="radio" name="option" value="o1">
						<input type="text" name="ot4" style="width: 30%; padding:8px; margin-bottom:0px;border:solid 2px #123456;"><br><br>
					</div>
					<div id="submit">
						<button id="previous" style="background-color:#123456;color:white;margin-left:20px;margin-right:50px;margin-bottom:20px;">Previous</button>
						<button id="next" style="background-color:#123456;color:white;margin-right:50px;">Next</button>
                        <button id="bookmarked" style="background-color:#123456;color:white;margin-right:50px;">Bookmarked</button><br>
                        <label id="last" style="background-color:blue; width:30px;height:30px;margin-right:50px;margin-left:380px;"></label><label>Attempted</label>
                        <label id="last" style="background-color:yellow; width:30px;height:30px;margin-left:50px;"></label><label>Bookmarked</label>
                        <label id="last" style="background-color:white; width:30px;height:30px;margin-left:50px;"></label><label>Unattempted</label>
					</div>
				</div>
			</form>
			</section>
	</body>
</html